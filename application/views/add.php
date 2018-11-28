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

      <?php echo form_open(base_url().'productos/add'); ?>

       <label for="NOMBRE">Nombre</label>
       <input type="input" name="NOMBRE" /><br />

       <label for="PRECIO">PRECIO</label>
       <input type="input" name="PRECIO" /><br />

       <label for="ID">ID</label>
       <input type="input" name="ID" /><br />

        <input type="submit" name="submit" value="Añade un producto" />

      <?php echo form_close();?>


  </div>
<!-- Begin page content -->
</body>
</html>


