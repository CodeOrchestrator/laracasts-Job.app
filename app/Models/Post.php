<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title','body'];

    protected function user()
    {
        return $this->belongsTo(User::class);
    }

    protected function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
