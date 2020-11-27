<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'tb_admin';
    protected $fillable = ['name','email','password'];
}
