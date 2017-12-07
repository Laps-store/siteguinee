<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\contactRequest;
use Mail;

class contactController extends Controller{
    
    public function getForm() {
        return view('contact.contact');
    }
    
    public function postForm(contactRequest $request) {
        
           Mail::send('contact.email_contact', $request->all(), function($message){
            $message->to('syllaps@laps-store.com')->subject('contact'); 
          }); 
          return view('contact.confirm');
        }
    
}
