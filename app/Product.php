<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=[
        'quantity','serial','manufacture_id','descrption_id','location_id','category_id','brand_id','status'
    ];
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function manufacture()
    {
        return $this->belongsTo(Manufacture::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function manufacture()
    {
        return $this->belongsTo(Manufacture::class);
    }
    public function description()
    {
        return $this->belongsTo(Descption::class);
    }
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
