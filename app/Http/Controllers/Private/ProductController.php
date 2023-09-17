<?php

namespace App\Http\Controllers\Private;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::with(['category', 'brand'])->find($id);
        $user = Auth::user();
        return Inertia::render('Private/Product/Show', [
            'product' => $product
        ]);
    }
}
