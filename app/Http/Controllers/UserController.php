<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('user');
    }

    public function index()
    {
        Session::set('active_menu', 'home');
        return view('user/home');
    }

    public function getFood()
    {
        Session::set('active_menu', 'food');
        return view('user/food');
    }
}
