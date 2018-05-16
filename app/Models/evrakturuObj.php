<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class evrakturuObj extends Model
{
    protected $table='evrakturu';
    protected $primaryKey = 'evrakturuid';
    protected $fillable=['evrakturad'];
}
