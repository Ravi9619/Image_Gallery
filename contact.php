<?php
include 'nav.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<script>
    function show(){
        alert("Your problem is reported succesfully");
    }
</script>
<body>
    <h1>This is contact Page</h1>
    <div class="container">
    <form>
        Email: <input type="email" placeholder="Enter your email"><br><br>
        Problem:<br> <textarea  cols="30" rows="10"></textarea><br><br>
        <input type="submit" value="Submit" onclick="show()">
    </form>
    </div>
    
</body>
</html>