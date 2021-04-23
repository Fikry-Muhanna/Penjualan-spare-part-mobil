<?php
namespace App\Repositories;

use App\Models\MCategoriesModel;
use Illuminate\Database\Eloquent\Model;

class MCategories extends MCategoriesModel
{
    public static function findAllDataPaginate($limit = 10,$search = null) {
        $query = static::table();
        if ($search){
            $query->where('m_categories.name','like','%'.$search.'%');
        }
        return $query->orderBy("id","desc")->paginate($limit);
    }
    // TODO : Make your own query methods

}