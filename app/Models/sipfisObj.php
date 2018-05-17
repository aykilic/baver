<?php
/**
 * Created by PhpStorm.
 * User: aykil
 * Date: 29.03.2018
 * Time: 12:45
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class sipfisObj extends Model
{
    protected $table='sipfis';
    protected $primaryKey = 'sipfisid';
    protected $fillable=['sipfisfid','sipfistar','fisturu','fisno','fisfid','depo','doviz','aciklama'];
}