<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class olayObj extends Model
{
    protected $table='olay';
    protected $primaryKey = 'olayid';
    protected $fillable=['olayad'];
}
