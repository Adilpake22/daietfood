<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DietShtra - Fresh Salads Delivered</title>

    <!-- SEO Meta -->
    <meta name="description" content="DietShtra delivers fresh, healthy, and delicious salads straight to your doorstep. Eat clean, stay fit, and enjoy nutritious meals daily.">
    <meta name="keywords" content="DietShtra, fresh salads, healthy food delivery, diet meals, fitness food">
    <meta name="author" content="DietShtra">

    <!-- Favicon (Browser Tab Logo) -->
    <link rel="icon" type="img/png" href="logo1.png">
    <link rel="apple-touch-icon" href="logo1.png">

    <!-- Open Graph (Facebook, WhatsApp, LinkedIn) -->
    <meta property="og:title" content="DietShtra - Fresh Salads Delivered">
    <meta property="og:description" content="Fresh, healthy, and delicious salads delivered to your doorstep. Stay fit with DietShtra.">
    <meta property="og:image" content="	http://localhost/saladD/img/DietShastraLogo.jpg">
    <meta property="og:url" content="https://yourwebsite.com/">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DietShtra - Fresh Salads Delivered">
    <meta name="twitter:description" content="Fresh, healthy, and delicious salads delivered to your doorstep.">
    <meta name="twitter:image" content="	http://localhost/saladD/img/DietShastraLogo.jpg">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'header.php'; ?>


    


<!--========================================================= Hero Section  =========================================== ===========================================  -->

<!-- <section class="hero">
        <div class="hero-container">
            <div class="hero-content">
    <p class="subtitle">The Brand Serves You Healthy Salad<span>🥗</span></p>
    <h1>FRESH. PURE. SALADS.</h1>
    <p class="description">Chef-crafted, farm-fresh salads delivered to your doorstep every day</p>
                <a href="#" class="cta-button">CONTACT NOW</a>
            </div>

            <div class="hero-image">
                <img src="img/pannerr.webp" alt="Fresh Grilled Salad">
            </div>

         <img src="img/salad.webp" class="veg veg-top-left" alt="Salad">
<img src="food/bg53.png" class="veg veg-top-right" alt="Salad">
<img src="food/bg54.png" class="veg veg-bottom-left" alt="Salad">
<img src="food/bg55.png" class="veg veg-bottom-right" alt="Salad">

</section> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<section class="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="hero-container">
                    <div class="hero-content">
                        <p class="subtitle">The Brand Serves You Healthy Salad 🥗</p>
                        <h1>FRESH. PURE. SALADS.</h1>
                        <p class="description">Chef-crafted, farm-fresh salads delivered to your doorstep every day</p>
                        <a href="#" class="cta-button">CONTACT NOW</a>
                    </div>
                    <div class="hero-image">
                        <img src="plate51.png" alt="Fresh Grilled Salad">
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="hero-container">
                    <div class="hero-content">
                        <p class="subtitle">Fuel Your Body 🌿</p>
                        <h1>GREEN. CLEAN. LEAN.</h1>
                        <p class="description">Packed with antioxidants and nutrients to keep you going all day.</p>
                        <a href="#" class="cta-button">ORDER NOW</a>
                    </div>
                    <div class="hero-image">
                        <img src="plate50.png" alt="Green Salad">
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="hero-container">
                    <div class="hero-content">
                        <p class="subtitle">Daily Nutrition 🥑</p>
                        <h1>RICH. TEXTURE. TASTE.</h1>
                        <p class="description">Experience the crunch of fresh veggies with our signature dressings.</p>
                        <a href="#" class="cta-button">EXPLORE MORE</a>
                    </div>
                    <div class="hero-image">
                        <img src="plate51.png" alt="Avocado Salad">
                    </div>
                </div>
            </div>

            <!-- <div class="carousel-item">
                <div class="hero-container">
                    <div class="hero-content">
                        <p class="subtitle">Premium Quality 🥗</p>
                        <h1>FARM. TO. TABLE.</h1>
                        <p class="description">Supporting local farmers while bringing health to your table.</p>
                        <a href="#" class="cta-button">GET STARTED</a>
                    </div>
                    <div class="hero-image">
                        <img src="plate53.png" alt="Farm Salad">
                    </div>
                </div>
            </div> -->
        </div>

        <img src="113.png" class="veg veg-top-left" alt="Decoration">
        <img src="food/bg53.png" class="veg veg-top-right" alt="Decoration">
        <img src="food/bg54.png" class="veg veg-bottom-left" alt="Decoration">
        <img src="food/bg55.png" class="veg veg-bottom-right" alt="Decoration">
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const myCarousel = document.getElementById('heroCarousel');
    
    myCarousel.addEventListener('slide.bs.carousel', event => {
        // Find the slide that is about to disappear
        const activeSlide = event.from;
        const nextSlide = event.to;
        
        // Target all content pieces
        const contents = document.querySelectorAll('.hero-content');
        const images = document.querySelectorAll('.hero-image');
        
        // Reset their animations by removing and adding them back
        contents.forEach(content => content.style.animation = 'none');
        images.forEach(img => img.style.animation = 'none');
        
        // Force a reflow
        void contents[nextSlide].offsetWidth; 
        
        // Re-apply the animations to the next slide
        contents[nextSlide].style.animation = 'fadeInLeft 1s ease-out forwards';
        images[nextSlide].style.animation = 'fadeInRight 1.2s ease-out forwards';
    });
