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
      <form action="" method="post">
          
          <div class="row">
              <div class="col colxs-6">
                  <div class="input-group form-group"></div>
                  <span class="input-group-addon">Titulo</span>
                  <input type="text" name="nombre" class="form-control" value="" placeholder="nombre">
              </div>


              <div class="col colxs-6">
                  <div class="input-group form-group"></div>
                  <span class="input-group-addon">Precio</span>
                  <input type="text" name="precio" class="form-control" value="" placeholder="Precio">
              </div>

          </div>


           <button type="submit" class="btn btn-success">Registrar</button>
 <a href="productos"  class="btn btn-danger">Cerrar</a>
      </form>


  </div>
<!-- Begin page content -->
</body>
</html>