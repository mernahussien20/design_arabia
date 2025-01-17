<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'title', 'category_id'];

    public function category()
    {
        return $this->belongsTo(CategoryGallery::class, 'category_id', 'id');
    }
}
