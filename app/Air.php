<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Air extends Model
{
    protected $table = "data_jarak";
    protected $fillable = ['id', 'waktu', 'nilai'];
}
