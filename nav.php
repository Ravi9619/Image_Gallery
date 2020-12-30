<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<style>
    .navbar{
        background-color: black;
        width: 100%;
    }
    .navbar ul{
        overflow: hidden;
    }
    .navbar li{
        float: left;
        list-style-type: none;
        margin: 15px 15px;
    }
    .navbar li a{
        padding: 20px 20px;
        text-decoration: none;
        color: white;
    }
    .navbar li a:hover{
        color: gold;
        background-color: skyblue;
    }
</style>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>