<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\imagesRequest;
use App\Manager\imagesManager;

class photoController extends Controller
{
    public function getForm() {
        return view('images.photo');
    }
    
    public function postForm(imagesRequest $request, imagesManager $imagesmanager) {
       
        $image=$request->file('image');
          if($imagesmanager->save($image)){
           return view('images.photo_ok'); 
        }
        
        $error='Desolé mais votre image ne peut pas être envoyée !';
        
        return redirect('images.photo')->with('error',$error);
    }
}
