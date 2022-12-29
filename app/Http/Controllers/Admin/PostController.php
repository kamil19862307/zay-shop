<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostFormRequest;
use App\Models\Products;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $products = Products::orderBy('id', 'DESC')->paginate(10);

        return view('admin.posts.index', [
            'products' => $products,
        ]);
    }


    public function create()
    {
        return view('admin.posts.create', []);
    }


    public function store(PostFormRequest $request)
    {
//        $product = Products::create($request->validated());

        $data = $request->validated();

        if ($request->has('thumbnail')){
            $thumbnail = str_replace('public/posts', '', $request->file('thumbnail')->store('public/posts'));
            $data['thumbnail'] = $thumbnail;
        }

        Products::create($data);
//        $product->update($data);

        return redirect(route('admin.posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $product = Products::findOrFail($id);

        return view('admin.posts.edit', [
            'product' => $product,
        ]);
    }


    public function update(PostFormRequest $request, $id)
    {
        $product = Products::findOrFail($id);

        $data = $request->validated();

        if ($request->has('thumbnail')){
            $thumbnail = str_replace('public/posts', '', $request->file('thumbnail')->store('public/posts'));
            $data['thumbnail'] = $thumbnail;
        }

        $product->update($data);

        return redirect(route('admin.posts.index'));
    }


    public function destroy($id)
    {
        Products::destroy($id);
        return redirect(route('admin.posts.index'));
    }
}
