const listaVenta = document.getElementById('tabla-cuerpo');
    const nuevoElemento = document.createElement('tr');
    function addProduct(){
        nuevoElemento.innerHTML = `<th>Monitor</th>
                                <td>Samsung</td>
                                <th>135 USD$</td>
                                <td><input type="number" placeholder="Cantidad" class="form-control"></td>
                                <th>135 USD$</th>`;
    listaVenta.appendChild(nuevoElemento);
    }    
    
    var btnAdd = document.getElementById('add-product');
    btnAdd.addEventListener('click', addProduct);
    