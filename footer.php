<!DOCTYPE html>
<html lang="en">
<head>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 
</head>

<footer class="main-footer">
    <div class="footer-container">
        <div class="footer-column">
            <h3>INFORMATION</h3>
            <ul>
                <li><a href="privacy.php">Privacy policy</a></li>
                <li><a href="terms.php">Terms & Conditions</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3>QUICK LINKS</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="ourstory.php">Our Story</a></li>
                <li><a href="ourmenu.php">Our Menu</a></li>
                <li><a href="subscription.php">subscription</a></li>
                
                <!-- <li><a href="blog.php">Blog</a></li> -->
            </ul>
        </div>

     <div class="footer-column">
    <h3>OUR COMPANY</h3>
    <p><strong>Address:</strong> dsbsjbbsjhhskhjkfhhdbhf</p>
    
    <div class="app-buttons" style="margin-top: 20px;">
        <a href="" target="_blank" class="playstore-btn">
            <i class="fab fa-google-play"></i>
            <span>GET IT ON <br><b>Google Play</b></span>
        </a>
    </div>
</div>
        <!-- <div class="footer-column">
            <h3>OUR OTHER BRANDS</h3>
            <div class="brand-logos">
                <img src="salado-cafe-logo.png" alt="Salado Café">
                <img src="eats-affair-logo.png" alt="The Eats Affair">
                <img src="hummazing-logo.png" alt="Hummazing">
            </div>
        </div> -->
    </div>

    <div class="footer-center-logo">
        <img src="img/Salado.webp" alt="Salado Logo">
    </div>

    <div class="footer-bottom">
        <div class="social-links">
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
        </div>

        <div class="copyright">
       <p><strong>Salado</strong> © <?php echo date("Y"); ?> All rights reserved. Designed By <span></span></p>

        </div>

        <!-- <div class="payment-methods">
            <img src="visa.png" alt="Visa">
            <img src="mastercard.png" alt="Mastercard">
            <img src="amex.png" alt="Amex">
            <img src="paypal.png" alt="Paypal">
            <img src="discover.png" alt="Discover">
            <img src="cod.png" alt="COD">
        </div> -->
    </div>
</footer>



<style>



/* Footer */
.main-footer {
    background-color: #1a2406;
    background-image: radial-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px);
    background-size: 30px 30px;
    color: #ffffff;
    padding: 60px 5% 30px 5%;
    font-family: 'Poppins', sans-serif;
}

.footer-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    padding-bottom: 40px;
}

.footer-column {
    flex: 1;
    min-width: 200px;
}

.footer-column h3 {
    font-size: 16px;
    letter-spacing: 1px;
    margin-bottom: 25px;
    font-weight: 700;
}

.footer-column ul {
    list-style: none;
    padding: 0;
}

.footer-column ul li {
    margin-bottom: 12px;
}

.footer-column ul li a {
    color: #d1d1d1;
    text-decoration: none;
    font-size: 14px;
    transition: color 0.3s;
}

.footer-column ul li a:hover {
    color: #8cc63f;
}

.footer-column p {
    font-size: 14px;
    line-height: 1.6;
    color: #d1d1d1;
}

.brand-logos img {
    height: 40px;
    margin-right: 15px;
    filter: brightness(0) invert(1);
}

.footer-center-logo {
    text-align: center;
    padding: 40px 0;
}

.footer-center-logo img {
    max-width: 250px;
}

.footer-bottom {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
    padding-top: 20px;
}

.social-links a {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 35px;
    height: 35px;
    background: #fff;
    color: #1a2406;
    border-radius: 50%;
    margin-right: 10px;
    text-decoration: none;
    font-size: 16px;
}

.copyright {
    font-size: 13px;
    color: #fff;
}

.copyright span {
    color: #8cc63f;
    font-weight: bold;
}

.payment-methods img {
    height: 25px;
    margin-left: 8px;
    border-radius: 3px;
}

/* Animations */
@keyframes fadeInLeft {
    from { opacity: 0; transform: translateX(-50px); }
    to { opacity: 1; transform: translateX(0); }
}

@keyframes fadeInRight {
    from { opacity: 0; transform: translateX(50px); }
    to { opacity: 1; transform: translateX(0); }
}

@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
}

@keyframes slowRotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}



.playstore-btn {
    display: inline-flex;
    align-items: center;
    background-color: #ffffff; /* Changed to White */
    color: #1a2406 !important; /* Text color matches your footer dark green */
    padding: 12px 25px;       /* Increased height and width via padding */
    border-radius: 8px;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 1px solid #ffffff;
    min-width: 180px;         /* Ensures a consistent width */
}

.playstore-btn:hover {
    background-color: #8cc63f; /* Turns your brand green on hover */
    color: #ffffff !important;
    border-color: #8cc63f;
}

.playstore-btn i {
    font-size: 32px;          /* Increased icon size */
    margin-right: 15px;
}

.playstore-btn span {
    font-size: 12px;          /* Slightly larger sub-text */
    line-height: 1.2;
    display: block;
}

.playstore-btn b {
    font-size: 18px;          /* Larger "Google Play" text */
    display: block;
}
/* Responsive Adjustments */
@media (max-width: 992px) {
    .about-container,
    .menu-container,
    .subscription-container,
    .franchise-container,
    .cities-container,
    .app-grid {
        flex-direction: column;
        text-align: center;
    }
    
    .features-grid {
        flex-direction: column;
        align-items: center;
    }
    
    .feature-card {
        width: 100%;
    }
    
    .testimonial-container {
        flex-direction: column;
        padding-right: 20px;
    }
    
    .testimonial-text-side {
        flex: none;
        width: 100%;
        text-align: center;
    }
    
    .stats-row { 
        justify-content: center; 
    }
    
    .nav-arrows { 
        justify-content: center; 
        padding-right: 0; 
    }
    
    .banner-container {
        flex-direction: column;
        height: auto;
        padding: 40px 20px;
    }
    
    .side-decoration {
        display: none;
    }
    
    .footer-bottom {
        flex-direction: column;
        text-align: center;
    }
}

@media (max-width: 600px) {
    .about-title {
        font-size: 1.8rem;
    }
    
    .about-gallery {
        grid-template-columns: 1fr;
    }
    
    .tall {
        grid-row: span 1;
    }
    
    .cities-grid {
        grid-template-columns: 1fr;
    }
    
    .city-item {
        justify-content: center;
    }
    
    .footer-grid {
        grid-template-columns: 1fr;
    }
    
    .other-brands {
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .footer-column {
        text-align: center;
    }
}


    </style>