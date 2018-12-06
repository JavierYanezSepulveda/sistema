<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 

    <title>Crud Usuarios</title>  


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
  <a  href="<?php echo base_url(); ?>usuarios/add"  class= "btn btn-warning">Agregar Usuario </a>
 <table class="table table-bordered" width="100%">
  <thead>
    <tr>
      <th scope="col">RUT</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">CARGO</th>
      <th scope="col">PERFIL</th>

   
   
      <th scope="col">Acciones</th>
     


    </tr>
  </thead>
  <tbody>
   <?php foreach($usuarios as $item):?>
    <tr>
     
      <td ><?php echo $item['RUT'];?></td>
      <td ><?php echo $item['NOMBRE'];?></td>
      <td ><?php echo $item['APELLIDOS'];?></td>
      <td ><?php echo $item['CARGO'];?></td>
      <td ><?php echo $item['ROL'];?></td>

      
      
     <td><a href="<?php echo base_url();?>usuarios/edit?RUT=<?php echo $item['RUT'];?>" >Editar</a> 
         <a href="usuarios/detalle/<?php echo $item['RUT'];?>" class="btn btn-info">detalle</a> 
         <a href="usuarios/eliminar/<?php echo $item['RUT'];?>" class="delete">eliminar</a> 

     </td>

    </tr>  
 <?php endforeach; ?>
  </tbody>


</table>

  <a href="<?php echo base_url(); ?>" class="btn btn-danger" >Volver</a>

<!-- Begin page content -->
</body>
</html>