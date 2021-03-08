<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Post::latest()->paginate(5);
 
        return view('customer.index',compact('customer'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    public function add()
    {
        return view('customer.add');
    }
 
    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
 
        Post::create($request->all());
 
        return redirect()->route('customer.index')
                        ->with('success','Customer created successfully.');
    }
 
    public function detail(Customer $customer)
    {
        return view('customer.detail',compact('customer'));
    }
 
    public function edit(Customer $customer)
    {
        return view('customer.edit',compact('customer'));
    }
 
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
 
        $post->update($request->all());
 
        return redirect()->route('customer.index')
                        ->with('success','Customer updated successfully');
    }
 
    public function delete(Customer $customer)
    {
        $post->delete();
 
        return redirect()->route('customer.index')
                        ->with('success','Customer deleted successfully');
    }
}