<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fitbite - Contact Us</title>
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
            background: var(--light);
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

        /* --- CONTACT SPECIFIC STYLES --- */
        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            gap: 40px;
            background: #fff;
            padding: 40px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            flex-wrap: wrap;
        }
        
        /* Contact Info Column */
        .contact-info {
            flex: 1;
            min-width: 300px;
            padding-right: 20px;
            border-right: 1px solid var(--light);
        }
        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }
        .info-item i {
            font-size: 1.8rem;
            color: var(--primary);
            margin-right: 20px;
            width: 40px;
            text-align: center;
        }
        .info-item h3 {
            font-size: 1.1rem;
            color: var(--dark);
            margin-bottom: 5px;
        }
        .info-item p, .info-item a {
            color: var(--secondary-text);
            text-decoration: none;
        }
        .info-item a:hover {
            color: var(--primary);
        }
        
        /* Contact Form Column */
        .contact-form {
            flex: 2;
            min-width: 450px;
        }
        .contact-form h2 {
            font-size: 1.8rem;
            color: var(--dark);
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text-color);
        }
        .form-group input, .form-group textarea, .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            transition: border-color 0.3s;
        }
        .form-group input:focus, .form-group textarea:focus, .form-group select:focus {
            border-color: var(--primary);
            outline: none;
        }
        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }
        .submit-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
            text-transform: uppercase;
        }
        .submit-btn:hover {
            background: var(--dark);
            transform: translateY(-1px);
        }

        /* Responsive Adjustments */
        @media (max-width: 1000px) {
            .contact-container {
                flex-direction: column;
                padding: 30px;
            }
            .contact-info {
                border-right: none;
                padding-right: 0;
                padding-bottom: 30px;
                border-bottom: 1px solid var(--light);
            }
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
            .contact-form, .contact-info { min-width: 100%; }

            .footer-grid { grid-template-columns: 1fr; text-align: center; }
            .footer h4 { display: block; margin-top: 20px; }
        }
    </style>
</head>
<body>
    <?php
    // Dynamic PHP Navbar
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

    <section class="contact-section section-padding">
        <h1 class="section-title" data-aos="fade-down">Get In Touch</h1>
        <p class="section-subtitle" data-aos="fade-down" data-aos-delay="100">We're here to answer your questions and help you with your meal plan needs.</p>

        <div class="contact-container">

            <div class="contact-info" data-aos="fade-right" data-aos-delay="200">
                <h2>Our Details</h2>
                <p style="color: var(--secondary-text); margin-bottom: 40px;">Feel free to reach out via phone, email, or visit us during business hours.</p>
                
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h3>Office Address</h3>
                        <p>123 Healthy Street, Business District, Karachi, Pakistan</p>
                    </div>
                </div>

                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h3>Call Us</h3>
                        <p><a href="tel:+923001234567">+92 300 1234567</a></p>
                    </div>
                </div>

                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h3>Email Support</h3>
                        <p><a href="mailto:support@fitbite.com">support@fitbite.com</a></p>
                    </div>
                </div>

                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <div>
                        <h3>Working Hours</h3>
                        <p>Mon - Fri: 9:00 AM to 5:00 PM (PKT)</p>
                    </div>
                </div>
            </div>

            <div class="contact-form" data-aos="fade-left" data-aos-delay="200">
                <h2>Send Us a Message</h2>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Your Full Name *</label>
                        <input type="text" id="name" name="name" required placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <select id="subject" name="subject">
                            <option value="general">General Inquiry</option>
                            <option value="order">Order/Subscription Query</option>
                            <option value="careers">Career Application</option>
                            <option value="feedback">Feedback/Suggestion</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message *</label>
                        <textarea id="message" name="message" required placeholder="Type your message here..."></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
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
    </script>
</body>
</html>