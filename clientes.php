<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLIENTES</title>
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

<label for="exampleDataList" class="form-label"></label>
<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
<button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>

<body>
    <div class='contenedor'>
    <form action="" method="post">
        <h1>CLIENTES</h1>
        <p>ID</p>
        <input type="number" name="id" id= >
        <p>NOMBRE</p>
        <input type="text" name="nombre" id= >
        <p>APELLIDO</p>
        <input type="text" name="apellido" id= >
        <p>CELULAR</p>
        <input type="number" name="numero" id= >
        <p>CODIGO POSTAL</p>
        <input type="number" name="codigo_postal" id= >
        <input type="submit" name="enviar">

    </form>
    </div>

</body>
</html>
<script src="js/bootstrap.js"></script>
<?php
 if (isset($_POST["enviar"])) {
 include ("conexion.php");
 $_IDENTIFICACION = $_POST["id"];    
 $_NOMBRE = $_POST["nombre"];
 $_APELLIDO = $_POST["apellido"];
 $_CELULAR = $_POST["numero"];
 $_CODIGO_POSTAL = $_POST["codigo_postal"];
 

echo $_IDENTIFICACION;
echo '<br>';
echo $_NOMBRE;
echo '<br>';
echo $_APELLIDO;
echo '<br>';
echo $_CELULAR;
echo '<br>';
echo $_CODIGO_POSTAL;
echo '<br>';



$query="INSERT INTO
        clientes(ID, Nombre, Apellido, 
        Celular, Codigo_postal)
        VALUES('$_IDENTIFICACION','$_NOMBRE','$_APELLIDO',
        '$_CELULAR','$_CODIGO_POSTAL')";

$cons=mysqli_query($mysqli,$query);
     if($cons){
        echo '<br>su registro fue ha sido enviado exitosamente a '.$_NOMBRE;
        echo '<a href="clientes.php">Volver al formulario</a>';
        }else{
            echo'Error de registro';
            echo'<a href="clientes.php">Volver al formulario</a>';
    }
    }else{
            //header('location:clientes.php');
    }

?>
