<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraOption extends Model
{
    use HasFactory;

    protected $fillable = ['product_option_id','extra_id'];
}
