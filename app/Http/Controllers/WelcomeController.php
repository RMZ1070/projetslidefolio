<?php

namespace App\Http\Controllers;
use App\Imgbanniere;
use App\About;
use App\Service;
use App\Contact;
use App\Welcome;
use App\Work;
use App\Diaporama;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $imgbanniere = Imgbanniere::first();
        $about = About::first();
        $services = Service::all();
        $contact = Contact::first();
        $works = Work::paginate(12);
        $diaporamas = Diaporama::all();
        return view('welcome',compact('imgbanniere','about','services','contact','works','diaporamas'));
    }

}
