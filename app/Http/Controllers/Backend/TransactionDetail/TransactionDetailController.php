<?php

namespace App\Http\Controllers\Backend\TransactionDetail;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Repositories\TransactionDetail;

class TransactionDetailController extends BaseController
{
    public function getIndex()
    {
        $transactiondetail = transactiondetail::latest();

        return view('Backend.TransactionDetail.index', compact('transactiondetail'));

    }
 
    public function getAdd()
    {
        $form_title = 'tambah data detail transaksi';
        return view('Backend.TransactionDetail.form', compact('form_title'));

    }
 
    public function postSave(Request $request)
    {
        $request->validate([
            'transactions_id' => 'required',
            'm_sparepart_id' => 'required',
            'sparepart_name' => 'required',
            'sparepart_price' => 'required',
            'quantity' => 'required',
            'total' => 'required'
        ]);
 
        $transactiondetail = transactiondetail::find($request->id);
        $transactiondetail->transactions_id = $request->get("transactions_id");
        $transactiondetail->m_sparepart_id = $request->get("m_sparepart_id");
        $transactiondetail->sparepart_name = $request->get("sparepart_name");
        $transactiondetail->sparepart_price = $request->get("sparepart_price");
        $transactiondetail->quantity = $request->get("quantity");
        $transactiondetail->total = $request->get("total");
        $transactiondetail->save();
        return redirect("admin/transdetail/index")->with(["message"=>"Berhasil disimpan!","type"=>"success"]);
    }
    public function getDetail($id)
    {
        $transactiondetail = transactiondetail::find($id);
        return view('Backend.TransactionDetail.detail', [
            'transactions_id'=>$transactions->transactions_id,
            'm_sparepart_id'=>$transactions->m_sparepart_id,
            'sparepart_name'=>$transactions->sparepart_name,
            'sparepart_price'=>$transactions->sparepart_price,
            'quantity'=>$transactions->quantity,
            'total'=>$transactions->total,
        ]);
    }
    
    public function getDelete($id)
    {
        transactiondetail::deleteById($id);
        
        return redirect()->back()->with(["message"=>"Detail Transaksi Berhasil dihapus!"]);
    }

    public function getEdit($id)
    {
        $transactiondetail = transactiondetail::find($id);
        $form_title = 'Edit Data Detail Transaksi';
        return view('Backend.TransactionDetail.form',compact('transactiondetail','form_title'));
    }
 
}