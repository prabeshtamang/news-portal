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
            "my_categories" => $categories,
        ]);
    }


    public function index()
    {
        $latest_article = Article::latest()->take(2)->get();
        return view('frontend.home', compact('latest_article'));
    }


    public function category($slug)
    {
        $category = Category::where("slug", $slug)->latest()->first();
        $advertises = Advertise::where("expiry_date", ">=", time())->get();
        return view('frontend.category', compact('category', 'advertises'));
    }

    public function search(Request $request)
    {
        $query = $request->input('q');
        $articles = Article::where('title', 'like', "%$query%")->latest()->get();
        $advertises = Advertise::where("expiry_date", ">=", time())->get();
        return view('frontend.search', compact('articles', 'advertises', 'query'));
    }
}
