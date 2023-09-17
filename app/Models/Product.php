<?php

namespace App\Models;

use App\Traits\Filterable;
// use App\Traits\Sluggable;
// use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use Filterable;
    // use Sluggable;
    // use Translatable;

    protected  $fillable = [
        'name',
        'price',
        'quantity',
        'category_id',
        'brand_id',
        'image',
        'description',
        'is_new'
    ];

    protected $casts = [
        'is_new' => 'boolean',
    ];

    protected $translatable = [
        //
    ];


    /**
     * Get the user associated with the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function brand(): HasOne
    {
        return $this->hasOne(Brand::class, 'id', 'brand_id');
    }
}
