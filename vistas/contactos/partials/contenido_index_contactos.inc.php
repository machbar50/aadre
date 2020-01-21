 <?php
      if ( isset( $_GET["g"] ) ){
    ?>

<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
  <strong>Gracias por Escribirnos</strong> Nos contactaremos a la brevedad
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

 <?php
     }
 ?>

<form id="form-contacto" action="index.php" class="col-md-7 col-lg-4 my-5 p-3">

  <input type="hidden" name="m" value="contactos">
  <input type="hidden" name="a" value="guardar">

  <div class="form-group">
    <label for="nombre">Nombre</label> 
    <input id="nombre" name="nombre" type="text" required="required" class="form-control">
  </div>
  <div class="form-group">
    <label for="localidad">Localidad</label> 
    <input id="localidad" name="localidad" type="text" class="form-control" required="required">
  </div>
  <div class="form-group">
    <label for="email">Email</label> 
    <input id="email" name="email" type="text" class="form-control" required="required">
  </div>
  <div class="form-group">
    <label for="comentario">Comentario</label> 
    <textarea id="comentario" name="comentario" cols="40" rows="5" class="form-control" required="required"></textarea>
  </div> 
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>
