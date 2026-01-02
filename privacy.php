<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fitbite - Privacy Policy</title>
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

        /* --- PRIVACY SPECIFIC STYLES --- */
        .privacy-content {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 5%;
            line-height: 1.8;
            color: var(--secondary-text);
            text-align: left;
        }
        .privacy-content h2 {
            color: var(--dark);
            font-size: 1.7rem;
            margin-top: 40px;
            margin-bottom: 15px;
            border-left: 4px solid var(--primary);
            padding-left: 10px;
        }
        .privacy-content p {
            margin-bottom: 20px;
        }
        .privacy-content ul {
            margin-bottom: 20px;
            padding-left: 20px;
            list-style-type: disc;
        }
        .privacy-content ul li {
            margin-bottom: 10px;
        }
        .privacy-content strong {
            color: var(--dark);
        }
        .privacy-content .date {
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
            .privacy-content h2 { font-size: 1.5rem; }
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

    <section class="privacy-section section-padding">
        <h1 class="section-title" data-aos="fade-down">Privacy Policy</h1>
        <p class="privacy-content date" data-aos="fade-down" data-aos-delay="100">Last Updated: November 9, 2025</p>

        <div class="privacy-content" data-aos="fade-up">

            <p>Fitbite is committed to protecting the privacy of our users. This Privacy Policy describes how we collect, use, and disclose information about you when you visit our website or use our meal prep services.</p>

            <h2 data-aos="fade-up">1. Information We Collect</h2>
            <p>We collect personal information that you voluntarily provide to us when registering, placing an order, or contacting us. This includes:</p>
            <ul>
                <li><strong>Personal Identifiers:</strong> Name, email address, phone number, and delivery address.</li>
                <li><strong>Payment Data:</strong> Credit card information (handled securely by third-party payment processors) and billing address.</li>
                <li><strong>Dietary Information:</strong> Allergies, health goals, and meal preferences, which you provide to customize your plan.</li>
            </ul>

            <h2 data-aos="fade-up">2. How We Use Your Information</h2>
            <p>We use the information we collect for the following purposes:</p>
            <ul>
                <li>To **process and fulfill** your meal orders and subscriptions.</li>
                <li>To manage your account, including sending transaction confirmations and invoices.</li>
                <li>To **customize** meal plans and menus based on your dietary needs and preferences.</li>
                <li>To communicate with you about promotions, new products, and service updates (you can opt-out).</li>
                <li>To improve our website, services, and customer support.</li>
            </ul>

            <h2 data-aos="fade-up">3. Disclosure of Your Information</h2>
            <p>We do not sell your personal information. We may share your information with:</p>
            <ul>
                <li><strong>Service Providers:</strong> Third-party vendors who perform services on our behalf, such as delivery companies, payment processors, and hosting providers. These vendors are legally obligated to protect your data.</li>
                <li><strong>Legal Requirements:</strong> If required to do so by law or in response to valid requests by public authorities.</li>
            </ul>

            <h2 data-aos="fade-up">4. Data Security</h2>
            <p>We implement technical and organizational measures designed to protect the security of any personal information we process. However, please remember that no electronic transmission over the Internet or information storage technology can be guaranteed to be 100% secure.</p>

            <h2 data-aos="fade-up">5. Your Privacy Rights</h2>
            <p>Depending on your location, you may have the following rights regarding your personal data:</p>
            <ul>
                <li>The right to **access** the personal data we hold about you.</li>
                <li>The right to request **correction** of incomplete or inaccurate data.</li>
                <li>The right to request **deletion** of your personal data, subject to certain exceptions.</li>
            </ul>
            <p>To exercise any of these rights, please contact us using the details below.</p>

            <p style="margin-top: 50px;"><strong>Contact Us:</strong> If you have questions or comments about this policy, please contact us at [Your Contact Email] or visit our Contact page.</p>

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