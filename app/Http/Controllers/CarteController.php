<?php

namespace App\Http\Controllers;
use Dompdf\Dompdf;
use PDF;
use App\Http\Controllers\DownlaodCard ;
use App\Models\carte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CarteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataUser= auth()->user();
        $userId = auth()->user()->id;
        $list=null;
        foreach(carte::all() as $s){
            if($userId === $s->user_id){
                $list[]=(object) $s;
            }
        }
        return view('pageMeun.pageCaretVisite',["data"=>$list,"dataUser"=>$dataUser]);
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
            $carte= new carte();
            $carte->user_id=$userId;
            $carte->N_Modele=$request->input('number_M');
            $carte->styleCarteA=$request->input('styleA');
            $carte->styleCarteB=$request->input('styleB');
            $carte->titre=$request->input('T_h3');
            $carte->tail_titre=$request->input('h3');
            $carte->tail_info=$request->input('p');
            $carte->file=$extension;
            $carte->save();
            return redirect()->route('CarteVisite');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(carte $carte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(carte $carte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        
       
            $user=Auth::user();
                    
            DB::table('cartes')->where('user_id',$user->id)->update([
                "show"=> 0
            ]);


            DB::table('cartes')->where('user_id',$user->id)->where('id',$request->id)->update([
                "show"=> $request->show
            ]);



               return redirect()->route('CarteVisite');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        carte::where('id',$request->id )->delete();
        return redirect()->route('CarteVisite');
    }



}
