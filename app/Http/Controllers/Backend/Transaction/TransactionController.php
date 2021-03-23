<?php

namespace App\Http\Controllers\Backend\Transaction;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Repositories\Transactions;

class TransactionController extends BaseController
{
    public function getIndex()
    {
        $transactions = Transactions::latest();

        return view('Backend.Transaction.index', compact('transactions'));

    }
 
    public function getAdd()
    {
        $form_title = 'tambah data transaksi';
        return view('Backend.Transaction.form', compact('form_title'));

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
        return view("Backend.Transaction.detail", ["transactions"=>$transactions]);
    }
    
    public function getDelete($id)
    {
        Transactions::deleteById($id);
        
        return redirect()->back()->with(["message"=>"Transaksi Berhasil dihapus!"]);
    }

    public function getEdit($id)
    {
        $transactions = Transactions::find($id);
        $form_title = 'Edit Data Transaksi';
        return view('Backend.Transaction.form',compact('transactions','form_title'));
    }
 
}