<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $primarykey = "id";
    protected $fillable = ['admin_name','phone_number','address','email','password'];
    protected $table = "Admins";
}
