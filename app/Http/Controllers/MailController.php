<?php

namespace App\Http\Controllers;
use App\Newsletter;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $news = Newsletter::all();

        return view('newsletter.viewnews', compact('news'));
    }
        public function store(Request $request){

             $letter = new Newsletter();
             
             
             $name = $request->input('name');
             
             $email =  $request->input('email');
             
             $letter->name = $name;
             $letter->email= $email;
         $letter->save();
            Mail::to($email)->send(new ContactMail($name, $email));
    
            return redirect()->back();
        }
    }

   
