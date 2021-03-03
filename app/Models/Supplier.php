<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $primarykey = "id";
    protected $fillable = ['supplier_name','phone_number','address'];
    protected $table = "suppliers";
}
