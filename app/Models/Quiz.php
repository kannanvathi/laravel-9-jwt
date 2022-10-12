<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'quiz_id', 'question_api_id', 'question', 'select_answer', 'correct_answer', 'incorrect_answers', 'type'];

    public function user() {
        $this->belongsTo(User::class, 'user_id', 'id');
    }
}
