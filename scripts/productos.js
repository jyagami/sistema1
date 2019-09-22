$(document).ready(function () {
    //ejecutamos mostrarProductos
    //mostrarProductos();

    //guardar producto nuevo
    $('#form-product').submit(function (e) {
        const productData = {
            codigo: $('#inputCodigo').val(),
            nombre: $('#inputName').val(),
            cantidad: $('#inputCant').val(),
            proveedor: $('#inputProveedor').val(),
            fecha: $('#inputFecha').val(),
            descripcion: $('#inputDescripcion').val(),
            marca : $("#inputMarca").val(),
            costoCompra: $("#inputCosto").val(),
            precioVenta: $("#inputPrecio").val()
        };
        //console.log(productData);
        $.post('producto_controller.php', productData, function (response) {
            console.log(response);
        });
        //e.preventDefault();
    });
    //mostrar productos guardados
    function mostrarProductos() {
        $.ajax({
            url: 'producto_controller.php',
            type: 'GET',
            success: function (response) {
                //console.log(response);
                let productos = JSON.parse(response);
                let columna = '';
                productos.forEach(producto => {
                    columna += `<tr codProduct="${producto.codigo}">
                            <th scope="row"> ${producto.codigo}</th>
                            <td> ${producto.nombre}</td>
                            <td> ${producto.marca}</td>
                            <td> ${producto.cantidad}</td>
                            <td class="text-success"> ${producto.costo} USD$</td>
                            <td> ${producto.fecha}</td>
                            
                            <td>
                                <div class="btn-group" >
                                    <button class="btn btn-outline-dark" type="button" data-toggle="modal"><i class="far fa-address-book"></i></button>

                                    <a href="#" class="btn btn-outline-success"><i class="fas fa-edit"></i></a>

                                    <a class="btn btn-outline-danger delete-user" href="#">
                                    <i class="fas fa-trash-alt"></i></a>
                                </div>
                            </td>

                        </tr>`
                });
                $('#tabla-productos').html(columna);
            }
        })
    }
    function agruparProductos() {
        $.ajax({
            url: 'producto_controller.php',
            type: 'GET',
            success: function (response) {
                //console.log(response);
                let productos = JSON.parse(response);
                let tarjeta = '';
                productos.forEach(producto => {
                    tarjeta += `
                        <div class="card m-1 text-center">
                        <div class="card-body">
                        <h5 class="card-title">${producto.nombre}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">${producto.marca}</h6>
                        <p class="card-text">${producto.descripcion}</p>
                        <h5 class="text-success">${producto.costo} USD$ </h5>
                        <div class="btn-group" >
                                    <button class="btn btn-outline-dark" type="button" data-toggle="modal"><i class="far fa-address-book"></i></button>

                                    <a href="#" class="btn btn-outline-success"><i class="fas fa-edit"></i></a>

                                    <a class="btn btn-outline-danger delete-user" href="#">
                                    <i class="fas fa-trash-alt"></i></a>
                                </div>
                        </div>
                    </div>`


                });
                $('#contenido-productos').html(tarjeta);
            }
        })
    }

    $("#btn-group-product").click(function (e) {
        //agruparProductos();
        $('#contenido-agrupado').show(500);
        $('#contenido-productos').hide(500);
        
        e.preventDefault();

    })
    $("#btn-list-product").click(function (e) {
        //mostrarProductos();
        $('#contenido-agrupado').hide(500);
        $('#contenido-productos').show(500);
        
        e.preventDefault();
    })
    
});