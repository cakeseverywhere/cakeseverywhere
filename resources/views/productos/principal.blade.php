@extends('templates.layout')
@section('content')
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaption" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('img/producto/p1.jpg')}}" height="550" class="d-block w-100"  alt="foto-pastel1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/producto/p2.jpg')}}"  height="550" class="d-block w-100" alt="foto-pastel2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/producto/P3.jpg')}}" height="550" class="d-block w-100" alt="foto-pastel3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/producto/P4.jpg')}}"  height="550" class="d-block w-100" alt="foto-pastel4"/>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third</h5>
                        <p></p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
        <!--endcarousel-->
        <div class="title-text">
            <h1 class="text-uppercase">SUGERENCIAS</h1>
        </div>
        <div class=" " data-current="0">
            <div class="card w-25 border-light">
                <div class="card start-card col-12 col-md-4">
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
        </div>
<!--
        <div class="cont-carrusel" data-current="0">
            <a href="#" class="left-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
            <a href="#" class="right-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
            <div class="carrusel">
                <div class="product start-card " id="product_0">
                    <img src="{{asset('img/producto/P3.jpg')}}" width="100%" height="100" />
                    <h5>Lorem ipsum 1</h5>
                    <p>165.00 €</p>
                </div>
                <div class="product " id="product_1">
                    <img src="{{asset('img/producto/P3.jpg')}}" width="100%" height="100" />
                    <h5>Lorem ipsum 2</h5>
                    <p>100.00 €</p>
                </div>
                <div class="product " id="product_2">
                    <img src="{{asset('img/producto/P3.jpg')}}" width="100%" height="100" />
                    <h5>Lorem ipsum 3</h5>
                    <p>250.00 €</p>
                </div>
                <div class="product " id="product_3">
                    <img src="{{asset('img/producto/P3.jpg')}}" width="100%" height="100" />
                    <h5>Lorem ipsum 4</h5>
                    <p>75.00 €</p>
                </div>
                <div class="product " id="product_4">
                    <img src="{{asset('img/producto/P3.jpg')}}" width="100%" height="100" />
                    <h5>Lorem ipsum 5</h5>
                    <p>65.00 €</p>
                </div>
                <div class="product " id="product_5">
                    <img src="{{asset('img/producto/P3.jpg')}}" width="100%" height="100" />
                    <h5>Lorem ipsum 6</h5>
                    <p>40.00 €</p>
                </div>
            </div>
        </div>
    -->

@endsection