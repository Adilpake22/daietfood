<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Diet Shastra</title>
    <link rel="stylesheet" href="style.css">
    <style>
        :root {
            --dark-green: #1a3300;
            --brand-green: #99cc33;
            --text-grey: #666;
            --white: #ffffff;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background-color: var(--white);
        }

        /* --- Page Header --- */
        .page-header {
            position: relative;
            width: 100%;
            height: 30vh;
            min-height: 260px;
            background: url("img/bg3.png") center center / cover no-repeat;
        }

        .header-overlay {
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.55);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .header-content h1 {
            color: var(--white);
            font-size: clamp(2rem, 5vw, 3rem);
            font-weight: 700;
            margin: 0;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* --- Contact Info Section --- */
        .contact-section {
            padding: 80px 20px;
            text-align: center;
        }

        .contact-title {
            font-size: clamp(1.8rem, 4vw, 2.5rem);
            color: var(--dark-green);
            margin-bottom: 60px;
        }

        .contact-grid {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto 60px;
        }

        .contact-item {
            flex: 1;
            min-width: 280px;
            padding: 20px;
        }

        .contact-icon {
            font-size: 40px;
            color: var(--brand-green);
            margin-bottom: 15px;
        }

        .contact-item h4, .address-box h4 {
            font-size: 1.2rem;
            color: #000;
            margin: 10px 0;
            font-weight: 700;
        }

        .contact-item p a {
            color: var(--brand-green);
            text-decoration: none;
            font-size: 1rem;
            font-weight: 600;
            transition: color 0.3s;
        }

        .contact-item p a:hover {
            color: var(--dark-green);
        }

        .address-box {
            max-width: 700px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .address-box p {
            color: var(--text-grey);
            line-height: 1.6;
            font-size: 1rem;
        }

        /* --- Message & Map Section --- */
        .message-section {
            padding: 60px 20px;
            background-color: #fcfcfc;
            display: flex;
            justify-content: center;
        }

        .message-container {
            display: flex;
            max-width: 1100px;
            width: 100%;
            gap: 40px;
            background: var(--white);
            border: 1px solid #f0f0f0;
            border-radius: 20px;
            overflow: hidden;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .map-box {
            flex: 1.2;
            min-height: 400px;
            border-radius: 15px;
            overflow: hidden;
        }

        .map-box iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        .message-form-box {
            flex: 1;
            padding: 10px;
        }

        .message-form-box h2 {
            font-size: 2.2rem;
            color: var(--dark-green);
            margin-bottom: 25px;
            font-weight: 800;
        }

        .message-form-box form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .message-form-box input, 
        .message-form-box textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #eee;
            border-radius: 10px;
            font-size: 0.95rem;
            background-color: #fafafa;
            outline: none;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        .message-form-box input:focus, 
        .message-form-box textarea:focus {
            border-color: var(--brand-green);
            background-color: var(--white);
            box-shadow: 0 0 8px rgba(153, 204, 51, 0.1);
        }

        .msg-submit-btn {
            background-color: var(--brand-green);
            color: var(--dark-green);
            border: none;
            padding: 16px 35px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            width: fit-content;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .msg-submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(153, 204, 51, 0.4);
            opacity: 0.9;
        }

        /* --- Responsive Queries --- */
        @media (max-width: 992px) {
            .page-header { height: 40vh; }
            .message-container { flex-direction: column; padding: 20px; }
            .map-box { min-height: 350px; order: 2; }
            .message-form-box { order: 1; margin-bottom: 20px; }
        }

        @media (max-width: 576px) {
            .page-header { height: 32vh; min-height: 220px; }
            .contact-section { padding: 50px 15px; }
            .contact-grid { gap: 20px; }
            .msg-submit-btn { width: 100%; }
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <section class="page-header">
        <div class="header-overlay">
            <div class="header-content">
                <h1>Contact Us</h1>
            </div>
        </div>
    </section>

    <section class="contact-section">


    
        <h2 class="contact-title">Call us or visit our place</h2>

        <div class="contact-grid">
            <div class="contact-item">
                <div class="contact-icon">✉️</div>
                <h4>General Enquiry</h4>
                <p><a href="mailto:healthdietshastra@gmail.com">hello@gmail.com</a></p>
            </div>

            <div class="contact-item">
                <div class="contact-icon">📞</div>
                <h4>Franchise Enquiry</h4>
                <p><a href="tel:+919763504612">+91 12233445666</a></p>
            </div>

            <div class="contact-item">
                <div class="contact-icon">💬</div>
                <h4>Support Enquiry</h4>
                <p><a href="tel:+919763504612">+91 123456789</a></p>
            </div>
        </div>

        <div class="address-box">
            <div class="contact-icon map-pin">📍</div>
            <h4>Our Address</h4>
            <p>4ncbdcbdbcdckdkdndnckdf</p>
        </div>
    </section>

    <section class="message-section">
        
        <div class="message-container">
            <div class="map-box">
             

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d33061.52510139139!2d75.89230257431639!3d17.6934197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5db8583558ab3%3A0x6cd375287e3cfa12!2sShivganga%20Nagar%20Shelgi!5e1!3m2!1sen!2sin!4v1769366193386!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="message-form-box">
                <h2>Send us a message</h2>
                <form action="#" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="tel" name="phone" placeholder="Your Phone No." required>
                    <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                    <button type="submit" class="msg-submit-btn">Submit Message</button>
                </form>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

</body>
</html>




