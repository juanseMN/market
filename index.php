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
