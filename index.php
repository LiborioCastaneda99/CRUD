<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="CRUD">
    <meta name="keywords" content="HTML, PHP, POO, CRUD">
    <meta name="author" content="Liborio Castañeda Valencia">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <h4 class="text-center">CRUD</h4>
                    <h5 class="text-center">Crear, Leer, Actualizar y Borrar</h5>
                    <h5 class="text-center">Liborio De Jesús Castañeda Valencia</h5>
                    <hr>
                    <div class="col-sm-8"><h2>Listado de  <b>Clientes</b></h2></div>
                    <div class="col-sm-4">
                        <a href="create.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar Clientes</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-fixed">
                    <thead>
                        <tr>
                            <th>Nombres</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>E-mail</th>
                            <th>Profesión</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <?php 
                    include ('database.php');
                    $clientes = new Database();
                    $listado=$clientes->read();
                    ?>
                    <tbody>
                        <?php 
                        while ($row=mysqli_fetch_object($listado)){
                          $id=$row->id;
                          $nombres=$row->nombres." ".$row->apellidos;
                          $telefono=$row->telefono;
                          $direccion=$row->direccion;
                          $email=$row->correo_electronico;
                          $profesion=$row->profesion;
                          ?>
                          <tr>
                            <td><?php echo $nombres;?></td>
                            <td><?php echo $telefono;?></td>
                            <td><?php echo $direccion;?></td>
                            <td><?php echo $email;?></td>
                            <td><?php echo $profesion;?></td>
                            <td>
                              <a href="update.php?id=<?php echo $id;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                              <a href="delete.php?id=<?php echo $id;?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                          </td>
                      </tr>	
                      <?php
                  }
                  ?>
              </tbody>
          </table>
      </div>
  </div>
</div>     
</body>
</html>                            