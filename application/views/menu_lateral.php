<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->

    
  </head>

  <body>
    

    <div class="container-fluid"  >

      <div class="row" >
        <nav class="sidebar">
          <div class="sidebar-sticky" style="margin-right: 85%">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="http://localhost/CIBOO" >
                  <span data-feather="home"></span>
                  Inicio <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" >
                  <span data-feather="file"></span>
                  Ventas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" >
                  <span data-feather="file"></span>
                  Ordenes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" >
                  <span data-feather="file"></span>
                  Compras
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" >
                  <span data-feather="file-text"></span>
                  Informes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" >
                  <span data-feather="layers"></span>
                  Insumos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="productos" >
                  <span data-feather="layers"></span>
                  Productos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" >
                  <span data-feather="layers"></span>
                  Provedores
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" >
                  <span data-feather="layers"></span>
                  UCC
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="usuarios" >
                  <span data-feather="settings"></span>
                  Usuarios
                </a>
              </li>
            </ul></div>
                      
                        <?php if($this->session->userdata('login')){?> 
                            <li class="nav-item">
                                      <a class="nav-link" href="<?= base_url() ?>login/logout" >
                                   <span data-feather="settings"></span>
                                       Cerrar Sesion
                                 </a>
                                </li>

                          
                          <?php } else {?>

                       <li >
                      <a  href='login' style="background: none;">INICIAR SESION ... <strong class='caret'></strong></a>
                      <div style='padding: 10px; padding-bottom: 0px; background: none; width: 400px;'>
                        <form action="<?= base_url() ?>login" method='post' accept-charset='UTF-8' role="form">
                          <div class='form-group'>
                            <input class='form-control large' style='text-align: center;' type='text' name='rut' placeholder='usuario'/>
                          </div>
                          <div class='form-group'> 
                            <input class='form-control large' style='text-align: center;' type='password' name='contraseña' placeholder='contraseña' />
                          </div>
                          <div class='form-group'>
                            <button class='btn btn-primary' style='width: 380px;' type='submit'>INGRESAR</button>
                          </div>
                          </form>
                      </div>
                    </li> <?php } ?>
          
        </nav>

        
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>