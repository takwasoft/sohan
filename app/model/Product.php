<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
protected $fillable = [
'id','name','code','price','discount','description','duration','status',
'sub_category_id','brand_id'
];

public function SubCategory(){
    return $this->belongsTo(SubCategory::class);
}
public function Brand(){
    return $this->belongsTo(Brand::class);
}             
}
