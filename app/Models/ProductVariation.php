<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model
{

    protected $fillable = [
        'product_id',
        'name',
        'price',
        'sku',
        'stock',
        'image',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function attributeValues()
    {
        return $this->belongsToMany(
            AttributeValue::class,
            'variant_attribute_values',
            'product_variation_id',
            'attribute_value_id'
        );
    }
}
