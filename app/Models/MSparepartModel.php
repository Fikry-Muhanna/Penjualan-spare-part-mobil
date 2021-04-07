<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;


class MSparepartModel extends Model
{
	public $id;
	public $created_at;
	public $updated_at;
	public $name;
	public $m_categories_id;
	public $price;
	public $description;
	
}