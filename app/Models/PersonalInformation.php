<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// app/Models/PersonalInformation.php
class PersonalInformation extends Model
{
    use HasFactory;

    protected $table = 'personal_information_admin';

    protected $fillable = [
        'id',
        'lname',
        'fname',
        'mname',
        'age',
        'sex',
        'address',
        'guardian_name',
        'grade_and_section',
        'created_by',
    ];

}

