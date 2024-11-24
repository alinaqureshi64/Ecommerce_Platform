<?php
// PHP: Database Connection and Form Submission Logic
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // Hash the password for security
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    // Insert user data into the 'users' table
    $sql = "INSERT INTO users (username, contact, email, password) 
            VALUES ('$user', '$contact', '$email', '$hashed_password')";

    if (mysqli_query($connect, $sql)) {
        echo "<script>alert('Signup successful!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }

    // Close connection
    mysqli_close($connect);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 350px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .card:hover {
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.3);
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .input-field:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .card-footer {
            margin-top: 10px;
            font-size: 14px;
        }
        
        .card-footer a {
            color: #007bff;
            text-decoration: none;
        }

        .card-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Signup Form</h2>
    <form method="POST" action="">
        <input class="input-field" type="text" name="username" placeholder="Username" required><br>
        <input class="input-field" type="text" name="contact" placeholder="Contact" required><br>
        <input class="input-field" type="email" name="email" placeholder="Email" required><br>
        <input class="input-field" type="password" name="password" placeholder="Password" required><br>
        <input class="btn" type="submit" value="Sign Up">
    </form>
    <div class="card-footer">
        Already have an account? <a href="#">Login here</a>
    </div>
</div>

</body>
</html>
