<?php
namespace App\Http\Controllers;
use Request;
use DB;

class SearchController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 public function search(Request $request)
	{
		$query = Request::input('search');
		$articles = DB::table('articles')->where('title', 'LIKE', '%' . $query . '%')->paginate(10);
		return view('index', compact('articles', 'query'));
	 }
}