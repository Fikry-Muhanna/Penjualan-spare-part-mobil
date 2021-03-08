<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class TransactionsModel extends Model
{
    
	public $id;
	public $created_at;
	public $updated_at;
	public $trans_no;
	public $customers_id;
	public $grand_total;
	public $created_by;

}