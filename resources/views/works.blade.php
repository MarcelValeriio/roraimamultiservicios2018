@extends('layouts.app')

@section('content')
<div id="colorlib-main">
    <div class="colorlib-work">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">Proyectos</span>
                    <h2 class="colorlib-heading">Nuestros Trabajos</h2>
                </div>
            </div>
            <div class="row row-bottom-padded-md">
            @forelse ($projects as $project)
            
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url({{ asset('assets/images/'.$project->images[0]->name)}})">
                        <div class="desc">
                            <div class="con">
                                <h3><a href="{{route('roraima.details', $project->id)}}"> {{$project->name}}</a></h3>
                                <span>{{$project->description}}</span>
                                <p class="icon">
                                    <span><a href="#"><i class="icon-share3"></i></a></span>
                                    <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                    <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                   
                                </p>
                            </div>
                        </div>
                    </div>
                </div>  
          
                @empty
                <div class="animate-box" data-animate-effect="fadeInLeft">
                <h3>No Hay Proyectos.</h3>
                </div>  
                @endforelse            
            </div>  


            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                    <ul class="pagination">
                        <li class="disabled"><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('layouts._partials.presupuesta')
</div>
</div>
@endsection