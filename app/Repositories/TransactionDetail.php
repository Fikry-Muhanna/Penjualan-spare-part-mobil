<?php
namespace App\Repositories;

use App\Models\TransactionDetailModel;

class TransactionDetail extends TransactionDetailModel
{
    public static function findAllDataPaginate($limit = 10,$search = null) {
        $query = static::table();
		if ($search){
			$query->where('transaction_detail.sparepart_name','like','%'.$search.'%');
		}
		return $query->orderBy("id","desc")->paginate($limit);
	}
    // TODO : Make your own query methods

}