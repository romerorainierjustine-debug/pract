<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'student_tbl';
    protected $primaryKey = 'id';
    protected $fillable = ['fname', 'mname', 'lname', 'age', 'zipcode', 'address'];
}
