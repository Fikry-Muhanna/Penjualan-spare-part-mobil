<?php

namespace App\Http\Controllers\Backend\Categories;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Repositories\MCategories;


class CategoriesController extends BaseController
{
    public function getIndex()
    {
        $mcategories = mcategories::latest();

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
 
        $mcategories = mcategories::find($request->id);
        $mcategories->name = $request->get("name");
        $mcategories->save();
        return redirect("admin/kategori/index")->with(["message"=>"Berhasil disimpan!","type"=>"success"]);
    }
    public function getDetail($id)
    {
        $mcategories = mcategories::find($id);
        return view("Backend.Kategori.detail", [
            'name'=>$mcategories->name
        ]);
    }
    
    public function getDelete($id)
    {
        mcategories::deleteById($id);
        
        return redirect()->back()->with(["message"=>"Kategori Berhasil dihapus!"]);
    }

    public function getEdit($id)
    {
        $mcategories = mcategories::find($id);
        $form_title = 'Edit Data Kategori';
        return view('Backend.Kategori.form',compact('mcategories','form_title'));
    }
 
}
