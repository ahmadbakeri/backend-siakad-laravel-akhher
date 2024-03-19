<?php

namespace App\Models;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject_id',
        'day',
        'start_time',
        'end_time',
        'room',
        'attendance_code',
        'academic_year',
        'semester',
        'created_by',
        'updated_by',
    ];

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function student(){
        return $this->belongsTo(User::class);
    }
}
