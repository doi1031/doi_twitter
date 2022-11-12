<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;

class PostController extends Controller
{
    public function index()
    {
        $posts = PostModel::query()
            ->orderBy('id', 'desc')
            ->get();

        return view('home', compact('posts'));
    }

        public function tweet()
    {
        $params = [
            'content' => request()->input('content')
        ];

        Postmodel::create($params);

        return redirect('/home');
    }
}
