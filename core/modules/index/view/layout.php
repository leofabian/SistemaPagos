<?php
if(!isset($_SESSION["user_id"])){
  if(isset($_GET["view"]) && $_GET["view"]!=""){
    Core::redir("./");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>.: Pagos - ASI 2 :.</title>

    <!-- Bootstrap core CSS -->
    <link href="res/bootstrap3/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script src="js/jquery-1.10.2.js"></script>

  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">Pagos ASI 2 <sup><small><span class="label label-primary">Avance #4</span></small></sup> </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
<?php 
$u=null;
if(isset($_SESSION["user_id"]) &&$_SESSION["user_id"]!=""):
  $u = UserData::getById($_SESSION["user_id"]);
?>
          <ul class="nav navbar-nav side-nav">
          <li><a href="index.php?view=home"><i class="fa fa-home"></i> Inicio</a></li>
          <li><a href="index.php?view=empleado"><i class="fa fa-smile-o"></i> Empleados </a></li>
          <li><a href="index.php?view=pagar"><i class="glyphicon glyphicon-usd"></i> Realizar Pago</a></li>
          <li><a href="index.php?view=aguinaldo"><i class="glyphicon glyphicon-usd"></i> Pago Aguinaldos </a></li>
           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Reportes <b class="caret"></b></a>
              <ul class="dropdown-menu">
          <li><a href="report/RepPagos.php"><i class="fa fa-area-chart"></i> Reporte de Pagos</a></li>
          <li><a href="report/RepEmpleados.php"><i class="fa fa-th-list"></i> Reporte de Empleados</a></li>
              </ul>
            </li>
          <?php if($u->is_admin):?>
          <li><a href="index.php?view=users"><i class="fa fa-users"></i> Usuarios </a></li>
          <li><a href="index.php?view=configuraciones"><i class="fa fa-users"></i> Configuraciones </a></li>
        <?php endif;?>
          </ul>
<?php endif;?>->



<?php if(isset($_SESSION["user_id"]) && $_SESSION["user_id"]!=""):?>
<?php 
$u=null;
if( isset($_SESSION["user_id"]) && $_SESSION["user_id"]!=""){
  $u = UserData::getById($_SESSION["user_id"]);
  $user = $u->name." ".$u->lastname;

  }?>
          <ul class="nav navbar-nav navbar-right navbar-user">
         

            <li class="dropdown user-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <?php echo $user; ?> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <!-- <li><a href="index.php?view=configuration">Configuracion</a></li> -->
          <li><a href="logout.php">Salir</a></li>
        </ul>
        </li>
        </ul>
<?php else:?>
<?php endif; ?>




        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

<?php 
  // puedo cargar otras funciones iniciales
  // dentro de la funcion donde cargo la vista actual
  // como por ejemplo cargar el corte actual
  View::load("login");
?>

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->

<script src="res/bootstrap3/js/bootstrap.min.js"></script>


  </body>
</html>
