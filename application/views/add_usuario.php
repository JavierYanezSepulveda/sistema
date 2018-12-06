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
  <div class="container">
      <h2>Gestion de productos</h2>

      <?php defined('BASEPATH') OR exit('No direct script access allowed');?>
      <?php echo validation_errors(); ?>

      <?php echo form_open(base_url().'usuarios/add'); ?>
      <label for="RUT">Rut</label>
       <input type="input" name="RUT" /><br />

       <label for="NOMBRE">Nombre</label>
       <input type="input" name="NOMBRE" /><br />

       <label for="APELLIDOS">Apellidos</label>
       <input type="input" name="APELLIDOS" /><br />

       <label for="CARGO">Cargo</label>
       <input type="input" name="CARGO" /><br />
       
       <label for="CLAVE">Clave</label>
       <input type="input" name="CLAVE" /><br />


       <label>PERFIL</label>
        <select  style = " display:block ; " id="selectPerfil" name ="selectPerfil">
       <?php foreach ($usuarios as $v):?>     
        <option type ="input" name="selectPerfil" value="<?php echo $v["ID_PERFIL"]?> "><?php echo $v["ROL"] ?></option>  
        <?php endforeach ?>  


        <input type="submit" name="submit" value="Añade un Usuario" />

      <?php echo form_close();?>


  </div>
<!-- Begin page content -->
</body>
</html>
