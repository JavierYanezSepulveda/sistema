<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 

    <title>Crud Productos</title>  


    <!-- Bootstrap core CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('¿Está seguro que desea eliminar este elemento?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>
</head> 
<body>     
  <a  href="<?php echo base_url(); ?>/productos/add"  class= "btn btn-warning">Agregar Productos </a>
 <table class="table table-bordered" width="100%">
  <thead>
    <tr>
      <th scope="col">Registro</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio venta</th>
      <th scope="col">Insumo</th>
      <th scope="col">Sucursal</th>
      <th scope="col">Estado</th>
     <th scope="col">Acciones</th>


    </tr>
  </thead>
  <tbody>
   <?php foreach($productos as $item):?>
    <tr>
     
      <td ><?php echo $item['ID_PRODUCTO'];?></td>
      <td ><?php echo $item['NOMBRE'];?></td>
      <td ><?php echo $item['PRECIO_V'];?></td>
      <td ><?php echo $item['NOMBRE_I'];?></td>
      <td ><?php echo $item['NOMBRE_S'];?></td>
      <td ><?php echo $item['ESTADO'];?></td>


      
      
     <td><a href="<?php echo base_url();?>productos/edit?ID_PRODUCTO=<?php echo $item['ID_PRODUCTO'];?>" >Editar</a> 
         <a href="productos/detalle/<?php echo $item['ID_PRODUCTO'];?>" class="btn btn-info">detalle</a> 
         <a href="productos/eliminar/<?php echo $item['ID_PRODUCTO'];?>" class="delete">eliminar</a> 

     </td>

    </tr>  
 <?php endforeach; ?>
  </tbody>


</table>

  <a href="<?php echo base_url(); ?>" class="btn btn-danger" >Volver</a>

<!-- Begin page content -->
</body>
</html>