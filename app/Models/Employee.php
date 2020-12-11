<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
'emp_code', 'emp_name', 'emp_doj', 'emp_department', 'emp_position', 'emp_reporting_to'
];
protected $hidden = [
'created_at', 'updated_at',
];

}
