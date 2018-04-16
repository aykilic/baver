<?php
/**
 * Created by PhpStorm.
 * User: aykil
 * Date: 27.03.2018
 * Time: 01:55
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class birimObj extends Model
{
    protected $table='birim';
    protected $primaryKey = 'bid';
    protected $fillable=['bad'];
}