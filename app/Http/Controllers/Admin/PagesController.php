<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Image;
use App\Message;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:messages.index', 'can:categories.index', 'can:posts.index', 'can:images.index'])->only(['index']);
    }

    public function index()
    {
    	$messages = Message::orderBy('id', 'DESC')->paginate(5);
    	$categories = Category::orderBy('id', 'DESC')->paginate(5);
    	$posts = Post::orderBy('id', 'DESC')->paginate(5);
    	$images = Image::orderBy('id', 'DESC')->paginate(5);
    	return view('admin.index', compact('messages', 'categories', 'posts', 'images'));
    }

    /**
    *Display the profile of the user
    *
    * @return \Illuminate\Http\Response
    */
    public function profile() {

        $roles = Auth::user()->roles()->get();
        $user = Auth::user();
        return view('admin.users.profile.profile', compact('user', 'roles'));
    }

    /**
    *Show the form for editing the avatar of the user.
    *
    * @return \Illuminate\Http\Response
    */
    public function edit_profile()
    {
        $user = Auth::user();
        return view('admin.users.profile.edit-profile', compact('user'));
    }
 
    public function update_profile(Request $request) {
        $this->validate($request, [
          'avatar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
     
        $filename = 'av'.Auth::id().'_'.time().'.'.$request->avatar->getClientOriginalExtension();
        $request->avatar->move(public_path('upload/avatar'), $filename);
     
        $user = Auth::user();
        $user->avatar = $filename;
        $user->save();
     
        return redirect()->route('user.profile');
    }
}
