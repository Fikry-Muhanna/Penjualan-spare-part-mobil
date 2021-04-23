<?php
namespace App\Repositories;

use App\Models\TransactionsModel;

class Transactions extends TransactionsModel
{
    public static function findAllDataPaginate($limit = 10,$search = null) {
		$query = static::table()->join("customers","customers.id","=","customers_id")->select("transactions.*","customers.name as customer");
		if ($search){
			$query->where('transactions.created_by','like','%'.$search.'%');
		}
		return $query->orderBy("id","desc")->paginate($limit);
	}
    // TODO : Make your own query methods
	public function customer(){
		return Customers::find($this->customers_id);
	}
    // TODO : Make your own query methods

}