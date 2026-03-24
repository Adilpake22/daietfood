<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Subscription | Diet Shastra</title>
    <link rel="stylesheet" href="style.css">
<style>
/* Why Choose */
  /* Why Choose */
:root {
    --dark-green: #1a3300;
    --brand-green: #99cc33;
    --text-black: #1a1a1a;
    --form-bg: #0d1a00;
}

body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, sans-serif;
    background-color: #ffffff;
}
/* Why Choose Section */
        .why-choose-section {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            padding: 80px 10%;
            gap: 50px;
            background: url('img/bg1.png') center/cover;
        }

        .why-left {
            flex: 1;
            min-width: 300px;
        }

        .why-left h2 {
            font-size: clamp(1.8rem, 4vw, 2.8rem);
            margin-bottom: 30px;
        }

        .why-list {
            list-style: none;
            padding: 0;
        }

        .why-list li {
            margin-bottom: 20px;
            padding-left: 25px;
            position: relative;
            line-height: 1.6;
        }

        .why-list li::before {
            content: "•";
            position: absolute;
            left: 0;
            color: var(--brand-green);
            font-size: 1.5rem;
            line-height: 1;
        }

        /* Form Card */
        .why-form-card {
            flex: 0.8;
            background-color: var(--form-bg);
            border-radius: 40px;
            padding: 40px;
            color: white;
            max-width: 450px;
            min-width: 300px;
        }

        .why-input-group {
            margin-bottom: 15px;
        }

        .why-input-group input, .why-input-group select {
            width: 100%;
            padding: 12px 0;
            background: transparent;
            border: none;
            border-bottom: 1px solid rgba(255,255,255,0.2);
            color: white;
            outline: none;
        }

        .why-submit-btn {
            width: 100%;
            background-color: var(--brand-green);
            color: var(--dark-green);
            border: none;
            padding: 15px;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
            text-transform: uppercase;
        }

        /* How It Works */
        .how-it-works {
            background: linear-gradient(to right, #1a2a0a, #2d4d1a, #1a2a0a);
            padding: 80px 20px;
            text-align: center;
            color: white;
        }

        .hiw-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 25px;
            max-width: 1200px;
            margin: 40px auto 0;
        }

        .hiw-card {
            flex: 1;
            min-width: 280px;
            padding: 30px;
            border: 2px dashed rgba(255, 255, 255, 0.4);
            border-radius: 15px;
        }


/* 
How It Works: */
.how-it-works {
    /* Exact dark green gradient from the image */
    background: linear-gradient(to right, #1a2a0a, #2d4d1a, #1a2a0a);
    padding: 80px 20px;
    text-align: center;
    font-family: 'Segoe UI', sans-serif;
}

.hiw-title {
    color: #ffffff;
    font-size: 3rem;
    margin-bottom: 60px;
    font-weight: 700;
}

.hiw-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 25px;
    max-width: 1300px;
    margin: 0 auto;
}

.hiw-card {
    flex: 1;
    min-width: 300px;
    max-width: 400px;
    padding: 40px 30px;
    border: 2px dashed rgba(255, 255, 255, 0.6); /* White dashed border */
    border-radius: 15px;
    color: #ffffff;
    transition: transform 0.3s ease;
}

.hiw-card:hover {
    transform: translateY(-5px);
    background: rgba(255, 255, 255, 0.05); /* Subtle highlight on hover */
}

.hiw-card h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
    font-weight: 600;
}

.hiw-card p {
    font-size: 1.1rem;
    line-height: 1.6;
    opacity: 0.9;
    font-weight: 300;
}

