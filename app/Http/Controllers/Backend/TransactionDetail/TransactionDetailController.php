<?php

namespace App\Http\Controllers\Backend\TransactionDetail;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Repositories\TransactionDetail;
use App\Repositories\Transactions;
use App\Repositories\MSparepart;

class TransactionDetailController extends BaseController
{
    public function getIndex()
    {
        $transactiondetail = Transactiondetail::findAllDataPaginate(10,request('search'));

        return view('Backend.TransactionDetail.index', compact('transactiondetail'));

    }
 
    public function getAdd()
    {
        $transactions = Transactions::latest();
        $msparepart = MSparepart::latest();
        $form_title = 'tambah data detail transaksi';
        return view('Backend.TransactionDetail.form', compact('form_title','transactions','msparepart'));

    }
 
    public function postSave(Request $request)
    {
        $request->validate([
            'transactions_id' => 'required',
            'm_sparepart_id' => 'required',
            'sparepart_price' => 'required',
            'quantity' => 'required',
            'total' => 'required'
        ]);
        $msparepart = MSparepart::find($request->m_sparepart_id);
        $transactions = Transactions::find($request->transactions_id);
        $transactiondetail = Transactiondetail::find($request->id);
        $transactiondetail->transactions_id = $request->get("transactions_id");
        $transactiondetail->transactions_no = $transactions->trans_no;
        $transactiondetail->m_sparepart_id = $request->get("m_sparepart_id");
        $transactiondetail->sparepart_name = $msparepart->name;
        $transactiondetail->sparepart_price = $msparepart->price;
        $transactiondetail->quantity = $request->get("quantity");
        $transactiondetail->total = $request->get("total");
        $transactiondetail->save();
        return redirect("admin/transdetail/index")->with(["message"=>"Berhasil disimpan!","type"=>"success"]);
    }
    public function getDetail($id)
    {
        $transactiondetail = Transactiondetail::find($id);
        return view('Backend.TransactionDetail.detail', [
            'transactions_id'=>$transactiondetail->transactions_id,
            'transactions_no'=>$transactiondetail->transactions_no,
            'm_sparepart_id'=>$transactiondetail->m_sparepart_id,
            'sparepart_name'=>$transactiondetail->sparepart_name,
            'sparepart_price'=>$transactiondetail->sparepart_price,
            'quantity'=>$transactiondetail->quantity,
            'total'=>$transactiondetail->total,
        ]);
    }
    
    public function getDelete($id)
    {
        Transactiondetail::deleteById($id);
        
        return redirect()->back()->with(["message"=>"Detail Transaksi Berhasil dihapus!"]);
    }

    public function getEdit($id)
    {
        $transactiondetail = Transactiondetail::find($id);
        $transactions = Transactions::latest();
        $msparepart = MSparepart::latest();
        $form_title = 'Edit Data Detail Transaksi';
        return view('Backend.TransactionDetail.form',compact('id','transactiondetail','form_title','transactions','msparepart'));
    }
 
}