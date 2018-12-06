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

       <label for="PRECIO">Precio</label>
       <input type="input" name="PRECIO_V" /><br />

       <label>Sucursal</label>
        <select  class="form-control" style = " display:block ; " id="selectSucursal" name ="selectSucursal">
       <?php foreach ($sucursales as $v):?>     
        <option type ="input" name="selectSucursal" value="<?php echo $v["ID_SUCURSAL"]?> "><?php echo $v["NOMBRE_S"] ?></option> <br /> 
        <?php endforeach ?> 
            </select>
       
        
        <p for ="selectEstado">Estado</p>
            <select class="form-control" id="selectEstado"name="selectEstado" >
                <option  value=" ">-- Seleccione una opcion --</option>
                <option  type ="input"value="Activo">Activo</option>
                <option  type ="input"value="Inactivo">Inactivo</option>
               
         </select><br />
         

   
  


       <label>Insumo</label>
        <select  class="form-control"  id="selectInsumo" name ="selectInsumo">
       <?php foreach ($insumos as $v):?>     
        <option type ="input" name="selectInsumo" value="<?php echo $v["ID_INSUMO"]?> "><?php echo $v["NOMBRE_I"] ?></option>  <br />
        <?php endforeach ?> </select>
        <input type="submit" name="submit" value="Añade un producto" />

      <?php echo form_close();?>


  </div>
<!-- Begin page content -->
</body>
</html>


