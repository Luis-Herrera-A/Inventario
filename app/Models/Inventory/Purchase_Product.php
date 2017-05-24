<?php

namespace cine\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class Purchase_Product extends Model
{
    protected $table = 'purchases_products';
    protected $primarykey = 'id';
    protected $fillable = ['id','prod_id','purchases_id'];
}
