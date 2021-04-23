<?php
namespace App\Repositories;

use App\Models\CustomersModel;
use Illuminate\Database\Eloquent\Model;

class Customers extends CustomersModel
{
    public static function findAllDataPaginate($limit = 10,$search = null) {
        $query = static::table();
		if ($search){
			$query->where('customers.name','like','%'.$search.'%');
		}
		return $query->orderBy("id","desc")->paginate($limit);
	}
    // TODO : Make your own query methods

}
