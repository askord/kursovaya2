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
    		$objCard=$objCard->create(['articleid'=>$request->input('articleid'),'userid'=>$request->input('userid')]);
            return view('/home');
    		//dd($request->all());
    		//if($objCategory){
    		//	return back()->with('success','Категория успешно добавлена');
    		//}
    		//return redirect()->route('');
    }
}