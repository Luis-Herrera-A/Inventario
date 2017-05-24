<?php

namespace cine\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'documents';
    protected $primarykey = 'id';
    protected $fillable = ['id','nombre'];
    public $timestamps=true;


public function purchase()
{
  //
  return $this->belongsto(Purchase::class);
}
}
