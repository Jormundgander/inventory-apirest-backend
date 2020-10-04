<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'barcode';
    
    protected $fillable = ['barcode', 'img_path', 'name', 'description'];
}
