<?php
/**
 * Created by PhpStorm.
 * User: ayk
 * Date: 3.09.2017
 * Time: 13:01
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class bankaObj extends Model
{

    protected $table='bankalar';
    protected $primaryKey = 'baid';
    protected $fillable=['bankad'];


//    protected $fillable=['cunvan','cadres1','cadres2','cil','cilce','cvd','cvno','ctel1','ctel2','cfax','ccep','cmail'];
//public function firman()
//{
//    return $this->belongsTo('App\Models\firmaObj','fid');
////
//}

}