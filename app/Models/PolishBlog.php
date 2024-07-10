<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolishBlog extends Model
{
    use HasFactory;
    protected $table = 'polish_blogs';
    protected $fillable = ['id','blog_id','title','content'];
}