</script>


<!--========================================================   About Section  ================================= ===========================================  -->




<section class="about-section">


        <div class="about-container">
            <div class="about-content">
                <h2 class="about-title">Overviews how we set diet plan for you.</h2>
                <div class="about-text">
                    <p><strong>Diet Shastra</strong> is a science-backed, user-first health and nutrition platform built to simplify wellness for real people. Founded with a bold mission — to make personalized nutrition accessible, practical, and sustainable — we help individuals and families reclaim control over their health through smart, adaptive diet planning.</p>

                 <p>Built by <strong>nutritionists, not influencers</strong>, Diet Shastra focuses on real results through custom plans designed for every life stage — from <strong>kids to 70+</strong>. We go beyond calorie counting by offering <strong>emotional and lifestyle support</strong>, culturally relevant meals, and practical routines that fit seamlessly into everyday Indian life.</p>

                </div>
                <a href="#" class="about-btn">ABOUT US</a>
            </div>

            <div class="about-gallery">
                <div class="grid-item tall">
                    <img src="img/food1.jpg" alt="Broccoli Character">
                </div>
                <div class="grid-item wide">
                    <img src="img/food2.jpg" alt="Sharing Salad">
                </div>
                <div class="grid-item square">
                    <img src="img/food3.jpg" alt="Floating Salads">
                </div>
            </div>
        </div>
</section>






<!--========================================================   Features Section  ================================= ===========================================  -->





<section class="features-section">


        <div class="features-container">
            <div class="features-header">
                <!-- <h2>Why SaladO Stands Out</h2> -->
                  <h2>Why DietShtra Sets the Standard</h2>
                                <p>
                    Freshness, taste, and ease define <strong>DietShtra</strong>. 
                    We craft <strong>farm-fresh salads</strong> with diverse flavours, where tradition meets innovation. 
                    With a strong commitment to sustainability, we make healthy living effortless and 
                    <strong>eco-conscious</strong>.
                    </p>

            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="img/salad.png" alt="Fresh Ingredients">
                    </div>
                    <div class="feature-text">
                        <h3>Fresh Ingredients</h3>
                        <p>Only the finest, farm-fresh produce.</p>
                       
                    </div>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="img/bar.png" alt="Diverse Menu">
                    </div>
                    <div class="feature-text">
                        <h3>Diverse Menu</h3>
                        <p>Modern twists on traditional flavors.</p>
                    </div>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="img/convenience.png" alt="Convenience">
                    </div>
                    <div class="feature-text">
                        <h3>Convenience</h3>
                        <p>Healthy eating, delivered fast!</p>
                    </div>
                </div>
            </div>


            
        </div>
