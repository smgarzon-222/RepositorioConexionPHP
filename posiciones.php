<?php include("conexion.php");
    $con=conectar();
    $sql = "SELECT * FROM posiciones";
    
    $query=mysqli_query($con,$sql);
    
    $row=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>posiciones</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Posiciones</h1>
                <h6>Ingrese Datos</h6>
                <form action="insertar.php" method="POST">
                    <input type="text" class="form-control mb-3" name="Id_Posicion" placeholder="ID Posicion">
                    <input type="text" class="form-control mb-3" name="Nombre_Posicion" placeholder="Nombre Posicion">     
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nombre Posicion</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                            <?php
                                while ($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php echo $row['Id_Posicion']?></th>
                                    <th><?php echo $row['Nombre_Posicion']?></th>
                                    <th><a href="actualizar.php?id=<?php echo $row['Id_Posicion'] ?>" class="btn btn-info">Actualizar</a></th>
                                    <th><a href="eliminar.php?id=<?php echo $row['Id_Posicion'] ?>" class="btn btn-danger">Eliminar</a></th>
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