<?php
// Example PHP page for user registration

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user input (you can add more validation logic)
    $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Save user data to your database (replace with your database logic)
    // Example: Insert into users (username, password) values ('$username', '$password');

    // Redirect to a success page or login page
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .registration-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #e5e5e5;
            outline: none;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #04AA6D;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #40e263;
        }
    </style>
</head>
<body>
    <div class="registration-container">
        <h2>Register</h2>
        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
