<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logo extends Model
{
    protected $table = 'tb_logoweb';
    protected $fillable = ['nama','gambar'];
}
