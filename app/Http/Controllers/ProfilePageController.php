<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class ProfilePageController extends Controller
{
    public function index(){
        $user=Auth::user();
        // return $user;
        return view("pageMeun.pageProfile",["user"=>$user]);

    }
}
