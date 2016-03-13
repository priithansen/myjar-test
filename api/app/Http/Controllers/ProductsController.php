<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Domain\Products\Product;

class ProductsController extends Controller
{
    /**
     * Get list of all Products.
     *
     * @return string
     */
    public function getAllProducts()
    {
        $products = Product::get();

        return response()->json(['data' => $products], 200);
    }

    /**
     * Get Product by Id.
     *
     * @param $product_id
     * @return string
     */
    public function getProductById($product_id)
    {
        $product = Product::find($product_id);

        if ($product) {
            return response()->json(['data' => $product], 200);
        }
        else {
            return response()->json(['error' => 'Product not found'], 404);
        }
    }
}
