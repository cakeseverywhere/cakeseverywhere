@extends('templates.layout')
@section('content')
    @include('productos.modals.producto_modal')
    <!--incio imagen pagina pateles-->
    <div class="img-producto " style="background-color: #4e555b">
        <img class="img-fluid rounded mx-auto d-block" src="{{asset('').$p->get(0)->fotos->get(0)['ur_foto']}}" alt="500px" width="500px" >
    </div>
    <!--endimagen-->

    <!--Inicio pasteles-->
    <section class="container-fluid py-3">
        <div class="title-text py-2">
            <h2 class="text-uppercase">PASTELES</h2>
        </div>

        <div class="card-columns" data-current="0">
            @foreach($tpasteles as $tpastel)
                <div class="card {{$loop->first?  'start-card':'' }} ">
                    <a class="info-producto" data-id="{{ $tpastel['id'] }}">

                        <img class="card-img-top" src="{{asset('').$tpastel['fotos']->get(0)['ur_foto']}}" width="245" height="180" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{$tpastel['nom_producto']}}</h5>
                        <p class="card-text">{{$tpastel['desc_producto']}}</p>
                        <p class="card-text"><small class="text-muted"></small></p>
                    </div>
                    <div class="card-footer">
                        <div class="float-left">$</div>
                        <div class="float-right">
                            <i class="fa fa-shopping-cart" data-toggle="modal" data-target="#producto-modal"></i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </section>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            {{ $tpasteles->links() }}</div>
        </ul>
    </nav>


@endsection

@section('javascript')
    <script src="{{asset('js/principal.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.info-producto').on('click', function (e) {
                $.ajax({
                    url: "{{url('infoProductos')}}",
                    method: 'GET',
                    data: {"id": $(this).data('id')},
                    dataType: 'json',
                    beforeSend: function () {
                        $("#producto-modal").modal('show');
                        $("#loader-modal-producto").show();
                    },
                    success: function (data) {
                        $("#img-modal-producto").prop('src', "{{asset('')}}"+data.fotos[0].ur_foto);
                        $("#titulo-modal-producto").text(data.nom_producto);
                        $("#desc-producto-modal").text(data.desc_producto);
                    },
                    complete: function () {

                        $("#datos-modal").show();
                        $("#loader-modal-producto").hide();
                    },
                    error: function (xhr, status, thrownError) {
                        alert('Error: '+xhr + 'mensaje: '+ thrownError);
                    }
                });
            });

        });
    </script>
@endsection