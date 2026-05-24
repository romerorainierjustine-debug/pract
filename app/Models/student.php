<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'student_tbl';
    protected $fillable = ['name', 'email', 'password'];
}
