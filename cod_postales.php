<?php
include 'conexion.php';
$query="SELECT Nombre FROM proveedores";
$consulta=mysqli_query($mysqli,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CODIGOS POSTALES</title>
    <style>
        .contenedor{
            background-color: #58D68D;
            text-align: center;
        }
    </style>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>CLIENTES</title>
    <style>
        table,tr,td{
            border: 1px solid pink;
            text-align:center;
            margin:auto;
            font-size:22px;
        }
        </style>
</head>
<?php
include 'navbar.php';      
?>  


<body>
    <div class='contenedor'>
        
        <form action="" method="post">
        <select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
         <h1>COD_POSTALES</h1>
         <p>ID</p>
         <input type="number" name="id">
         <p>LOCALIDAD</p>
         <input type="text" name="localidad">
         <p>ID_CLIENTES</p>
         <input type="number" name="id_clientes">
          <input type="submit" name="enviar">  

        </form>
    </div>
</body>
</html>
<script src="js/bootstrap.js"></script>
<?php
 if (isset($_POST["enviar"])) {
 include ("conexion.php");
 $_IDENTIFICACION_POSTAL= $_POST["id"];    
 $_LOCALIDAD = $_POST["localidad"];
 $_ID_CLIENTES = $_POST["id_clientes"];
 

echo $_IDENTIFICACION_POSTAL;
echo '<br>';
echo $_LOCALIDAD;
echo '<br>';
echo $_ID_CLIENTES;

$query="INSERT INTO
        clientes(ID, localidad, id_clientes,)
        VALUES('$_IDENTIFICACION_POSTAL','$_LOCALIDAD',
        '$_ID_CLIENTES',)";

$cons=mysqli_query($mysqli,$query);
if($cons){
   echo '<br>su registro ha sido enviado exitosamente a '.$_LOCALIDAD_;
   echo '<a href="cod_postales.php">Volver al formulario</a>';
   }else{
       echo'Error de registro';
       echo'<a href="cod_postales.php">Volver al formulario</a>';
}
}else{
       //header('location:cod_postales.php');
}
 