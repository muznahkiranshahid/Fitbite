<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fitbite - About Us | Our Expert</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary: #4caf50; /* Green */
            --dark: #1b5e20; /* Darker Green */
            --light: #f5f8f5; /* Light Green/Off-White */
            --bg: #f9f8f4;
            --text-color: #333;
            --secondary-text: #666;
            --shadow: 0 4px 12px rgba(0,0,0,0.08);
            --border-radius: 10px;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: "Poppins", sans-serif;
            background: var(--bg);
            color: var(--text-color);
            overflow-x: hidden;
        }

        #header-placeholder { position: sticky; top: 0; z-index: 999; }
        .section-padding { padding: 100px 8%; }
        .section-title { font-size: 2.5rem; color: var(--dark); margin-bottom: 10px; text-align: center; }
        .section-subtitle { margin: 10px 0 40px; color: var(--secondary-text); font-weight: 500; text-align: center; }

        /* --- NAVBAR STYLES (Copied for consistency) --- */
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
        .navbar .nav-links {
            list-style: none;
            display: flex;
        }
        .navbar .nav-links li {
            margin-left: 40px;
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
        /* --- END NAVBAR STYLES --- */

        /* --- FOOTER STYLES (Copied for consistency) --- */
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
        /* --- END FOOTER STYLES --- */

        /* ---------- VIDEO SECTION ---------- */
        .intro-video {
            width:100%;
            height:60vh;
            position:relative;
            overflow:hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .intro-video video {
            width:100%;
            height:100%;
            object-fit:cover;
            filter:brightness(75%);
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
        }

        .intro-video h1 {
            color:#fff;
            font-size:3.5rem;
            font-weight:700;
            text-shadow:0 3px 8px rgba(0,0,0,0.4);
            position: relative;
            z-index: 2;
        }

        /* ---------- ABOUT SECTION ---------- */
        .about-container {
            display:flex;
            align-items:center;
            justify-content:center;
            flex-wrap:wrap;
            padding:80px 8%;
            gap:50px;
        }

        .about-img {
            flex:1 1 350px;
            text-align:center;
            position:relative;
        }

        .about-img img {
            width:90%;
            max-width:350px;
            border-radius:50%;
            box-shadow:var(--shadow);
            z-index:2;
            position:relative;
        }

        .about-img::before {
            content:"";
            position:absolute;
            width:250px;height:250px;
            background:var(--primary);
            border-radius:60% 40% 60% 40% / 40% 60% 40% 60%;
            top:50%;left:50%;
            transform:translate(-50%,-50%);
            z-index:1;
        }

        .about-info {
            flex:1 1 500px;
        }

        .about-info h2 {
            color:var(--dark);
            font-size:2.5rem; /* Increased size */
            margin-bottom:10px;
        }

        .about-info h4 {
            color:#777;
            margin-bottom:25px;
            font-weight:500;
        }

        .about-info section {margin-bottom:25px;}
        .about-info section h3 {
            color:var(--primary);
            margin-bottom:8px;
            font-size:1.3rem; /* Increased size */
            border-bottom: 2px solid rgba(76, 175, 80, 0.3); /* Added underline effect */
            display: inline-block;
            padding-bottom: 3px;
        }
        .about-info ul {
            list-style:none;
            margin-left:0; /* Removed indent */
            padding-left: 0;
        }
        .about-info ul li {
            padding:4px 0;
            font-size:0.95rem;
            color:#555;
            position: relative;
            padding-left: 25px;
        }
        .about-info ul li::before {
            content: "•";
            color: var(--primary);
            font-size: 1.2rem;
            font-weight: 700;
            position: absolute;
            left: 0;
            top: 2px;
        }

        /* ---------- CORE VALUES (NEW SECTION) ---------- */
        .core-values {
            background: #fff;
            padding: 80px 8%;
            text-align: center;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
        }
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        .value-card {
            padding: 30px;
            border-radius: var(--border-radius);
            text-align: center;
            transition: transform 0.3s ease;
            background: var(--light);
            border-left: 5px solid var(--dark);
        }
        .value-card i {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
        }
        .value-card h3 {
            color: var(--dark);
            margin-bottom: 10px;
        }
        .value-card p {
            font-size: 0.9rem;
            color: var(--secondary-text);
        }
        
        /* ---------- CALORIES SECTION ---------- */
        .nutrition-stats {
            background:white;
            box-shadow:var(--shadow);
            margin:50px auto;
            padding:60px 10%;
            border-radius:20px;
            text-align:center;
            max-width:1100px;
        }

        .nutrition-stats h2 {
            color:var(--dark);
            margin-bottom:20px;
            font-size:2rem;
        }

        .calories-grid {
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
            gap:30px;
            margin-top:30px;
        }

        .calories-card {
            background:#f4faf4;
            padding:25px;
            border-radius:15px;
            box-shadow:var(--shadow);
            transition:0.3s;
            border-bottom: 3px solid var(--primary);
        }
        .calories-card:hover {
            transform:translateY(-5px);
            background:#e8fbe8;
        }
        .calories-card h4 {
            color:var(--dark);
            margin-bottom:5px;
        }
        .calories-card p {
            color:#555;
            font-size:0.95rem;
        }

        /* ---------- HEALTH TIPS ---------- */
        .tips {
            padding:80px 10%;
            text-align:center;
        }
        .tips h2 {
            color:var(--dark);
            margin-bottom:20px;
        }
        .tips ul {
            list-style:none;
            max-width:700px;
            margin:auto;
            text-align:left;
        }
        .tips ul li {
            padding:10px 0;
            color:#555;
            font-size:1rem;
            display:flex;
            align-items:center;
            gap:10px;
            border-bottom: 1px dashed rgba(0,0,0,0.1);
        }
        .tips ul li:last-child {
             border-bottom: none;
        }
        .tips ul li::before {
            content:"🍃";
            font-size: 1.2rem;
        }

        /* ---------- TESTIMONIAL ---------- */
        .testimonial {
            background:linear-gradient(135deg,#e6f5e9,#f9fff9);
            text-align:center;
            padding:80px 10%;
            font-style:italic;
            color:#444;
        }
        .testimonial p {
            max-width:800px;
            margin:auto;
            line-height:1.8;
            font-size:1.1rem;
            position: relative;
            margin-bottom: 30px;
        }
        .testimonial p::before {
            content: "\201C"; /* Left double quotation mark */
            font-size: 3rem;
            color: var(--primary);
            position: absolute;
            top: -20px;
            left: 0;
            opacity: 0.5;
        }
        .testimonial h4 {
            margin-top:20px;
            color:var(--dark);
            font-weight:600;
        }

        /* ---------- CONTACT ---------- */
        .contact {
            text-align:center;
            padding:80px 10%;
        }

        .contact h2 {color:var(--dark);margin-bottom:10px;}
        .contact p {color:#555;}
        .contact a {
            display:inline-block;
            margin-top:15px;
            background:var(--primary);
            color:white;
            text-decoration:none;
            padding:12px 30px; /* Slightly larger button */
            border-radius:30px;
            transition:0.3s;
            font-weight: 600;
        }
        .contact a:hover {background:var(--dark);transform:scale(1.05);}

        /* RESPONSIVENESS */
        @media(max-width:768px){
            .navbar { padding: 15px 5%; }
            .navbar .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 65px;
                left: 0;
                width: 100%;
                background: #fff;
                box-shadow: var(--shadow);
                padding: 10px 0;
            }
            .navbar .nav-links.active { display: flex; }
            .menu-toggle { display: block; }
            
            .intro-video h1{font-size:2.5rem;}
            .about-container{padding:50px 5%;}
            .about-info{text-align:left; flex: 1 1 100%;}
            .about-info h2 {font-size: 2rem;}
            .about-img{order: -1; margin-bottom: 30px;} /* Push image up */
            .about-img::before{display:none;}
            .about-img img{max-width:250px;}

            .core-values {padding: 60px 5%;}
            .nutrition-stats {padding: 40px 5%; margin: 30px auto;}
            .nutrition-stats h2 {font-size: 1.8rem;}
            
            .tips, .testimonial, .contact {padding: 50px 5%;}
            
            .footer-grid { grid-template-columns: 1fr; text-align: center; }
            .footer h4 { display: block; margin-top: 20px; }
        }
    </style>
</head>
<body>
    <?php
    // Determine current page for active class in navbar
    $current_page = basename($_SERVER['PHP_SELF']);
    ?>
    
    <div id="header-placeholder">
        <nav class="navbar">
            <a href="index.php" class="logo">Fitbite</a>
            <div class="menu-toggle" id="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php" class="<?= $current_page == 'about.php' ? 'active' : '' ?>">About Us</a></li>
                <li><a href="weekly-menu.php">View Menu</a></li>
                <li><a href="faqs.php">Support/FAQs</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>
    <section class="intro-video">
        <video autoplay muted loop>
            <source src="5866261-uhd_3840_2160_25fps.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h1 data-aos="zoom-in">Meet Our Expert Nutritionist</h1>
    </section>

    <section class="about-container">
        <div class="about-img" data-aos="fade-right">
            <img src="picture/doctor.jpg" alt="Dr. Ayesha Khan, Certified Dietitian">
        </div>
        <div class="about-info" data-aos="fade-left" data-aos-delay="200">
            <h2>Dr. Ayesha Khan</h2>
            <h4>Certified Dietitian & Nutrition Specialist</h4>
            <p style="margin-bottom: 25px; line-height: 1.6; color: var(--text-color);">
                Dr. Ayesha Khan is the visionary behind Fitbite's core nutritional philosophy. With a deep commitment to evidence-based practice, she designs meal plans that are not only delicious but scientifically tailored to optimize health, performance, and well-being.
            </p>

            <section>
                <h3>🎓 Education & Certification</h3>
                <ul>
                    <li data-aos="fade-up" data-aos-delay="300">2008–2012: BS in Human Nutrition, Lahore College for Women University</li>
                    <li data-aos="fade-up" data-aos-delay="400">2013–2015: M.Phil. in Clinical Nutrition, University of Punjab</li>
                    <li data-aos="fade-up" data-aos-delay="500">Certified Diet Planning from Pakistan Nutrition Council (2018)</li>
                </ul>
            </section>

            <section>
                <h3>💼 Key Experience</h3>
                <ul>
                    <li data-aos="fade-up" data-aos-delay="600">2020–Present: Head of Nutrition Program at Fitbite</li>
                    <li data-aos="fade-up" data-aos-delay="700">2018–2020: Clinical Dietitian at Shifa International Hospital, Islamabad</li>
                    <li data-aos="fade-up" data-aos-delay="800">Regular Guest Speaker at National Health & Wellness Conferences</li>
                </ul>
            </section>

        </div>
    </section>

    <section class="core-values">
        <h2 class="section-title" data-aos="fade-up">Our Core Nutritional Values</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">The principles guiding every Fitbite menu.</p>

        <div class="values-grid">
            <div class="value-card" data-aos="flip-up" data-aos-delay="200">
                <i class="fas fa-seedling"></i>
                <h3>Freshness Priority</h3>
                <p>We source the freshest local ingredients daily to maximize flavor and nutrient retention.</p>
            </div>
            <div class="value-card" data-aos="flip-up" data-aos-delay="300">
                <i class="fas fa-balance-scale"></i>
                <h3>Macro Balance</h3>
                <p>Each meal is meticulously balanced for proteins, carbs, and fats based on established dietary science.</p>
            </div>
            <div class="value-card" data-aos="flip-up" data-aos-delay="400">
                <i class="fas fa-shield-alt"></i>
                <h3>Clean Eating</h3>
                <p>We avoid artificial preservatives, excessive sugars, and harmful additives in all our preparations.</p>
            </div>
        </div>
    </section>

    <section class="nutrition-stats" data-aos="fade-up">
        <h2>Daily Nutrition Focus</h2>
        <p>Dr. Ayesha focuses on balanced daily intake based on body type and goal. Here’s her recommended breakdown for a healthy adult:</p>

        <div class="calories-grid">
            <div class="calories-card" data-aos="fade-up" data-aos-delay="100">
                <h4>🥗 Breakfast</h4>
                <p>350–400 kcal — Oatmeal with fruits, boiled eggs, and green tea.</p>
            </div>
            <div class="calories-card" data-aos="fade-up" data-aos-delay="200">
                <h4>🍛 Lunch</h4>
                <p>450–500 kcal — Grilled chicken, mixed veggies, and brown rice.</p>
            </div>
            <div class="calories-card" data-aos="fade-up" data-aos-delay="300">
                <h4>🥪 Snack</h4>
                <p>150–200 kcal — Yogurt, almonds, or fresh juice.</p>
            </div>
            <div class="calories-card" data-aos="fade-up" data-aos-delay="400">
                <h4>🍲 Dinner</h4>
                <p>400–450 kcal — Lentil soup, salad, and baked fish or tofu.</p>
            </div>
        </div>
    </section>

    <section class="tips" data-aos="fade-up">
        <h2>Dr. Ayesha's Top Healthy Lifestyle Tips</h2>
        <ul>
            <li data-aos="fade-right" data-aos-delay="100">Drink at least 8 glasses of water daily for hydration and detoxification.</li>
            <li data-aos="fade-right" data-aos-delay="200">Include seasonal fruits and colorful vegetables in every meal for essential vitamins.</li>
            <li data-aos="fade-right" data-aos-delay="300">Sleep 7–8 hours each night for better metabolic function and recovery.</li>
            <li data-aos="fade-right" data-aos-delay="400">Practice mindful eating — avoid screens and focus on the taste of your food.</li>
            <li data-aos="fade-right" data-aos-delay="500">Replace refined sugar with natural sweeteners like honey or dates in moderation.</li>
        </ul>
    </section>

    <section class="testimonial" data-aos="zoom-in">
        <p>“I believe food is not just fuel — it’s medicine for your body and soul. Every plate you create should be colorful, nourishing, and full of life!”</p>
        <h4>– Dr. Ayesha Khan</h4>
    </section>

    <section class="contact" data-aos="fade-up">
        <h2>Ready to Start Your Health Journey?</h2>
        <p>Want to schedule a nutrition consultation or start a personalized Fitbite meal plan?</p>
        <a href="contact.php">Contact Dr. Ayesha & Team</a>
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
        // Initialize AOS
        AOS.init({
            once: true,
            duration: 1000,
        });

        // JavaScript for mobile menu toggle
        const menuToggle = document.getElementById('mobile-menu');
        const navLinks = document.querySelector('.nav-links');

        if (menuToggle) {
            menuToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });
        }
    </script>
</body>
</html>