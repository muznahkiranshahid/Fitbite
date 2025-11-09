<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fitbite - Weekly Menu & Recipes</title>
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

        /* --- MENU SPECIFIC STYLES --- */
        .weekly-container {
            text-align: center;
            padding: 100px 8%;
            background: linear-gradient(to bottom, #ffffff, #f4f9f4);
        }

        .weekly-container h1 {
            font-size: 2.8rem;
            font-weight: 700;
            color: var(--dark);
        }
        
        .weekly-container p {
            color: #666;
            margin-top: 10px;
            font-weight: 500;
            font-size: 1.1rem;
        }

        /* GRID */
        .meal-grid {
            margin-top: 60px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
            justify-items: center;
        }

        .meal-card {
            background: #fff;
            border-radius: 18px;
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: all 0.4s ease;
            max-width: 330px;
            border-bottom: 4px solid var(--primary); /* Added emphasis */
        }

        .meal-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .meal-card img {
            width: 100%;
            height: 230px;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .meal-card img:hover { transform: scale(1.05); }

        .meal-card .info {
            padding: 20px;
        }
        
        .meal-card .day { /* Added style for the day name */
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 5px;
            display: block;
        }

        .meal-card h3 {
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 8px;
        }

        .meal-card span {
            display: block;
            font-size: 0.95rem;
            color: #777;
            margin-bottom: 15px;
        }

        .meal-card button {
            background: var(--primary);
            color: #fff;
            border: none;
            padding: 10px 22px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 500;
            transition: 0.3s;
            text-transform: uppercase;
        }

        .meal-card button:hover {
            background: var(--dark);
            transform: translateY(-2px);
        }

        /* MODAL */
        .modal {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.6);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            animation: fadeIn 0.4s ease;
            backdrop-filter: blur(5px);
        }

        .modal-content {
            background: #fff;
            border-radius: 15px;
            width: 90%;
            max-width: 550px; /* Slightly larger modal */
            padding: 30px;
            position: relative;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            animation: scaleUp 0.4s ease;
        }

        .modal-content h2 {
            color: var(--dark);
            margin-bottom: 10px;
            font-size: 1.8rem;
        }

        .modal-content p {
            color: #555;
            line-height: 1.6;
            margin: 10px 0;
        }

        .modal-content strong {
            color: var(--dark);
        }

        .modal-content ul {
            text-align: left;
            margin: 10px 0 20px 20px;
            color: #444;
            list-style: square;
        }

        .close {
            position: absolute;
            top: 15px; right: 20px;
            font-size: 28px;
            color: #888;
            cursor: pointer;
            transition: 0.3s;
        }

        .close:hover { color: var(--dark); transform: rotate(90deg); }

        @keyframes fadeIn { from {opacity:0;} to {opacity:1;} }
        @keyframes scaleUp { from {transform:scale(0.8);opacity:0;} to {transform:scale(1);opacity:1;} }

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
            .menu-toggle { display: block; }
            
            .weekly-container { padding: 60px 5%; }
            .weekly-container h1 { font-size: 2.2rem; }
            .meal-card img { height: 200px; }
            .meal-card h3 { font-size: 1.2rem; }
            .meal-card button { padding: 8px 18px; }

            .modal-content { max-width: 95%; padding: 20px; }
            
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
                <li><a href="about.php">About Us</a></li>
                <li><a href="weekly-menu.php" class="<?= $current_page == 'weekly-menu.php' ? 'active' : '' ?>">View Menu</a></li>
                <li><a href="faqs.php">Support/FAQs</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>
    <section class="weekly-container">
        <h1 data-aos="fade-down">Weekly Meal Planner 📅</h1>
        <p data-aos="fade-down" data-aos-delay="100">Healthy Eating for Every Day – Click 'View Recipe' for details and ingredients.</p>

        <div class="meal-grid">
            <div class="meal-card" data-aos="fade-up" data-aos-delay="200">
                <img src="picture/Fresh Garden Salad.jpeg" alt="Monday Meal">
                <div class="info">
                    <span class="day">MONDAY</span>
                    <h3>Fresh Garden Salad</h3>
                    <span>Lunch Special: 350 kcal</span>
                    <button onclick="openRecipe('Fresh Garden Salad', '350 kcal', ['Lettuce (Romaine/Iceberg)', 'Cherry Tomatoes', 'Cucumber', 'Bell Peppers', 'Olive Oil & Lemon Dressing'], 'Toss all ingredients gently and serve chilled. Add grilled chicken for protein.')">View Recipe</button>
                </div>
            </div>

            <div class="meal-card" data-aos="fade-up" data-aos-delay="300">
                <img src="picture/Avocado Power Toast.jpeg" alt="Tuesday Meal">
                <div class="info">
                    <span class="day">TUESDAY</span>
                    <h3>Avocado Power Toast</h3>
                    <span>Breakfast/Brunch: 420 kcal</span>
                    <button onclick="openRecipe('Avocado Power Toast', '420 kcal', ['Whole Grain Bread (2 Slices)', 'Ripe Avocado', 'Lime Juice', 'Chili Flakes/Black Pepper', 'Sea Salt'], 'Toast the bread, mash avocado, spread, and garnish with seasonings.')">View Recipe</button>
                </div>
            </div>

            <div class="meal-card" data-aos="fade-up" data-aos-delay="400">
                <img src="picture/Greek Yogurt Bowl.jpg" alt="Wednesday Meal">
                <div class="info">
                    <span class="day">WEDNESDAY</span>
                    <h3>Greek Yogurt Bowl</h3>
                    <span>Mid-day Snack: 310 kcal</span>
                    <button onclick="openRecipe('Greek Yogurt Bowl', '310 kcal', ['Plain Greek Yogurt', 'Sugar-free Granola', 'Honey (optional)', 'Mixed Berries (Fresh/Frozen)'], 'Mix yogurt and honey, top with granola and a generous handful of berries.')">View Recipe</button>
                </div>
            </div>

            <div class="meal-card" data-aos="fade-up" data-aos-delay="500">
                <img src="picture/Green Detox Smoothie.webp" alt="Thursday Meal">
                <div class="info">
                    <span class="day">THURSDAY</span>
                    <h3>Green Detox Smoothie</h3>
                    <span>Hydration/Quick Meal: 290 kcal</span>
                    <button onclick="openRecipe('Green Detox Smoothie', '290 kcal', ['Banana', 'Spinach', 'Berries (Frozen)', 'Almond Milk', 'Chia Seeds'], 'Blend all ingredients until smooth and serve cold in a tall glass.')">View Recipe</button>
                </div>
            </div>

            <div class="meal-card" data-aos="fade-up" data-aos-delay="600">
                <img src="picture/Veggie Power Wrap.jpeg" alt="Friday Meal">
                <div class="info">
                    <span class="day">FRIDAY</span>
                    <h3>Veggie Power Wrap</h3>
                    <span>Dinner Delight: 480 kcal</span>
                    <button onclick="openRecipe('Veggie Power Wrap', '480 kcal', ['Whole Wheat Tortilla', 'Hummus/Yogurt Dip', 'Spinach', 'Grilled Chicken Strips', 'Bell Peppers'], 'Spread hummus/dip on tortilla, add protein and veggies, and securely wrap.')">View Recipe</button>
                </div>
            </div>

            <div class="meal-card" data-aos="fade-up" data-aos-delay="700">
                <img src="picture/High-Protein Oatmeal.jpeg" alt="Saturday Meal">
                <div class="info">
                    <span class="day">SATURDAY</span>
                    <h3>High-Protein Oatmeal</h3>
                    <span>Weekend Breakfast: 370 kcal</span>
                    <button onclick="openRecipe('High-Protein Oatmeal', '370 kcal', ['Rolled Oats', 'Whey Protein Powder', 'Milk/Water', 'Nuts and Seeds'], 'Cook oats, stir in protein powder, and top with crunchy nuts and seeds.')">View Recipe</button>
                </div>
            </div>

            <div class="meal-card" data-aos="fade-up" data-aos-delay="800">
                <img src="picture/Roasted Veggie Plate.jpg" alt="Sunday Meal">
                <div class="info">
                    <span class="day">SUNDAY</span>
                    <h3>Roasted Veggie Plate</h3>
                    <span>Comfort Dinner: 400 kcal</span>
                    <button onclick="openRecipe('Roasted Veggie Plate', '400 kcal', ['Carrots', 'Zucchini', 'Broccoli', 'Olive Oil', 'Garlic Powder'], 'Toss vegetables with oil/garlic. Roast at 200°C (400°F) for 20-25 min until tender-crisp.')">View Recipe</button>
                </div>
            </div>
        </div>
    </section>

    <div class="modal" id="recipeModal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 id="recipeName"></h2>
            <p><strong>Nutrition:</strong> <span id="recipeCalories"></span></p>
            <p><strong>Ingredients:</strong></p>
            <ul id="recipeIngredients"></ul>
            <p><strong>Method:</strong> <span id="recipeSteps"></span></p>
        </div>
    </div>
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
        
        // Modal Logic (Copied and maintained from your original script)
        const modal = document.getElementById('recipeModal');
        const recipeName = document.getElementById('recipeName');
        const recipeCalories = document.getElementById('recipeCalories');
        const recipeIngredients = document.getElementById('recipeIngredients');
        const recipeSteps = document.getElementById('recipeSteps');

        function openRecipe(name, calories, ingredients, steps){
            recipeName.textContent = name;
            recipeCalories.textContent = calories;
            // Map ingredients array to <li> elements
            recipeIngredients.innerHTML = ingredients.map(i=>`<li>${i}</li>`).join('');
            recipeSteps.textContent = steps;
            modal.style.display = 'flex';
        }

        function closeModal(){
            modal.style.display = 'none';
        }

        window.onclick = function(e){
            if(e.target == modal){ closeModal(); }
        }
    </script>
</body>
</html>