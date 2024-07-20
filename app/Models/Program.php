<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'program_students', 'program_id', 'student_id');
    }
}
