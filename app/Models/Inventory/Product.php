<?php

namespace cine\Models\Inventory;

use Illuminate\Database\Eloquent\Model;
use cine\Models\Inventory\Provider;


class Product extends Model
{
    protected $table = 'products';
    protected $primarykey = 'id';
    protected $fillable = ['id','nombre','precio','estado','prov_id'];

public function provider()
{
  //un producto pertenece
  return $this->hasmany(Provider::class);
}
public function ubication()
{
  return $this->belongstomany(Ubication::class);
}
public function purchase()
{
  return $this->belongstomany(Purchase::class);
}
}
