<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\ProjectRequest;

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

    public function post()
    {
        $posts = Project::all();
        //dd($posts);
        return view('works', compact('posts'));
    }

    public function post2($id)
    {
        $project = Project::where('id', $id)->first();
        //dd($project);
        return view('details', compact('project'));
    }
}
