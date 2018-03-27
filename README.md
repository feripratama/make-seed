
# make-seed

### Install via composer :

```bash
$ composer require feripratama/make-seed
```

### edit app/config.php

```php
'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,

        /* ---------- */

        Feripratama\MakeSeed\MakeSeedServiceProvider::class,
```

### artisan command :

```bash
$ php artisan csv-seeder --class-name=ClassNameSeeder
```
