<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone'];

    public function programs()
    {
        return $this->belongsToMany(Program::class, 'program_students', 'student_id', 'program_id');
    }
}
