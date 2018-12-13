<?php
namespace App\Http\Controllers;
use App\Entities\Article;
class ArticlesController2 extends Controller
{
  public function index()
  {
      $objArticle = new Article();
      $articles = $objArticle->orderBy('id', 'desc')->paginate(10);
      return view('index', ['articles' => $articles]);
  }
  public function showArticle(string $title, $slug)
  {
      $objArticle = Article::find($title);
      if(!$objArticle) {
          return abort(404);
      }
      //$comments = $objArticle->comments()->where('status', 1)->get();
      return view('show_article', ['article' => $objArticle]);
  }
  }