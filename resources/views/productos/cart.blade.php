@extends('templates.layout')
@section('content')


    @if(request()->idProduct)
        <div class="d-none">

            <span id="id-product">{{request()->idProduct}}</span>
            <span id="nom-product">{{request()->nomProduct}}</span>
            <span id="cantidad">{{request()->cantidad}}</span>
            <span id="price">{{request()->price}}</span>
            <span id="img-product">{{request()->imgProduct}}</span>
        </div>
    @endif
    <div class="row">
        <div class="col-md-8">

            <ul class="nav nav-pills nav-fill nav-tab-custom p-2" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link custom-yellow-text active" id="pills-home-tab" data-toggle="pill"
                       href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Mi carito</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-yellow-text" id="pills-profile-tab" data-toggle="pill"
                       href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                        Pago
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-yellow-text" id="pills-contact-tab" data-toggle="pill"
                       href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                        Compras en progreso
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active p-2" id="pills-home" role="tabpanel"
                     aria-labelledby="pills-home-tab">

                    <div class="card">
                        <div class="card-body">

                            <!-- Shopping Cart table -->
                            <div class="table-responsive">

                                <table class="table product-table">

                                    <!-- Table head -->
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th class="font-weight-bold">
                                            <strong>Pastel</strong>
                                        </th>
                                        <th></th>
                                        <th class="font-weight-bold">
                                            <strong>Precio</strong>
                                        </th>
                                        <th class="font-weight-bold">
                                            <strong>Cantidad</strong>
                                        </th>
                                        <th class="font-weight-bold">
                                            <strong>Costo</strong>
                                        </th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <!-- /.Table head -->

                                    <!-- Table body -->
                                    <tbody id="tab-cart-product">

                                    <!-- First row -->



                                    </tbody>
                                    <!-- /.Table body -->

                                </table>

                            </div>
                            <!-- /.Shopping Cart table -->

                        </div>

                    </div>

                </div>
                <div class="tab-pane fade p-2" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="card">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade p-2" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <caption>Actualmente no se realizado ningun pedio. Regiliza tu primer pedido hoy.
                                    </caption>
                                    <thead class="text-center">

                                    <tr>
                                        <th class="font-weight-bold" >
                                            <strong>Número de pedido</strong>
                                        </th>
                                        <th class="font-weight-bold">
                                            <strong>Número de Articulos</strong>
                                        </th>

                                        <th class="font-weight-bold">
                                            <strong>Lista de Articulos</strong>
                                        </th>

                                        <th class="font-weight-bold">
                                            <strong>Estado del pedido</strong>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <button class="btn btn-outline-info btn-lg btn-block my-2" type="submit">Realizar Pedido</button>
            <div class="card my-2">

                <!--Card content-->
                <div class="card-body">
                    <h4 class="mb-4 mt-1 h5 text-center font-weight-bold">Resumen</h4>

                    <hr>
                    <div id="resumen-content">

                    </div>

                </div>

            </div>
            <!--/.Card-->
        </div>
    </div>
