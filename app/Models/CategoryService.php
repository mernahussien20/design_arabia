<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryService extends Model
{
    use HasFactory;
    protected $fillable = ['name_en','image','name_ar',];

    public function services()
    {
        return $this->hasMany(Service::class, 'category_id', 'id');
    }
}
