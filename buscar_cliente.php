<?php
session_start();
include 'vendor/php/querys.php';
include 'vendor/php/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<!-- Header include-->
<?php $title = "Nuevo Cliente"; 
      include 'vendor/php/includes/header.php' ?>

<body id="page-top">

  <!-- Navbar include -->
  <?php include 'vendor/php/includes/navbar.php' ?>

  <div id="wrapper">

    <!-- Sidebar include-->
    <?php include 'vendor/php/includes/sidebar.php' ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Panel de control</a>
          </li>
          <li class="breadcrumb-item active">Busqueda de Clientes</li>
        </ol>

        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-fw fa-plus-circle"></i>
            Buscar clientes por:</div>
          <div class="card-body">
            <form>
              <div class="form-row">
                <div class="form-group col-md-1 col-sm-3">
                  <label for="inputCuit">CUIT</label>
                  <input type="number" class="form-control" id="inputEmail4" placeholder="" min="1" max="99" maxlength="2">
                </div>
                <div class="form-group col-md-4 col-sm-6">
                  <label for="inputCuit" >&nbsp;</label>
                  <input type="number" class="form-control" id="inputEmail4" placeholder="" min="1" max="99999999">
                </div>
                <div class="form-group col-md-1 col-sm-3">
                  <label for="inputCuit">&nbsp;</label>
                  <input type="number" class="form-control" id="inputEmail4" placeholder="" min="1" max="9">
                </div>
                <div class="form-group col-md-6 col-sm-12">
                  <label for="inputPassword4">Nombre del cliente</label>
                  <input type="text" class="form-control" id="inputCliente" placeholder="Ingrese nombre del cliente">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <label for="inputAddress">Localidad</label>
                  <input type="text" class="form-control" id="inputCiudad" placeholder="Ingresar o seleccionar localidad">
                </div>
                <div class="form-group col-sm-6">
                  <label for="inputAddress2">Actividad</label>
                  <input type="text" class="form-control" id="inputActividad" placeholder="Ingresar o seleccionar actividad">
                </div>
              </div>
              <a href="new_cliente.html"><p>Puede agregar un cliente AQUI</p></a>
              <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
          </div>
        </div>
        
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Clientes encontrados:</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>CUIT</th>
                    <th>Nombre</th>
                    <th>Localidad</th>
                    <th>Actividad</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>CUIT</th>
                    <th>Nombre</th>
                    <th>Localidad</th>
                    <th>Actividad</th>
                  </tr>
                </tfoot>
                <tbody>
                <!--
                 <?php
                 /*   
                  include 'vendor/php/conexion.php';

                  $sql="SELECT * FROM usuarios";
                  $result = mysqli_query($conn,$sql); 
                  
                  while ($row = $result->fetch_assoc()){
                  ?>
                 
                  <tr>
                    <td><?php echo $row['id_usuarios']?></td>
                    <td><?php echo $row['usuario']?></td>
                    <td><?php echo $row['clave']?></td>
                    <td><?php echo $row['roles_id_roles']?></td>
                  </tr>
                  <?php
                    }*/
                    ?>
                  -->
                  <tr>
                    <td>30-71031609-7</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                  </tr>
                  <tr>
                    <td>30-71031609-7</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                  </tr>
                  <tr>
                    <td>30-71031609-7</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                  </tr>
                  <tr>
                    <td>30-71031609-7</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                  </tr>
                  <tr>
                    <td>30-71031609-7</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td>61</td>
                  </tr>
                  <tr>
                    <td>30-71031609-7</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                    <td>59</td>
                  </tr>
                  <tr>
                    <td>30-71031609-7</td>
                    <td>Integration Specialist</td>
                    <td>Tokyo</td>
                    <td>55</td>
                  </tr>
                  <tr>
                    <td>30-71031609-7</td>
                    <td>Javascript Developer</td>
                    <td>San Francisco</td>
                    <td>39</td>
                  </tr>
                  <tr>
                    <td>30-71031609-7</td>
                    <td>Software Engineer</td>
                    <td>Edinburgh</td>
                    <td>23</td>
                  </tr>
                  <tr>
                    <td>30-71031609-7</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>30</td>
                  </tr>
                  <tr>
                    <td>30-71031609-7</td>
                    <td>Support Lead</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Footer include -->            
        <?php include 'vendor/php/includes/footer.php' ?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal include-->
    <?php include 'vendor/php/includes/logout.php'?>

    <!-- Scripts include-->
    <?php include 'vendor/php/includes/scripts.php'?>

</body>

</html>