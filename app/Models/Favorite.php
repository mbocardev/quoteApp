<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = ['user_id', 'citation_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function citation()
    {
        return $this->belongsTo(Citation::class, 'citation_id');
    }
}
