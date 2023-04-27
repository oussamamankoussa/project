<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Update extends Controller
{
    public function update(Request $request){
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $fileName = time().'_'.$userId.'.'.$extension;
        $request->file->move(public_path()."/imagesService/",$extension);

        $share = service::find($id);
         $share->titre = $request->input('titre');
         $share->discription= $request->input('discription');
        $share->file= $extension;
              
              $share->save();
              return redirect()->route('serevice');
    
    }
}
