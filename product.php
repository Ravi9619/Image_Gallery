<?php
include 'nav.php';
include 'dbconnect.php';
?>

<html>
    <head>
    <style>
       table,tr,th,td{
        border: 1px solid black;
       }  
    </style>
    </head>
<body>        
<?php
include 'dbconnect.php';
?>

<table id="bd">
    <tr id="bd1">
        <th>Name</th>
        <th>Designation</th>
        <th>Description</th>
        <th>Image</th>
    </tr>


<?php
$sql = "SELECT * FROM Performer";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);


echo "<br>";
$sql1 = "SELECT * FROM Performer";
    $result1 = mysqli_query($conn, $sql1);
    while($row = $result1->fetch_assoc()) {
       echo "<tr>
       <td>".$row['name']."</td>     
       <td>".$row['designation']."</td>
        <td>".$row['description']."</td>
        <td><img src='".$row['image']."' height='100' width='100'</td>
       </tr>";
        echo "<br>";
    }

?>









































