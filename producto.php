<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>MOSTRAR</title>
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
<style>
    .contenedor{
        background-color: #58D68D;
        text-align: center;
    }

</style>


<div class='contenedor'>
    <form action="" method="post">
        <h1>REGISTRO DE PRODUCTO</h1>
        <P>ID</P>
        <input type="number" value="" name="id">
        <p>MARCA</p>
        <input type="text" value="" name="marca" id="">
        <p>TALLA</p>
        <input type="text" value=""name="talla" id="">
        <p>PRECIO</p>
        <input type="number"value=""name="precio" id="">
        <p>INVENTARIO</p>
        <input type="text"value=""name="inventario" id="">
        <input type="submit" name="enviar" id="">
    </form>
</div>
<script src="js/bootstrap.js"></script>
</body>
</html>
<?php
if (isset($_POST["enviar"])) {
    include ("conexion.php");
    $_IDENTIFICACION = $_POST["id"];
    echo '<br>';
    $_MARCA = $_POST["marca"];
    echo '<br>';
    $_TALLA = $_POST["talla"];
    echo '<br>';
    $_PRECIO = $_POST["precio"];
    echo '<br>';
    $_INVENTARIO = $_POST["inventario"];


    echo $_IDENTIFICACION;
    echo '<br>';
    echo $_MARCA;
    echo '<br>';
    echo $_TALLA;
    echo '<br>';
    echo $_PRECIO;
    echo '<br>';
    echo $_INVENTARIO;
    echo '<br>';


    $query="INSERT INTO
           producto (ID,Marca,Talla,Precio,Inventario)
           VALUES('$_IDENTIFICACION','$_MARCA','$_TALLA','$_PRECIO',
           '$_INVENTARIO')";
    $cons=mysqli_query($mysqli,$query);
    if($cons){
        echo'<br>su registro fue enviado exitosamente a'.$_MARCA;
        echo '<a href="producto.php">Volver al formulario</a>';
    }else{
        echo'Error de registro';   
        echo'<a href="producto.php">Volver al formulario</a>';
    }      
    }else{
        //header('location:producto.php');  





}

?>









