@extends('templates.layout')
@section('content')
    <div class="bd-example">
        <div id="carouselHead" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselHead" data-slide-to="0" class="active"></li>
                <li data-target="#carouselHead" data-slide-to="1"></li>
                <li data-target="#carouselHead" data-slide-to="2"></li>
                <li data-target="#carouselHead" data-slide-to="3"></li>
            </ol>
            <!--Comentario Manuel para verificar GIT-->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('').$p->get(4)->fotos->get(0)->ur_foto}}" height="550" class="d-block w-100"  alt="foto-pastel1">
                    <div class="carousel-caption d-none d-md-block">

                        <p>Deleita tu paladar</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('').$p->get(5)->fotos->get(0)->ur_foto}}"  height="550" class="d-block w-100" alt="foto-pastel2">
                    <div class="carousel-caption d-none d-md-block">

                        <p>Una delicia visual</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('').$p->get(6)->fotos->get(0)->ur_foto}}" height="550" class="d-block w-100" alt="foto-pastel3">
                    <div class="carousel-caption d-none d-md-block">

                        <p>Una delicia de los dioses</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('').$p->get(7)->fotos->get(0)->ur_foto}}"  height="550" class="d-block w-100" alt="foto-pastel4"/>
                    <div class="carousel-caption d-none d-md-block">

                        <p>Nunca es suficiente</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselHead" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselHead" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
        <!--endcarousel-->

    <!-- SUGERENCIAS-->
    <section class="container-fluid py-3">
        <div class="title-text py-2">
            <h2 class="text-uppercase">SUGERENCIAS</h2>
        </div>
        <div class="card-deck" data-current="0">
                <div class="card start-card">
                    <img class="card-img-top" src="{{asset('').$p->first()->fotos->get(0)->ur_foto}}" width="245" height="180" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$p->first()->nom_producto}}</h5>
                        <p class="card-text">{{$p->first()->desc_producto}}</p>
                        <p class="card-text"><small class="text-muted"></small></p>
                    </div>
                </div>
                <div class="card ">
                    <img class="card-img-top" src="{{asset('').$p->get(1)->fotos->get(0)->ur_foto}}" width="245" height="180" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$p->get(1)->nom_producto}}</h5>
                        <p class="card-text">{{$p->get(1)->desc_producto}}</p>
                        <p class="card-text"><small class="text-muted"></small></p>
                    </div>
                </div>

            <div class="card ">
                <img class="card-img-top" src="{{asset('').$p->get(2)->fotos->get(0)->ur_foto}}" width="245" height="180" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$p->get(2)->nom_producto}}</h5>
                    <p class="card-text">{{$p->get(2)->desc_producto}}</p>
                    <p class="card-text"><small class="text-muted"></small></p>
                </div>
            </div>

            <div class="card ">
                <img class="card-img-top" src="{{asset('').$p->get(3)->fotos->get(0)->ur_foto}}" width="245" height="180" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$p->get(3)->nom_producto}}</h5>
                    <p class="card-text">{{$p->get(3)->desc_producto}}</p>
                    <p class="card-text"><small class="text-muted"></small></p>
                </div>
            </div>
      </div>
    </section>

    <!-- ENDSUGERENCIAS-->




    <!-- LOMAS VENDIDO-->
    <section class="container-fluid py-3">
        <div class="title-text py-2">
            <h2 class="text-uppercase">MÁS VENDIDOS</h2>
        </div>
        <div class="card-deck" data-current="0">
            <div class="card start-card">
                <img class="card-img-top" src="{{asset('img/producto/p2.jpg')}}" width="245" height="180" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card ">
                <img class="card-img-top" src="{{asset('img/producto/P3.jpg')}}" width="245" height="180" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            <div class="card ">
                <img class="card-img-top" src="{{asset('img/producto/P3.jpg')}}" width="245" height="180" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            <div class="card ">
                <img class="card-img-top" src="{{asset('img/producto/P3.jpg')}}" width="245" height="180" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ENDLOMAS VENDIDO-->
@endsection