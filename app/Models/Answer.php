<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = ['question_id', 'answer'];

    public function faqQuestion()
    {
        return $this->belongsTo(FaqQuestion::class, 'question_id', 'id');
    }
}