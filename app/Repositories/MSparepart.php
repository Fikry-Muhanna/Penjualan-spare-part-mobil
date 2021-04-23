<?php
namespace App\Repositories;

use App\Models\MSparepartModel;
use Illuminate\Database\Eloquent\Model;

class MSparepart extends MSparepartModel
{
    public static function findAllDataPaginate($limit = 10,$search = null) {
		$query = static::table()->join("m_categories","m_categories.id","=","m_categories_id")->select("m_sparepart.*","m_categories.name as category");
		if ($search){
			$query->where('m_sparepart.name','like','%'.$search.'%');
		}
		return $query->orderBy("id","desc")->paginate($limit);
	}
    // TODO : Make your own query methods
	public function category(){
		return MCategories::find($this->m_categories_id);
	}
}