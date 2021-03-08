<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class TransactionDetailModel extends Model
{
    
	public $id;
	public $transactions_id;
	public $m_sparepart_id;
	public $sparepart_name;
	public $sparepart_price;
	public $quantity;
	public $total;

}