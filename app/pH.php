<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pH extends Model
{
    protected $table = "data_ph";
    protected $fillable = ['id', 'waktu', 'nilai'];
}
