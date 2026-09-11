<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Advertise;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function __construct()
    {
        $categories = Category::where('status', true)->get();
        View::share([
            "categories" => $categories,
        ]);
    }



    public function index()
    {
        $latest_article = Article::latest()->take(2)->get();
        return view('frontend.home', compact('latest_article'));
    }


    public function category($slug)
    {
        $category=Category::where("slug",$slug)->latest()->first();
        $advertises = Advertise::all();
        return view('frontend.category', compact('category', 'advertises'));
    }
}
