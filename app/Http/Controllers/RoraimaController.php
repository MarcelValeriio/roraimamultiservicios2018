<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class RoraimaController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function works()
    {
        return view('works');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function services()
    {
        return view('services');
    }




    public function contacto(ContactRequest $request)
    {
        Contact::create($request->all());
        return redirect()->route('roraima.contact')->with('success', 'Presupuesto Enviado');
    }
}