</section>






<!--========================================================   Menu Section  ================================= ===========================================  -->



<!-- Menu Section -->
    <section class="menu-section">
        <div class="menu-container">
            <div class="menu-visual">
                <div class="salad-circle">
                    <div class="cutlery">
                        <!-- <img src="spoun1.png" alt="Cutlery"> -->
                    </div>
                    <div class="plate p1"><img src="food/plate 1.png"></div>
                    <div class="plate p2"><img src="food/plate2.png"></div>
                    <div class="plate p3"><img src="food/plate 1.png"></div>
                    <div class="plate p4"><img src="img/pannerr.webp"></div>
                    <div class="plate p5"><img src="food/plate2.png"></div>
                    <div class="plate p6"><img src="img/pannerr.webp"></div>
                    <div class="plate p7"><img src="food/plate2.png"></div>
                    <div class="plate p8"><img src="img/pannerr.webp"></div>
                </div>
            </div>

            <div class="menu-content">
                <p class="menu-subtitle">Our Menu</p>
               <h2 class="menu-title">Experience the Elegance of Healthy Eating</h2>
<div class="menu-description">
    <p>
        Delight in a curated selection of over 30 gourmet, farm-fresh dishes designed to satisfy every palate and lifestyle. From <strong>Veg  Salads</strong> to <strong>Quinoa and Superfood Salads</strong>, each creation balances exquisite taste with optimal nutrition. 
        Savor our wholesome <strong>Grain Bowls</strong>, luxuriously smooth <strong>Hummus</strong>, and an array of <strong>Fat-Free Dressings</strong> crafted to elevate every bite. 
        For dessert lovers, indulge in our guilt-free <strong>Healthy Desserts</strong> or explore our specially tailored <strong>Keto and Low-Carb Options</strong> for a sophisticated, mindful indulgence. 
        At <strong>DietShtra</strong>, healthy eating is an art, and every meal is a masterpiece.
    </p>
</div>

                <a href="#" class="view-menu-btn">VIEW MENU</a>
            </div>
        </div>
    </section>







<!--========================================================   Subscription Section   ================================= ===========================================  -->



<section class="subscription-section">
    <div class="subscription-container">
        <div class="subscription-info">
            <h2 class="sub-title">Our Subscription Plans</h2>
            <p class="sub-lead">
                Elevate your wellness journey with <strong>DietShtra</strong>'s flexible subscription plans, thoughtfully crafted to complement your lifestyle.
            </p>

            <ul class="plan-list">
                <li><strong>Monthly Plan:</strong> Receive fresh, chef-curated salads daily, ensuring your healthy habits are effortless and enjoyable.</li>
                <li><strong>Quarterly Plan:</strong> Unlock exclusive benefits and premium discounts while maintaining three months of consistent wellness.</li>
                <li><strong>Half-Yearly Plan:</strong> Commit to long-term health with guaranteed freshness, savings, and nutritional consistency.</li>
                <li><strong>Custom Plans:</strong> Personalize your subscription to match your taste preferences, dietary goals, and schedule for ultimate convenience.</li>
            </ul>

            <a href="#" class="know-more-btn">KNOW MORE</a>
        </div>

        <img src="img/salad.webp" class="veg veg-top-left" alt="Salad">
        <img src="food/bg53.png" class="veg veg-top-right" alt="Salad">
        <img src="bg110.png" class="veg veg-bottom-left" alt="Salad">
        <img src="food/bg55.png" class="veg veg-bottom-right" alt="Salad">

        <div class="form-wrapper">
            <div class="subscription-card">
                <div class="card-header">
                    <div class="cart-icon">🛒</div>
                    <h3>Subscription</h3>
                    <p class="fill-text">🌿 Fill the Form 🌿</p>
                </div>
                
                <form class="sub-form" id="whatsappForm">
                    <input type="text" placeholder="Name" name="name" required>
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="tel" placeholder="Phone Number" name="phone" required>
                    
                    <select name="plan" required>
                        <option value="" disabled selected>Choose Your Plan</option>
                        <option value="Monthly Plan">Monthly Plan</option>
                        <option value="Quarterly Plan">Quarterly Plan</option>
                        <option value="Half-Yearly Plan">Half-Yearly Plan</option>
                        <option value="Custom Plan">Custom Plan</option>
                    </select>
                    
                    <input type="text" placeholder="City Name" name="city" required>
                    <input type="text" placeholder="Pincode" name="pincode" required>
                    
                    <button type="submit" class="submit-btn">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
