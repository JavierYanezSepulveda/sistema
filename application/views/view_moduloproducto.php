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
</head> 
<body>     
  <a  href="productos/add"  class= "btn btn-warning">Agregar Productos </a>
 <table class="table table-bordered" width="100%">
  <thead>
    <tr>
      <th scope="col">Registro</th>
      <th scope="col">Titulo</th>
      <th scope="col">Precio</th>
      <th scope="col">Acciones</th>
     


    </tr>
  </thead>
  <tbody>
   <?php foreach($productos as $item):?>
    <tr>
     
      <td ><?php echo $item['ID'];?></td>
      <td ><?php echo $item['NOMBRE'];?></td>
      <td ><?php echo $item['PRECIO'];?></td>
      
     <td><a href="<?php echo base_url();?>productos/edit?ID=<?php echo $item['ID'];?>" >Editar</a> 
         <a href="productos/detalle/<?php echo $item['ID'];?>" class="btn btn-info">detalle</a> 
         <a href="productos/eliminar/<?php echo $item['ID'];?>" class="btn btn-danger">eliminar</a> 

     </td>
   
    </tr>  
 <?php endforeach; ?>
  </tbody>


</table>

  <a href="<?php echo base_url(); ?>" class="btn btn-danger" >Volver</a>

<!-- Begin page content -->
</body>
</html>