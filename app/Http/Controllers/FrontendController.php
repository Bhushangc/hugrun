<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Tag;

class FrontendController extends Controller
{
    public function index($lan = null){
        if ($lan == 'is'){
            return view('frontend.islandic.index');
        }
        if ($lan == 'po'){
            return view('frontend.polish.index');
        }

        return view('frontend.index');
    }

    public function about($lan = null){
        if ($lan == 'is'){
            return view('frontend.islandic.about');
        }
        if ($lan == 'po'){
            return view('frontend.polish.about');
        }
        return view('frontend.about');
    }

    public function articleParents($id=null){
        $allBlogs = Blog::where('type','parents')->get();
        $currentBlog = Blog::where('type','parents')->first();
        if($id){
            $currentBlog = Blog::find($id);
        }

        $tags = Tag::where('blog_id',$currentBlog->id)->pluck('tag');
        return view('frontend.article.parents',compact('allBlogs','currentBlog','tags'));

    }

    public function articleMentalHealth($id=null,$lan = null){
        $allBlogs = Blog::where('type','mental_health')->get();
        $currentBlog = Blog::where('type','mental_health')->first();
        if($id){
            $currentBlog = Blog::find($id);
        }
        $tags = Tag::where('blog_id',$currentBlog->id)->pluck('tag');
        return view('frontend.article.health',compact('allBlogs','currentBlog','tags'));

    }

    public function articleIslandicParents($id=null){
        $allBlogs = Blog::where('type','parents')->get();
        $currentBlog = Blog::where('type','parents')->first();
        if($id){
            $currentBlog = Blog::find($id);
        }
        
        if($currentBlog->islandicBlog()->count()>0){
            $currentBlog->title = $currentBlog->islandicBlog()->first()->title;
            $currentBlog->content = $currentBlog->islandicBlog()->first()->content;
        }
      
        $tags = Tag::where('blog_id',$currentBlog->id)->pluck('tag');
        return view('frontend.article.parents',compact('allBlogs','currentBlog','tags'));

    }

    public function articleIslandicMentalHealth($id=null,$lan = null){
        $allBlogs = Blog::where('type','mental_health')->get();
        $currentBlog = Blog::where('type','mental_health')->first();
        if($id){
            $currentBlog = Blog::find($id);
        }
        if($currentBlog->islandicBlog()->count()>0){
            $currentBlog->title = $currentBlog->islandicBlog()->first()->title;
            $currentBlog->content = $currentBlog->islandicBlog()->first()->content;
        }
        $tags = Tag::where('blog_id',$currentBlog->id)->pluck('tag');
        return view('frontend.article.health',compact('allBlogs','currentBlog','tags'));

    }

    public function articlePolishParents($id=null){
        $allBlogs = Blog::where('type','parents')->get();
        $currentBlog = Blog::where('type','parents')->first();
        if($id){
            $currentBlog = Blog::find($id);
        }
        
        if($currentBlog->polishBlog()->count()>0){
            $currentBlog->title = $currentBlog->polishBlog()->first()->title;
            $currentBlog->content = $currentBlog->polishBlog()->first()->content;
        }
      
        $tags = Tag::where('blog_id',$currentBlog->id)->pluck('tag');
        return view('frontend.article.parents',compact('allBlogs','currentBlog','tags'));

    }

    public function articlePolishMentalHealth($id=null,$lan = null){
        $allBlogs = Blog::where('type','mental_health')->get();
        $currentBlog = Blog::where('type','mental_health')->first();
        if($id){
            $currentBlog = Blog::find($id);
        }
        if($currentBlog->polishBlog()->count()>0){
            $currentBlog->title = $currentBlog->polishBlog()->first()->title;
            $currentBlog->content = $currentBlog->polishBlog()->first()->content;
        }
        $tags = Tag::where('blog_id',$currentBlog->id)->pluck('tag');
        return view('frontend.article.health',compact('allBlogs','currentBlog','tags'));

    }

    public function resources(){
        return view('frontend.resources');
    }

    public function testimonials(){
        return view('frontend.testimonials');
    }

    public function review($lan = null){
        if ($lan == 'is'){
            return view('frontend.islandic.review');
        }
        if ($lan == 'po'){
            return view('frontend.polish.review');
        }
        return view('frontend.review');
    }
}
