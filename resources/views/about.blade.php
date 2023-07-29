@extends('layouts.app')

@section('content')

<div id="colorlib-main">

    <div class="colorlib-about">
        <div class="colorlib-narrow-content">
            <div class="row row-bottom-padded-md">
                <div class="col-md-6">
                    <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url({{asset('assets/images/img_bg_2.jpg')}});">
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="about-desc">
                        <span class="heading-meta">Bienvenidos</span>
                        <h2 class="colorlib-heading">¿Quienes Somos?</h2>
                        <p>Bienvenidos a Roraima Multiservicios 2018, tu aliado confiable en el mundo de la construcción y servicios integrales. Nos enorgullecemos de ser una empresa líder en el sector, comprometida con la excelencia y la satisfacción del cliente desde nuestro inicio en 2018.</p>
                        <p>Estamos listos para ser tu socio confiable en cada etapa de tu proyecto. Si deseas más información sobre nuestros servicios o tienes alguna consulta, no dudes en contactarnos. Nuestro equipo estará encantado de atenderte.</p>
                    </div>
                    <div class="row padding">
                        <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                            <a href="#" class="steps active">
                                <p class="icon"><span><i class="icon-check"></i></span></p>
                                <h3>Trabajamos <br>Con amor</h3>
                            </a>
                        </div>
                        <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                            <a href="#" class="steps">
                                <p class="icon"><span><i class="icon-check"></i></span></p>
                                <h3>Honestidad &<br>Confianza</h3>
                            </a>
                        </div>
                        <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                            <a href="#" class="steps">
                                <p class="icon"><span><i class="icon-check"></i></span></p>
                                <h3>Mejorando <br>Siempre</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                    <h2 class="colorlib-heading">Historia</h2>
                    <p>Fundada en 2018, Roraima Multiservicios 2018 ha experimentado un crecimiento sólido y constante en el campo de la construcción y los servicios afines. A lo largo de los años, hemos consolidado una reputación inquebrantable gracias a nuestro enfoque centrado en el cliente, la calidad y la innovación.</p>
                </div>
                <div class="col-md-8 animate-box" data-animate-effect="fadeInRight">
                    <div class="fancy-collapse-panel">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">¿Por que Escogernos?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                     <div class="panel-body">
                                        <div class="row">
                                              <div class="col-md-6">
                                               <ul>
                                                <li>Experiencia y Profesionalismo</li>
                                                <li>Enfoque Centrado en el Cliente</li>
                                                <li>Calidad y Eficiencia</li>
                                               </ul>
                                              </div>
                                              <div class="col-md-6">
                                                 <ul>
                                                    <li>Soluciones Integrales</li>
                                                    <li>Compromiso con la Sostenibilidad</li>
                                                    <li>Resultados Garantizados</li>
                                                 </ul>
                                              </div>
                                          </div>
                                     </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">¿Que Hacemos?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                            <ul>
                                                <li>Separated they live in Bookmarksgrove right</li>
                                                <li>Separated they live in Bookmarksgrove right</li>
                                            </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Especialidades
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>	
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div id="colorlib-counter" class="colorlib-counters" style="background-image: url({{asset('assets/images/img_bg_1.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="colorlib-narrow-content">
            <div class="row">
            </div>
            <div class="row">
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-skyline"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="25" data-speed="9000" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label">Proyectos</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-engineer"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="20" data-speed="9000" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label">Empleados</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-architect-with-helmet"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="5987" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label">Constructor</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-worker"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="3999" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label">Partners</span>
                </div>
            </div>
        </div>
    </div>

   @include('layouts._partials.presupuesta')
</div>
</div>

@endsection