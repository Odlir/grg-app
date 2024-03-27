<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name','code','cost', 'unit_of_measure_id',
        'type', 'image', 'minimum_stock', 'category_id'];

    protected $dates = ['deleted_at'];

    protected $appends = ['imageURL', 'warehouses_detail'];

    public function unitOfMeasure(): BelongsTo
    {
        return $this->belongsTo(unitOfMeasure::class);
    }

    public function warehouses(): BelongsToMany
    {
        return $this->belongsToMany(warehouse::class, 'product_warehouse', 'product_id', 'warehouse_id')->withPivot(["stock"]);
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

    protected function getWarehousesDetailAttribute() {
        $warehousesDetail = [];

        if($this->warehouses) {
            foreach ($this->warehouses as $warehouse) {
                $warehousesDetail[] = [
                    'id' => $warehouse->pivot->id,
                    'warehouse_id' => $warehouse->id,
                    'initial_stock' => $warehouse->pivot->stock
                ];
            }
        }

        return $warehousesDetail;
    }
}
