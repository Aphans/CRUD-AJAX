<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD PHP usando AJAX jQuery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<br>
<div class="card">
  <div class="card-header">
    CRUD PHP usando AJAX jQuery
  </div>
  <div class="card-body">
  
 <form class="form-horizontal" id="clienteForm">
  	<div class="form-group row">
      <label class="control-label col-sm-2" for="nombre">Nombre:</label>
      <div class="col-sm-10">          
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese nombre">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Ingrese email" name="email">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-2" for="pais">Pais:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pais" placeholder="Ingrese pais" name="pais">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-2" for="pais">Password:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" placeholder="Ingrese password" name="pwd">
      </div>
    </div>
    <div class="form-group row">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" id="registro">Registrar cliente</button>
      </div>
    </div>
  </form>

  </div>
</div>
 

  <div id="tableData">
  		
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" id="exampleModalLabel"><b>Editar cliente</b></h2>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div id="editarForm"> 
               
            </div>
          </div>
      </div>
  </div> 
</div>
<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>