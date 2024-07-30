<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use HasFactory;

    protected $fillable = ['name','image','video'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
