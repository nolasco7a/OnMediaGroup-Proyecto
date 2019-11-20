@extends('layouts.template')
@section('content')

{{-- Banner principal --}}
<div class="banner">
    <div class="logo">
        <img class="logo-img" src="./assets/images/ON MEDIA NEGATIVO.png" alt="" srcset="">
    </div>
    <img class="banner-img" src="./assets/images/yvette-de-wit-NYrVisodQ2M-unsplash.jpg" alt="">
    <div class="text-content">
        <h3>CREAMOS <br> EXPERIENCIAS</h3>
        <h5>REALIZA TU EVENTO CON NOSOTROS</h5>
        <a href="">CONTÁCTANOS</a>
    </div>
</div>

{{-- Seccion por que elegirnos --}}
<div class="row m-0">
    <div class="col-lg-4 p-0 m-0">
        <img src="./assets/images/steve-harvey-wt2tFjoTRcw-unsplash.jpg" class="img-fluid" alt="" srcset="">
    </div>
    <div class="col-lg-8 d-flex justify-content-center">
        <div class="col-lg-8">
            <h1 class="montserrat-font" style="padding-top: 4rem">¿POR QUE ELEGIRNOS?</h1>
            <P class="pt-2" style="font-size: .75rem">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam
                magnam nam, quam hic aspernatur cum, nobis expedita culpa aut dolor vero pariatur nemo aliquam fugit
                perspiciatis nisi! Quis rerum nostrum mollitia nihil voluptate. Perspiciatis blanditiis tempora eveniet
                vitae vel debitis commodi qui, nisi eos illum cumque soluta deserunt dicta optio.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, velit dignissimos dolore eum
                error deserunt adipisci quis nesciunt ipsa esse quae consequuntur perferendis itaque doloribus autem
                fugiat quas! Quibusdam, enim.
            </P>
        </div>
    </div>
</div>

{{-- Seccion de servicios/iconos --}}
<div class="container mt-4" style="min-height: 50vh">
    <div class="row mt-4">
        <div class="col-lg-3">
            <div class="d-flex justify-content-center">
                <div class="orange-circle d-flex align-items-center justify-content-center">
                    <i class="fas fa-microphone"></i>
                </div>
            </div>
            <h2 class="text-center">eventos</h2>
        </div>
        <div class="col-lg-3">
            <div class="d-flex justify-content-center">
                <div class="orange-circle d-flex align-items-center justify-content-center">
                    <i class="fas fa-video"></i>

                </div>
            </div>
            <h2 class="text-center">eventos</h2>
        </div>
        <div class="col-lg-3">
            <div class="d-flex justify-content-center">
                <div class="orange-circle d-flex align-items-center justify-content-center">
                    <i class="fas fa-lightbulb"></i>
                </div>
            </div>
            <h2 class="text-center">eventos</h2>
        </div>
        <div class="col-lg-3">
            <div class="d-flex justify-content-center">
                <div class="orange-circle d-flex align-items-center justify-content-center">
                    <i class="fas fa-rocket"></i>
                </div>
            </div>
            <h2 class="text-center">eventos</h2>
        </div>
    </div>
</div>

{{-- Seccion contadores --}}
<div class="d-flex align-items-center" style="height: 50vh">
    <div class="d-flex align-items-center justify-content-center row-counter">
        <div class="col-lg-2">
            <div class="count text-center">
                <span class="counter">100</span>+
                <div class="underline"></div>
                <h5 class="text-counter">Empresas</h5>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="count text-center">
                <span class="counter">50</span>
                <div class="underline"></div>
                <h5 class="text-counter">Marcas</h5>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="count text-center">
                <span class="counter">29</span>
                <div class="underline"></div>
                <h5 class="text-counter">Conciertos</h5>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="count text-center">
                <span class="counter">50</span>+
                <div class="underline"></div>
                <h5 class="text-counter">Eventos Corporativos</h5>
            </div>
        </div>
    </div>
</div>

{{-- Ultimas Noticias --}}
<div class="container">
        <div class="row">
                <h1 class="montserrat-font" style="padding-top: 4rem">Ultimas Noticias</h1>
                <div class="col-lg-4 d-flex justify-content-center">
                    <div class="card">
                        <img src="./assets/images/alexander-popov-hTv8aaPziOQ-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-futura-heavy"><i class="far fa-calendar-alt mr-2"></i>Lorem Ipsum</h5>
                            <p class="card-text text-futura-book">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam eveniet deserunt voluptas, impedit consequatur provident!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-center">
                    <div class="card">
                        <img src="./assets/images/alexander-popov-hTv8aaPziOQ-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-futura-heavy"><i class="far fa-calendar-alt mr-2"></i>Lorem Ipsum</h5>
                            <p class="card-text text-futura-book">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam eveniet deserunt voluptas, impedit consequatur provident!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-center">
                    <div class="card">
                        <img src="./assets/images/alexander-popov-hTv8aaPziOQ-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-futura-heavy"><i class="far fa-calendar-alt mr-2"></i>Lorem Ipsum</h5>
                            <p class="card-text text-futura-book">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam eveniet deserunt voluptas, impedit consequatur provident!</p>
                        </div>
                    </div>
                </div>
            </div>
</div>

{{-- Seccion Proximos Eventos --}}
    <div class="container">
            <h1 class="montserrat-font" style="padding-top: 4rem">Proximos Eventos</h1>
        <div class="col-lg-6 mt-1">
            <div class="row next-events">
                <div class="col-lg-2 hour">
                    9:11 AM
                </div>
                <div class="col-lg-2">
                    <div class="round-image">
                        <img src="./assets/images/person.jpg" alt="" srcset="">
                    </div>
                </div>
                <div class="col-lg-8 description">
                    <h4>Lorem, ipsum.</h4>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, enim.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-1">
            <div class="row next-events">
                <div class="col-lg-2 hour">
                    9:11 AM
                </div>
                <div class="col-lg-2">
                    <div class="round-image">
                        <img src="./assets/images/person.jpg" alt="" srcset="">
                    </div>
                </div>
                <div class="col-lg-8 description">
                    <h4>Lorem, ipsum.</h4>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, enim.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-1">
            <div class="row next-events">
                <div class="col-lg-2 hour">
                    9:11 AM
                </div>
                <div class="col-lg-2">
                    <div class="round-image">
                        <img src="./assets/images/person.jpg" alt="" srcset="">
                    </div>
                </div>
                <div class="col-lg-8 description">
                    <h4>Lorem, ipsum.</h4>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, enim.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
