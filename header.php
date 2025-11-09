<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fitbite - Eat Well. Feel Alive.</title>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary: #4caf50;
            --dark: #1b5e20;
            --light: #f5f8f5;
            --text-color: #333;
            --secondary-text: #666;
            --shadow: 0 4px 12px rgba(0,0,0,0.08);
            --border-radius: 10px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: "Poppins", sans-serif; background: #fff; color: var(--text-color); overflow-x: hidden; }

        /* NAVIGATION BAR */
        .navbar {
            background: #fff;
            box-shadow: var(--shadow);
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 999;
        }
        .navbar .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--dark);
            text-decoration: none;
        }
        .nav-group { display: flex; align-items: center; }
        .nav-links { list-style: none; display: flex; margin-right: 30px; }
        .nav-links li { margin-left: 30px; }
        .nav-links a {
            text-decoration: none;
            color: var(--secondary-text);
            font-weight: 500;
            transition: color 0.3s, border-bottom 0.3s;
            padding-bottom: 5px;
        }
        .nav-links a:hover,
        .nav-links a.active {
            color: var(--primary);
            border-bottom: 2px solid var(--primary);
        }

        .auth-buttons a {
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: 500;
            margin-left: 10px;
            transition: 0.3s;
        }
        .auth-buttons .login-btn {
            color: var(--dark);
            border: 1px solid var(--primary);
        }
        .auth-buttons .signup-btn {
            background: var(--primary);
            color: #fff;
            border: 1px solid var(--primary);
        }
        .auth-buttons .login-btn:hover { background: var(--light); }
        .auth-buttons .signup-btn:hover { background: var(--dark); }

        .menu-toggle {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
            color: var(--dark);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-group {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                background: #fff;
                box-shadow: var(--shadow);
                z-index: 998;
            }
            .nav-group.active { display: flex; }
            .nav-links {
                flex-direction: column;
                width: 100%;
                text-align: center;
            }
            .nav-links li { margin: 10px 0; }
            .auth-buttons {
                flex-direction: column;
                padding: 10px 0;
            }
            .auth-buttons a {
                margin: 5px 0;
            }
            .menu-toggle { display: block; }
        }
    </style>
</head>
<body>

<!-- HEADER START -->
<nav class="navbar">
    <a href="index.php" class="logo">Fitbite</a>
    <div class="nav-group" id="navGroup">
        <ul class="nav-links">
            <li><a href="index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Home</a></li>
            <li><a href="about.php" class="<?= $current_page == 'about.php' ? 'active' : '' ?>">About Us</a></li>
            <li><a href="weekly-menu.php" class="<?= $current_page == 'weekly-menu.php' ? 'active' : '' ?>">View Menu</a></li>
            <li><a href="faqs.php" class="<?= $current_page == 'faqs.php' ? 'active' : '' ?>">FAQs</a></li>
            <li><a href="contact.php" class="<?= $current_page == 'contact.php' ? 'active' : '' ?>">Contact</a></li>
        </ul>
        <div class="auth-buttons">
            <a href="login.php" class="login-btn">Login</a>
            <a href="signup.php" class="signup-btn">Sign Up</a>
        </div>
    </div>
    <div class="menu-toggle" id="mobile-menu"><i class="fas fa-bars"></i></div>
</nav>

<script>
const menuToggle = document.getElementById('mobile-menu');
const navGroup = document.getElementById('navGroup');
const icon = menuToggle.querySelector('i');

menuToggle.addEventListener('click', () => {
    navGroup.classList.toggle('active');
    icon.classList.toggle('fa-times');
    icon.classList.toggle('fa-bars');
});
</script>
