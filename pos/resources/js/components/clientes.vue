<template>
<div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Clientes</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Agregar Cliente
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="">
                  <div class="form-group">
                    <div class="row">
                      <div class="col">
                        <label for="clave">Clave:</label>
                        <input type="text" class="form-control" name="clave">  
                      </div>
                      <div class="col">
                        <label for="representante">Representante:</label>
                        <input type="text" class="form-control" name="representante">  
                      </div>
                      <div class="col">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre">
                      </div>
                    </div>
                    <label for="rfc">RFC:</label>
                    <input type="text" class="form-control" name="rfc">
                    <div class="row">
                      <div class="col">
                        <label for="curp">CURP:</label>
                        <input type="text" class="form-control" name="curp">
                      </div>
                      <div class="col">
                        <label for="num_ext">Numero exterior:</label>
                        <input type="text" class="form-control" name="num_ext">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <label for="num_int">Numero interior:</label>
                        <input type="text" class="form-control" name="num_int">
                      </div>
                      <div class="col">
                        <label for="uVenta">Unidad de venta:</label>
                        <input type="text" class="form-control" name="uVenta">
                      </div>
                      <div class="col">
                        <label for="colonia">Colonia:</label>
                        <input type="text" class="form-control" name="colonia">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <label for="localidad">localidad:</label>
                        <input type="text" class="form-control" name="localidad">
                      </div>
                      <div class="col">
                        <label for="estado">Estado:</label>
                        <input type="text" class="form-control" name="estado">
                      </div>
                      <div class="col">
                        <label for="telefono">telefono:</label>
                        <input type="text" class="form-control" name="telefono">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <label for="correo">Correo:</label>
                        <input type="text" class="form-control" name="correo">
                      </div>
                      <div class="col">
                        <label for="cod_pos">Código Postal:</label>
                        <input type="text" class="form-control" name="cod_pos">
                      </div>
                      <div class="col">
                        <label for="preComProm">Precio de compra Prom.:</label>
                        <input type="text" class="form-control" name="preComProm">
                      </div>
                      <div class="col">
                        <label for="preComProm">Precio de compra Prom.:</label>
                        <input type="text" class="form-control" name="preComProm">
                      </div>
                    </div>
                    <label for="margen">margen de utilidad:</label>
                    <input type="text" class="form-control" name="margen">
                    <label class="mr-sm-2" for="proveedor">Proveedor</label>
                    <select class="custom-select mr-sm-2" id="proveedor">
                      <option selected>Elegir</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Guardar</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Lista de Articulos</h6>
              <label for="busqueda">Buscar:</label>
              <input type="text" class="form-control" name="busqueda">
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Clave</th>
                      <th>Descripcion</th>
                      <th>Localización</th>
                      <th>Existencia</th>
                      <th>Precio</th>
                      <th>Operaciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Clave</th>
                      <th>Descripcion</th>
                      <th>Localización</th>
                      <th>Existencia</th>
                      <th>Precio</th>
                      <th>Operaciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Donna Snider</td>
                      <td>Customer Support</td>
                      <td>New York</td>
                      <td>27</td>
                      <td>2011/01/25</td>
                      <td>
                        <button class="btn btn-info btn-circle btn-small" data-toggle="modal" data-target="#detalles"><i class="fas fa-info-circle"></i></button>
                        <button class="btn btn-warning btn-circle btn-small" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger btn-circle btn-small" data-toggle="modal" data-target="#eliminar"><i class="fas fa-trash"></i></button>
                        
                        <div class="modal fade" id="detalles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nuevo Artículo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="">
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col">
                                        <label for="clave">Clave:</label>
                                        <input type="text" class="form-control" name="clave">  
                                      </div>
                                      <div class="col">
                                        <label for="claveAlt">Clave Alterna:</label>
                                        <input type="text" class="form-control" name="claveAlt">  
                                      </div>
                                      <div class="col">
                                        <label for="servicio">Servicio:</label>
                                        <input type="checkbox" name="servicio">
                                      </div>
                                    </div>
                                    <label for="descripcion">Descripción:</label>
                                    <input type="text" class="form-control" name="descripcion">
                                    <div class="row">
                                      <div class="col">
                                        <label for="categoria">Categoría:</label>
                                        <input type="text" class="form-control" name="categoria">
                                      </div>
                                      <div class="col">
                                        <label for="departamento">Departamento:</label>
                                        <input type="text" class="form-control" name="departamento">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col">
                                        <label for="uCompra">Unidad de compra:</label>
                                        <input type="text" class="form-control" name="uCompra">
                                      </div>
                                      <div class="col">
                                        <label for="uVenta">Unidad de venta:</label>
                                        <input type="text" class="form-control" name="uVenta">
                                      </div>
                                      <div class="col">
                                        <label for="factor">Factor:</label>
                                        <input type="text" class="form-control" name="factor">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col">
                                        <label for="invMin">Inveniario minimo:</label>
                                        <input type="text" class="form-control" name="invMin">
                                      </div>
                                      <div class="col">
                                        <label for="invMax">Inveniario máximo:</label>
                                        <input type="text" class="form-control" name="invMax">
                                      </div>
                                      <div class="col">
                                        <label for="localizacion">Localización:</label>
                                        <input type="text" class="form-control" name="localizacion">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col">
                                        <label >Impuestos:</label><br>
                                        <label for="otro">IVA:</label>
                                        <input type="checkbox" name="otro">
                                      </div>
                                      <div class="col">
                                        <label for="preCom">Precio de compra:</label>
                                        <input type="text" class="form-control" name="preCom">
                                      </div>
                                      <div class="col">
                                        <label for="preComProm">Precio de compra Prom.:</label>
                                        <input type="text" class="form-control" name="preComProm">
                                      </div>
                                      <div class="col">
                                        <label for="preComProm">Precio de compra Prom.:</label>
                                        <input type="text" class="form-control" name="preComProm">
                                      </div>
                                    </div>
                                    <label for="margen">margen de utilidad:</label>
                                    <input type="text" class="form-control" name="margen">
                                    <label class="mr-sm-2" for="proveedor">Proveedor</label>
                                    <select class="custom-select mr-sm-2" id="proveedor">
                                      <option selected>Elegir</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                  </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Guardar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nuevo Artículo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="">
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col">
                                        <label for="clave">Clave:</label>
                                        <input type="text" class="form-control" name="clave">  
                                      </div>
                                      <div class="col">
                                        <label for="claveAlt">Clave Alterna:</label>
                                        <input type="text" class="form-control" name="claveAlt">  
                                      </div>
                                      <div class="col">
                                        <label for="servicio">Servicio:</label>
                                        <input type="checkbox" name="servicio">
                                      </div>
                                    </div>
                                    <label for="descripcion">Descripción:</label>
                                    <input type="text" class="form-control" name="descripcion">
                                    <div class="row">
                                      <div class="col">
                                        <label for="categoria">Categoría:</label>
                                        <input type="text" class="form-control" name="categoria">
                                      </div>
                                      <div class="col">
                                        <label for="departamento">Departamento:</label>
                                        <input type="text" class="form-control" name="departamento">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col">
                                        <label for="uCompra">Unidad de compra:</label>
                                        <input type="text" class="form-control" name="uCompra">
                                      </div>
                                      <div class="col">
                                        <label for="uVenta">Unidad de venta:</label>
                                        <input type="text" class="form-control" name="uVenta">
                                      </div>
                                      <div class="col">
                                        <label for="factor">Factor:</label>
                                        <input type="text" class="form-control" name="factor">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col">
                                        <label for="invMin">Inveniario minimo:</label>
                                        <input type="text" class="form-control" name="invMin">
                                      </div>
                                      <div class="col">
                                        <label for="invMax">Inveniario máximo:</label>
                                        <input type="text" class="form-control" name="invMax">
                                      </div>
                                      <div class="col">
                                        <label for="localizacion">Localización:</label>
                                        <input type="text" class="form-control" name="localizacion">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col">
                                        <label >Impuestos:</label><br>
                                        <label for="otro">IVA:</label>
                                        <input type="checkbox" name="otro">
                                      </div>
                                      <div class="col">
                                        <label for="preCom">Precio de compra:</label>
                                        <input type="text" class="form-control" name="preCom">
                                      </div>
                                      <div class="col">
                                        <label for="preComProm">Precio de compra Prom.:</label>
                                        <input type="text" class="form-control" name="preComProm">
                                      </div>
                                      <div class="col">
                                        <label for="preComProm">Precio de compra Prom.:</label>
                                        <input type="text" class="form-control" name="preComProm">
                                      </div>
                                    </div>
                                    <label for="margen">margen de utilidad:</label>
                                    <input type="text" class="form-control" name="margen">
                                    <label class="mr-sm-2" for="proveedor">Proveedor</label>
                                    <select class="custom-select mr-sm-2" id="proveedor">
                                      <option selected>Elegir</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                  </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Guardar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  
      
</div>

</template>

<script>
  export default {
    mounted() {
      console.log('Articulos mounted.')
    }
  }
</script>