<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = []; 

    public function subcategory()
    {
        return $this->hasmany(Subcategory::class);
    }

    public function brand()
    {
        return $this->hasmany(Brand::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
