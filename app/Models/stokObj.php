<?php
/**
 * Created by PhpStorm.
 * User: aykil
 * Date: 28.03.2018
 * Time: 10:49
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class stokObj extends Model
{
    protected $table='stok';
    protected $primaryKey = 'sid';
    protected $fillable=['sad','sturid'];
}