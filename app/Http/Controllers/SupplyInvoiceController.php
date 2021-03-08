<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplyInvoiceController extends Controller
{
    public function index()
    {
        $supply_invoice = Post::latest()->paginate(5);
 
        return view('supply_invoice.index',compact('supply_invoice'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    public function add()
    {
        return view('supply_invoice.add');
    }
 
    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
 
        Post::create($request->all());
 
        return redirect()->route('supply_invoice.index')
                        ->with('success','Supply Invoice created successfully.');
    }
 
    public function detail(supply_invoice $supply_invoice)
    {
        return view('supply_invoice.detail',compact('supply_invoice'));
    }
 
    public function edit(supply_invoice $supply_invoice)
    {
        return view('supply_invoice.edit',compact('supply_invoice'));
    }
 
    public function update(Request $request, supply_invoice $supply_invoice)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
 
        $post->update($request->all());
 
        return redirect()->route('supply_invoice.index')
                        ->with('success','Supply Invoice updated successfully');
    }
 
    public function delete(supply_invoice $supply_invoice)
    {
        $post->delete();
 
        return redirect()->route('supply_invoice.index')
                        ->with('success','Supply Invoice deleted successfully');
    }
}