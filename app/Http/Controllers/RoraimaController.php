<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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

    public function contacto(Request $request): RedirectResponse
    {
        Contact::create($request->all());
        return redirect()->route('roraima.contact')->with('success', 'Presupuesto Enviado');
    }
}
