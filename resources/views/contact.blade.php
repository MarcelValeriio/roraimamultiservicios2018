@extends('layouts.app')

@section('content')

<div id="colorlib-main">

    <div class="colorlib-contact">
        <div class="colorlib-narrow-content">
            <div class="row">

                
                <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                    
                    <span class="heading-meta">Información</span>
                    <h2 class="colorlib-heading">Contactanos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                        <div class="colorlib-icon">
                            <i class="icon-globe-outline"></i>
                        </div>
                        <div class="colorlib-text">
                            <p><a href="#">info@domain.com</a></p>
                        </div>
                    </div>

                    <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                        <div class="colorlib-icon">
                            <i class="icon-map"></i>
                        </div>
                        <div class="colorlib-text">
                            <p>Caracas, Venezuela.</p>
                        </div>
                    </div>

                    <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                        <div class="colorlib-icon">
                            <i class="icon-phone"></i>
                        </div>
                        <div class="colorlib-text">
                            <p><a href="tel:'+584141387830'">+584141387830</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-md-push-1">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
                            <form method="POST" action="{{route('contacto')}}" >
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre" name="name">
                                    @error('name')
                                    <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Correo" name="email">
                                    @error('email')
                                    <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Asunto" name="asunto">
                                    @error('asunto')
                                    <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Telefono" name="phone">
                                    @error('phone')
                                    <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <textarea id="message" cols="30" rows="7" class="form-control" placeholder="Mensaje" name="mensaje"></textarea>
                                    @error('mensaje')
                                    <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-send-message" value="Enviar Presupuesto">
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">@include('components.messages')</div>
    </div>

    <div id="map"></div>	
    @include('layouts._partials.presupuesta')
</div>
</div>

@endsection