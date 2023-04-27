<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth; 
use App\Models\service;
use App\Models\carte;

class PageDashboardController extends Controller
{
    public function getDashboard(){
        $user=Auth::user();
        $countServiceAccepte=service::select(DB::raw('count(*) as cont'))->where("user_id",$user->id)->where("status",1)->get();
        $countServiceAtande=service::select(DB::raw('count(*) as cont'))->where("user_id",$user->id)->where("status",0)->get();
        $countCarteAccpte=carte::select(DB::raw('count(*) as cont'))->where("user_id",$user->id)->where("status",1)->get();
        $countCarteAtande=carte::select(DB::raw('count(*) as cont'))->where("user_id",$user->id)->where("status",0)->get();

        return view('pageMeun.pageDashbord',["countServiceAccepte"=>$countServiceAccepte,'countServiceAtande'=>$countServiceAtande,'countCarteAccpte'=>$countCarteAccpte,'countCarteAtande'=>$countCarteAtande]);
    }
}
