<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'trackID',
        'strandID',
        'subjectID',
        'subjectName',
        'subjectType',
        'gradeLevel',
        'Semester',
    ];
}
