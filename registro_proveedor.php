<?php include 'include/header.php' ?>
<div class="">
                  <span class="h2">Registro de proveedor</span>
                </div><br>
                <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Codigo del proveedor</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Codigo" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombre del proveedor</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Telefono del proveedor</label>
                        <input type="number"  class="form-control" id="inputEmail4" placeholder="Numero de telefono" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Direccion del proveedor</label>
                        <input type="text"  class="form-control" id="inputEmail4" placeholder="Dirrecion" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Fecha de registro</label>
                        <input type="date" class="form-control" id="inputPassword4" placeholder="" required>
                      </div>
                      <div class="form-group col-md-6">
                      <label for="inputPassword4">Imagen del proveedor</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                          <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="validationTextarea">Descripción del proveedor</label>
                        <textarea class="form-control" id="descripcion" placeholder="descripcion del proveedor" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-dark">Guardar</button>
                </form>

                </div>
<?php include 'include/footer.php' ?>