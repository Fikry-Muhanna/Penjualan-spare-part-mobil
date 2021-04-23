<?php

namespace App\Http\Controllers\Backend\Transaction;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Repositories\Transactions;
use App\Repositories\Customers;

class TransactionController extends BaseController
{
    public function getIndex()
    {
        $transactions = Transactions::findAllDataPaginate(10,request('search'));
        return view('Backend.Transaction.index', compact('transactions'));

    }
 
    public function getAdd(Customers $customers)
    {
        $customers = Customers::latest();
        $form_title = 'tambah data transaksi';
        return view('Backend.Transaction.form', compact('customers','form_title'));

    }
 
    public function postSave(Request $request)
    {
        $request->validate([
            'trans_no' => 'required',
            'customers_id' => 'required',
            'grand_total' => 'required',
            'created_by' => 'required'
        ]);
 
        $transactions = Transactions::find($request->id);
        $transactions->trans_no = $request->get("trans_no");
        $transactions->customers_id = $request->get("customers_id");
        $transactions->grand_total = $request->get("grand_total");
        $transactions->created_by = $request->get("created_by");
        $transactions->save();
        return redirect("admin/transaksi/index")->with(["message"=>"Berhasil disimpan!","type"=>"success"]);
    }
    public function getDetail($id)
    {
        $transactions = Transactions::find($id);
        return view('Backend.Transaction.detail', [
            'trans_no'=>$transactions->trans_no,
            'customer_name'=>$transactions->customer()->name,
            'grand_total'=>$transactions->grand_total,
            'created_by'=>$transactions->created_by
        ]);
    }
    
    public function getDelete($id)
    {
        Transactions::deleteById($id);
        
        return redirect()->back()->with(["message"=>"Transaksi Berhasil dihapus!"]);
    }

    public function getEdit($id)
    {
        $transactions = Transactions::find($id);
        $customers = Customers::latest();
        $form_title = 'Edit Data Transaksi';
        return view('Backend.Transaction.form',compact('id','transactions','form_title','customers'));
    }
 
   
}