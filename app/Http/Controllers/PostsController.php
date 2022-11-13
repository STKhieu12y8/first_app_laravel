<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
        //get all data post
        $posts = DB::select('select * from posts;');

        //get data condition sql
        // $posts = DB::table('posts')
        //         ->whereNotNull('body');

        dd($posts);
    }
}
