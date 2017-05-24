<?php

namespace cine\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchases';
    protected $primarykey = 'id';
    protected $fillable = ['id','num_doc','total','doc_id'];
}
public function document()
{
  return $this->hasone(Document::class);
}
public function product()
{
  return $this->belongstomany(Product::class);
}
