<?php
/**
 * Created by PhpStorm.
 * User: ayk
 * Date: 13.09.2017
 * Time: 16:48
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class cbankaObj extends Model
{

    protected $table='cbanka';
    protected $primaryKey = 'cbid';
    protected $fillable=['fid', 'baid', 'did', 'iban', 'bsube' ,'bsubek' ,'hesapno'];


//    protected $fillable=['cunvan','cadres1','cadres2','cil','cilce','cvd','cvno','ctel1','ctel2','cfax','ccep','cmail'];


}