<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homeimg extends Model
{
    protected $table = 'tb_homeimg';
    protected $fillable = ['nama','gambar'];
}
