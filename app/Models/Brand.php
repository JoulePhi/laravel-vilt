<?php

namespace App\Models;

use App\Traits\Filterable;
// use App\Traits\Sluggable;
// use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;
    use Filterable;
    // use Sluggable;
    // use Translatable;

    protected $fillable = [
        'name',
        'image'
    ];

    protected $casts = [
        //
    ];

    protected $translatable = [
        //
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
