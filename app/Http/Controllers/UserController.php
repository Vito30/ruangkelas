<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Kelas;
use DataTables;

class UserController extends Controller
{

    public function json(){
        return Datatables::of(Kelas::all())->make(true);
    }

    public function index(){
        return view('list_users');
    }
}






