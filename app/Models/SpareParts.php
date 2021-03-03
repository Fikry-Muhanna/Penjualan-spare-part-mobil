<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpareParts extends Model
{
    protected $primarykey = "id";
    protected $fillable = ['spare_part_name','price','stock'];
    protected $table = "spare_parts";
}
