<?php include 'include/header.php' ?>
<div class="">
                  <span class="h2">Registro de producto</span>
                </div><br>
                <form id="form-product">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCodigo">Codigo del producto</label>
                        <input type="text" class="form-control" id="inputCodigo" placeholder="Codigo" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputName">Nombre del producto</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Nombre" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputCant">Cantidad</label>
                        <input type="number"  class="form-control" id="inputCant" placeholder="Cantidad" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputNarca">Marca del producto</label>
                        <input type="text" class="form-control" id="inputMarca" placeholder="Marca" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputCosto">Costo unitario USD$</label>
                        <input type="number"  class="form-control" id="inputCosto" placeholder="Costo" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPrecio">Precio de venta unitario USD$</label>
                        <input type="number"  class="form-control" id="inputPrecio" placeholder="Precio" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputProveedor">Proveedor</label>
                        <input type="text"  class="form-control" id="inputProveedor" placeholder="Proveedor" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputFecha">Fecha de recepción</label>
                        <input type="date" class="form-control" id="inputFecha" required>
                      </div>
                      <div class="form-group col-md-6">
                      <label for="inputPassword4">Imagen del producto</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputFoto" lang="es">
                          <label class="custom-file-label" for="inputFoto">Seleccionar Archivo</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="inputDescripcion">Descripción del producto</label>
                        <textarea class="form-control" id="inputDescripcion" placeholder="descripcion del producto" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-dark">Guardar</button>
                </form>

                </div>
                
<?php include 'include/footer.php' ?>