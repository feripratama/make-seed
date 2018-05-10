<?php namespace Feripratama\MakeSeed\Console\Commands;

use Illuminate\Console\Command;

use File;
/**
 * The MakeSeedCommand class.
 *
 * @package Feripratama\MakeSeed
 * @author  feripratama <eroorsys@gmail.com>
 */
class MakeSeedCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'csv-seeder
                            { --class-name= : class name for new create seeder}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Seeder from csv file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $field_replace = "
        \t\$this->model->create([
            {%FIELDS%}
        \t]);
        ";

        $field_csv_replace = "{%FIELDS%}";

        $field_csv_change = '';

        $field_change = '';

        $output_change = '';


        $className = $this->option('class-name');
        if($className == ""){
            $this->error('error \'--class-name\' cant be empty !');
            $this->info('usage : ');
            $this->info('php artisan csv-seed --class-name=ClassName');
            die();
        }

        $field_csv = $this->ask('Columns (ex: name|email|password)');

        $modelName = $this->ask('Model name (ex: App\User)');

        $fields_csv = explode('|',$field_csv);        
            
        foreach($fields_csv as $key => $field){
            if($key > 0){
                $field_change .= "\t\t\t\t'$field' => \$data['".$field."'],\n";
                $output_change .= "\t\t\t\$this->orangeText('".$field." : ').\$this->greenText(\$data['".$field."']);\n";
                $output_change .= "\t\t\techo\"\\n\";\n";
            }else{
                $field_change .= "\t'$field' => \$data['".$field."'],\n";
                $output_change .= "\$this->orangeText('".$field." : ').\$this->greenText(\$data['".$field."']);\n\t\t\techo\"\\n\";\n";
            }

            $field_csv_change .= "'$field' => \$data[$key],";
        }

        $stub_file = $this->getStubFile(__DIR__.'/../../stubs/SeederStub.stub');

        $stub_file = str_replace('{%CLASS_NAME%}',$className,$stub_file);

        $field_replace = str_replace('{%FIELDS%}',$field_change, $field_replace);        

        $field_csv_replace = str_replace('{%FIELDS%}',$field_csv_change, $field_csv_replace);

        $stub_file = str_replace('{%CREATE%}',$field_replace,$stub_file);

        $stub_file = str_replace('{%OUTPUT%}',$output_change,$stub_file);

        $stub_file = str_replace('{%CLASS_NAME%}',$className,$stub_file);

        $stub_file = str_replace('{%FIELD_CSV%}',$field_csv_replace,$stub_file);

        $stub_file = str_replace('{%FILE_NAME%}',$className.'.csv',$stub_file);

        $stub_file = str_replace('{%MODEL%}',$modelName,$stub_file);
        

        File::put(database_path().'/seeds/'.$className.'.php',$stub_file);
        File::put(database_path().'/seeds/'.$className.'.csv','');        

        $this->info('Seeder has been create on : ');
        $this->info('Seeder File : '.database_path().'/seeds/'.$className.'.php');
        $this->info('CSV File : '.database_path().'/seeds/'.$className.'.csv');
        $this->error('first add data into file '. $className .'.csv');
        $this->info('command to run seeder : ');
        $this->info('- composer dump-autoload -o');
        $this->info('- php artisan db:seed --class='.$className);
    }

    public function getStubFile($file){
        return File::get($file);
    }
}
