<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Tag;
use App\Models\ContactUs;

class FrontendController extends Controller
{
    public function index(){
        return redirect()->route('home', ['lan' => 'is']);
        // if ($lan == 'is'){
        //     return view('frontend.islandic.index');
        // }
        // if ($lan == 'po'){
        //     return view('frontend.polish.index');
        // }

        // return view('frontend.index');
    }
    public function home($lan = null){
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

    public function postContact(Request $request){
        $data = $request->only('name','email','subject','phone','message');
        ContactUs::insert($data);
        return back();
    }

    public function articleParents($id=null){
        $allBlogs = Blog::where('type','parents')->get();
        $currentBlog = Blog::where('type','parents')->first();
        if($id){
            $currentBlog = Blog::find($id);
        }
        if(!$currentBlog){
            return back()->with('error','no article');
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
        if(!$currentBlog){
            return back()->with('error','no article');
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
        
        if(!$currentBlog){
            return back()->with('error','no article');
        }
        if($currentBlog->islandicBlog()->count()>0){
            $currentBlog->title = $currentBlog->islandicBlog()->first()->title;
            $currentBlog->content = $currentBlog->islandicBlog()->first()->content;
        }
      
        $tags = Tag::where('blog_id',$currentBlog->id)->pluck('tag');
        if(!$currentBlog){
            return back()->with('error','no article');
        }
        return view('frontend.article.islandic_parents',compact('allBlogs','currentBlog','tags'));

    }
    public function articleIslandicParents2(){
        $allBlogs = Blog::where('type','parents')->get();
        $currentBlog = Blog::where('type','parents')->first();
        if(!$currentBlog){
            return back()->with('error','no article');
        }
        if($currentBlog->islandicBlog()->count()>0){
            $currentBlog->title = $currentBlog->islandicBlog()->first()->title;
            $currentBlog->content = $currentBlog->islandicBlog()->first()->content;
        }
      
        $tags = Tag::where('blog_id',$currentBlog->id)->pluck('tag');
        if(!$currentBlog){
            return back()->with('error','no article');
        }
        return view('frontend.article.islandic_parents',compact('allBlogs','currentBlog','tags'));

    }

    public function articleIslandicMentalHealth($id=null,$lan = null){
        $allBlogs = Blog::where('type','mental_health')->get();
        $currentBlog = Blog::where('type','mental_health')->first();
        if($id){
            $currentBlog = Blog::find($id);
        }
        if(!$currentBlog){
            return back()->with('error','no article');
        }
        if($currentBlog->islandicBlog()->count()>0){
            $currentBlog->title = $currentBlog->islandicBlog()->first()->title;
            $currentBlog->content = $currentBlog->islandicBlog()->first()->content;
        }
        $tags = Tag::where('blog_id',$currentBlog->id)->pluck('tag');
        if(!$currentBlog){
            return back()->with('error','no article');
        }
        return view('frontend.article.islandic_health',compact('allBlogs','currentBlog','tags'));

    }
    public function articleIslandicMentalHealth2(){
        $allBlogs = Blog::where('type','mental_health')->get();
        $currentBlog = Blog::where('type','mental_health')->first();
        if(!$currentBlog){
            return back()->with('error','no article');
        }
        if($currentBlog->islandicBlog()->count()>0){
            $currentBlog->title = $currentBlog->islandicBlog()->first()->title;
            $currentBlog->content = $currentBlog->islandicBlog()->first()->content;
        }
        $tags = Tag::where('blog_id',$currentBlog->id)->pluck('tag');
        if(!$currentBlog){
            return back()->with('error','no article');
        }
        return view('frontend.article.islandic_health',compact('allBlogs','currentBlog','tags'));

    }

    public function articlePolishParents($id=null){
        $allBlogs = Blog::where('type','parents')->get();
        $currentBlog = Blog::where('type','parents')->first();
        if($id){
            $currentBlog = Blog::find($id);
        }
        if(!$currentBlog){
            return back()->with('error','no article');
        }
        if($currentBlog->polishBlog()->count()>0){
            $currentBlog->title = $currentBlog->polishBlog()->first()->title;
            $currentBlog->content = $currentBlog->polishBlog()->first()->content;
        }
      
        $tags = Tag::where('blog_id',$currentBlog->id)->pluck('tag');
        if(!$currentBlog){
            return back()->with('error','no article');
        }
        return view('frontend.article.polish_parents',compact('allBlogs','currentBlog','tags'));
    }
    public function articlePolishParents2(){
        $allBlogs = Blog::where('type','parents')->get();
        $currentBlog = Blog::where('type','parents')->first();
        if(!$currentBlog){
            return back()->with('error','no article');
        }

        if($currentBlog->polishBlog()->count()>0){
            $currentBlog->title = $currentBlog->polishBlog()->first()->title;
            $currentBlog->content = $currentBlog->polishBlog()->first()->content;
        }
      
        $tags = Tag::where('blog_id',$currentBlog->id)->pluck('tag');
        if(!$currentBlog){
            return back()->with('error','no article');
        }
        return view('frontend.article.polish_parents',compact('allBlogs','currentBlog','tags'));

    }

    public function articlePolishMentalHealth($id=null,$lan = null){
        $allBlogs = Blog::where('type','mental_health')->get();
        $currentBlog = Blog::where('type','mental_health')->first();
        if($id){
            $currentBlog = Blog::find($id);
        }
        if(!$currentBlog){
            return back()->with('error','no article');
        }
        if($currentBlog->polishBlog()->count()>0){
            $currentBlog->title = $currentBlog->polishBlog()->first()->title;
            $currentBlog->content = $currentBlog->polishBlog()->first()->content;
        }
        $tags = Tag::where('blog_id',$currentBlog->id)->pluck('tag');
        if(!$currentBlog){
            return back()->with('error','no article');
        }
        return view('frontend.article.polish_health',compact('allBlogs','currentBlog','tags'));

    }
    public function articlePolishMentalHealth2(){
        $allBlogs = Blog::where('type','mental_health')->get();
        $currentBlog = Blog::where('type','mental_health')->first();
        if(!$currentBlog){
            return back()->with('error','no article');
        }
        if($currentBlog->polishBlog()->count()>0){
            $currentBlog->title = $currentBlog->polishBlog()->first()->title;
            $currentBlog->content = $currentBlog->polishBlog()->first()->content;
        }
        $tags = Tag::where('blog_id',$currentBlog->id)->pluck('tag');
        if(!$currentBlog){
            return back()->with('error','no article');
        }
        return view('frontend.article.polish_health',compact('allBlogs','currentBlog','tags'));

    }

    public function resources($lan = null){
        if ($lan == 'is'){
            return view('frontend.islandic.resources');
        }
        if ($lan == 'po'){
            return view('frontend.polish.resources');
        }
        return view('frontend.resources');
    }

    public function testimonials($lan = null){
        if ($lan == 'is'){
            return view('frontend.islandic.testimonials');
        }
        if ($lan == 'po'){
            return view('frontend.polish.testimonials');
        }
        return view('frontend.testimonials');
    }

    public function review($name = null,$lan = null){
        if($name == 'ragnar'){
            if ($lan == 'is'){
                return view('frontend.review.islandic.ragnar');
            }
            if ($lan == 'po'){
                return view('frontend.review.polish.ragnar');
            }
            return view('frontend.review.ragnar');
        }
        if($name == 'aron-mar'){
            if ($lan == 'is'){
                return view('frontend.review.islandic.aron-mar');
            }
            if ($lan == 'po'){
                return view('frontend.review.polish.aron-mar');
            }
            return view('frontend.review.aron-mar');
        }
        if($name == 'hrefna-huld'){
            if ($lan == 'is'){
                return view('frontend.review.islandic.hrefna-huld');
            }
            if ($lan == 'po'){
                return view('frontend.review.polish.hrefna-huld');
            }
            return view('frontend.review.hrefna-huld');
        }
        if($name == 'IÐUNN'){
            if ($lan == 'is'){
                return view('frontend.review.islandic.IÐUNN');
            }
            if ($lan == 'po'){
                return view('frontend.review.polish.IÐUNN');
            }
            return view('frontend.review.IÐUNN');
        }
        if($name == 'SONJABJÖRG'){
            if ($lan == 'is'){
                return view('frontend.review.islandic.SONJABJÖRG');
            }
            if ($lan == 'po'){
                return view('frontend.review.polish.SONJABJÖRG');
            }
            return view('frontend.review.SONJABJÖRG');
        }
        if($name == 'tryggvi'){
            if ($lan == 'is'){
                return view('frontend.review.islandic.tryggvi');
            }
            if ($lan == 'po'){
                return view('frontend.review.polish.tryggvi');
            }
            return view('frontend.review.tryggvi');
        }
        if($name == 'vala-kristin'){
            if ($lan == 'is'){
                return view('frontend.review.islandic.vala-kristin');
            }
            if ($lan == 'po'){
                return view('frontend.review.polish.vala-kristin');
            }
            return view('frontend.review.vala-kristin');
        }
       
    }
}
