
var arrayResumen = [];





completeTableCart();

function completeTableCart() {
    var rowTable='';
    var cantidad;
    var costo = 0;
    var jsonCart;
    $.each(arrayProdCart, function (key, value) {

        jsonCart = StringToJson(value);

        if (jsonCart != false) {
            cantidad = parseInt(jsonCart.cantidad);
            costo = (cantidad * parseFloat(jsonCart.precio)).toFixed(2);
            var jsonResuem = {'cantidad': 1, 'producto': '', 'costo': 102.25};
            jsonResuem.producto = jsonCart.producto;
            jsonResuem.cantidad = jsonCart.cantidad;
            jsonResuem.costo = costo;
            arrayResumen.push(jsonResuem);


            rowTable="<tr><th scope='row'>" +
                "<img src=" +
                jsonCart.img  +" class='img-fluid z-depth-0' style='max-height: 100px; max-width: 100px;'>" +
                "</th>" +
                "<td>" +
                "<h5 class='mt-3'>" +
                "<strong>"+jsonCart.producto+"</strong>" +
                "</h5>" +
                "</td>" +
                "<td>$"+jsonCart.precio+"</td>" +
                "<td>" +
                "<input type='number' min='1' value='"+
                jsonCart.cantidad+"' aria-label='Search'" +
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
            console.log("Error al covertir en json: "+ value);
        }
    });





}


function upDateResumen() {
    var rowResum="";
    var total = 0;
    $.each(arrayResumen, function (key, value) {
        total += parseFloat(value.costo);
        rowResum += "<dl class='row'>" +
            "<dd class='col-sm-8'>" +
            value.cantidad+" "+ value.producto +
            "</dd>" +
            "<dd class='col-sm-4'>" +
            "$ " + value.costo +
            "</dd>" +
            "</dl>" +
            "<hr>";
    });


    rowResum += "<dl class='row'>" +
        "<dd class='col-sm-8'>Total</dd>" +
        "<dd class='col-sm-4'>" +
        "$ " + total.toFixed(2) +
        "</dd>" +
        "</dl>" +
        "<hr>";
    $("#resumen-content").html(rowResum);
}




$(document).ready(function () {

    completeTableCart();
    upDateResumen();


    $(".btn-delete-row").on('click change', function () {
        var row = $(this).parents('tr');
        var nomPorducto = row.find('td').get(0);
        var index=getIdexArray($(nomPorducto).text());

        arrayProdCart.splice(index,1);
        arrayResumen.splice(index,1);
        upDateResumen();

        localStorage.setItem('productCar',arrayProdCart);
        row.remove();
    });
    $('.input-increment-row').on('click', function () {
        var row=$(this).parents('tr').find('td');
        var precio = $(row.get(1)).text().replace('$', '');
        var cantidad = parseInt($(this).val());
        var tdCosto = $(row.get(3));
        var nom= $(row.get(0)).text();
        var index= getIdexArray(nom);
        var costo=(parseFloat(precio) * cantidad).toFixed(2);
        var json = arrayResumen[index];

        json.costo=costo;
        json.cantidad=cantidad;
        arrayResumen[index]=json;

        json = arrayProdCart[index];
        json = StringToJson(json);
        json.cantidad=cantidad;
        arrayProdCart[index] = JSON.stringify(json);
        localStorage.setItem('productCar',arrayProdCart);
        upDateResumen();
        tdCosto.text("$" + costo);

    });
});