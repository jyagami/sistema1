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
    var tot = 0,
        thTot = `<th id="totalUnitario">${tot} USD$</th>`;
    $(document).on('click', '#add-venta', function () {
         //obtenemos los atributos de la tabla productos
         let elemento = $(this)[0].parentElement.parentElement;
         let nombreProducto = $(elemento).attr('nameProduct');
         let marcaProducto = $(elemento).attr('marcaProduct');
         let costoProducto = $(elemento).attr('costoProduct');
         let codigoProducto = $(elemento).attr('idProducto');
         
         //<th><input id="costoId" type="number" value="${costoProducto}" style="max-width:70px;" class="form-control" readonly></th>
             
         let columna = "";
         columna = `<tr id="productoActual">
             <th id="xProduct"><span class="badge badge-danger">x</span> ${nombreProducto}</th>
             <td>${marcaProducto}</td>
             <th><span id="costoId" style="max-width:70px;" class="form-control">${costoProducto}</span></th>
             <td><input id="cantidad" type="number" placeholder="Cantidad" class="form-control"></td>
             ${thTot}
         </tr>`;
         $('#tabla-cuerpo-venta').before(columna);
    })
    //eliminar producto de la venta
    $(document).on('click','#xProduct', function(){
        var producto = this.parentElement;
        producto.remove();
        console.log(producto);
    })
    //totalizar venta unitaria
    $(document).on('click', '#cantidad', function(){
        var $cantidad = $(this).val(),
            $costo = $(this).parent().parent().children().eq(2).text();
            //$(this.parentElement.parentElement.children[2]);
        tot = $cantidad * $costo;
        
        var $tdTotal = $(this).parent();
        thTot = `<th id="totalUnitario">${tot} USD$</th>`,
        $tdTotal.after(thTot);
        
        var thTotalTemporal = $(this).parent().parent().find('th').last();
        thTotalTemporal.remove();
        
    });
    
});//fin document ready