<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class SereviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = auth()->user()->id;
        $list=null;
        foreach(service::all() as $s){
            if($userId === $s->user_id){
                $list[]=(object) $s;
            }
        }
        
         return view('pageMeun.pageSerevice',['data'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = auth()->user()->id;
        if($request->hasFile('file')){
            $file = $request->file('file');
            $extension = $file->getClientOriginalName();

            $fileName = time().'_'.$userId.'.'.$extension;
            $request->file->move(public_path()."/imagesService/",$extension);
            $service= new service();
            $service->user_id=$userId;
            $service->titre=$request->input('titre');
            $service->discription=$request->input('discription');
            $service->file=$extension;
            $service->status=0;
            $service->save();
            return redirect()->route('serevice');
        }
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $userId=auth()->user()->id;
        
    $data=service::where("user_id",$userId)->where("id",$request->id)->get();
   
    if(count($data) === 0){

        return abort(404);
    
    }else{
        return  view("pageMeun.pageUpdateService",["data"=>$data]);
    }
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
   
    {
      
        $userId=auth()->user()->id;

        $share = service::find($request->id);

        $file = $request->file("file");

        if($request->hasFile('file')){
            $extension = $file->getClientOriginalName();
            $fileName = time().'_'.$userId.'.'.$extension;
            $request->file->move(public_path()."/imagesService/",$extension);
            $share->file=$extension;
        }else{
            $share->titre = $request->input('titre');
        $share->discription= $request->input('discription');
        }
              $share->status=0;
               $share->save();
               return redirect()->route('serevice'); 
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        service::where('id',$request->id )->delete();
        return redirect()->route('serevice');
         
    }
}
