<?php
include 'nav.php';
include 'dbconnect.php';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $profile = $_POST['designation'];
    $description = $_POST['desc'];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);


    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);


    $sql = "INSERT INTO Performer (name, designation, description, image ) 
        VALUES ('$name', '$profile', '$description', '$target_file')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Data Submitted successfully";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .center{
        margin: auto;
        width: 50%;
        padding: 10px;
    }
</style>

<body>
    <div class="center">
        <form action="home.php" method="POST" enctype="multipart/form-data">
            Name: <input type="text" name="name" id="name"><br><br>
            Profile: <input type="text" name="designation" id="name"><br><br>
            Description: <input type="text" name="desc" id="name"><br><br>
            Image: <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>