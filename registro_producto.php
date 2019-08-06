<?php include 'include/header.php' ?>
<div class="">
                  <span class="h2">Registro de producto</span>
                </div><br>
                <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Codigo del producto</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Codigo" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombre del producto</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Cantidad</label>
                        <input type="number"  class="form-control" id="inputEmail4" placeholder="Cantidad" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Proveedor</label>
                        <input type="text"  class="form-control" id="inputEmail4" placeholder="Proveedor" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Fecha de recepción</label>
                        <input type="date" class="form-control" id="inputPassword4" placeholder="Contraseña" required>
                      </div>
                      <div class="form-group col-md-6">
                      <label for="inputPassword4">Imagen del producto</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                          <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="validationTextarea">Descripción del producto</label>
                        <textarea class="form-control" id="descripcion" placeholder="descripcion del producto" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-dark">Guardar</button>
                </form>

                </div>
<?php include 'include/footer.php' ?>