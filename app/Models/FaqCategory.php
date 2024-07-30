<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];

    public function faqQuestions()
    {
        return $this->hasMany(FaqQuestion::class, 'category_id', 'id');
    }
}