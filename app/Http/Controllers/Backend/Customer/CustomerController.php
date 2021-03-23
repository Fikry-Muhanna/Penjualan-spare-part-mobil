<?php

namespace App\Http\Controllers\Backend\Customer;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Repositories\Customers;

class CustomerController extends BaseController
{
    public function getIndex()
    {
        $customers = Customers::latest();

        return view('Backend.Customer.index', compact('customers'));

    }
 
    public function getAdd()
    {
        $form_title = 'tambah data customer';
        return view('Backend.Customer.form', compact('form_title'));

    }
 
    public function postSave(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);
 
        $customers = Customers::find($request->id);
        $customers->name = $request->get("name");
        $customers->phone = $request->get("phone");
        $customers->save();
        return redirect("admin/customer/index")->with(["message"=>"Berhasil disimpan!","type"=>"success"]);
    }
    public function getDetail($id)
    {
        $customers = Customers::find($id);
        return view("Customers.detail", ["customers"=>$customers]);
    }
    
    public function getDelete($id)
    {
        Customers::deleteById($id);
        
        return redirect()->back()->with(["message"=>"Customers Berhasil dihapus!"]);
    }

    public function getEdit($id)
    {
        $customers = Customers::find($id);
        $form_title = 'edit data customer';
        return view('Backend.Customer.form',compact('customers','form_title'));
    }
 
}