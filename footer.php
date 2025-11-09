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

/* === FOOTER === */
.footer {
    background: var(--dark);
    color: #fff;
    padding: 50px 8% 20px;
    font-family: "Poppins", sans-serif;
}
.footer-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 30px;
    margin-bottom: 40px;
}
.footer-logo {
    font-size: 2rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: 15px;
}
.footer h4 {
    font-size: 1.2rem;
    color: #fff;
    margin-bottom: 20px;
    border-bottom: 2px solid var(--primary);
    padding-bottom: 5px;
    display: inline-block;
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

/* === BACK TO TOP BUTTON === */
.back-to-top {
    position: fixed;
    bottom: 25px;
    right: 25px;
    background: var(--primary);
    color: #fff;
    font-size: 1.5rem;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    border: none;
    outline: none;
    cursor: pointer;
    display: none;
    justify-content: center;
    align-items: center;
    box-shadow: var(--shadow);
    transition: background 0.3s, transform 0.3s;
    z-index: 1000;
}
.back-to-top:hover {
    background: var(--dark);
    transform: translateY(-3px);
}

/* === RESPONSIVE === */
@media (max-width: 768px) {
    .footer-grid { grid-template-columns: 1fr; text-align: center; }
    .footer h4 { border-bottom: none; margin-top: 20px; }
    .social-icons { justify-content: center; display: flex; }
}
</style>

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

<!-- Back to top button -->
<button class="back-to-top" id="backToTop"><i class="fas fa-arrow-up"></i></button>

<script>
// === BACK TO TOP BUTTON FUNCTIONALITY ===
const backToTop = document.getElementById("backToTop");

window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
        backToTop.style.display = "flex";
    } else {
        backToTop.style.display = "none";
    }
});

backToTop.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
});
</script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
