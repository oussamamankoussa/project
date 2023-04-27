<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\service;
use App\Models\user;
use App\Models\carte;

class DataController extends Controller
{
    public function getData(){ 


      
        $N_carte=carte::select(DB::raw("count(*) as carte_count"))->get();
        $N_service=service::select(DB::raw("count(*) as service_count"))->get();
        $N_user=user::select(DB::raw("count(*) as user_count"))->where("admin",0)->get();

         $dataService=service::all()->where("status",1);

         $dataUser=user::all()->where("admin",0);
         $dataAdmin=user::select("*")->where("admin",1)->get();
         $tableProfession=service::join("users","services.user_id","=","users.id")->select("users.profession")->where("users.admin",0)->where("services.status",1)->distinct()->get();

         $tableVille=service::join("users","services.user_id","=","users.id")->select("users.ville")->where("users.admin",0)->where("services.status",1)->distinct()->get();

          return view('welcome',["N_service"=>$N_service,"N_user"=>$N_user,"N_carte"=>$N_carte,"dataService"=>$dataService,"dataUser"=>$dataUser,"tableVille"=>$tableVille ,"tableProfession"=>$tableProfession ,"dataAdmin"=>$dataAdmin]);
    }
    
    public function getProfession(Request $request){
      if($request->ville == "tout"){
        return DataController::getData();
      }else{
      $dataService=service::all()->where("status",1);

      $dataUser=user::select("id","name","profession")->where("ville",$request->ville)->where("admin",0)->get();

      $tableVille=service::join("users","services.user_id","=","users.id")->select("users.ville")->where("users.admin",0)->where("services.status",1)->distinct()->get();

      $tableProfession=service::join("users","services.user_id","=","users.id")->select("users.profession")->where("users.admin",0)->where("services.status",1)->where("ville", $request->ville)->distinct()->get();
      $dataAdmin=user::select("*")->where("admin",1)->get();
       return view('welcome',["dataService"=>$dataService,"dataUser"=>$dataUser,"tableVille"=>$tableVille ,"tableProfession"=>$tableProfession,"dataAdmin"=>$dataAdmin]);
      }
    }

//  public function getDataApi(Request $request){
//   $dataService=service::all();
//   $dataUser=user::select("id","profession")->where("ville",$request->city)->get();
//   $tableVille=user::select("ville")->distinct()->get();
//   $tableProfession=user::select("profession")->distinct()->where("ville", $request->city)->get();


 
//    return view('pro',["tableProfession"=>$tableProfession,"tableVille"=>$tableVille,"dataService"=>$dataService,"dataUser"=>$dataUser])->render();
// }

//     public  function getDataApibkp(Request $request){

//         //return $request->city;

//         /// select database
//         $tableProfession=user::select("profession")->distinct()->where("ville",$request->city)->get();
        
//        $service=service::all();


//        $html="";
//        $list="";

//        foreach($tableProfession as $e){
//         $list=$list."<br>".'<li data-filter=".filter-'.$e->profession.'">'.$e->profession.'</li>';
//        }
//  $user=user::select("id","profession")->where("ville",$request->city)->get();
//  $service=service::all();
//    foreach( $user as $us){
//      foreach($service as $e){
//         if($e->user_id == $us->id){

//             $html=$html.'<div class="col-lg-4 col-md-6 portfolio-item filter-'.$us->profession.'">'.
//                 '<img src="./imagesService/'.$e->file.'" class="img-fluid" alt="">
//                 <div class="portfolio-info">
//                 <h4>'.$e->titre.'</h4>
//                 <p>'.$e->discription.'</p>
//                   <a href="./imagesService/'.$e->file.'" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
//                   <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
//                 </div>
//             </div>';
//         }
//        }
       
  
//    }

//         return  response()->json(["list"=> $tableProfession , "html"=>$html]);




//     }
}
