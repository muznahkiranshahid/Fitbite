<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fitbite - Eat Well. Feel Alive.</title>
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
        body {
            font-family: "Poppins", sans-serif;
            background: #fff;
            color: var(--text-color);
            overflow-x: hidden;
        }

        #header-placeholder { position: sticky; top: 0; z-index: 999; }

        /* NAVIGATION BAR STYLES */
        .navbar {
            background: #fff;
            box-shadow: var(--shadow);
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--dark);
            text-decoration: none;
            letter-spacing: -0.5px;
        }
        .navbar .nav-group {
            display: flex;
            align-items: center;
        }
        .navbar .nav-links {
            list-style: none;
            display: flex;
            margin-right: 30px; 
        }
        .navbar .nav-links li {
            margin-left: 30px;
        }
        .navbar .nav-links a {
            text-decoration: none;
            color: var(--secondary-text);
            font-weight: 500;
            transition: color 0.3s, border-bottom 0.3s;
            padding-bottom: 5px;
        }
        .navbar .nav-links a:hover,
        .navbar .nav-links a.active {
            color: var(--primary);
            border-bottom: 2px solid var(--primary);
        }
        .menu-toggle {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
            color: var(--dark);
        }

        /* NEW: AUTH BUTTONS STYLES */
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
        .auth-buttons .login-btn:hover {
            background: var(--light);
        }
        .auth-buttons .signup-btn {
            background: var(--primary);
            color: #fff;
            border: 1px solid var(--primary);
        }
        .auth-buttons .signup-btn:hover {
            background: var(--dark);
        }
        
        /* SHARED SECTION STYLES */
        .section-padding { padding: 100px 8%; }
        .section-title { font-size: 2.5rem; color: var(--dark); margin-bottom: 10px; }
        .section-subtitle { margin: 10px 0 40px; color: var(--secondary-text); font-weight: 500; }

        /* HERO SECTION */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 120px 8%;
            background: linear-gradient(135deg, var(--primary) 30%, #e8f5e9 70%);
            color: #fff;
            min-height: 80vh;
        }
        .hero-content { flex: 1 1 45%; }
        .hero h1 { font-size: 4rem; font-weight: 800; line-height: 1.1; }
        .hero p { margin: 25px 0; font-size: 1.2rem; color: #f3f3f3; }
        .cta {
            background: #fff;
            color: var(--dark);
            padding: 15px 40px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .cta:hover { background: var(--dark); color: #fff; transform: translateY(-2px); }

        /* SLIDER */
        .dish-slider {
            flex: 1 1 45%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }
        .dish-circle {
            position: relative;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            border: 2px dashed rgba(255,255,255,0.6);
            animation: spin 30s linear infinite;
        }
        .dish-main {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            width: 220px; height: 220px;
            border-radius: 50%; overflow: hidden;
            border: 5px solid #fff;
            z-index: 2;
            box-shadow: var(--shadow);
        }
        .dish-main img { width: 100%; height: 100%; object-fit: cover; }
        .small-dish {
            position: absolute; width: 90px; height: 90px;
            border-radius: 50%; overflow: hidden;
            border: 3px solid #fff; cursor: pointer;
            transition: 0.3s; box-shadow: var(--shadow);
        }
        .small-dish:hover { transform: scale(1.1); }
        .small-dish img { width: 100%; height: 100%; object-fit: cover; }
        .dish-1 { top: 0; left: 50%; transform: translate(-50%, -50%); }
        .dish-2 { top: 25%; right: 0; transform: translate(50%, -50%); }
        .dish-3 { bottom: 25%; right: 0; transform: translate(50%, 50%); }
        .dish-4 { bottom: 0; left: 50%; transform: translate(-50%, 50%); }
        .dish-5 { bottom: 25%; left: 0; transform: translate(-50%, 50%); }
        .dish-6 { top: 25%; left: 0; transform: translate(-50%, -50%); }
        @keyframes spin { from{transform:rotate(0)} to{transform:rotate(360deg)} }

        /* HOW IT WORKS */
        .how-it-works { background: #fff; text-align: center; }
        .steps-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 50px;
            gap: 30px;
        }
        .step-card {
            max-width: 300px;
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            background: var(--light);
            text-align: center;
        }
        .step-card .icon {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 15px;
        }
        .step-card h3 { color: var(--dark); margin-bottom: 10px; }
        .step-card p { color: var(--secondary-text); }


        /* FEATURES/SERVICES */
        .features-section { background: var(--light); text-align: center; }
        .features-grid {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            margin-top: 50px;
        }
        .feature-card {
            max-width: 300px;
            background: #fff;
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            transition: transform 0.3s;
            border-top: 4px solid var(--primary);
        }
        .feature-card:hover { transform: translateY(-5px); }
        .feature-card i {
            font-size: 3rem;
            color: var(--dark);
            margin-bottom: 15px;
        }
        .feature-card h3 { color: var(--dark); margin-bottom: 10px; }
        .feature-card p { color: var(--secondary-text); font-size: 0.95rem; }


        /* WHY CHOOSE US */
        .why-us {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 100px 8%;
            flex-wrap: wrap;
            background: #fff;
        }
        .why-content { flex: 1 1 45%; }
        .why-content h2 { font-size: 2.5rem; color: var(--dark); margin-bottom: 15px; }
        .why-content p { color: var(--secondary-text); line-height: 1.7; }
        .why-imgs {
            flex: 1 1 45%;
            display: flex;
            justify-content: center;
        }
        .why-imgs img {
            width: 100%;
            max-width: 500px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        /* REVIEWS */
        .reviews {
            text-align: center;
            padding: 100px 8%;
            background: var(--light);
        }
        .review-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 25px;
        }
        .review {
            background: #fff;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 30px;
            width: 300px;
            transition: 0.3s;
        }
        .review:hover { transform: translateY(-5px); }
        .review .stars { color: var(--primary); margin-bottom: 10px; }
        .review p { color: var(--secondary-text); font-style: italic; }

        /* CTA SECTION */
        .final-cta {
            background: var(--primary);
            color: #fff;
            text-align: center;
            padding: 60px 8%;
        }
        .final-cta h2 { font-size: 2rem; margin-bottom: 15px; }
        .final-cta p { font-size: 1.1rem; margin-bottom: 30px; }
        .final-cta .cta {
            background: #fff;
            color: var(--dark);
        }
        .final-cta .cta:hover {
            background: var(--dark);
            color: #fff;
        }

        /* FOOTER STYLES */
        .footer {
            background: var(--dark);
            color: #fff;
            padding: 50px 8% 20px;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        .footer h4 {
            font-size: 1.2rem;
            color: #fff;
            margin-bottom: 20px;
            border-bottom: 2px solid var(--primary);
            padding-bottom: 5px;
            display: inline-block;
        }
        .footer-logo {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 15px;
        }
        .footer p {
            color: #fff;
        }
        .footer-links {
            list-style: none;
        }
        .footer-links li {
            margin-bottom: 10px;
        }
        .footer-links a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }
        .footer-links a:hover {
            color: var(--primary);
        }
        .social-icons a {
            color: #fff;
            font-size: 1.5rem;
            margin-right: 15px;
            transition: color 0.3s;
        }
        .social-icons a:hover {
            color: var(--primary);
        }
        .footer-bottom {
            text-align: center;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
            font-size: 0.9rem;
            color: #ccc;
        }
        
        /* ----------------------------------- */
        /* RESPONSIVE MEDIA QUERIES (Mobile) */
        /* ----------------------------------- */

        @media (max-width: 768px) {
            .navbar { padding: 15px 5%; }
            /* Mobile menu container */
            .navbar .nav-group {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px; /* Adjust based on navbar height */
                left: 0;
                width: 100%;
                background: #fff;
                box-shadow: var(--shadow);
                padding: 10px 0;
                z-index: 998;
                align-items: flex-start;
            }
            .navbar .nav-group.active { display: flex; }

            .navbar .nav-links {
                flex-direction: column;
                width: 100%;
                margin: 10px 0 20px 0;
                padding: 0;
                border-bottom: 1px solid var(--light);
            }
            .navbar .nav-links li {
                margin: 0;
                width: 100%;
                text-align: center;
                border-top: 1px solid var(--light);
            }
            .navbar .nav-links a {
                display: block;
                padding: 12px 20px;
                border-bottom: none;
            }
            .navbar .nav-links a:hover,
            .navbar .nav-links a.active {
                background: var(--light);
                border-bottom: none;
            }
            .auth-buttons {
                display: flex;
                flex-direction: column;
                width: 100%;
                padding: 0 20px 10px;
            }
            .auth-buttons a {
                margin: 5px 0;
                text-align: center;
            }
            .menu-toggle { display: block; }
            
            .section-padding { padding: 60px 5%; }

            .hero { 
                flex-direction: column; 
                text-align: center;
                padding: 80px 5%; 
            }
            .hero-content { flex: 1 1 100%; }
            .hero h1 { font-size: 3rem; }
            .hero p { font-size: 1rem; }

            .dish-slider { margin-top: 40px; }
            .dish-circle { width: 300px; height: 300px; }
            .dish-main { width: 150px; height: 150px; }
            .small-dish { width: 70px; height: 70px; }
            
            .why-us { flex-direction: column; text-align: center; }
            .why-content { flex: 1 1 100%; margin-bottom: 30px; }
            .why-imgs { flex: 1 1 100%; }

            .steps-container, .features-grid, .review-cards {
                gap: 20px;
                justify-content: center;
            }
            .step-card, .feature-card, .review {
                max-width: 90%;
                width: 100%;
            }
            
            .final-cta h2 { font-size: 1.5rem; }
            .final-cta p { font-size: 1rem; }

            .footer-grid {
                grid-template-columns: 1fr;
                text-align: center;
            }
            .footer h4 { 
                display: block; 
                border-bottom: none;
                margin-top: 20px;
            }
        }
        
        @media (max-width: 480px) {
            .hero h1 { font-size: 2.5rem; }
            .dish-circle { width: 250px; height: 250px; }
            .dish-main { width: 120px; height: 120px; }
            .small-dish { width: 50px; height: 50px; }
        }

    </style>
</head>
<body>
    <div id="header-placeholder">
        <?php
        $current_page = basename($_SERVER['PHP_SELF']);
        if ($current_page == 'index.php' || $current_page == '') {
            $current_page = 'index.php';
        }
        ?>
        <nav class="navbar">
            <a href="index.php" class="logo">Fitbite</a>
            
            <div class="nav-group" id="navGroup">
                <ul class="nav-links">
                    <li><a href="index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Home</a></li>
                    <li><a href="about.php" class="<?= $current_page == 'about.php' ? 'active' : '' ?>">About Us</a></li>
                    <li><a href="weekly-menu.php" class="<?= $current_page == 'weekly-menu.php' ? 'active' : '' ?>">View Menu</a></li>
                    <li><a href="faqs.php" class="<?= $current_page == 'faqs.php' ? 'active' : '' ?>">Support/FAQs</a></li>
                    <li><a href="contact.php" class="<?= $current_page == 'contact.php' ? 'active' : '' ?>">Contact</a></li>
                </ul>

                <div class="auth-buttons">
                    <a href="login.php" class="login-btn">Login</a>
                    <a href="signup.php" class="signup-btn">Sign Up</a>
                </div>
            </div>

            <div class="menu-toggle" id="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
    </div>

    <section class="hero">
        <div class="hero-content" data-aos="fade-right" data-aos-duration="1000">
            <h1>Eat Well.<br>Feel Alive.</h1>
            <p>Personalized, dietitian-approved meal plans and expert coaching to help you live your healthiest life, effortlessly.</p>
            <button class="cta" onclick="window.location.href='weekly-menu.php'">Start Your Plan Today</button>
        </div>

        <div class="dish-slider" data-aos="zoom-in" data-aos-duration="1000">
            <div class="dish-circle">
                <div class="dish-main">
                    <img id="mainDishImg" src="picture/WhatsApp Image 2025-11-02 at 3.57.40 AM.jpeg" alt="Main Dish" />
                </div>
                <div class="small-dish dish-1" onclick="swapDish('picture/WhatsApp Image 2025-11-02 at 3.58.01 AM.jpeg',this)"><img src="picture/WhatsApp Image 2025-11-02 at 3.58.01 AM.jpeg"></div>
                <div class="small-dish dish-2" onclick="swapDish('picture/WhatsApp Image 2025-11-02 at 3.57.22 AM.jpeg',this)"><img src="picture/WhatsApp Image 2025-11-02 at 3.57.22 AM.jpeg"></div>
                <div class="small-dish dish-3" onclick="swapDish('picture/WhatsApp Image 2025-11-02 at 3.57.22 AM (1).jpeg',this)"><img src="picture/WhatsApp Image 2025-11-02 at 3.57.22 AM (1).jpeg"></div>
                <div class="small-dish dish-4" onclick="swapDish('picture/WhatsApp Image 2025-11-02 at 3.57.22 AM (3).jpeg',this)"><img src="picture/WhatsApp Image 2025-11-02 at 3.57.22 AM (3).jpeg"></div>
                <div class="small-dish dish-5" onclick="swapDish('picture/WhatsApp Image 2025-11-02 at 3.57.21 AM (1).jpeg',this)"><img src="picture/WhatsApp Image 2025-11-02 at 3.57.21 AM (1).jpeg"></div>
                <div class="small-dish dish-6" onclick="swapDish('picture/WhatsApp Image 2025-11-02 at 3.57.21 AM (2).jpeg',this)"><img src="picture/WhatsApp Image 2025-11-02 at 3.57.21 AM (2).jpeg"></div>
            </div>
        </div>
    </section>

    <section class="features-section section-padding">
        <h2 class="section-title" data-aos="fade-up">Our Dedicated Services</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">The perfect balance of health, convenience, and flavour.</p>
        <div class="features-grid">
            <div class="feature-card" data-aos="fade-left" data-aos-duration="800">
                <i class="fas fa-carrot"></i>
                <h3>Chef-Prepared Meals</h3>
                <p>Gourmet dishes prepared daily by expert chefs using only the freshest, high-quality ingredients.</p>
            </div>
            <div class="feature-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                <i class="fas fa-user-friends"></i>
                <h3>Personalized Nutrition</h3>
                <p>Meals tailored to your specific dietary needs, allergens, and fitness goals by certified nutritionists.</p>
            </div>
            <div class="feature-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
                <i class="fas fa-shipping-fast"></i>
                <h3>Hassle-Free Delivery</h3>
                <p>Reliable and refrigerated weekly delivery right to your home or office, ready to eat.</p>
            </div>
        </div>
    </section>

    <section class="how-it-works section-padding">
        <h2 class="section-title" data-aos="fade-up">Simple Steps to Health</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Start your effortless healthy lifestyle in three easy steps.</p>
        <div class="steps-container">
            <div class="step-card" data-aos="zoom-in-up" data-aos-duration="600">
                <div class="icon"><i class="fas fa-utensils"></i></div>
                <h3>1. Select Your Plan</h3>
                <p>Choose from our curated plans: Keto, Vegan, or Calorie-Controlled.</p>
            </div>
            <div class="step-card" data-aos="zoom-in-up" data-aos-duration="600" data-aos-delay="200">
                <div class="icon"><i class="fas fa-calendar-check"></i></div>
                <h3>2. Customize & Order</h3>
                <p>Tweak your weekly menu and schedule your delivery date.</p>
            </div>
            <div class="step-card" data-aos="zoom-in-up" data-aos-duration="600" data-aos-delay="400">
                <div class="icon"><i class="fas fa-check-circle"></i></div>
                <h3>3. Heat, Eat, & Go</h3>
                <p>Enjoy delicious, pre-portioned meals delivered fresh to you.</p>
            </div>
        </div>
    </section>

    <section class="why-us">
        <div class="why-content" data-aos="fade-right">
            <h2 class="section-title">Why Fitbite is Your Best Choice</h2>
            <p>At **Fitbite**, we fuse culinary excellence with nutritional science. We eliminate the guesswork from healthy eating, providing you with **delicious, balanced, and perfectly portioned** meals. Our commitment to **local sourcing** and sustainability ensures you're eating well and doing good for the planet.</p>
        </div>
        <div class="why-imgs" data-aos="fade-left">
            <img src="picture/WhatsApp Image 2025-11-02 at 3.57.20 AM.jpeg" alt="Fresh Vegetables">
        </div>
    </section>

    <section class="reviews">
        <h2 class="section-title" data-aos="fade-up">Trusted by Health Enthusiasts</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Hear what our satisfied customers have to say about Fitbite.</p>
        <div class="review-cards">
            <div class="review" data-aos="flip-up" data-aos-delay="100"><div class="stars">★★★★★</div><p>"Fitbite made healthy eating actually enjoyable and so convenient!" - **Sarah K.**</p></div>
            <div class="review" data-aos="flip-up" data-aos-delay="200"><div class="stars">★★★★★</div><p>"My energy levels are through the roof now! The food is top quality." - **Ahmad R.**</p></div>
            <div class="review" data-aos="flip-up" data-aos-delay="300"><div class="stars">★★★★★</div><p>"Delicious, healthy, and perfectly balanced — the best meal service I've tried." - **Fatima L.**</p></div>
        </div>
    </section>

    <section class="final-cta">
        <h2 data-aos="fade-up">Ready to Transform Your Diet?</h2>
        <p data-aos="fade-up" data-aos-delay="100">Join thousands who have simplified their path to health with Fitbite.</p>
        <button class="cta" onclick="window.location.href='contact.php'" data-aos="zoom-in" data-aos-delay="200">Get Started Now</button>
    </section>

    <footer class="footer">
        <div class="footer-grid">
            <div>
                <div class="footer-logo">Fitbite</div>
                <p>Eat Well. Feel Alive.</p>
                <p style="margin-top: 15px;">Fueling your body with delicious, science-backed nutrition.</p>
            </div>
            <div>
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">Our Story</a></li>
                    <li><a href="weekly-menu.php">Weekly Menu</a></li>
                    <li><a href="faqs.php">FAQs</a></li>
                </ul>
            </div>
            <div>
                <h4>Support</h4>
                <ul class="footer-links">
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="terms.php">Terms of Service</a></li>
                    <li><a href="privacy.php">Privacy Policy</a></li>
                    <li><a href="careers.php">Careers</a></li>
                </ul>
            </div>
            <div>
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; <?php echo date("Y"); ?> Fitbite | All Rights Reserved.
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 800,
        });

        function swapDish(newSrc, el){
            document.getElementById("mainDishImg").src=newSrc;
            el.style.transform="scale(1.2)";
            setTimeout(()=>el.style.transform="scale(1)",300);
        }

        const menuToggle = document.getElementById('mobile-menu');
        const navGroup = document.getElementById('navGroup');
        const icon = menuToggle.querySelector('i');

        menuToggle.addEventListener('click', () => {
            navGroup.classList.toggle('active');
            if (navGroup.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    </script>
</body>
</html>