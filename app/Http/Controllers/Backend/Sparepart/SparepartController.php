<?php

namespace App\Http\Controllers\Backend\Sparepart;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Repositories\MSparepart;

class SparepartController extends BaseController
{
    public function getIndex()
    {
        $msparepart = MSparepart::latest();

        return view('Backend.Sparepart.index', compact('msparepart'));

    }
 
    public function getAdd()
    {
        $form_title = 'tambah data customer';
        return view('Backend.Sparepart.form', compact('form_title'));

    }
 
    public function postSave(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'm_categories_id' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
 
        $msparepart = MSparepart::find($request->id);
        $msparepart->name = $request->get("name");
        $msparepart->m_categories_id = $request->get("m_categories_id");
        $msparepart->price = $request->get("price");
        $msparepart->description = $request->get("description");
        $msparepart->save();
        return redirect("admin/sparepart/index")->with(["message"=>"Berhasil disimpan!","type"=>"success"]);
    }
    public function getDetail($id)
    {
        $msparepart = MSparepart::find($id);
        return view('Backend.Sparepart.detail', [
            'name'=>$msparepart->name,
            'm_categories_id'=>$msparepart->m_categories_id,
            'price'=>$msparepart->price,
            'description'=>$msparepart->description
            ]);
       
    }
    
    public function getDelete($id)
    {
        MSparepart::deleteById($id);
        
        return redirect()->back()->with(["message"=>"Sparepart Berhasil dihapus!"]);
    }

    public function getEdit($id)
    {
        $msparepart = MSparepart::find($id);
        $form_title = 'Edit Data Sparepart';
        return view('Backend.Sparepart.form',compact('msparepart','form_title'));
    }
 
}