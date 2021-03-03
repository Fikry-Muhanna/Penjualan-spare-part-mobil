<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primarykey = "id";
    protected $fillable = ['customer_name','gender','phone_number','address','email','password'];
    protected $table = "customers";
}
