<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    protected $table = 'blogposts';
    protected $fillable = [
        'title',
        'content',
        'author',
        'image',
    ];
}

