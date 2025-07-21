<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Employee extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'employees';

    protected $fillable = [
        'name', 'email', 'dob', 'salary', 'gender', 'active', 'img'
    ];
}
