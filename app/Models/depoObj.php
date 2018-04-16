<?php
/**
 * Created by PhpStorm.
 * User: aykil
 * Date: 28.03.2018
 * Time: 13:24
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class depoObj extends Model
{
    protected $table='depo';
    protected $primaryKey = 'depoid';
    protected $fillable=['depoad','dadres','dil','dilce','deposta','dcep','dsabit','dtcno','dvdno','dvad','dyad','dytel'];
}