@extends('layouts.app')

@section('content')
<div id="colorlib-main">
    <div class="colorlib-services">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">Servicios</span>
                    <h2 class="colorlib-heading">Estos son algunos de nuestros conocimientos</h2>
                </div>
            </div>
            <div class="row row-bottom-padded-md">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="flaticon-worker"></i>
                                </div>
                                <div class="colorlib-text">
                                    <h3>CONSTRUCCIÓN GENERAL</h3>
                                    <p>Ofrecemos una amplia gama de servicios de construcción que cubren todas las etapas de los proyectos, desde el inicio hasta la finalización. </p>
                                </div>
                            </div>

                            <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="flaticon-sketch"></i>
                                </div>
                                <div class="colorlib-text">
                                    <h3>DISEÑO DE PRE-CONSTRUCCIÓN</h3>
                                    <p>Antes de comenzar cualquier proyecto, nos enfocamos en la planificación y el diseño detallado para asegurar su éxito. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="flaticon-engineering"></i>
                                </div>
                                <div class="colorlib-text">
                                    <h3>CONSTRUCCIÓN &amp; DISEÑO</h3>
                                    <p>Nos destacamos por integrar servicios de construcción y diseño, ofreciendo soluciones completas y personalizadas para cada proyecto. </p>
                                </div>
                            </div>

                            <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="flaticon-crane"></i>
                                </div>
                                <div class="colorlib-text">
                                    <h3>GESTION DE CONSTRUCCIÓN</h3>
                                    <p>Nuestro equipo experto se encarga de coordinar y supervisar todos los aspectos de la construcción para cumplir con plazos y estándares de calidad. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a rel=”nofollow” class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{asset('assets/images/services-1.jpg')}})"></div>
                        <div class="desc">
                            <h3>COSNTRUCCIÓN &amp; DISEÑO</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a rel=”nofollow” class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{asset('assets/images/services-2.jpg')}})"></div>
                        <div class="desc">
                            <h3>REMODELACIÓN DE HOGARES</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a rel=”nofollow” class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{asset('assets/images/services-3.jpg')}})"></div>
                        <div class="desc">
                            <h3>GESTION DE CONSTRUCCIÓN</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a rel=”nofollow” class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{asset('assets/images/services-4.jpg')}})"></div>
                        <div class="desc">
                            <h3>Pintura &amp; Embaldosados</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a rel=”nofollow” class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{asset('assets/images/services-5.jpg')}})"></div>
                        <div class="desc">
                            <h3>Remodelación de Cocinas</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('layouts._partials.presupuesta')
    @endsection