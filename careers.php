<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fitbite - Careers | Join Our Team</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary: #4caf50; /* Green */
            --dark: #1b5e20; /* Darker Green */
            --light: #f5f5f5; /* Light Green/Off-White */
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

        /* --- CAREERS SPECIFIC STYLES --- */
        .careers-hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('picture/career-hero.jpg') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 150px 8%;
            min-height: 70vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .careers-hero h1 {
            font-size: 3.8rem;
            margin-bottom: 20px;
            font-weight: 800;
        }
        .careers-hero p {
            font-size: 1.3rem;
            max-width: 800px;
            line-height: 1.6;
            color: rgba(255,255,255,0.9);
        }
        .cta { /* Reusing existing CTA style from index.php */
            background: var(--primary);
            color: #fff;
            padding: 15px 40px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 30px;
            display: inline-block;
        }
        .cta:hover { background: var(--dark); transform: translateY(-2px); }


        /* WHY JOIN US SECTION */
        .why-join-us {
            background: var(--light);
            text-align: center;
            padding: 80px 8%;
        }
        .why-join-us h2 {
            font-size: 2.2rem;
            color: var(--dark);
            margin-bottom: 30px;
        }
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        .benefit-card {
            background: #fff;
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-bottom: 4px solid var(--primary);
        }
        .benefit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
        .benefit-card i {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
        }
        .benefit-card h3 {
            color: var(--dark);
            margin-bottom: 10px;
            font-size: 1.3rem;
        }
        .benefit-card p {
            color: var(--secondary-text);
            font-size: 0.95rem;
        }


        /* JOB OPENINGS SECTION */
        .job-openings {
            background: #fff;
            padding: 100px 8%;
            text-align: center;
        }
        .job-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        .job-card {
            background: var(--light);
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            text-align: left;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            border-top: 5px solid transparent;
        }
        .job-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            border-top-color: var(--primary);
        }
        .job-card .icon-job {
            font-size: 2.5rem;
            color: var(--dark);
            margin-bottom: 15px;
            float: right; /* Position icon to the right */
            margin-left: 20px;
        }
        .job-card h3 {
            color: var(--dark);
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .job-card .location {
            color: var(--primary);
            font-weight: 500;
            margin-bottom: 15px;
            display: block;
        }
        .job-card p {
            color: var(--secondary-text);
            margin-bottom: 20px;
            font-size: 0.95rem;
        }
        .job-card .apply-btn {
            background: var(--primary);
            color: #fff;
            padding: 10px 25px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            transition: background 0.3s;
            display: inline-block;
        }
        .job-card .apply-btn:hover {
            background: var(--dark);
        }

        .no-jobs-message {
            padding: 50px;
            background: var(--light);
            border-radius: var(--border-radius);
            margin: 50px auto 0;
            max-width: 600px;
            color: var(--dark);
            font-size: 1.2rem;
            font-weight: 600;
        }

        /* RESPONSIVENESS */
        @media (max-width: 992px) {
            .careers-hero h1 { font-size: 3rem; }
            .careers-hero p { font-size: 1.1rem; }
        }

        @media (max-width: 768px) {
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
            .navbar .nav-links li { margin: 10px 0; text-align: center; }
            .menu-toggle { display: block; }
            
            .section-padding { padding: 60px 5%; }
            .section-title { font-size: 2rem; }
            .section-subtitle { margin-bottom: 30px; }

            .careers-hero { padding: 100px 5%; min-height: 60vh; }
            .careers-hero h1 { font-size: 2.5rem; }
            .careers-hero p { font-size: 1rem; }
            
            .why-join-us { padding: 60px 5%; }
            .why-join-us h2 { font-size: 1.8rem; }
            .benefit-card { padding: 25px; }

            .job-openings { padding: 60px 5%; }
            .job-card { 
                max-width: 100%;
                padding: 25px; 
            }
            .job-card .icon-job {
                float: none;
                display: block;
                margin-bottom: 10px;
            }
            .job-card h3 { font-size: 1.3rem; }
            
            .footer-grid { grid-template-columns: 1fr; text-align: center; }
            .footer h4 { display: block; margin-top: 20px; }
        }

        @media (max-width: 480px) {
            .careers-hero h1 { font-size: 2rem; }
            .careers-hero p { font-size: 0.9rem; }
            .cta { padding: 10px 25px; font-size: 0.9rem; }
            .why-join-us h2 { font-size: 1.5rem; }
            .job-card h3 { font-size: 1.2rem; }
        }
    </style>
</head>
<body>
    <?php
    // Dynamic Job Openings Data (Backend Array)
    $job_openings = [
        [
            'title' => 'Head Chef',
            'location' => 'Lahore, Pakistan',
            'description' => 'Lead our culinary team in creating innovative and healthy meal options.',
            'icon' => 'fas fa-utensils',
        ],
        [
            'title' => 'Delivery Operations Manager',
            'location' => 'Karachi, Pakistan',
            'description' => 'Manage and optimize the logistics network for meal delivery across the city.',
            'icon' => 'fas fa-truck',
        ],
        [
            'title' => 'Certified Nutritionist (Remote)',
            'location' => 'Remote',
            'description' => 'Provide expert nutritional guidance and contribute to meal plan development and customization.',
            'icon' => 'fas fa-stethoscope',
        ],
        [
            'title' => 'Digital Marketing Specialist',
            'location' => 'Islamabad, Pakistan',
            'description' => 'Develop and execute engaging digital strategies to expand our customer base.',
            'icon' => 'fas fa-globe',
        ],
        [
            'title' => 'Customer Support Executive',
            'location' => 'Lahore, Pakistan',
            'description' => 'Deliver exceptional service and support to our growing customer base.',
            'icon' => 'fas fa-headset',
        ],
    ];

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
                <li><a href="about.php">About Us</a></li>
                <li><a href="weekly-menu.php">View Menu</a></li>
                <li><a href="faqs.php">Support/FAQs</a></li>
                <li><a href="contact.php" class="<?= $current_page == 'contact.php' ? 'active' : '' ?>">Contact</a></li>
            </ul>
        </nav>
    </div>

    <section class="careers-hero">
        <h1 data-aos="fade-up">Join Our Team at Fitbite</h1>
        <p data-aos="fade-up" data-aos-delay="200">Passionate about health, food, and making a difference? Explore opportunities to grow with us and help people live healthier lives.</p>
        <a href="#job-openings-section" class="cta" data-aos="zoom-in" data-aos-delay="400">View Open Positions</a>
    </section>

    <section class="why-join-us">
        <h2 data-aos="fade-up">Why Work at Fitbite?</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">We're more than just a meal prep company; we're a community dedicated to well-being.</p>
        <div class="benefits-grid">
            <div class="benefit-card" data-aos="zoom-in" data-aos-delay="200">
                <i class="fas fa-heartbeat"></i>
                <h3>Impact Health</h3>
                <p>Contribute to a mission that genuinely improves people's lives and promotes healthier living.</p>
            </div>
            <div class="benefit-card" data-aos="zoom-in" data-aos-delay="300">
                <i class="fas fa-lightbulb"></i>
                <h3>Innovation & Growth</h3>
                <p>Work in a dynamic environment that encourages new ideas and professional development.</p>
            </div>
            <div class="benefit-card" data-aos="zoom-in" data-aos-delay="400">
                <i class="fas fa-utensils"></i>
                <h3>Delicious Perks</h3>
                <p>Enjoy delicious, healthy meals and exclusive discounts on Fitbite subscriptions.</p>
            </div>
            <div class="benefit-card" data-aos="zoom-in" data-aos-delay="500">
                <i class="fas fa-users"></i>
                <h3>Supportive Culture</h3>
                <p>Be part of a friendly, collaborative team that values creativity and mutual respect.</p>
            </div>
        </div>
    </section>

    <section class="job-openings section-padding" id="job-openings-section">
        <h2 class="section-title" data-aos="fade-up">Current Job Openings</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Explore opportunities to make your mark at Fitbite. To apply, please use the contact form.</p>

        <?php if (!empty($job_openings)): ?>
            <div class="job-grid">
                <?php 
                $delay = 200;
                foreach ($job_openings as $job): 
                ?>
                    <div class="job-card" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                        <i class="<?= htmlspecialchars($job['icon']) ?> icon-job"></i>
                        <h3><?= htmlspecialchars($job['title']) ?></h3>
                        <span class="location"><i class="fas fa-map-marker-alt"></i> <?= htmlspecialchars($job['location']) ?></span>
                        <p><?= htmlspecialchars($job['description']) ?></p>
                        <a href="contact.php" class="apply-btn">Apply Now</a>
                    </div>
                <?php 
                    $delay += 100; // Increment delay for next card
                endforeach; 
                ?>
            </div>
        <?php else: ?>
            <div class="no-jobs-message" data-aos="zoom-in">
                <p>⚠️ Sorry, there are currently no open positions. Please check back soon!</p>
            </div>
        <?php endif; ?>
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
            duration: 800,
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