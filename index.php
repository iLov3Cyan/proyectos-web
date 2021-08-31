<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mariscos del Mar </title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script> 
    <script src="./DataTable.js"></script>           
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css" /> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>
  <div class="col-6">
<table id="usuarios" class="cell-border">
<thead>
  <tr>
    <th>id</th>
    <th>Usuario</th>
    <th>Clave</th>
    <th>Nivel</th>
    <th>Estado</th>
  </tr>
</thead>
<tfoot>
  <tr>
    <th>id</th>
    <th>Usuario</th>
    <th>Clave</th>
    <th>Nivel</th>
    <th>Estado</th>
  </tr>
</tfoot>
<tbody>
<?php
include_once "connection.php"; 
$sql = "SELECT * FROM usuarios"; 
$query = $connect-> prepare($sql); 
$query -> execute(); 
$results = $query -> fetchAll(PDO::FETCH_OBJ); 
if($query -> rowCount() > 0)   { 
foreach($results as $result) { 
echo "<tr>
<td>".$result -> id."</td>
<td>".$result -> usuario."</td>
<td>".$result -> clave."</td>
<td>".$result -> nivel."</td>
<td>".$result -> estado."</td>
</tr>";
   }
 }
?>
</tbody>
</table>
</div>
</body>
</html>