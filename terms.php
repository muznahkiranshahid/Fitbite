<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fitbite - Terms & Conditions</title>
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

        /* --- TERMS SPECIFIC STYLES --- */
        .terms-content {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 5%;
            line-height: 1.8;
            color: var(--secondary-text);
            text-align: left;
        }
        .terms-content h2 {
            color: var(--dark);
            font-size: 1.7rem;
            margin-top: 40px;
            margin-bottom: 15px;
            border-left: 4px solid var(--primary);
            padding-left: 10px;
        }
        .terms-content p {
            margin-bottom: 20px;
        }
        .terms-content ul {
            margin-bottom: 20px;
            padding-left: 20px;
            list-style-type: disc;
        }
        .terms-content ul li {
            margin-bottom: 10px;
        }
        .terms-content strong {
            color: var(--dark);
        }
        .terms-content .date {
            display: block;
            text-align: center;
            font-style: italic;
            margin-bottom: 50px;
            color: var(--primary);
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
            .terms-content h2 { font-size: 1.5rem; }
            .footer-grid { grid-template-columns: 1fr; text-align: center; }
            .footer h4 { display: block; margin-top: 20px; }
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
                <li><a href="faqs.php">Support/FAQs</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>

    <section class="terms-section section-padding">
        <h1 class="section-title" data-aos="fade-down">Terms and Conditions</h1>
        <p class="terms-content date" data-aos="fade-down" data-aos-delay="100">Last Updated: November 9, 2025</p>

        <div class="terms-content" data-aos="fade-up">

            <p>Welcome to Fitbite. By using our website and meal prep services, you agree to comply with and be bound by the following terms and conditions of use. Please review these terms carefully. If you do not agree to these terms, you should not use this site or our services.</p>

            <h2 data-aos="fade-up">1. Agreement to Terms</h2>
            <p>This Agreement specifies the terms and conditions for access to and use of the Fitbite website (the "Site") and services (the "Services"). This Agreement may be modified at any time by us upon posting of the modified agreement. Any such modifications shall be effective immediately.</p>

            <h2 data-aos="fade-up">2. Meal Subscription & Ordering</h2>
            <ul>
                <li><strong>Subscription:</strong> Our service operates on a recurring subscription model (weekly/monthly) unless specified otherwise.</li>
                <li><strong>Billing Cycle:</strong> You will be billed according to the subscription cycle you select. Payment must be successfully processed prior to the weekly order cutoff (typically Friday, 11 PM PKT) for the next week's meals.</li>
                <li><strong>Changes and Cancellations:</strong> Any changes, pauses, or cancellations to an order must be made through your user dashboard before the weekly cutoff time. Orders processed after this time cannot be altered or refunded for the upcoming week.</li>
            </ul>

            <h2 data-aos="fade-up">3. Delivery Policy</h2>
            <p>Delivery is subject to the following conditions:</p>
            <ul>
                <li><strong>Delivery Address:</strong> You are responsible for providing a complete and correct delivery address. If delivery fails due to incorrect information, Fitbite is not liable for replacement meals or refunds.</li>
                <li><strong>Receipt:</strong> It is your responsibility to ensure the delivery is received promptly. Meals left outside for an extended period, especially in adverse weather, may compromise food safety. Fitbite is not responsible for food spoilage if the meals are not refrigerated soon after delivery.</li>
            </ul>

            <h2 data-aos="fade-up">4. Allergies and Dietary Information</h2>
            <p>While we offer specialized meal plans and take precautions to prevent cross-contamination, Fitbite operates a kitchen that handles common allergens, including nuts, dairy, gluten, and seafood. **We cannot guarantee** that any meal will be free of trace amounts of allergens. By subscribing, you acknowledge this risk and agree that Fitbite is not liable for any adverse reactions due to consumption of our meals.</p>

            <h2 data-aos="fade-up">5. Refunds and Credits</h2>
            <p>Due to the perishable nature of our products, we do not offer refunds or returns. If you receive a meal that is damaged or spoiled upon arrival, you must contact our Customer Service team within **24 hours** of delivery with photographic evidence. Valid claims may be issued a credit for future meals at our discretion.</p>

            <h2 data-aos="fade-up">6. User Conduct</h2>
            <p>You agree not to use the Site or Services for any unlawful purpose or in any way that might harm Fitbite or its users. This includes, but is not limited to, unauthorized access, data misuse, or harassing communication.</p>

            <h2 data-aos="fade-up">7. Governing Law</h2>
            <p>This Agreement shall be governed by and interpreted in accordance with the laws of **Pakistan** (or the country where Fitbite is officially registered).</p>

            <p style="margin-top: 50px;"><strong>Contact Information:</strong> If you have any questions about these Terms, please contact us at [Your Contact Email] or visit our Contact page.</p>

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
    </script>
</body>
</html>