@extends('layouts.app')

@section('content')
@inject('general', 'App\Http\Controllers\RoraimaController')

<div id="colorlib-main">
    <div class="colorlib-work">
        <div class="colorlib-narrow-content">

                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                        <span class="heading-meta">Proyecto</span>
                        <h2 class="colorlib-heading">{{$project->title}}</h2>
                    </div>
                </div>
                <!-- Comienza Proyecto -->
                <div class="row row-bottom-padded-md">
                
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="project" style="background-image: url({{ asset('assets/images/'.$project->images) }})">
                        </div>
                    </div> 
                    <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                        <div class="project" style="background-image: url({{ asset('assets/images/'.$project->images) }})">
                        </div>
                    </div> 
                    <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                        <div class="project" style="background-image: url({{ asset('assets/images/'.$project->images) }})">
                        </div>
                    </div> 
                    <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                        <div class="project" style="background-image: url({{ asset('assets/images/'.$project->images) }})">
                        </div>
                    </div> 
                    <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                        <div class="project" style="background-image: url({{ asset('assets/images/'.$project->images) }})">
                        </div>
                    </div>   
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="project" style="background-image: url({{ asset('assets/images/'.$project->images) }})">
                        </div>
                    </div> 
                </div>
                <!-- Final Proyecto -->
                <div class="animate-box" data-animate-effect="fadeInLeft">

                <p>{{$project->description}}</p>
                </div>           
        </div>
        @include('layouts._partials.presupuesta')
    </div>
</div>
@endsection