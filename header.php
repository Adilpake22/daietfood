<header class="main-header">
    <div class="container">
        <div class="logo">
            <img src="img/Salado.webp" alt="SaladO Logo">
            <!-- <span class="logo-text">SaladO</span> -->
        </div>








        <nav class="nav-menu">
            <ul class="nav-list">
                <li><a href="index.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">Home</a></li>
                <li><a href="ourstory.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'our.php') ? 'active' : ''; ?>">Our Story</a></li>
                <li><a href="ourmenu.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'menu.php') ? 'active' : ''; ?>">Our Menu</a></li>
                <li><a href="subscription.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'sub.php') ? 'active' : ''; ?>">Subscription</a></li>
                <li><a href="contact.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>">Contact Us</a></li>
                  <li>
<a href="orders.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'orders.php') ? 'active' : ''; ?>">
Orders
</a>
</li>
            </ul>
        </nav>

        <div class="hamburger" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
</header>





<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="script.js"></script>







