@extends('layouts.app')

@section('content')

<div id="colorlib-main">
    <aside id="colorlib-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
               <li style="background-image: url(assets/images/img_bg_1.jpg);">
                   <div class="overlay"></div>
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                               <div class="slider-text-inner">
                                   <div class="desc">
                                       <h1>Servicio 1</h1>
                                       <h2>Llamada a la accion -> <a href="https://colorlib.com/" target="_blank">Pagina Aqui</a></h2>
                                        <p><a class="btn btn-primary btn-learn">View Project <i class="icon-arrow-right3"></i></a></p>
                                    </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </li>
               <li style="background-image: url(assets/images/img_bg_2.jpg);">
                   <div class="overlay"></div>
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                               <div class="slider-text-inner">
                                   <div class="desc">
                                       <h1>Servicio 2</h1>
                                        <h2>Llamada a la accion -><a href="https://colorlib.com/" target="_blank">Pagina Aqui</a></h2>
                                        <p><a class="btn btn-primary btn-learn">View Project <i class="icon-arrow-right3"></i></a></p>
                                    </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </li>
               <li style="background-image: url(assets/images/img_bg_3.jpg);">
                   <div class="overlay"></div>
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                               <div class="slider-text-inner">
                                   <div class="desc">
                                       <h1>Servicio 3</h1>
                                        <h2>Llamada a la accion -><a href="https://colorlib.com/" target="_blank">Pagina Aqui</a></h2>
                                        <p><a class="btn btn-primary btn-learn">View Project <i class="icon-arrow-right3"></i></a></p>
                                    </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </li>
              </ul>
          </div>
    </aside>

    <div class="colorlib-about">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(assets/images/img_bg_2.jpg);">
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="about-desc">
                        <span class="heading-meta">Bienvenidos</span>
                        <h2 class="colorlib-heading">¿Quienes Somos?</h2>
                        <p>Bienvenidos a Roraima Multiservicios 2018, tu aliado confiable en el mundo de la construcción y servicios integrales. Nos enorgullecemos de ser una empresa líder en el sector, comprometida con la excelencia y la satisfacción del cliente desde nuestro inicio en 2018.</p>
						<p>distinguidos por nuestra excelencia, innovación y compromiso social. Buscamos ser una empresa que inspire confianza, atraiga y retenga talento, y sea admirada por la calidad de nuestros proyectos y servicios.</p>
                    </div>
                    <div class="row padding">
                        <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                            <a href="#" class="steps active">
                                <p class="icon"><span><i class="icon-check"></i></span></p>
                                <h3>Trabajamos <br>Con Amor</h3>
                            </a>
                        </div>
                        <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                            <a href="#" class="steps">
                                <p class="icon"><span><i class="icon-check"></i></span></p>
                                <h3>Honestos y <br>Confiables</h3>
                            </a>
                        </div>
                        <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                            <a href="#" class="steps">
                                <p class="icon"><span><i class="icon-check"></i></span></p>
                                <h3>Siempre <br>Mejorando</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="colorlib-services">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">¿Que hacemos?</span>
                    <h2 class="colorlib-heading">Aqui algunas de nuestras especialidades.</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="flaticon-worker"></i>
                                </div>
                                <div class="colorlib-text">
                                    <h3>Construcción General</h3>
                                    <p>Ofrecemos una amplia gama de servicios de construcción que cubren todas las etapas de los proyectos, desde el inicio hasta la finalización. </p>
                                </div>
                            </div>

                            <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="flaticon-sketch"></i>
                                </div>
                                <div class="colorlib-text">
                                    <h3>Diseño de Pre-Construcción</h3>
                                    <p>Antes de comenzar cualquier proyecto, nos enfocamos en la planificación y el diseño detallado para asegurar su éxito. </p>
                                </div>
                            </div>

                            <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="flaticon-engineering"></i>
                                </div>
                                <div class="colorlib-text">
                                    <h3>Construcción &amp; Diseño</h3>
                                    <p> Nos destacamos por integrar servicios de construcción y diseño, ofreciendo soluciones completas y personalizadas para cada proyecto. </p>
                                </div>
                            </div>

                            <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="flaticon-crane"></i>
                                </div>
                                <div class="colorlib-text">
                                    <h3>Gestion de Construcción</h3>
                                    <p>Nuestro equipo experto se encarga de coordinar y supervisar todos los aspectos de la construcción para cumplir con plazos y estándares de calidad. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                <div class="services-img" style="background-image: url(assets/images/services-1.jpg)"></div>
                                <div class="desc">
                                    <h3>Cosntrucción &amp; Diseño</h3>
                                </div>
                            </a>
                            <a href="" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                <div class="services-img" style="background-image: url(assets/images/services-2.jpg)"></div>
                                <div class="desc">
                                    <h3>Remodelación de Hogares</h3>
                                </div>
                            </a>
                            <a href="" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                <div class="services-img" style="background-image: url(assets/images/services-3.jpg)"></div>
                                <div class="desc">
                                    <h3>Gestion de Construcción</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 move-bottom">
                            <a href="" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                <div class="services-img" style="background-image: url(assets/images/services-4.jpg)"></div>
                                <div class="desc">
                                    <h3>Pintura &amp; Embaldosados</h3>
                                </div>
                            </a>
                            <a href="" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                <div class="services-img" style="background-image: url(assets/images/services-5.jpg)"></div>
                                <div class="desc">
                                    <h3>Remodelación de Cocinas</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="colorlib-counter" class="colorlib-counters" style="background-image: url(assets/images/cover_bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="colorlib-narrow-content">
            <div class="row">
            </div>
            <div class="row">
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-skyline"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="25" data-speed="4500" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label">Proyectos</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-engineer"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="20" data-speed="4500" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label">Empleados</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-architect-with-helmet"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="2018" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label">Desde 2018</span>
                </div>
            </div>
        </div>
    </div>
    @include('layouts._partials.presupuesta')
</div>
</div>

@endsection