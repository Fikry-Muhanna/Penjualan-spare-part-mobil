<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesInvoice extends Model
{
    protected $fillable = ['sales_number','customer_id','spare_part_id','admin_id','quantity','price','total_price','sales_date'];
    protected $table = "sales_invoices";
}
