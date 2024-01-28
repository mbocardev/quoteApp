<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citation extends Model
{
    protected $fillable = [
        "title",
        "content",
        "image",
        "author",
        "status",
        "category_id"

    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'favorites', 'citation_id', 'user_id');
    }
}
