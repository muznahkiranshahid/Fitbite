<?php
// Initialize session (required for storing user info or messages)
session_start();

// Define error/success messages
$error_message = '';
$success_message = '';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Sanitize and retrieve user input
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    
    // 2. Simple validation check (Client-side validation is also needed)
    if (empty($email) || empty($password)) {
        $error_message = "Please enter both email and password.";
    } else {
        /*
        |---------------------------------------------------------
        | PLACEHOLDER FOR AUTHENTICATION LOGIC (Database Connection)
        |---------------------------------------------------------
        
        // Example: Connect to the database (Replace with actual connection details)
        // $conn = new mysqli("localhost", "username", "password", "fitbite_db");
        // if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
        
        // Example: Check credentials against a placeholder (Replace with DB query)
        if ($email == "test@fitbite.com" && $password == "password123") {
            // Success! Set session variables and redirect
            $_SESSION['user_logged_in'] = true;
            $_SESSION['user_email'] = $email;
            $success_message = "Login successful! Redirecting...";
            
            // Redirect to the dashboard or home page after a short delay
            header("Refresh: 2; url=index.php"); // Redirect after 2 seconds
            exit();
            
        } else {
            // Authentication failed
            $error_message = "Invalid email or password.";
        }
        
        // $conn->close();
        */

        // For this demo, using a simple fixed check:
        if ($email == "test@fitbite.com" && $password == "password123") {
            $_SESSION['user_logged_in'] = true;
            $_SESSION['user_email'] = $email;
            $success_message = "Login successful! Redirecting to Home...";
            header("Refresh: 2; url=index.php");
            exit();
        } else {
            $error_message = "Invalid email or password.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitbite | User Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />

    <style>
        /* --- CSS STYLES --- */
        :root {
            --primary: #4caf50; /* Green */
            --dark: #1b5e20; /* Darker Green */
            --bg: #f9f8f4;
            --text-color: #333;
            --shadow: 0 8px 25px rgba(0,0,0,0.1);
            --error-red: #e74c3c;
            --success-green: #2ecc71;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: "Poppins", sans-serif;
            background: var(--bg);
            color: var(--text-color);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        
        /* Main Login Container */
        .login-container {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: var(--shadow);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        
        .login-container h2 {
            color: var(--dark);
            margin-bottom: 5px;
            font-size: 2rem;
            font-weight: 700;
        }
        .login-container p {
            color: var(--secondary-text);
            margin-bottom: 30px;
            font-weight: 500;
        }

        /* Form Styling */
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--dark);
            font-weight: 600;
            font-size: 0.95rem;
        }
        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .form-group input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.2);
            outline: none;
        }

        /* Submit Button */
        .btn-submit {
            width: 100%;
            padding: 12px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }
        .btn-submit:hover {
            background: var(--dark);
        }

        /* Messages */
        .message {
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-weight: 600;
            text-align: center;
        }
        .error {
            background: #fdd;
            color: var(--error-red);
            border: 1px solid var(--error-red);
        }
        .success {
            background: #dff0d8;
            color: var(--success-green);
            border: 1px solid var(--success-green);
        }
        
        /* Footer Links */
        .login-footer-links {
            margin-top: 25px;
            font-size: 0.9rem;
        }
        .login-footer-links a {
            color: var(--primary);
            text-decoration: none;
            transition: color 0.3s;
            font-weight: 500;
        }
        .login-footer-links a:hover {
            text-decoration: underline;
        }

        /* Separator */
        .separator {
            margin: 10px 5px;
            color: #ccc;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Welcome Back!</h2>
        <p>Log in to access your personalized meal plan.</p>

        <?php 
        // Display messages if they exist
        if ($error_message) {
            echo '<div class="message error">' . $error_message . '</div>';
        } elseif ($success_message) {
            echo '<div class="message success">' . $success_message . '</div>';
        }
        ?>

        <form method="POST" action="login.php">
            
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required placeholder="name@example.com">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="••••••••">
            </div>
            
            <button type="submit" class="btn-submit">Login</button>
        </form>

        <div class="login-footer-links">
            <a href="forgot_password.php">Forgot Password?</a>
            <span class="separator">|</span>
            <span>Don't have an account?</span> 
            <a href="signup.php">Sign Up</a>
        </div>
    </div>
</body>
</html>