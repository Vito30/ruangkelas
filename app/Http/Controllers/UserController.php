<?php

namespace App\Http\Controllers;
use App\User;
use DataTables;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function json(){
        return Datatables::of(User::all())->make(true);
    }

    public function index(){
        return view('list_users');
    }
}






