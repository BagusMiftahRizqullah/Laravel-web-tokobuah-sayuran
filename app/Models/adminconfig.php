<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminconfig extends Model
{
    protected $table = 'tb_admin';
    protected $fillable = ['name','email','password'];
}
