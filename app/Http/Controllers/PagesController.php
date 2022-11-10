<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        return view('layout.about');
    }

    public function trangchu() {
        return view('layout.trangchu');
    }
}
