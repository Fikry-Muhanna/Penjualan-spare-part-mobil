<?php

namespace App\Http\Controllers\Backend\Sparepart;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Repositories\MSparepart;
use App\Repositories\MCategories;



class SparepartController extends BaseController
{
    public function getIndex()
    {
        $msparepart = MSparepart::findAllDataPaginate(10,request('search'));

        return view('Backend.Sparepart.index', compact('msparepart'));

    }
 
    public function getAdd(MCategories $mcategories)
    {
        $mcategories = MCategories::latest();
        $form_title = 'tambah data customer';
        return view('Backend.Sparepart.form', compact('mcategories','form_title'));

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
            'category_name'=>$msparepart->category()->name,
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
        $mcategories = MCategories::latest();
        $form_title = 'Edit Data Sparepart';
        return view('Backend.Sparepart.form',compact('id','mcategories','msparepart','form_title'));
    }

  
 
}