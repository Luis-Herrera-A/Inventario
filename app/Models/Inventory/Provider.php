<?php

namespace cine\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'providers';
    protected $primarykey = 'id';
    protected $fillable = ['id','nombre','rut','telefono','direccion','email','estado'];
    public $timestamps =true;

public function product()
{
  return $this->belongsto(Product::class);
}
}
