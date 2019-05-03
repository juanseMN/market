<html>
  <head>
    <title>Market</title>
  </head>
  <body>
    <table border="0" align="center">
      <form name="frm1" action="insert_prod.php" method="post">

      <center><b><font face="Times new Roman" size="15" color="BLACK">MARKET</font></b></center><br><br><br>
      <tr>
        <td ><font face="Arial" color="BLACK">Codigo Producto</font></td>
        <td ><input type="text" name= "codpro" required></td >
      </tr>

      <tr>
        <td><font face="Arial" color="BLACK">Nombre Producto</font><br></td>
        <td ><input type="text" name= "nomprod" required></td>
      </tr>
      <tr>
        <td ><font face="Arial" color="BLACK">Cantidad:</font></td>
        <td ><input type="text" name= "cantprod"required></td >
      </tr>

      <tr>
      <td><font face="Arial" color="BLACK">Estado</font><br></td>
      <td><select name="estprod">
        <option></option>
        <option value="1">Habilitado</option>
        <option value="0">Deshabilitado</option>
      </select></td>
      </tr>

      <table>
      <br>
      <center><input type="submit" value="Registrarse"></center>
      </table>
  </body>
</html>
<table border=1 align="center">
  <tr><th>CODIGO</th><th>NOMBRE</th><th>CANTIDAD</th><th>.</th><th>..</th></tr>
<?php
// 1. conexion a base de datos
include("database.php");
// 2. crear SQL y guardar datos
$sql="SELECT * FROM productos";
$result = $conn->query($sql);
// 3. mostrar informacion
if ($result->num_rows >0) {
  while ($row = $result->fetch_assoc() ) {
    echo "<tr>";
    echo "<td>".$row["codigo_prod"]."</td>";
    echo "<td>".$row["nombre_prod"]."</td>";
    echo "<td>".$row["cantidad"]."</td>";
    echo "<td><img src='icons/1.png' with ='20'></td>";
    echo "<td><a href = 'delete_product.php?cod=".$row["codigo_prod"]."'><img src='icons/3.png' with ='20'></td>";

    echo "</tr>";

  }
}else {
  echo "::: No hay productos registrados :::";

}
 ?>
