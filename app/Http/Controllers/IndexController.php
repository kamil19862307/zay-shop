<?php

namespace App\Http\Controllers;

use App\Models\Featured;
use App\Models\Post;
use App\Models\Products;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $featureds = Featured::orderBy('stars', 'DESC')->limit(3)->get();
//        $posts = Post::orderBy('created_at', 'DESC')->limit(3)->get();

        return view('index', [
            'featureds' => $featureds,
        ]);
    }

//    public function login()
//    {
//        return view('login');
//    }

    public function about()
    {
        return view('about');
    }


}
