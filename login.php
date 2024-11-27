<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>LOGIN</title>
</head>

<body>
    <div class="login-container">
        <h1>Login</h1>
        <form>
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="passwordd" name="passwordd"><br><br>
            <button type="button" id="loginBtn" onclick="window.location.href='index.html'">Login</button>
            <button type="button" id="adminBtn" onclick="window.location.href='admin.php'">Open Admin Panel</button>
        </form>
    </div>
 
  



<?php

$host = "localhost";
$db = "maturski";
$name = "root";
$pass = "";
$conn = mysqli_connect($host, $name, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST['username'];
    $password = $_POST['password'];

    // Prepare the query
    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ?");
    $stmt->bind_param("s", $user_name);

    // Execute the query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if a row with the given username exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $row['passwordd'])) {
            // Password is correct, user is logged in

            // Redirect to index.html
            header("Location: index.html");
            exit();
        }
    }

    // If the code reaches this point, the login was not successful
    echo "Invalid username or password";
}

?>


</body>

</html>