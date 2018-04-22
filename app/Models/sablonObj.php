<?php
/**
 * Created by PhpStorm.
 * User: halil
 * Date: 8.04.2018
 * Time: 20:41
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class sablonObj extends Model
{
	protected $table='sablon';
	protected $primaryKey = 'sblid';
	protected $fillable=['sblturuid','sbladid','id','data-name','adi','text','top','left','width','height','stylealign','text','ttop','tleft','twidth','theight'];

}