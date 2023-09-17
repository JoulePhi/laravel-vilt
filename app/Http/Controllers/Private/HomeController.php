<?php

namespace App\Http\Controllers\Private;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function __invoke(): Response
    {
        $categories = Category::all();
        $newProducts = Product::where('is_new', 1)->limit(4)->get();
        $recommendedProducts = Product::orderBy('price')->limit(4)->get();
        $user = Auth::user();
        
        return Inertia::render('Private/Home/Index', [
            'status' => session('status'),
            'categories' => $categories,
            'new_products' => $newProducts,
            'recommended_products' => $recommendedProducts
        ]);
    }
}
