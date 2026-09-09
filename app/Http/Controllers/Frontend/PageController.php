<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function __construct()
    {
        $categories = Category::where('status', true)->get();
        View::share([
            "categories" => $categories
        ]);
    }
    public function index()
    {
        return view('frontend.home');
    }
}
