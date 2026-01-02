<?php
// Initialize session (required for storing user info or messages)
session_start();

// Define error/success messages
$error_message = '';
$success_message = '';
$name = '';
$email = '';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Sanitize and retrieve user input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $confirm_password = htmlspecialchars(trim($_POST['confirm_password']));
    
    // 2. Server-side validation checks
    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        $error_message = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid email format.";
    } elseif (strlen($password) < 6) {
        $error_message = "Password must be at least 6 characters long.";
    } elseif ($password !== $confirm_password) {
        $error_message = "Passwords do not match.";
    } else {
        // If all validations pass — success message
        $success_message = "Account created successfully!";
        // (Optional) Save to database here
        // e.g. include('db.php'); and run INSERT query
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitbite | Create Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />

    <style>
        :root {
            --primary: #4caf50;
            --dark: #1b5e20;
            --bg: #f9f8f4;
            --text-color: #333;
            --secondary-text: #666;
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
        .signup-container {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: var(--shadow);
            width: 100%;
            max-width: 450px;
            text-align: center;
        }
        .signup-container h2 {
            color: var(--dark);
            margin-bottom: 5px;
            font-size: 2rem;
            font-weight: 700;
        }
        .signup-container p {
            color: var(--secondary-text);
            margin-bottom: 30px;
            font-weight: 500;
        }
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
        .form-group input {
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
            margin-top: 10px;
        }
        .btn-submit:hover {
            background: var(--dark);
        }
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
        .signup-footer-links {
            margin-top: 25px;
            font-size: 0.9rem;
        }
        .signup-footer-links a {
            color: var(--primary);
            text-decoration: none;
            transition: color 0.3s;
            font-weight: 600;
        }
        .signup-footer-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Start Your Fitbite Journey</h2>
        <p>Create your account in just a few simple steps.</p>

        <?php 
        if ($error_message) {
            echo '<div class="message error">' . $error_message . '</div>';
        } elseif ($success_message) {
            echo '<div class="message success">' . $success_message . '</div>';
        }
        ?>

        <form method="POST" action="signup.php">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required placeholder="John Doe" value="<?php echo htmlspecialchars($name); ?>">
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required placeholder="name@example.com" value="<?php echo htmlspecialchars($email); ?>">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="At least 6 characters">
            </div>
            
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required placeholder="Re-enter password">
            </div>
            
            <button type="submit" class="btn-submit">Create Account</button>
        </form>

        <div class="signup-footer-links">
            <span>Already have an account?</span> 
            <a href="login.php">Login here</a>
        </div>
    </div>
</body>
</html>
