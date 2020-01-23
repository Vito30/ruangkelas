<?php

namespace App\Http\Controllers;
use\App\User;
use Illuminate\Http\Request;
use DataTables;

class UserController extends Controller
{

    public function json(){
        return Datatables::of(User::all())->make(true);
    }

    public function index(){
        return view('list_users');
    }
}






