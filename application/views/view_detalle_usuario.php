<html>
        <head>
                <title>CodeIgniter Tutorial</title>

                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        </head>
        <body>



  <table class="table table-bordered" width="100%">
  <thead>
    <tr>
      <th scope="col">RUT</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">CARGO</th>
      <th scope="col">PERFIL</th>

   
   
      
     


    </tr>
  </thead>
  <tbody>
 
    <tr>
     
      <td ><?php echo $item['RUT'];?></td>
      <td ><?php echo $item['NOMBRE'];?></td>
      <td ><?php echo $item['APELLIDOS'];?></td>
      <td ><?php echo $item['CARGO'];?></td>
      <td ><?php echo $item['ROL'];?></td>

      
      
    

    </tr>  

  </tbody>


</table>

 <a href="<?php echo base_url();?>usuarios"  class="btn btn-danger">Cerrar</a>

        </body>
</html>