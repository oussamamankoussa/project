<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;






class ProfileAdminController extends Controller
{
    public function index(){
        $user=Auth::user();
        return view("pagesAdmin.profileAdmin",["user"=>$user]);
    }
}
