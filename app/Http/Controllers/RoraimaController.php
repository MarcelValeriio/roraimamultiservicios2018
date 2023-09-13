<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\ProjectRequest;
use App\Models\Image;

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


    public function details()
    {
        return view('details');
    }

    public function contacto(ContactRequest $request)
    {
        Contact::create($request->all());
        return redirect()->route('roraima.contact')->with('success', 'Presupuesto enviado satisfactoriamente, le estaremos contactando en breve.');
    }

    public function projects()
    {
        $projects = Project::all();
        $images = Image::with('project')->get();


        //dd($images);
        return view('works', compact('projects'));
    }

    public function project($id)
    {

        $project = Project::where('id', $id)->first();
        return view('details', compact('project'));
    }
}
