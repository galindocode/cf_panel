<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Videos extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorie_id',
        'user_id',
        'title',
        'type',
        'path',
        'description',
        'slug'
    ];

    public function getYoutubeIdAttribute()
    {
        if (filter_var($this->path, FILTER_VALIDATE_URL)) {
            preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $this->path, $url);
            return end($url);
        }
        return '';
    }

    public function getExcerptAttribute()
    {
        return substr($this->description, 0, 100) . '...';
    }

    public function categorie()
    {
        return $this->belongsTo(Categories::class, 'categorie_id');
    }
}
