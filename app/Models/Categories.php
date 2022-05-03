<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'slug',
        'free'
    ];
    public function getExcerptAttribute()
    {
        return mb_substr($this->description, 0, 60) . '...';
    }
}
