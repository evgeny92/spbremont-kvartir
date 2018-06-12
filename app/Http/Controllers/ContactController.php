<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactValidation;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {

   public function getContact(){
      return view('pages.contact');
   }

   public function postContact(ContactValidation $request){
      $result = false;

      if($request->ajax() && !empty($request->all())){
         $contact = $request;
         Mail::to('spbremont-kvartir@mail.ru')->send(new Contact($contact));
         $result = true;
      }
      return response()->json(['result' => $result]);
   }
}
