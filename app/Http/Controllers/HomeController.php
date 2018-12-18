<?php

namespace App\Http\Controllers;
use App\Entities\Article;
use Illuminate\Http\Request;
use App\Entities\Card;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objArticle = new Article();
        $objCard=new Card();
        $cards=$objCard->orderBy('id', 'desc')->paginate(10);
        $articles = $objArticle->orderBy('id', 'desc')->paginate(10);
        return view('home', ['cards' => $cards],['articles' => $articles]);

    }
    
}
