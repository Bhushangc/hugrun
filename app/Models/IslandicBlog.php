<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IslandicBlog extends Model
{
    use HasFactory;
    protected $table = 'islandic_blogs';
    protected $fillable = ['id','blog_id','title','content'];
}
