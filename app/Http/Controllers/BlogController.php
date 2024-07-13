<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\IslandicBlog;
use App\Models\PolishBlog;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view('admin.blog.index',compact('blogs'));
    }

    public function create(){
        return view('admin.blog.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
       
        $storeData = [
            'title' => $request->title,
            'content' => $request->content,
            'type' => $request->type,
            'publication_date' => Carbon::now()->format('Y-m-d'),
        ];
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $imageName = time() . '_' . $image->getClientOriginalName();
        //     $image->move(public_path('images/blog'), $imageName);
        // }
        // $storeData['image'] = $imageName;
        $blog = Blog::create($storeData);
        foreach($request->tags as $tag){
            Tag::create(['tag'=>$tag,'blog_id'=>$blog->id]);
        }
        return redirect()->route('admin.blog');
        

    }

    public function delete($id){
        $data = Blog::find($id);
        $imagePath = public_path('images/blog/' . $data->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        if($data->polishBlog){
            $data->polishBlog->delete();
        }
        if($data->islandicBlog){
            $data->islandicBlog->delete();
        }
        $data->delete();
        return redirect()->route('admin.blog');
    }

    public function edit($id){
        $blog = Blog::find($id);
        $tags = Tag::where('blog_id',$blog->id)->pluck('tag');
        return view('admin.blog.edit',compact('blog','tags'));
    }

    public function update(Request $request){
        $blog = Blog::find($request->id);
        if ($request->tags){
            Tag::where('Blog_id',$blog->id)->delete();
            foreach($request->tags as $tag){
                Tag::create(['tag'=>$tag,'blog_id'=>$blog->id]);
            }
        }
        $storeData = [
            'title' => $request->title,
            'content' => $request->content,
            'type' => $request->type,
        ];
        if ($request->hasFile('image')) {
            $imagePath = public_path('images/blog/' . $blog->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/blog'), $imageName);
            $storeData['image'] = $imageName;
        }
        $blog->update($storeData);
        return redirect()->route('admin.blog');
    }

    public function createPolishTranslation($id){
        return view('admin.blog.polish',compact('id'));
    }

    public function storePolish(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            
        ]);
        $storeData = [
            'title' => $request->title,
            'content' => $request->content,
            'blog_id' => $request->blog_id,
        ];
        PolishBlog::create($storeData);
        return redirect()->route('admin.blog');
    }
    
    public function editPolish($id){
        $blog = PolishBlog::where('blog_id',$id)->first();
        return view('admin.blog.polish-edit',compact('blog'));
    }

    public function updatePolish(Request $request){
        $blog = PolishBlog::find($request->id);
        $storeData = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        $blog->update($storeData);
        return redirect()->route('admin.blog');
    }

    public function storeIslandic(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',

        ]);
        $storeData = [
            'title' => $request->title,
            'content' => $request->content,
            'blog_id' => $request->blog_id,
        ];
        IslandicBlog::create($storeData);
        return redirect()->route('admin.blog');

    }

    public function createIslandicTranslation($id){
        return view('admin.blog.islandic',compact('id'));
    }

    public function editIslandic($id){
        $blog = IslandicBlog::where('blog_id',$id)->first();
        return view('admin.blog.islandic-edit',compact('blog'));
    }

    public function updateIslandic(Request $request){
        $blog = IslandicBlog::find($request->id);
        $storeData = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        $blog->update($storeData);
        return redirect()->route('admin.blog');
    }
}
