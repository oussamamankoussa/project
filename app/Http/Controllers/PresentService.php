<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use App\Models\carte;

class PresentService extends Controller
{
    public function getService(Request $request){
        $user=service::join("users","services.user_id","=","users.id")->select("users.*")->where("services.id",$request->id)->get();
        $carte=carte::select("*")->where('user_id',$user[0]->id)->where('show',1)->where('status',1)->get(); 
        $dataService=service::find($request->id);
        return view("presentService",["carte"=>$carte,"user"=>$user,"dataService"=>$dataService ,'category'=>$request->category,'nameUser'=>$request->nameUser]);
    }
   
}
