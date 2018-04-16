<?php
/**
 * Created by PhpStorm.
 * User: aykil
 * Date: 29.03.2018
 * Time: 14:46
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class stokturObj extends Model
{
    protected $table='stoktur';
    protected $primaryKey = 'stokturid';
    protected $fillable=['stokturad'];
}