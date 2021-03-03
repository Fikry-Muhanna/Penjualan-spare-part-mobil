<?php
 
namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Auth;
 
class CustomerController extends Controller
{
    public function index()
    {
        $customer = customers::all();
        return view('data_customer',compact('customer'));
    }
    public function add(){
        return view('customer_add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'customer_name'=>'required',
            'gender'=>'required',
            'phone_number'=>'required',
            'address'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        
        Customer::create($request->all());
        return redirect()->route('data_customer')
                        ->with('success','Data customer berhasil disimpan');
    }
    public function show(data_customer $data_customer)
    {
        return view (data_customer.edit,compact('customer'));
    }
    public function edit(data_customer $data_customer)
    {
        return view (data_customer.edit,compact('customer'));
    }
    public function update(Request $request, data_customer $data_customer)
    {
        $request->validate([
            'customer_name'=>'required',
            'gender'=>'required',
            'phone_number'=>'required',
            'address'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        $customer ->update($request->all());
        return redirect()->route('data_customer')->with ('success','customer done');
    }
    public function destroy(customer $customer)
    {
        $customer->delete();
        return redirect()->route('data_customer')->with('success','Customer berhasil dihapus');
    }
}

