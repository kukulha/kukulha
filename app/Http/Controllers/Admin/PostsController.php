<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Image;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:roles.create')->only(['create', 'store']);
        $this->middleware('can:roles.index')->only(['index']);
        $this->middleware('can:roles.edit')->only(['edit', 'update']);
        $this->middleware('can:roles.destroy')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('id', Auth::user()->id)->orderBy('id','DESC')->paginate(10);
        
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'DESC')->pluck('name', 'id');
        $images = Image::orderBy('id', 'DESC')->get();
        return view('admin.posts.create', compact('categories', 'images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::create($request->all());

        if($request->hasFile('path'))
        {
            $path = $request->file('path')->store('public');
            $image = Image::create(['path' => $path]);
            $post->fill(['image_id' => $image->id]);
        }

        $post->save();
        return redirect()->route('posts.index')->with('info', 'Articulo creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('passPost', $post);
        $categories = Category::orderBy('name', 'DESC')->pluck('name', 'id');
        $images = Image::orderBy('id', 'DESC')->get();
        return view('admin.posts.edit', compact('categories', 'images', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->authorize('passPost', $post);
        $post->update($request->all());
        if($request->hasFile('path'))
        {
            $path = $request->file('path')->store('public');
            $image = Image::create(['path' => $path]);
            $post->fill(['image_id' => $image->id]);
        }
        $post->save();
        return redirect()->route('posts.index')->with('info', 'Articulo editado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('passPost', $post);
        $post->delete();
        return redirect()->route('posts.index')->with('info', 'Articulo eliminado exitosamente');
    }
}
