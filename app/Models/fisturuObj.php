<?php
/**
 * Created by PhpStorm.
 * User: aykil
 * Date: 29.03.2018
 * Time: 14:13
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class fisturuObj extends Model
{
    protected $table='fisturu';
    protected $primaryKey = 'fisturuid';
    protected $fillable=['fisturuad'];
}