document.getElementById('whatsappForm').addEventListener('submit', function(e){
    e.preventDefault();

    const name = this.name.value.trim();
    const email = this.email.value.trim();
    const phone = this.phone.value.trim();
    const plan = this.plan.value;
    const city = this.city.value.trim();
    const pincode = this.pincode.value.trim();

    // ✅ Add country code (India example)
    const whatsappNumber = '918262990600';

    const message = `Hello! I want to subscribe.

Name: ${name}
Email: ${email}
Phone: ${phone}
Plan: ${plan}
City: ${city}
Pincode: ${pincode}`;

    const encodedMessage = encodeURIComponent(message);

    const url = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;

    window.open(url, '_blank');
});
</script>

  <!--========================================================   Franchise Section   ================================= =======================================  -->  



      <!-- Franchise Section -->
    <section class="franchise-section">
        <div class="franchise-container">
            <div class="franchise-visual">
                <div class="illustration-wrapper">
                    <img src="food/saladii.png" alt="SaladO Franchise Revolution">
                </div>
            </div>

            <div class="franchise-content">
                <p class="franchise-subtitle">Franchise Opportunity with DietShtra</p>
          <h2 class="franchise-title">Join India's Premier Healthy Eating Revolution!</h2>

<p class="franchise-description">
    Become a part of the wellness movement with <strong>DietShtra</strong>, one of India's leading healthy lifestyle brands. With our proven business model, strong brand presence, and unwavering commitment to quality, you can bring fresh, flavorful, and nutritious salads to your city and make a meaningful impact on people’s lives.
</p>

<div class="why-partner">
    <h3>Why Partner with <strong>DietShtra</strong>?</h3>
    <ul class="partner-list">
        <li><span>➜</span> A trusted, nationally recognized brand synonymous with health and quality.</li>
        <li><span>➜</span> Attractive ROI opportunities with scalable investment options.</li>
        <li><span>➜</span> Comprehensive training, marketing support, and operational guidance included.</li>
    </ul>
</div>


                <a href="#" class="join-btn">JOIN NOW</a>
            </div>
        </div>
    </section>





<!--========================================================  Floating decorative elements ================================= =======================================  -->     





