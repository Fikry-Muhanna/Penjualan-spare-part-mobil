<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesInvoiceController extends Controller
{
    public function index()
    {
        $sales_invoice = Post::latest()->paginate(5);
 
        return view('sales_invoice.index',compact('sales_invoice'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    public function add()
    {
        return view('sales_invoice.add');
    }
 
    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
 
        Post::create($request->all());
 
        return redirect()->route('sales_invoice.index')
                        ->with('success','Sales Invoice created successfully.');
    }
 
    public function detail(sales_invoice $sales_invoice)
    {
        return view('sales_invoice.detail',compact('sales_invoice'));
    }
 
    public function edit(sales_invoice $sales_invoice)
    {
        return view('sales_invoice.edit',compact('sales_invoice'));
    }
 
    public function update(Request $request, sales_invoice $sales_invoice)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
 
        $post->update($request->all());
 
        return redirect()->route('sales_invoice.index')
                        ->with('success','Sales Invoice updated successfully');
    }
 
    public function delete(sales_invoice $sales_invoice)
    {
        $post->delete();
 
        return redirect()->route('sales_invoice.index')
                        ->with('success','Sales Invoice deleted successfully');
    }
}