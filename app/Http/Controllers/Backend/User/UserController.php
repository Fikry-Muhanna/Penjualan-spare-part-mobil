<?php

namespace App\Http\Controllers\Backend\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = Post::latest()->paginate(5);
 
        return view('user.index',compact('user'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    public function add()
    {
        return view('user.add');
    }
 
    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
 
        Post::create($request->all());
 
        return redirect()->route('user.index')
                        ->with('success','User created successfully.');
    }
 
    public function detail(User $user)
    {
        return view('user.detail',compact('user'));
    }
 
    public function edit(User $user)
    {
        return view('user.edit',compact('user'));
    }
 
    public function update(Request $request, User $user)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
 
        $post->update($request->all());
 
        return redirect()->route('user.index')
                        ->with('success','User updated successfully');
    }
 
    public function delete(User $user)
    {
        $post->delete();
 
        return redirect()->route('user.index')
                        ->with('success','User deleted successfully');
    }
}