<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 13.05.2019
 * Time: 03:29
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class makbuzObj extends Model
{
    protected $table='makbuzlar';
    protected $primaryKey = 'makbuzid';
    protected $fillable=['makbuzfid','makbuztar','makbuznumara','makbuzturu','odemeturu','makbuztutar','makbuzdid','baid','cbid','makdurum'];
}