/* Responsive for Mobile */
@media (max-width: 768px) {
    .hiw-title {
        font-size: 2.2rem;
    }
    .hiw-container {
        flex-direction: column;
        align-items: center;
    }
    .hiw-card {
        width: 100%;
    }
}





        /* Monthly Plan */
        :root {
            --dark-green: #1a3300;
            --brand-green: #99cc33;
            --text-light: #ffffff;
        }


     /* Pricing Section */
        .pricing-container {
            max-width: 1200px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .plan-card {
            background-color: var(--dark-green);
            color: var(--text-light);
            border-radius: 20px;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .plan-card:hover {
            transform: translateY(-10px);
        }

        .star-icon {
            color: var(--brand-green);
            font-size: 40px;
            margin-bottom: 15px;
        }

        .plan-card h2 {
            color: var(--brand-green);
            font-size: 1.5rem;
            margin: 0 0 20px 0;
        }

        .ideal-for {
            font-size: 0.85rem;
            margin-bottom: 25px;
            opacity: 0.9;
        }

        .features-list {
            width: 100%;
            text-align: left;
            border-top: 1px dashed rgba(255,255,255,0.2);
            padding-top: 20px;
        }

        .feature-item {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
            font-size: 0.85rem;
        }

        .checkmark {
            color: var(--brand-green);
            font-weight: bold;
        }

        /* Custom Checkmark */
        .checkmark {
            color: var(--brand-green);
            font-weight: bold;
            font-size: 1.1rem;
            margin-top: -2px;
        }

        .feature-text strong {
            display: block;
            margin-bottom: 2px;
        }

        /* Responsive Adjustments */
        @media (max-width: 1024px) {
            .pricing-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .pricing-container {
                grid-template-columns: 1fr;
            }
            .plan-card {
                padding: 40px 25px;
            }
        }
        
/* Page Header */
.page-header {
  position: relative;
  width: 100%;
  height: 30vh;
  min-height: 260px;
  background: url("img/bg3.png") center center / cover no-repeat;
}

/* Overlay */
.header-overlay {
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.55);
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Content */
.header-content {
  width: 100%;
  text-align: center;
}

/* Heading */
.header-content h1 {
  color: #ffffff;
  font-size: 3rem;
  font-weight: 700;
  margin: 0;
  letter-spacing: 1px;
}

/* Tablet view */
@media (max-width: 992px) {
  .page-header {
    height: 40vh;
  }

  .header-content h1 {
    font-size: 2.4rem;
  }
}

/* Mobile view */
@media (max-width: 576px) {
  .page-header {
    height: 32vh;
    min-height: 220px;
  }

  .header-content h1 {
    font-size: 1.9rem;
  }
}




/* Responsive Breakpoints */
        @media (max-width: 768px) {
            .why-choose-section, .salad-banner {
                flex-direction: column;
                text-align: center;
            }
            .side-assets.left { display: none; }
            .why-left { order: 2; }
            .why-form-card { order: 1; width: 100%; }
        }

</style>



</head>
<body>
    <?php include 'header.php'; ?>




    <section class="page-header">
        <div class="header-overlay">
          <div class="header-content" style="display:flex; justify-content:center; align-items:center; text-align:center;">
           <h1> Subscription </h1>
           </div>

        </div>
    </section>
   



<!--======================================================== ================================= =======================================  -->  

<div class="pricing-container">
        <div class="plan-card">
            <div class="star-icon">★</div>
            <h2>Monthly Plan</h2>
            <p class="ideal-for"><strong>Ideal For:</strong> Individuals or families looking for consistent healthy monthly meals.</p>
            <div class="features-list">
                <div class="feature-item"><span class="checkmark">✓</span><div class="feature-text">Curated weekly menus based on Diet Shastra principles</div></div>
                <div class="feature-item"><span class="checkmark">✓</span><div class="feature-text">Flexible delivery timing to your preferred location</div></div>
                <div class="feature-item"><span class="checkmark">✓</span><div class="feature-text">Cost-effective: Save 10% compared to single-order</div></div>
            </div>
        </div>

        <div class="plan-card">
            <div class="star-icon">★</div>
            <h2>Quarterly Plan</h2>
            <p class="ideal-for"><strong>Ideal For:</strong> Those committed to a healthy eating routine for three months.</p>
            <div class="features-list">
                <div class="feature-item"><span class="checkmark">✓</span><div class="feature-text">90 Meals: Delivered Daily Over Three Months.</div></div>
                <div class="feature-item"><span class="checkmark">✓</span><div class="feature-text">Customised Meal Plans: Tailored to Your Goals.</div></div>
                <div class="feature-item"><span class="checkmark">✓</span><div class="feature-text">Loyalty Discounts: Save More vs Monthly Plan.</div></div>
            </div>
        </div>

        <div class="plan-card">
            <div class="star-icon">★</div>
            <h2>Half-Yearly Plan</h2>
            <p class="ideal-for"><strong>Ideal For:</strong> Individuals seeking long-term savings and convenience.</p>
            <div class="features-list">
                <div class="feature-item"><span class="checkmark">✓</span><div class="feature-text">180 Meals: Delivered Daily For Six Months.</div></div>
                <div class="feature-item"><span class="checkmark">✓</span><div class="feature-text">Significant Savings: Save Up To 20%.</div></div>
                <div class="feature-item"><span class="checkmark">✓</span><div class="feature-text">Complimentary Dietary Consultations.</div></div>
            </div>
        </div>

        <div class="plan-card">
            <div class="star-icon">★</div>
            <h2>Custom Plans</h2>
            <p class="ideal-for"><strong>Ideal For:</strong> Customers with unique dietary needs or irregular schedules.</p>
            <div class="features-list">
                <div class="feature-item"><span class="checkmark">✓</span><div class="feature-text">Price: Based On Requirements.</div></div>
                <div class="feature-item"><span class="checkmark">✓</span><div class="feature-text">Fully Personalised Meal Options.</div></div>
                <div class="feature-item"><span class="checkmark">✓</span><div class="feature-text">Perfect For Corporate or Event Catering.</div></div>
            </div>
        </div>
    </div>









<!--======================================================== ================================= =======================================  -->  


<section class="why-choose-section">
        <div class="why-left">
            <h2>Why Choose Diet Shastra Subscription Plans?</h2>
            <ul class="why-list">
                <li><strong>Wholesome, Gourmet Meals:</strong> Farm-fresh ingredients, thoughtfully balanced.</li>
                <li><strong>Personalized Plans:</strong> Designed for individuals, families, and corporate wellness.</li>
                <li><strong>Effortless Experience:</strong> Hassle-free daily delivery and easy adjustments.</li>
                <li><strong>Value with Wellness:</strong> Premium meals at smart pricing with exclusive offers.</li>
            </ul>
        </div>

        <div class="why-form-card">
            <div class="why-form-header" style="text-align:center;">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#99cc33" stroke-width="2">
                    <circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg>
                <h3>Subscription</h3>
                <p style="color:var(--brand-green)">❦ Fill the Form ❦</p>
            </div>

            <form id="whatsappForm">
                <div class="why-input-group"><input type="text" id="name" placeholder="Name" required></div>
                <div class="why-input-group"><input type="email" id="email" placeholder="Email" required></div>
                <div class="why-input-group"><input type="tel" id="phone" placeholder="Phone Number" required></div>
                <div class="why-input-group">
                    <select id="plan" required>
                        <option value="" disabled selected>Choose Your Plan</option>
                        <option value="monthly">Monthly Plan</option>
                        <option value="quarterly">Quarterly Plan</option>
                        <option value="half-yearly">Half-Yearly Plan</option>
                    </select>
                </div>
                <div class="why-input-group"><input type="text" id="city" placeholder="City Name" required></div>
                <div class="why-input-group"><input type="text" id="pincode" placeholder="Pincode" required></div>
                <button type="submit" class="why-submit-btn">Submit</button>
            </form>
        </div>
    </section>








<!--======================================================== ================================= =======================================  -->  


<section class="how-it-works">


        <h2 class="hiw-title">How Diet Shastra Works</h2>
        <div class="hiw-container">
            <div class="hiw-card">
                <h3>Choose Your Plan</h3>
                <p>Select from Monthly, Quarterly, Half-Yearly, or Custom plans based on your goals.</p>
            </div>
            <div class="hiw-card">
                <h3>Personalise Nutrition</h3>
                <p>Share preferences, and we’ll deliver fresh, balanced meals in your preferred time slots.</p>
            </div>
            <div class="hiw-card">
                <h3>Receive Nourishment</h3>
                <p>Enjoy freshly prepared, wholesome meals delivered daily to your door.</p>
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
<script>
        document.getElementById("whatsappForm").addEventListener("submit", function(e) {
            e.preventDefault();
            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const phone = document.getElementById("phone").value;
            const plan = document.getElementById("plan").value;
            const city = document.getElementById("city").value;
            const pincode = document.getElementById("pincode").value;

            const yourWhatsAppNumber = "8421575781";
            const message = `Hello! Here are my details:\nName: ${name}\nEmail: ${email}\nPhone: ${phone}\nPlan: ${plan}\nCity: ${city}\nPincode: ${pincode}`;
            const whatsappURL = `https://wa.me/${yourWhatsAppNumber}?text=${encodeURIComponent(message)}`;
            window.open(whatsappURL, "_blank");
        });
    </script>
</body>
</html>
 <?php include 'footer.php'; ?>