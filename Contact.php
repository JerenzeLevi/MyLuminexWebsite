<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Us - Luminex Solutions</title>
  <link rel="stylesheet" href="Contact.css">
</head>
<body>
  <div class="hero-section">
    <header>
      <nav class="navbar">
        <img src="Luminex Logo.png" alt="Luminex Logo" class="logo">

        <ul class="nav-links">
          <li><a href="Home.php">Home</a></li>
          <li><a href="Services.php">Services</a></li>
          <li><a href="About.php">About Us</a></li>
          <li><a href="Contact.php" class="active">Contact Us</a></li>
        </ul>

        <div class="nav-right">
          <a href="Shop.php"><img src="cart.png" alt="Cart" class="cart-icon"></a>

          <?php if (isset($_SESSION['username'])): ?>
            <a href="#" class="login-btn" id="usernameBtn"><?php echo htmlspecialchars($_SESSION['username']); ?></a>
          <?php else: ?>
            <a href="Login.php" class="login-btn">Log in</a>
          <?php endif; ?>
        </div>
      </nav>
    </header>

    <div class="hero-text">
      <h1>Contact Us</h1>
      <p>We’d love to hear from you. Let’s get in touch today!</p>
    </div>
  </div>

  <!-- Contact Section -->
  <section class="contact-help">
    <div class="help-title">
      <div class="line-glow"></div>
      <h2>Need Help?</h2>
      <div class="line-glow"></div>
    </div>

    <div class="help-grid">
      <div class="help-box">
        <img src="phone.png" alt="Phone" class="help-icon">
        <h3>Phone</h3>
        <p><strong>**19 *** ****</strong></p>
        <p>Available from<br>9am – 4pm</p>
      </div>

      <div class="help-box">
        <img src="twit.png" alt="Email" class="help-icon">
        <h3>Email</h3>
        <p><strong>jerenzelev.omandam@sccpag.edu.ph</strong></p>
        <p>Email us anytime!</p>
      </div>
    </div>
  </section>

  <!-- Promo Section -->
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

  <!-- Footer -->
  <footer class="main-footer">
    <div class="footer-columns">
      <div class="footer-col">
        <h3>Payment Methods</h3>
        <img src="gcash.png" alt="GCash" class="footer-icon">
      </div>
      <div class="footer-col">
        <h3>Delivery Services</h3>
        <img src="Luminex_Logo.png" alt="Luminex Logistics" class="footer-icon">
      </div>
      <div class="footer-col">
        <h3>Verified by</h3>
      </div>
    </div>

    <p class="copyright">© Luminex 2025</p>
  </footer>

  <!-- SIDE PANEL (Same as Home/About) -->
  <?php if (isset($_SESSION['username'])): ?>
  <div id="sidePanel" class="side-panel">
    <button id="closeSide" class="close-btn">&times;</button>

    <div class="profile-section">
      <img src="profile.png" alt="Profile" class="profile-img">
      <h2><?php echo htmlspecialchars($_SESSION['username']); ?></h2>
    </div>

    <ul class="panel-links">
      <li><a href="Dashboard.php">Dashboard</a></li>
      <li><a href="Messages.php">Messages</a></li>
      <li><a href="RecentActivity.php">Recent Activity</a></li>
      <li><a href="PurchaseHistory.php">Purchase History</a></li>
      <li><a href="Settings.php">Settings</a></li>
      <li><a href="Logout.php" class="logout">Log out</a></li>
    </ul>
  </div>
  <?php endif; ?>

  <!-- JS for Side Panel Toggle -->
  <script>
    const usernameBtn = document.getElementById('usernameBtn');
    const sidePanel = document.getElementById('sidePanel');
    const closeSide = document.getElementById('closeSide');

    if (usernameBtn && sidePanel) {
      usernameBtn.addEventListener('click', function(e) {
        e.preventDefault();
        sidePanel.classList.toggle('open');
      });

      if (closeSide) {
        closeSide.addEventListener('click', () => sidePanel.classList.remove('open'));
      }

      document.addEventListener('click', (ev) => {
        if (!sidePanel.contains(ev.target) && ev.target !== usernameBtn) {
          sidePanel.classList.remove('open');
        }
      });
    }
  </script>
</body>
</html>
