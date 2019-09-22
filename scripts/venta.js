$(document).ready(function () {
    listarProductos();
    //listar priductos existentes
    function listarProductos() {
        $.ajax({
            url: 'producto_controller.php',
            type: 'GET',
            success: function (response) {
                let productos = JSON.parse(response);
                let columna = '';
                productos.forEach(producto => {
                    columna += `<tr nameProduct="${producto.nombre}" marcaProduct="${producto.marca}" costoProduct="${producto.costo}" idProducto="${producto.codigo}">
                    <td> ${producto.nombre}</td>
                    <td> ${producto.marca}</td>
                    <td class="text-success"> ${producto.costo} USD$</td>
                    <td> ${producto.cantidad}</td>
                    <td><button class="btn btn-primary" id="add-venta">+<i class="fas fa-cart-plus"></i></button>
                    </td>

                        </tr>`
                });
                $('#tabla-producto-venta').html(columna);
            }
        })
    }
    //agregar productos a venta
    var colPlus = "";
    $(document).on('click', '#add-venta', function () {
        //obtenemos los atributos de la tabla productos
        let elemento = $(this)[0].parentElement.parentElement;
        let nombreProducto = $(elemento).attr('nameProduct');
        let marcaProducto = $(elemento).attr('marcaProduct');
        let costoProducto = $(elemento).attr('costoProduct');
        let codigoProducto = $(elemento).attr('idProducto');
        console.log(codigoProducto);

        //totalizamos la venta
        var totalVenta = 0;
        var tot = 0;
        $("#total-venta").click(function (e) {
            var cant = $("#cantidad").val();
            var cost = $("#costoId").val();
            tot = cant * cost;
            console.log(tot);
            totalVenta += tot;
            e.preventDefault();
        });

        //llenamos la tabla venta
        let columna = "";
        columna = `<tr>
            <th>${nombreProducto}</th>
            <td>${marcaProducto}</td>
            <th><input id="costoId" type="text" value="${costoProducto}" style="max-width:70px;" class="form-control" readonly></th>
            <td><input id="cantidad" type="number" placeholder="Cantidad" class="form-control"></td>
            <th>${tot} USD$</th>
        </tr>` + colPlus;

        $('#tabla-cuerpo-venta').html(columna);
        colPlus = columna;
    })

});//fin document ready