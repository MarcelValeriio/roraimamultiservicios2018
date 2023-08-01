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
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                </div>
                            </div>

                            <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="flaticon-sketch"></i>
                                </div>
                                <div class="colorlib-text">
                                    <h3>DISEÑO DE PRE-CONSTRUCCIÓN</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
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
                                    <h3>Building &amp; Modeling</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                </div>
                            </div>

                            <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="flaticon-crane"></i>
                                </div>
                                <div class="colorlib-text">
                                    <h3>GESTION DE CONSTRUCCIÓN</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{asset('assets/images/services-1.jpg')}})"></div>
                        <div class="desc">
                            <h3>Design &amp; Build</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{asset('assets/images/services-2.jpg')}})"></div>
                        <div class="desc">
                            <h3>House Remodeling</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{asset('assets/images/services-3.jpg')}})"></div>
                        <div class="desc">
                            <h3>Construction Management</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{asset('assets/images/services-4.jpg')}})"></div>
                        <div class="desc">
                            <h3>Painting &amp; Tiling</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{asset('assets/images/services-5.jpg')}})"></div>
                        <div class="desc">
                            <h3>Kitchen Remodeling</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('layouts._partials.presupuesta')
    @endsection