<?php

namespace App\Http\Controllers;
use App\Entities\Card;
use Illuminate\Http\Request;
use App\Entities\Article;

class CardController extends Controller
{   
    public function index()
    {
       $objCard=new Card();
       $cards=$objCard->get();
       return view('home', ['cards' => $objcards]);


    }
    public function addArticleinCard(Request $request)
    {
        
    		$objCard=new Card();
    		$objCard=$objCard->create(['articleid'=>$request->input('articleid'),'userid'=>$request->input('userid'),'price'=>$request->input('price'),'title'=>$request->input('title')]);

            $objArticle = new Article();
            $articles = $objArticle->orderBy('id', 'desc')->paginate(10);
            return view('index', ['articles' => $articles]);
    		
    }
}