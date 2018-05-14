<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vergiObj extends Model
{
    protected $table='vergi';
    protected $primaryKey = 'vid';
    protected $fillable=['vor'];
}
