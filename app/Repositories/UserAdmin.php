<?php
namespace App\Repositories;

use App\Models\UserAdminModel;
use Illuminate\Database\Eloquent\Model;

class UserAdmin extends UserAdminModel
{
    public static function findAllDataPaginate($limit = 10,$search = null) {
        $query = static::table();
		if ($search){
			$query->where('user_admin.name','like','%'.$search.'%');
		}
		return $query->orderBy("id","desc")->paginate($limit);
	}
    // TODO : Make your own query methods

}