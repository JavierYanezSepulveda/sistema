<html>
        <head>
                <title>CodeIgniter Tutorial</title>

                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        </head>
        <body>



    <table class="table table-bordered" width="100%">
  <thead>
    <tr>
      <th scope="col">Registro</th>
      <th scope="col">Titulo</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td ><?php echo $item['ID'];?></td>
      <td ><?php echo $item['NOMBRE'];?></td>
      <td ><?php echo $item['PRECIO'];?></td>
    </tr>  

  </tbody>


</table>

 <a href="<?php echo base_url();?>productos"  class="btn btn-danger">Cerrar</a>

        </body>
</html>