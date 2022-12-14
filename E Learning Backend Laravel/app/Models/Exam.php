<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = ['exam_date', 'exam_title','course_id'];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

}