<section class="hero-section">
    <!-- Floating decorative elements -->
    <img src="food/bg55.png" class="floating-element veg-1">
    <img src="food/bg55.png" class="floating-element veg-2">
    <img src="food/bg54.png" class="floating-element veg-3">

    <!-- Left Content Section -->
    <div class="content-left">
        <h1>Delivering Freshness to 30+ Cities Across India!</h1>
        <p>
            <strong>DietShtra, India's leading healthy lifestyle brand</strong>, is bringing gourmet, farm-fresh salads to over 30 cities nationwide. 
            Experience wholesome, flavorful, and nutrient-rich meals delivered straight to your doorstep. Order now via <b>Swiggy and Zomato</b> and savor health like never before.
        </p>
        <a href="#" class="btn-discover">Discover Now</a>
    </div>

    <!-- Center Content Section -->
    <div class="content-center">
        <img src="img/bike.webp" alt="Delivery Boy" class="delivery-img">
    </div>

    <!-- Right Content Section - Cities Grid -->
    <div class="content-right">
        <div class="city-grid">
            <div class="city-item">
                <div class="city-icon">
                    <img src="img/building.png" alt="Mumbai">
                </div>
                <span>Mumbai</span>
            </div>
            <div class="city-item">
                <div class="city-icon">
                    <img src="img/india-gate.png" alt="Delhi NCR">
                </div>
                <span>Delhi NCR</span>
            </div>
            <div class="city-item">
                <div class="city-icon">
                    <img src="img/be.png" alt="Bengaluru">
                </div>
                <span>Bengaluru</span>
            </div>
            <div class="city-item">
                <div class="city-icon">
                    <img src="img/hyderabad.png" alt="Hyderabad">
                </div>
                <span>Hyderabad</span>
            </div>
            <div class="city-item">
                <div class="city-icon">
                    <img src="img/chandi.png" alt="Chandigarh">
                </div>
                <span>Chandigarh</span>
            </div>
            <div class="city-item">
                <div class="city-icon">
                    <img src="img/jaipur.png" alt="Jaipur">
                </div>
                <span>Jaipur</span>
            </div>
            <div class="city-item">
                <div class="city-icon">
                    <img src="img/landmark.png" alt="Chennai">
                </div>
                <span>Chennai</span>
            </div>
            <div class="city-item">
                <div class="city-icon">
                    <img src="img/landmark.png" alt="More Cities">
                </div>
                <span>And many More</span>
            </div>
        </div>
    </div>
</section>

<!--========================================================   testimonia Section   ================================= =======================================  -->   

<section class="testimonial-section">
    <div class="testimonial-container">
        <div class="testimonial-text-side">
            <span class="tag">Testimonials</span>
            <h1>What Our Customers Love About Us</h1>
            <p class="desc">
                Explore why discerning customers choose <strong>DietShtra</strong> — from our farm-fresh ingredients to thoughtfully crafted, flavorful, and health-focused creations. Experience the difference that quality, taste, and wellness make.
            </p>
            <div class="stats-row">
                <div class="stat">
                    <span class="number">15k+</span>
                    <span class="label">Happy Customers</span>
                </div>
                <div class="stat">
                    <span class="number">17+</span>
                    <span class="label">Award Won</span>
                </div>
                <div class="stat">
                    <span class="number">30+</span>
                    <span class="label">Food Menu</span>
                </div>
            </div>
        </div>

        <div class="testimonial-slider-side">
            <div class="slider-header">
                <h3>Customer Reviews</h3>
                <div class="nav-arrows">
                    <button class="slider-btn prev-btn">←</button>
                    <button class="slider-btn next-btn">→</button>
                </div>
            </div>

            <div class="testimonial-slider-container">
                <div class="testimonial-slider-track">
                    <!-- Card 1 -->
                    <div class="testimonial-slide">
                        <div class="t-card small">
                            <div class="user">
                                <img src="img/food1.jpg" alt="User">
                                <div class="user-meta">
                                    <h4>PRIYA IYER</h4>
                                    <p>Homemaker</p>
                                </div>
                            </div>
                            <div class="rating">★★★★★</div>
                            <p class="comment">"Exceeded my expectations. Quality, portion size, and presentation are top-notch."</p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="testimonial-slide">
                        <div class="t-card small">
                            <div class="user">
                               <img src="img/food1.jpg" alt="User">
                                <div class="user-meta">
                                    <h4>RIYA SHARMA</h4>
                                    <p>Homemaker</p>
                                </div>
                            </div>
                            <div class="rating">★★★★★</div>
                            <p class="comment">"Every salad feels fresh, wholesome, and beautifully presented. Highly recommended!"</p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="testimonial-slide">
                        <div class="t-card small">
                            <div class="user">
                               <img src="img/food1.jpg" alt="User">
                                <div class="user-meta">
                                    <h4>ARJUN PATEL</h4>
                                    <p>Busy Professional</p>
                                </div>
                            </div>
                            <div class="rating">★★★★★</div>
                            <p class="comment">"Completely blown away. Freshness, flavor, and service are truly remarkable."</p>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="testimonial-slide">
                        <div class="t-card small">
                            <div class="user">
                               <img src="img/food1.jpg" alt="User">
                                <div class="user-meta">
                                    <h4>ANJALI MEHTA</h4>
                                    <p>Fitness Enthusiast</p>
                                </div>
                            </div>
                            <div class="rating">★★★★★</div>
                            <p class="comment">"Perfect balance of taste and nutrition. My daily go-to for healthy meals."</p>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="testimonial-slide">
                        <div class="t-card small">
                            <div class="user">
                               <img src="img/food1.jpg" alt="User">
                                <div class="user-meta">
                                    <h4>RAHUL VERMA</h4>
                                    <p>Working Professional</p>
                                </div>
                            </div>
                            <div class="rating">★★★★★</div>
                            <p class="comment">"Best healthy food delivery in town. Consistent quality and great taste."</p>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="testimonial-slide">
                        <div class="t-card small">
                            <div class="user">
                               <img src="img/food1.jpg" alt="User">
                                <div class="user-meta">
                                    <h4>NEHA GUPTA</h4>
                                    <p>Health Coach</p>
                                </div>
                            </div>
                            <div class="rating">★★★★★</div>
                            <p class="comment">"Recommending to all my clients. Fresh ingredients and perfect portions."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>








