<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class numaralaObj extends Model
{
    protected $table='numarala';
    protected $primaryKey = 'numaralaid';
    protected $fillable=['evrakturuid','uzunluk','sayi','mod','tarih1','tarih2','gorunum','sonnumara'];
}
