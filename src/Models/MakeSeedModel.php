<?php namespace Feripratama\MakeSeed\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The MakeSeedModel class.
 *
 * @package Feripratama\MakeSeed
 * @author  feripratama <eroorsys@gmail.com>
 */
class MakeSeedModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'make_seed';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
