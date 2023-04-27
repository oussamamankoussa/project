<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
class UpdateSereviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
         $data=service::all()->find($id);
         return  view("pageMeun.updateService",["data"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $da=service::all()->find();
        // return  view("pageMeun.pageUpdateService",["data"=>$da]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //return "rrrrrrrrrrrr";
         $data=service::all()->find($request->id);
         return  view("pageMeun.pageUpdateService",["data"=>$data]);
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
