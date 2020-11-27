<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sliderhome extends Model
{
    protected $table = 'tb_slider';
    protected $fillable = ['text_h1','text_h2','button','gambar'];
}

