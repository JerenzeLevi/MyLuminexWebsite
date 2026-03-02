<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luminex</title>
    <link rel="stylesheet" href="About.css">
</head>
<body>
    <div class="hero-section">
        <header>
            <nav class="navbar">
                <img src="Luminex Logo.png" alt="Luminex Logo" class="logo">
                <ul class="nav-links">
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="Services.php">Services</a></li>
                    <li><a href="About.php" class="active">About Us</a></li>
                    <li><a href="Contact.php">Contact Us</a></li>
                </ul>

                <div class="nav-right">
                    <a href="Shop.php">
                        <img src="cart.png" alt="Cart" class="cart-icon">
                    </a>

                    <?php if (isset($_SESSION['username'])): ?>
                        <a href="#" class="login-btn" id="usernameBtn">
                            <?php echo htmlspecialchars($_SESSION['username']); ?>
                        </a>
                    <?php else: ?>
                        <a href="Login.html" class="login-btn">Log in</a>
                    <?php endif; ?>
                </div>
            </nav>
        </header>

        <div class="hero-text">
            <h1>Illuminate the Unseen<br>Discover with Luminex</h1>
            <p>
                Like constellations revealing stories,<br>
                Luminex technology unveils the vital insights hidden within your vicinity.<br>
                Explore our precise solutions to brighten your path to groundbreaking discoveries.
            </p>
        </div>
    </div>
    
    <section class="about-section">
        <div class="about-container">
            <div class="bulb-image">
                <img src="light.png" alt="Bulb Hanging">
                <div class="glow"></div>
            </div>
            <div class="about-text">
                <p><strong>Luminex is a smart, anti-glare urban lighting system</strong> engineered to balance public safety, energy efficiency, and ecological harmony. Unlike traditional lighting, which contributes to elevated CO₂ emissions, sleep disruption, and biodiversity loss, Luminex uses AI-powered tone control and responsive dimming to reduce environmental impact.</p>

                <p><strong>By minimizing skyglow and adapting light behavior</strong> to real-time human and vehicular activity, Luminex actively protects vulnerable nocturnal species—such as sea turtles, fireflies, birds, and pollinators—while preserving natural trophic levels. Tunable white and warm lighting modes promote healthier circadian rhythms, reduce light pollution, and offer cities a future-ready solution that prioritizes both people and planet.</p>
            </div>
        </div>
    </section>

    <section class="info-promo">
        <div class="promo-card">
            <a href="Services.php">
                <img src="Luminex_Logo.png" alt="Luminex Logo" class="promo-img">
                <h2 class="promo-title">Membership</h2>
            </a>
        </div>
        <div class="promo-card">
            <a href="Vouchers.php">
                <img src="Ticket.png" alt="Vouchers" class="promo-img">
                <h2 class="promo-title">Vouchers</h2>
            </a>
        </div>
        <div class="promo-card">
            <a href="Shop.php">
                <img src="fan.png" alt="On Sale" class="promo-img">
                <h2 class="promo-title">On Sale!</h2>
            </a>
        </div>

        <div class="info-links">
            <div class="info-column">
                <h3>Customer Care</h3>
                <ul>
                    <li>Help Center</li>
                    <li>How to Buy?</li>
                    <li>How to Return?</li>
                    <li>Shipping and Delivery</li>
                    <li>FAQs</li>
                    <li>Contact Us</li>
                </ul>
            </div>
            <div class="info-column">
                <h3>Luminex</h3>
                <ul>
                    <li>About Luminex</li>
                    <li>Terms and Conditions</li>
                    <li>Privacy Policy</li>
                </ul>
            </div>
            <div class="info-column">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <img src="fb.png" alt="Facebook">
                    <img src="youtube.png" alt="YouTube">
                    <img src="insta.png" alt="Instagram">
                    <img src="tiktik.png" alt="TikTok">
                </div>
            </div>
        </div>
    </section>

    <!-- Optional: Same side panel behavior as Home -->
    <div id="sidePanel" class="side-panel">
        <div class="profile-section">
            <img src="profile.png" alt="Profile" class="profile-img">
            <h2>Profile</h2>
        </div>
        <ul class="panel-links">
            <li><a href="Dashboard2.php">Dashboard</a></li>
            <li><a href="Dashboard.php">Reports</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Recent Activity</a></li>
            <li><a href="#">Messages</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="Logout.php" class="logout">Log out</a></li>
        </ul>
    </div>

    <div id="overlay" class="overlay"></div>

    <footer class="main-footer">
        <div class="footer-columns">
            <div class="footer-col">
                <h3>Payment Methods</h3>
                <img src="gcash.png" alt="GCash" class="footer-icon">
            </div>
            <div class="footer-col">
                <h3>Delivery Services</h3>
                <img src="Luminex Logo.png" alt="Luminex Logistics" class="footer-icon">
            </div>
            <div class="footer-col">
                <h3>Verified by</h3>
            </div>
        </div>
        <p class="copyright">© Luminex 2025</p>
    </footer>

    <script>
    const sidePanel = document.getElementById("sidePanel");
    const overlay = document.getElementById("overlay");
    const usernameBtn = document.getElementById("usernameBtn");

    if (usernameBtn) {
        usernameBtn.addEventListener("click", (e) => {
            e.preventDefault();
            sidePanel.classList.add("open");
            overlay.classList.add("show");
        });
    }

    overlay.addEventListener("click", () => {
        sidePanel.classList.remove("open");
        overlay.classList.remove("show");
    });
    </script>
</body>
</html>
