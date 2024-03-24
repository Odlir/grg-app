<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name','code','cost', 'unit_of_measure_id',
        'warehouse_id','type', 'image', 'minimum_stock','initial_stock','category_id'];

    protected $dates = ['deleted_at'];

    protected $appends = ['imageURL'];

    public function unitOfMeasure(): BelongsTo
    {
        return $this->belongsTo(unitOfMeasure::class);
    }

    public function warehouse(): BelongsTo
    {
        return $this->belongsTo(warehouse::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function brands()
    {
        return $this->belongsToMany(ProductBrand::class, 'product_brand_detail', 'product_id', 'product_brand_id');
    }

    protected function getImageURLAttribute() {
        if($this->image) {
            return asset(\Storage::url('products/'.$this->image));
        }

        return '';
    }
}
