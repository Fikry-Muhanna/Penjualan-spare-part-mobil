<?php
namespace App\Repositories;

use App\Models\MSparepartModel;
use Illuminate\Database\Eloquent\Model;

class MSparepart extends MSparepartModel
{
    public function mcategori()
	{
		return $this->belongsTo('App\Repositories\MCategories');
	}
    // TODO : Make your own query methods

}