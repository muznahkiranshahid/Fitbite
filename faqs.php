<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fitbite - FAQs | Frequently Asked Questions</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary: #4caf50; /* Green */
            --dark: #1b5e20; /* Darker Green */
            --light: #f5f8f5; /* Light Green/Off-White */
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

        /* --- NAVBAR STYLES (Copied from index.php) --- */
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

        /* --- FOOTER STYLES (Copied from index.php) --- */
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

        /* --- FAQs SPECIFIC STYLES --- */
        .faqs-container {
            max-width: 900px;
            margin: 0 auto;
        }
        .accordion {
            background-color: #fff;
            color: var(--text-color);
            cursor: pointer;
            padding: 20px 25px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 1.1rem;
            transition: 0.4s;
            border-bottom: 1px solid var(--light);
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
        }
        .accordion:hover {
            background-color: var(--light);
        }
        .accordion.active {
            background-color: var(--primary);
            color: #fff;
            border-color: var(--dark);
        }
        .accordion .icon {
            font-size: 1.2rem;
            transition: transform 0.3s;
        }
        .accordion.active .icon {
            transform: rotate(45deg); /* Plus sign becomes an X */
        }
        .panel {
            padding: 0 25px;
            background-color: #fff;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-out;
            border-left: 3px solid var(--primary);
            margin-bottom: 20px;
        }
        .panel p {
            padding: 20px 0;
            line-height: 1.6;
            color: var(--secondary-text);
        }
        .accordion-item:last-child .accordion {
            border-bottom: none;
        }
        
        /* RESPONSIVENESS */
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
            .accordion { padding: 15px 20px; font-size: 1rem; }
            .footer-grid { grid-template-columns: 1fr; text-align: center; }
            .footer h4 { display: block; margin-top: 20px; }
        }
        @media (max-width: 480px) {
             .accordion { font-size: 0.9rem; }
        }
    </style>
</head>
<body>
    <div id="header-placeholder">
        <?php
        // Dynamic PHP Navbar
        $current_page = basename($_SERVER['PHP_SELF']);
        ?>
        <nav class="navbar">
            <a href="index.php" class="logo">Fitbite</a>
            <div class="menu-toggle" id="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="weekly-menu.php">View Menu</a></li>
                <li><a href="faqs.php" class="<?= $current_page == 'faqs.php' ? 'active' : '' ?>">Support/FAQs</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>

    <section class="faqs section-padding">
        <h1 class="section-title" data-aos="fade-up">Frequently Asked Questions ❓</h1>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Find quick answers to common questions about our service and meals.</p>

        <div class="faqs-container">

            <h2 style="color:var(--primary); margin-top: 40px; font-size: 1.8rem;" data-aos="fade-up">Ordering & Delivery</h2>

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                <button class="accordion">How do I place an order for a weekly meal plan? <i class="fas fa-plus icon"></i></button>
                <div class="panel">
                    <p>You can place an order by visiting our **'View Menu'** page, selecting your desired plan (e.g., Keto, Vegan, Calorie-Controlled), choosing the number of meals per week, and completing the checkout process. New orders must be placed by Friday at 11 PM for delivery the following Sunday/Monday.</p>
                </div>
            </div>

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                <button class="accordion">What are your delivery days and times? <i class="fas fa-plus icon"></i></button>
                <div class="panel">
                    <p>We deliver fresh meals every **Sunday** and **Monday** between 8:00 AM and 6:00 PM. We will notify you via SMS once your delivery is on its way. All meals are delivered in insulated, refrigerated boxes.</p>
                </div>
            </div>

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                <button class="accordion">Can I pause or cancel my subscription? <i class="fas fa-plus icon"></i></button>
                <div class="panel">
                    <p>Yes, you can easily pause or cancel your subscription anytime through your **Account Dashboard**. Please make sure to make any changes before the weekly cutoff time (Friday 11 PM) for the upcoming week.</p>
                </div>
            </div>

            <h2 style="color:var(--primary); margin-top: 40px; font-size: 1.8rem;" data-aos="fade-up" data-aos-delay="500">Meals & Nutrition</h2>

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                <button class="accordion">How long do the meals stay fresh? <i class="fas fa-plus icon"></i></button>
                <div class="panel">
                    <p>Our meals are prepared fresh and delivered chilled. They are designed to stay fresh for **5 to 7 days** in your refrigerator from the day of delivery. We recommend consuming seafood dishes earlier in the week.</p>
                </div>
            </div>

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="700">
                <button class="accordion">Are your meals suitable for specific allergies or diets? <i class="fas fa-plus icon"></i></button>
                <div class="panel">
                    <p>We offer specialized plans (like Vegan, Keto, and Gluten-Free). While we take great care, our kitchen handles various ingredients, so we cannot guarantee zero cross-contamination for severe allergies. Please contact us directly to discuss severe allergies.</p>
                </div>
            </div>

             <div class="accordion-item" data-aos="fade-up" data-aos-delay="800">
                <button class="accordion">How do I heat up the meals? <i class="fas fa-plus icon"></i></button>
                <div class="panel">
                    <p>Most meals can be heated in the microwave in their original containers for **2-3 minutes**. Alternatively, they can be transferred to an oven-safe dish and heated at 350°F (175°C) for 10-15 minutes. Specific heating instructions are available on each meal container.</p>
                </div>
            </div>

        </div>
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
        
        // JavaScript for Accordion Functionality
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                // Toggle the 'active' class on the clicked accordion button
                this.classList.toggle("active");

                // Get the next element (the panel)
                var panel = this.nextElementSibling;
                
                // Toggle the max-height style to show/hide the panel
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null; // Collapse the panel
                } else {
                    // Close all other panels before opening the current one (optional, but cleaner)
                    var currentAcc = this;
                    for (var j = 0; j < acc.length; j++) {
                        if (acc[j] !== currentAcc && acc[j].classList.contains('active')) {
                            acc[j].classList.remove('active');
                            acc[j].nextElementSibling.style.maxHeight = null;
                        }
                    }
                    
                    panel.style.maxHeight = panel.scrollHeight + "px"; // Expand the panel
                }
            });
        }
    </script>
</body>
</html>