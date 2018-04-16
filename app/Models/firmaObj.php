<?php
/**
 * Created by PhpStorm.
 * User: ayk
 * Date: 30.07.2017
 * Time: 02:07
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\bankaObj;

class firmaObj extends Model
{
//protected $dateFormat='d-m-Y';
    protected $table = 'firmalar';
//  protected $tar = 'd m Y';
    protected $primaryKey = 'fid';
    protected $fillable = ['cunvan', 'cadres1', 'tar'];

//    public function bankaisim()
//    {
//
//     return   $this->hasOne('App\Models\bankaObj','fid');
//
//    }
//    public function bankalarli(){
//
//        return   $this->hasmany('App\Models\bankaObj','fid');
//    }

//    protected $fillable=['cunvan','cadres1','cadres2','cil','cilce','cvd','cvno','ctel1','ctel2','cfax','ccep','cmail'];


//    public function getCreatedDateAttribute()
//    {
//        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d-m-Y H:i');
//        //return Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['created_at'])->formatLocalized('%e %B %Y %A'); // 17 Ağustos 2014 Pazar
//    }
//
//// updated_date | updatedDate
//    public function getUpdatedDateAttribute()
//    {
//        return Carbon::createFromFormat('Y-m-d H:i:s', $this->updated_at)->format('d-m-Y H:i');
//    }

}