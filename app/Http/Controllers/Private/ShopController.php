<?php

namespace App\Http\Controllers\Private;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::withCount('products')->get();
        $brands = Brand::withCount('products')->get();
        $selectedCategories = $request->categories;
        $selectedBrands = $request->brands;
        $sortBy = $request->sortBy;
        Log::debug($request->all());
        $productsQuery = Product::query();
        if(!empty($sortBy)){
            if($sortBy == 'price-low-to-high')
            {
                $productsQuery->orderBy('price', "ASC");
            }else{
                $productsQuery->orderBy('price', "DESC");
            }
        }
        if (!empty($selectedCategories)) {
            $productsQuery->whereIn('category_id', $selectedCategories);
        }
        if (!empty($selectedBrands)) {
            $productsQuery->whereIn('brand_id', $selectedBrands);
        }
        $products = $productsQuery->paginate(9);
        if (!empty($selectedCategories)) {
            $products->appends('categories', $selectedCategories);
        }
        if (!empty($selectedBrands)) {
            $products->appends('brands', $selectedBrands);
        }
        if (!empty($sortBy)) {
            $products->appends('sortBy', $sortBy);
        }
        Log::debug($selectedCategories);
        return Inertia::render('Private/Shop/Index', [
            'categories' => $categories,
            'brands' => $brands,
            'products' => $products,
        ]);
    }


    public function fetchProducts(Request $request)
    {
        $products = Product::orderBy('id')->paginate(6);
        return response()->json($products);
    }

    public function filterProducts(Request $request)
    {
        $query = Product::query();
        $categories = $request->categories;
        if ($request->has('categories')) {
            $query->whereIn('category_id', $categories);
        }
        $brands = $request->brands;
        if ($request->has('brands')) {
            $query->whereIn('brand_id', $brands);
        }
        $filteredProducts = $query->get();
        return response()->json($filteredProducts);
    }
}
