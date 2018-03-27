<?php namespace Feripratama\MakeSeed\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Feripratama\MakeSeed\Facades\MakeSeed;
use Feripratama\MakeSeed\Models\MakeSeedModel;

/**
 * The MakeSeedController class.
 *
 * @package Feripratama\MakeSeed
 * @author  feripratama <eroorsys@gmail.com>
 */
class MakeSeedController extends Controller
{
    public function demo()
    {
        return MakeSeed::welcome();
    }
}
