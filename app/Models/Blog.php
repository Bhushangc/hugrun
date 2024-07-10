<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    protected $fillable = ['id','image','title','content','video','tags','publication_date','type'];

    public function polishBlog(){
        return $this->hasOne(PolishBlog::class, 'blog_id', 'id');
    }
    public function islandicBlog(){
        return $this->hasOne(IslandicBlog::class, 'blog_id', 'id');
    }
}
