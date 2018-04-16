<?php
/**
 * Created by PhpStorm.
 * User: ayk
 * Date: 13.09.2017
 * Time: 13:22
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class dovizObj extends Model
{


    protected $table='doviz';
    protected $primaryKey = 'did';
    protected $fillable=['dad'];

//    protected $fillable=['cunvan','cadres1','cadres2','cil','cilce','cvd','cvno','ctel1','ctel2','cfax','ccep','cmail'];



}