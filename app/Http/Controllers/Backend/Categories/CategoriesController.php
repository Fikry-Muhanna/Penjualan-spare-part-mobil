<?php

namespace App\Http\Controllers\Backend\Categories;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Repositories\MCategories;
use View;


class CategoriesController extends BaseController
{
    public function getIndex()
    {
        $mcategories = MCategories::findAllDataPaginate(10,request('search'));
        
        return view('Backend.Kategori.index', compact('mcategories'));

    }
 
    public function getAdd()
    {
        $form_title = 'Tambah Data Kategori Sparepart';
        return view('Backend.Kategori.form', compact('form_title'));

    }
 
    public function postSave(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
 
        $mcategories = MCategories::find($request->id);
        $mcategories->name = $request->get("name");
        $mcategories->save();
        return redirect("admin/kategori/index")->with(["message"=>"Berhasil disimpan!","type"=>"success"]);
    }
    public function getDetail($id)
    {
        $mcategories = MCategories::find($id);
        return view("Backend.Kategori.detail", [
            'name'=>$mcategories->name
        ]);
    }
    
    public function getDelete($id)
    {
        MCategories::deleteById($id);
        
        return redirect()->back()->with(["message"=>"Kategori Berhasil dihapus!"]);
    }

    public function getEdit($id)
    {
        $mcategories = MCategories::find($id);
        $form_title = 'Edit Data Kategori';
        return view('Backend.Kategori.form',compact('id','mcategories','form_title'));
    }
    
 
}
