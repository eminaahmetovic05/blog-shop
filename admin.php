
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin Panel</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
    </style>
</head>

<body>
    <h1>Admin Panel</h1>

    <!-- User creation form -->
    <h2>Create a new user</h2>
    <form  method="POST">
        <label>Username:</label>
        <input type="text" name="username">
        <label>Password:</label>
        <input type="password" name="password">
        <input type="submit" name="create_user" value="Create User">
    </form>

    <!-- Shop item creation form -->
    <h2>Create a new shop item</h2>
    <form  method="POST">
        <label>Name:</label>
        <input type="text" name="name">
         <label>Image:</label>
          <input type="file" name="image">
        <label>Price:</label>
        <input type="text" name="price">
        <input type="submit" name="create_item" value="Create Item">
    </form>
</body>

<?php

$host = "localhost";
$db = "maturski";
$name = "root";
$pass = "";
$conn = mysqli_connect(
    hostname: $host,
    username: $name,
    password: $pass,
    database: $db
);
ini_set('display_errors', '0');
// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Generate a secure hash of the password
    


    // Check which form was submitted
    if (isset($_POST['create_user'])) {
       $user_name = $_POST['username'];
       
        $hashedPassword = password_hash($pass1, PASSWORD_DEFAULT);

        // Insert data into the table
        $sql = "INSERT INTO admin (username, passwordd) VALUES ('$user_name', '$hashedPassword')";

        

if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}
mysqli_close($conn);
    } else if (isset($_POST['create_item'])) {
        $shop_name = $_POST['name'];
        $shop_image = $_POST['image'];
        $shop_price = $_POST['price'];

        // insert data into table
        $sql = "INSERT INTO shop(naziv, cijena, slika) VALUES ('$shop_name', '$shop_price', '$shop_image')";

        if (mysqli_query($conn, $sql)) {
            echo "";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>


</html>