@endsection
@section('javascript')
    <script>
        $(document).ready(function () {
            $(".btn-delete-row").on('click keyup', function () {
                var row = $(this).parents('tr');
                var nomPorducto = row.find('td').get(0);
                console.log("busca en"+ arrayProdCart+ "Tenga"+ $(nomPorducto).text());
                console.log(arrayProdCart.indexOf($(nomPorducto).text()));

                row.remove();
            });
            $('.input-increment-row').on('click', function () {
                var precio = $(this).parents().prev('td').text().replace('$', '');
                var cantidad = parseInt($(this).val());
                var tdCosto = $(this).parents().next('td');
                var costo=parseFloat(precio) * cantidad;
                tdCosto.text("$" + costo.toFixed(2));
            });
        });

    </script>
    <script>
        var arrayProdCart = [];
        var arrayResumen = [];
        var lastID='-1';

        var jsonCart = {'id': -1, 'producto': '', 'precio': 120.58, 'cantidad': -2, 'img': ''};

        /**
         *
         * Convierte un string con datos json a un array
         * Almacena el ultimo id
         */
        function stringArrayProd(arrayString) {
            var expReg = /},/;
            var array = arrayString.split(expReg);
            var aux;
            for (var i=0; i<array.length-1; i++) {
                aux = array[i] + '}';
                array[i] = aux;
            }

            aux= StringToJson(array[array.length-1]);

            lastID=aux.id;
            return array;
        }

        // Otenemos los productos del storage
        function getProductsCar() {
            var strArray = localStorage.getItem('productCar');
            if (strArray == null) {
                console.log('No hay productos en carrito', arrayProdCart);
                localStorage.setItem('productCar', arrayProdCart.toString());
            } else {
                arrayProdCart = stringArrayProd(strArray);
            }

        }


        function addProducto() {
            if ($("#id-product").length > 0) {
                jsonCart.id = $("#id-product").text();
                if (jsonCart.id !== lastID){
                    jsonCart.producto = $("#nom-product").text();
                    jsonCart.cantidad = $("#cantidad").text();
                    jsonCart.precio = $("#price").text();
                    jsonCart.img= $("#img-product").text();
                    console.log("Antes de el push",arrayProdCart);
                    arrayProdCart.push(JSON.stringify(jsonCart));
                    localStorage.setItem('productCar', arrayProdCart.toString());

                }
            }
        }
        getProductsCar();
        addProducto();
        completeTableCart();

        function StringToJson(str) {
            try {
                return JSON.parse(str);
            } catch (e) {
                return false;
            }
        }

        function completeTableCart() {
            var rowTable='';
            var cantidad;
            var costo;
            var jsonCart;
            var aux;
            $.each(arrayProdCart, function (key, value) {
                jsonCart = StringToJson(value);

                if (jsonCart != false) {
                    cantidad = parseInt(jsonCart.cantidad);
                    costo = cantidad * parseFloat(jsonCart.precio);
                    var jsonResuem = {'cantidad': 1, 'producto': '', 'costo': 102.25};

                    jsonResuem.producto = jsonCart.producto;
                    jsonResuem.cantidad = jsonCart.cantidad;
                    jsonResuem.costo = costo;

                    arrayResumen.push(jsonResuem);





                    rowTable="<tr><th scope='row'>" +
                        "<img src=" +
                         jsonCart.img  +" class='img-fluid z-depth-0' style='max-height: 100px;'>" +
                        "</th>" +
                        "<td>" +
                        "<h5 class='mt-3'>" +
                        "<strong>"+jsonCart.producto+"</strong>" +
                        "</h5>" +

                        "</td>" +
                        "<td></td>\n" +
                        "<td>$"+jsonCart.precio+"</td>" +
                        "<td>" +
                        "<input type='number' min='1' value='1' aria-label='Search'" +
                        "class='form-control input-increment-row' style='width: 100px'>" +
                        "</td>" +
                        "<td class='font-weight-bold'>" +
                        "<strong>$" +costo+"</strong>" +
                        "</td><td>" +
                        "<button type='button' class='btn btn-sm btn-outline-danger btn-delete-row'" +
                        "data-toggle='tooltip' data-placement='top'" +
                        "title='Remove item'>X" +
                        "</button>" +
                        "</td>" +
                        "</tr>";
                    $("#tab-cart-product").append(rowTable);
                } else {
                    console.log("Error al covertir en json", value);
                }
            });


            upDateResumen();


        }


        function upDateResumen() {
            var rowResum;
            var total = 0;
            $.each(arrayResumen, function (key, value) {
                total += value.costo;
                rowResum = "<dl class='row'>" +
                    "<dd class='col-sm-8'>" +
                    value.producto +
                    "</dd>" +
                    "<dd class='col-sm-4'>" +
                    "$ " + value.costo +
                    "</dd>" +
                    "</dl>" +
                    "<hr>";
                $("#resumen-content").append(rowResum);
            });


            rowResum = "<dl class='row'>" +
                "<dd class='col-sm-8'>Total</dd>" +
                "<dd class='col-sm-4'>" +
                "$ " + total.toFixed(2); +
                "</dd>" +
                "</dl>" +
                "<hr>";
            $("#resumen-content").append(rowResum);
        }


    </script>
@endsection