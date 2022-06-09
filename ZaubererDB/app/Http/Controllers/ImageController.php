<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(){
        
        $data = new Media();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
        }
        $data->save();
    }
}
