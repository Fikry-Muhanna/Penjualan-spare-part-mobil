<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplyInvoice extends Model
{
    protected $fillable = ['supply_number','supplier_id','spare_part_id','admin_id','quantity','price','total_price','supply_date'];
    protected $table = "supply_invoices";
}
