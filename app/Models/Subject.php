<?php

namespace App\Models;

use App\Models\Lesson;
use App\Models\Toplist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory;

    public function toplist()
    {
        return $this->belongsTo(Toplist::class);
    }

    public function lecturer()
    {
        return $this->belongsTo(User::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
