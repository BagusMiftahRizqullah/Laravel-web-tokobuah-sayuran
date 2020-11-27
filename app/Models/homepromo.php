<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homepromo extends Model
{
    protected $table = 'tb_homepromo';
    protected $fillable = ['judul','nama','kategori','harga','gambar'];
}