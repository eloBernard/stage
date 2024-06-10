<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #008080; /* Teal color background */
            color: #fff; /* White text color */
        }

        .login {
            width: 80%;
            max-width: 600px;
            margin: 100px auto;
            text-align: center;
        }

        h1 {
            margin-top: 0;
        }

        p {
            margin-top: 10px;
        }

        a {
            color: #fff;
            text-decoration: none;
            border-bottom: 1px solid #fff;
        }

        a:hover {
            border-bottom: 1px solid transparent;
        }
    </style>
</head>
<body>
    <div class="login">
        <?php
        // Example PHP code to handle login functionality

        // Check if the user is logged in (you can customize this logic)
        $isLoggedIn = false; // Set to true if the user is logged in

        // Example user data (replace with your actual user data from the database)
        $loggedInUser = [
            'username' => 'john_doe',
            'email' => 'john@example.com',
        ];

        // Display login or user information
        if ($isLoggedIn) {
            echo "<h1>Welcome, {$loggedInUser['username']}!</h1>";
            echo "<p>Email: {$loggedInUser['email']}</p>";
            echo "<a href='logout.php'>Logout</a>";
        } else {
            echo "<h1>Login or Register</h1>";
            echo "<p>Not logged in. Please <a href='login.php'>login</a> or <a href='register.php'>register</a>.</p>";
        }
        ?>
    </div>
</body>
</html>