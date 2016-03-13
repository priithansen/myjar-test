<?php

namespace App\Domain\Products;

use Illuminate\Database\Eloquent\Model;

/**
 * Class represents different loan products.
 *
 * Class Product
 * @package App\Domain\Products
 */
class Product extends Model
{
    /**
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'interest_per_day_pct' => 'float',
        'days_min' => 'integer',
        'days_max' => 'integer',
    ];
}
