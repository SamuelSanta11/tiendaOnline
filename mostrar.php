
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
            border: 2.5px solid black;
            text-align:center;
            margin:auto;
            font-size:22px;
        }
        </style>
</head>

</svg></button>
<?php
include 'navbar.php';
?>
<form action="" method="POST">
<label for="exampleDataList" class="form-label"></label>
    <input class="form-control" name="buscar" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
    <button class="form-control btn btn" name="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
</form>
<datalist id="datalistOptions">
  <option value="San Francisco">
  <option value="New York">
  <option value="Seattle">
  <option value="Los Angeles">
  <option value="Chicago">
      </datalist>
</div>
<fieldset style="background-color:#58D68D">
 <h1>Mostrar productos</h1>
<table>
    <tr>
        <td>ID</td>
        <td>Marca</td>
        <td>Talla</td>
        <td>Precio</td>
        <td>Inventario</td>
        
        
</tr>
<?php
if(isset($_POST['btn']) && isset($_POST['buscar'])){
include ('conexion.php');
$buscar=$_POST['buscar'];
$query="SELECT * FROM Producto
WHERE marca LIKE '$buscar'";
 // $consulta=$cons->query($query);
$cons= mysqli_query ($mysqli,$query); 
?>
<?php
while ($vec=mysqli_fetch_array($cons)){ ?>
<tr>
    <td><?php echo $vec [0]; ?></td>
    <td><?php echo $vec [1]; ?></td>
    <td><?php echo $vec [2]; ?></td>
    <td><?php echo $vec [3]; ?></td>
    <td><?php echo $vec [4]; ?></td>
    <a href="actproducto.php?doc=<?php echo $vec [0]?>">act</a>
    <a href=""><i class="ri-eraser-line"></i></i></a>
    
</tr>
<?php }}
?>

    
</table>
<script src="js/bootstrap.js"></script>
</body>

</html>