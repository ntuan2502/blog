<?php

namespace App\Http\Controllers;

use App\Category;
use App\Classes;
use App\Helpers\Local;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function admin()
    {
        return view('admin.admin');
    }

    public function class()
    {
        $classes = Classes::where([])->orderBy('id', 'DESC')->get();
        return view('admin.class.index')->with([
            'classes' => $classes,
        ]);
    }

    public function add_class()
    {
        return view('admin.class.add');
    }

    public function add_classP(Request $request)
    {
        $class = new Classes();
        $class->name = $request->name;
        if ($request->icon) {
            Local::delete($class->icon);
            $class->icon = Local::upload($request->icon);
        }
        $class->description = $request->description;
        $class->save();
        return redirect('/admin/class')->with([
            'success' => 'Thêm hệ phái thành công!',
        ]);
    }

    public function edit_class($id)
    {
        $class = Classes::find($id);
        return view('admin.class.edit')->with([
            'class' => $class,
        ]);
    }

    public function edit_classP(Request $request, $id)
    {
        $class = Classes::find($id);
        $class->name = $request->name;
        if ($request->icon) {
            Local::delete($class->icon);
            $class->icon = Local::upload($request->icon);
        }
        $class->description = $request->description;
        $class->save();
        return redirect('/admin/class')->with([
            'success' => 'Sửa hệ phái thành công!',
        ]);
    }

    public function delete_classP(Request $request)
    {
        $class = Classes::find($request->id);
        Local::delete($class->icon);
        $class->delete();
        return response()->json([
            'redirect' => '/admin/class',
        ]);
    }

    public function category()
    {
        $categories = Category::where([])->orderBy('id', 'DESC')->get();
        return view('admin.category.index')->with([
            'categories' => $categories,
        ]);
    }

    public function add_category()
    {
        return view('admin.category.add');
    }

    public function add_categoryP(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();
        return redirect('/admin/category')->with([
            'success' => 'Thêm chuyên mục thành công!',
        ]);
    }

    public function edit_category($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit')->with([
            'category' => $category,
        ]);
    }

    public function edit_categoryP(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();
        return redirect('/admin/category')->with([
            'success' => 'Sửa chuyên mục thành công!',
        ]);
    }

    public function delete_categoryP(Request $request)
    {
        $category = Category::find($request->id);
        $category->delete();
        return response()->json([
            'redirect' => '/admin/category',
        ]);
    }

    public function post()
    {
        $posts = Post::where([])->orderBy('id', 'DESC')->get();
        foreach ($posts as $post) {
            $post->category_name = Category::find($post->category_id) ? Category::find($post->category_id)->name : 'null';
            $post->user_name = User::find($post->user_id) ? User::find($post->user_id)->name : 'null';
        }
        return view('admin.post.index')->with([
            'posts' => $posts,
        ]);
    }

    public function add_post(){
        $categories = Category::all();
        return view('admin.post.add')->with([
            'categories' => $categories,
        ]);
    }

    public function add_postP(Request $request){
        $post = new Post();
        $post->name = $request->name;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->user_id = Auth::user()->id;
        $post->category_id = $request->category_id;
        $post->cover = Local::uploadRandom($request->cover);
        $post->save();

        return redirect('/admin/post')->with([
            'success' => 'Thêm bài viết thành công!',
        ]);
    }

    public function edit_post($id){
        $categories = Category::all();
        $post = Post::find($id);

        return view('admin.post.edit')->with([
            'post' => $post,
            'categories' => $categories,
        ]);
    }

    public function edit_postP($id, Request $request){
        $post = Post::find($id);
        $post->name = $request->name;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->user_id = Auth::user()->id;
        $post->category_id = $request->category_id;
        if($request->cover){
            Local::delete($post->cover);
            $post->cover = Local::uploadRandom($request->cover);
        }
        $post->save();

        return redirect('/admin/post')->with([
            'success' => 'Sửa bài viết thành công!',
        ]);
    }

    public function delete_postP(Request $request){
        $post = Post::find($request->id);
        Local::delete($post->cover);
        $post->delete();
        return response()->json([
            'redirect' => '/admin/post',
        ]);
    }
}
