<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SparePartController extends Controller
{
    public function index()
    {
        $spare_part = Post::latest()->paginate(5);
 
        return view('spare_part.index',compact('spare_part'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    public function add()
    {
        return view('spare_part.add');
    }
 
    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
 
        Post::create($request->all());
 
        return redirect()->route('spare_part.index')
                        ->with('success','Spare Part created successfully.');
    }
 
    public function detail(spare_part $spare_part)
    {
        return view('spare_part.detail',compact('spare_part'));
    }
 
    public function edit(spare_part $spare_part)
    {
        return view('spare_part.edit',compact('spare_part'));
    }
 
    public function update(Request $request, spare_part $spare_part)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
 
        $post->update($request->all());
 
        return redirect()->route('spare_part.index')
                        ->with('success','Spare Part updated successfully');
    }
 
    public function delete(spare_part $spare_part)
    {
        $post->delete();
 
        return redirect()->route('spare_part.index')
                        ->with('success','Spare Part deleted successfully');
    }
}