<?php
/**
 * Created by PhpStorm.
 * User: halil
 * Date: 11.04.2018
 * Time: 19:07
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class sablonadObj extends Model
{

	protected $table='sablonad';
	protected $primaryKey = 'sbladid';
	protected $fillable=['sblad','sblturuid'];


//    protected $fillable=['cunvan','cadres1','cadres2','cil','cilce','cvd','cvno','ctel1','ctel2','cfax','ccep','cmail'];
//public function firman()
//{
//    return $this->belongsTo('App\Models\firmaObj','fid');
////
//}

}