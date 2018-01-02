<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clavo extends Model
{
    protected $table    = "clavos";
    protected $fillable = ['id', 'pos'];
}
