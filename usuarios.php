<!doctype html>
<?php
include("conexion.php");
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Clientes</title>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="homeadmin.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="usuarios.php">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rutinas.php">Planes</a>
        </li>

      </ul>
    </div>
  </nav>
</head>
<body>
  <h1>CLIENTES</h1>
  <?php

  $con=conectar();
  $sql="SELECT * FROM usuarios";
  $result=mysqli_query($con,$sql);

  ?>
  <table class="table table-hover">
    <form class="" action="registrar.php" method="post">
      Nuevo usuario
      <input type="text" name="user" placeholder="Usuario">
      <input type="password" name="pass" placeholder="Password">
      <input type="text" name="rol" placeholder="admin/cliente">
      <input type="submit" value="CREAR">
    </form>
    <br>
    <br>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Usuarios</th>
        <th scope="col">Modificar</th>
        <th scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($file=mysqli_fetch_array($result)) {
        ?>
        <tr>
          <th scope="row"><?php echo $file ['id'] ?></th>
          <td><?php echo $file ['user']  ?></td>
          <td> <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalmodificar<?php echo $file ['id'] ?>"> Modificar </a></td>
          <td> <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modaleliminar<?php echo $file ['id'] ?>"> Eliminar </a> </td>

        </tr>
        <div class="modal fade" id="modaleliminar<?php echo $file ['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ¿Está seguro de eliminar el usuario <?php echo $file ['user']  ?> ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="eliminar.php?id=<?php echo $file ['id'] ?>" class="btn btn-danger">Eliminar</a>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="modalmodificar<?php echo $file ['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe2" aria-hidden="true">
          <form class="" action="mod_usuario.php?id=<?php echo $file['id']; ?>" method="post">
            <div class="modal-dialog" role="document">

              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabe2">Modificar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  
                  Ussuario:<input type="text" name="user" value="<?php echo $file ['user']  ?>"><br>
                  Password:<input type="password" name="pass" value="<?php echo $file ['pass']  ?>"><br>
                  Rol:<input type="text" name="rol" value="<?php echo $file ['rol']  ?>"><br>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary" data-dismiss="modal">Guardar</button>
                </div>

              </div>

            </div>
          </form>
        </div>

        <?php
      }
      ?>

    </tbody>
  </table>

  <!-- Modal -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
