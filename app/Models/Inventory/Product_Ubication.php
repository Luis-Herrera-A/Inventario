<?php

namespace cine\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class Product_Ubication extends Model
{
    protected $table = 'products_ubications';
    protected $primarykey = 'id';
    protected $fillable = ['id','stock','prod_id','ubic_id'];
}
