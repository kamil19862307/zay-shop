<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentForm;
use App\Models\Products;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $products = Products::orderBy('id', 'DESC')->paginate(9);

        return view('catalog.index', [
            'products' => $products,
        ]);
    }

    public function show($id)
    {
        $product = Products::findOrFail($id);

        return view('single', [
            'product' => $product,
        ]);
    }

    public function comment($id, CommentForm $request)
    {

    }
}
