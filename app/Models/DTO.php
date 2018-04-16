<?php
/**
 * Created by PhpStorm.
 * User: ayk
 * Date: 29.07.2017
 * Time: 19:27
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DTO extends Model
{
    use softDeletes;
 protected $table='firmalar';
    protected $fillable=['cunvan','cadres1'];
    protected $dates=['deleted_at'];

}



