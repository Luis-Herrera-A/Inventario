<?php

namespace cine\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class Ubication extends Model
{
    protected $table = 'ubications';
    protected $primarykey = 'id';
    protected $fillable = ['id','nombre'];
    public $timestamps=true;


public function product()
{
  return $this->belongsToMany(Product::class);
}
}
