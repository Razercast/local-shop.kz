<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return "%55";
    }
    public function categories() {
        return "categories";
    }
    public function category($category=null) {
        return "category {$category}";
    }
    public function product($product=null) {
        return "product";
    }
}
