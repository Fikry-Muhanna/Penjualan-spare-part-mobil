<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = Post::latest()->paginate(5);
 
        return view('supplier.index',compact('supplier'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    public function add()
    {
        return view('supplier.add');
    }
 
    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
 
        Post::create($request->all());
 
        return redirect()->route('supplier.index')
                        ->with('success','Supplier created successfully.');
    }
 
    public function detail(Supplier $supplier)
    {
        return view('supplier.detail',compact('supplier'));
    }
 
    public function edit(Supplier $supplier)
    {
        return view('supplier.edit',compact('supplier'));
    }
 
    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
 
        $post->update($request->all());
 
        return redirect()->route('supplier.index')
                        ->with('success','Supplier updated successfully');
    }
 
    public function delete(Supplier $supplier)
    {
        $post->delete();
 
        return redirect()->route('supplier.index')
                        ->with('success','Supplier deleted successfully');
    }
}