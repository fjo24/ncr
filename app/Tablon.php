<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tablon extends Model
{
    protected $table    = "tablones";
    protected $fillable = ['id', 'a', 'b', 'status'];
}