<!--========================================================   App Section   ================================= =======================================  -->  




 <!-- App Section -->
<!-- App Section -->
   <!-- App Section -->
    <section class="app-section">
        <div class="container app-grid">
            <div class="app-visuals">
                <div class="phone-wrapper">
                    <!-- Phone images will be added via CSS or JavaScript -->
                </div>
            </div>
            <div class="app-content">
               <h2>Coming Soon: DietShtra App!</h2>
                <p class="app-lead">Coming soon: a new way to dine healthy.</p>
                
                <h3>Exciting Features Of DietShtra App</h3>
                <div class="feature-item">
                    <div class="city-icon">
                        <img src="img/food.png" alt="Food Icon">
                    </div>
                    <div class="f-text">
                        <strong>Food Ordering</strong>
                        <p>Order fresh and healthy meals with a few taps</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="city-icon">
                        <img src="img/search.png" alt="Search Icon">
                    </div>
                    <div class="f-text">
                        <strong>Options</strong>
                        <p>Explore Veg and Non-Veg options with filters.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="city-icon">
                        <img src="img/fast.png" alt="Delivery Icon">
                    </div>
                    <div class="f-text">
                        <strong>Fast Delivery</strong>
                        <p>Real-time order tracking and notifications.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



<!--========================================================   salad-banner  ================================= =======================================  -->  


<section class="salad-banner">
  <div class="side-assets left">
<img src="food/bg50.png" alt="Leaf" class="item leaf-1"
     style="width:320px; max-width:none; margin:20px;">



  </div>

  <div class="content">
    <h1>Ready to Experience the <br><span class="highlight">Fresh Salads?</span> Order Now!</h1>
    <a href="store.php" class="cta-button">VISIT OUR STORE</a>
  </div>

  <div class="side-assets right">
    <div class="bowl-container">
      <img src="food/bg52.png" alt="Salad Bowl" class="main-bowl">
      <img src="food/bg55.png" alt="Tomato" class="item float-piece-1">
      <img src="food/bg53.png" alt="Onion" class="item float-piece-2">
    </div>
  </div>
</section>









 <?php include 'footer.php'; ?>


     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>