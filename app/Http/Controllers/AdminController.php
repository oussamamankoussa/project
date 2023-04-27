<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\carte;
use App\Models\service;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function index(){
        $N_carte=carte::select(DB::raw("count(*) as carte_count"))->get();
        $N_service=service::select(DB::raw("count(*) as service_count"))->get();
        $N_user=user::select(DB::raw("count(*) as user_count"))->where("admin",0)->get();
        $user=user::select("*")->where("admin",0)->get();
        $carte=carte::select("*")->where("status",1)->get();
        $service=service::select("*")->where("status",1)->get();
        
        return view('pagesAdmin.DashboardAdmin',["dataUser"=>$user,"dataCarte"=>$carte,"dataService"=>$service,"N_carte"=>$N_carte,"N_service"=>$N_service,"N_user"=>$N_user]);
    }

    public function destroy(Request $request ){
       
        service::where('user_id',$request->id )->delete();
        carte::where('user_id',$request->id )->delete();
        user::where('id',$request->id )->delete();
        return redirect()->route('pageAdmin');
    }
    
    public function recherche(Request $request ){
        
        
        $N_carte=carte::select(DB::raw("count(*) as carte_count"))->get();
        $N_service=service::select(DB::raw("count(*) as service_count"))->get();
        $N_user=user::select(DB::raw("count(*) as user_count"))->where("admin",0)->get();
        $carte=carte::select("*")->where("status",1)->get();
        $service=service::select("*")->where("status",1)->get();
        $user=user::select("*")->where($request->E_Reche ,$request->T_recherche)->get();
        return view('pagesAdmin.DashboardAdmin',["dataUser"=>$user,"dataCarte"=>$carte,"dataService"=>$service,"N_carte"=>$N_carte,"N_service"=>$N_service,"N_user"=>$N_user]);
        
    }
}
