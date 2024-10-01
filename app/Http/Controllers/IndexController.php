<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends Controller
{
    public function index() {
        $posts = Post::orderBy("created_at", "DESC")->limit(8)->get();

        return view('home', ["posts" => $posts]);
    }
}
