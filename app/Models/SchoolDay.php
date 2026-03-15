<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SchoolDay extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'type',
        'label',
        'attendance_count',
    ];
}