<?php
namespace App\Http\Controllers;
use App\Entities\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class UsersController extends Controller
{
	 public function __construct()
    {
      $this->middleware('auth:admin');
    }

    public function index()
    {
        $users = (new User())->get();
        $params = [
            'users' => $users
        ];
        return view('admin.users.index', $params);
    }
}