<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class numaralaObj extends Model
{
    protected $table='numarala';
    protected $primaryKey = 'numaralaid';
    protected $fillable=['evrakturid','uzunluk','sayi','mod','tarih1','tarih2'];
}
