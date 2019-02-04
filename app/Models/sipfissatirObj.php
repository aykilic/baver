<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sipfissatirObj extends Model
{
    protected $table='sipfissatir';
    protected $primaryKey = 'sipfisatirid';
    protected $fillable=['numara','fissid','miktar' ,'birim','bfiyat','kdv','tutar','sipfisid'];
}
