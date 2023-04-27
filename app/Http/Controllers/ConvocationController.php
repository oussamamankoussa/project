<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use App\Models\carte;
class ConvocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataService=service::all();
        $dataCarte=carte::all();
        return view('pagesAdmin.convocation',["dataService"=>$dataService , "dataCarte"=>$dataCarte]);
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
      //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $data=service::all()->find($request->id);
        return  view("pagesAdmin.updateService",["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $share = service::find($request->id);
        $share->status=1;
        $share->save();
        return redirect()->route('convocation');
    }

    public function editCarte(Request $request)
    {
        $share = carte::find($request->id);
        $share->status=1;
        $share->save();
        return redirect()->route('convocation');
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

        // $share = service::find($request->id);
        // $share->titre = $request->input('titre');
        // $share->discription= $request->input('discription');
        // $share->file=$extension;
              
               $share->save();
               return redirect()->route('convocation'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        service::where('id',$request->id )->delete();
        return redirect()->route('convocation');
         
    }
    public function destroyCarte(Request $request)
    {
        carte::where('id',$request->id )->delete();
        return redirect()->route('convocation');
         
    }
}
