<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index() {
        return view("index");
    }
    public function about() {
        return view("about");
    }
    public function cart() {
        return view("cart");
    }
    public function auth() {
        return view("auth");
    }
}
