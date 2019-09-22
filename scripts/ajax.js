$(document).ready(function () {
    //obtenemos el componente con id 'search-user'
    $('#search-user').keyup(function (e) {//capturamos lo que teclea el usuario con "keyup()"
        //obtenemos el valor del input 'search-user' con el metodo "val()"
        if ($('#search-user').val()) {
            let busqueda = $('#search-user').val();
            //console.log(busqueda);
            $.ajax({//"$.ajax" permite realizar una peticion a un servidor
                url: 'search_user.php', //direccion donde haremos la peticion            
                type: 'POST', //tipo de peticion
                data: { busqueda }, //enviamos un valor al servidor
                success: function (response) { //respuesta del servidor
                    //console.log(response);
                    let usuarios = JSON.parse(response);
                    let columna = '';
                    usuarios.forEach(usuario => {
                        columna += `<tr codUser="${usuario.codigo}">
                            <th scope="row"> ${usuario.codigo}</th>
                            <td> ${usuario.nombres}</td>
                            <td> ${usuario.apellidos}</td>
                            <td> ${usuario.telefono}</td>
                            <td> ${usuario.puesto}</td>
                            <td> ${usuario.correo}</td>
                            <td> ${usuario.contrasena}</td>
                            
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
                    $('#tabla-usuarios').html(columna);
                }
            });
        }
        else {
            location.reload();
        }
    });
    //eliminar usuario
    $(document).on('click', '.delete-user', function () {
        let elemento = $(this)[0].parentElement.parentElement.parentElement;
        let codigoUser = $(elemento).attr('codUser');
        console.log(codigoUser);
        $.post('usuario_controller.php', { codigoUser }, function (response) {
            $('#alertDelete').show(1000);
            //recargamos luego de 3 segundos
            setTimeout("location.reload()", 3000);
            $('#alertClose').on('click', function () {
                location.reload();
            })
        })
    })
    //mostrar registros

});