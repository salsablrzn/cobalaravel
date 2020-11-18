<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['Product_ID','Category_ID','Product_Name','Product_Price','Product_Stock','Explanation','Status'];
    public $timestamps = false;
}
