<?php
/**
 * Created by PhpStorm.
 * User: halil
 * Date: 8.04.2018
 * Time: 20:40
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class sablon_turuObj extends Model
{
	protected $table='sablon_turu';
	protected $primaryKey = 'sblturuid';
	protected $fillable=['sblturuad'];
}