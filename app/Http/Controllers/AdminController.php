<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admin Post::latest()->paginate(5);
 
        return view('admin.index',compact('admin'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    public function add()
    {
        return view('admin.add');
    }
 
    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
 
        Post::create($request->all());
 
        return redirect()->route('admin.index')
                        ->with('success','Admin created successfully.');
    }
 
    public function detail(Admin $admin)
    {
        return view('admin.detail',compact('admin'));
    }
 
    public function edit(Admin $admin)
    {
        return view('admin.edit',compact('admin'));
    }
 
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
 
        $post->update($request->all());
 
        return redirect()->route('admin.index')
                        ->with('success','Admin updated successfully');
    }
 
    public function delete(Admin $admin)
    {
        $post->delete();
 
        return redirect()->route('admin.index')
                        ->with('success','Admin deleted successfully');
    }
}