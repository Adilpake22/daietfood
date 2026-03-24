<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DietShtra - FAQs</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        /* FAQ Wrapper */
        .ds-faq-container {
            max-width: 900px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .ds-faq-item {
            margin-bottom: 12px;
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        /* Question */
        .ds-faq-question {
            width: 100%;
            padding: 18px 24px;
            background-color: #a3cc69;
            color: #1a2a0a;
            border: none;
            outline: none;
            text-align: left;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.3s ease;
        }

        .ds-faq-item.active .ds-faq-question {
            background-color: #1d2605;
            color: #ffffff;
        }

        /* Answer */
        .ds-faq-answer {
            max-height: 0;
            overflow: hidden;
            background-color: #ffffff;
            transition: max-height 0.4s ease;
        }

        .ds-faq-answer p {
            padding: 20px 24px;
            margin: 0;
            color: #555;
            line-height: 1.6;
            font-size: 15px;
        }

        /* Icon */
        .ds-faq-icon {
            font-size: 22px;
            font-weight: bold;
            transition: transform 0.3s ease;
        }

        .ds-faq-item.active .ds-faq-icon {
            transform: rotate(45deg);
        }

        /* Responsive */
        @media (max-width: 600px) {
            .ds-faq-question {
                font-size: 14px;
                padding: 15px 18px;
            }

            .ds-faq-answer p {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

<?php include 'header.php'; ?>
<div class="ds-faq-container">

    <div class="ds-faq-item active">
        <button class="ds-faq-question">
           Why should I choose Diet Shastra instead of other diet apps?
            <span class="ds-faq-icon">+</span>
        </button>
        <div class="ds-faq-answer">
            <p>
                Diet Shastra provides customized nutrition plans designed according to your age, lifestyle, and health objectives. Each plan is created by certified nutrition professionals — not influencers — and fits smoothly into your daily routine without major changes.
            </p>
        </div>
    </div>

    <div class="ds-faq-item">
        <button class="ds-faq-question">
     Is Diet Shastra only meant for weight loss?
            <span class="ds-faq-icon">+</span>
        </button>
        <div class="ds-faq-answer">
            <p>
              Not at all. Diet Shastra supports multiple health goals such as weight gain, enhanced energy levels, stronger immunity, and improved digestion. It is suitable for people of all age groups with different wellness goals.
            </p>
        </div>
    </div>

    <div class="ds-faq-item">
        <button class="ds-faq-question">
          Is it suitable for children or senior family members?
            <span class="ds-faq-icon">+</span>
        </button>
        <div class="ds-faq-answer">
            <p>
                Yes. The app generates personalized, age-appropriate meal plans for kids, adults, and elderly individuals, keeping their specific nutritional requirements and common health concerns in mind.
            </p>
        </div>
    </div>

    <div class="ds-faq-item">
        <button class="ds-faq-question">
           Will I have to follow a very strict or boring diet?
            <span class="ds-faq-icon">+</span>
        </button>
        <div class="ds-faq-answer">
            <p>
                No. Your meal plan is tailored to your food preferences, cultural habits, and comfort. There are no crash diets or tasteless meals involved.
            </p>
        </div>
    </div>

    <div class="ds-faq-item">
        <button class="ds-faq-question">
         What if I don’t have time to cook every day?
            <span class="ds-faq-icon">+</span>
        </button>
        <div class="ds-faq-answer">
            <p>
              Diet Shastra offers quick-prep recipes, low-effort meal ideas, and practical food alternatives that work well even with a busy lifestyle.
            </p>
        </div>
    </div>

    <div class="ds-faq-item">
        <button class="ds-faq-question">
       Can I continue eating the foods I love?
            <span class="ds-faq-icon">+</span>
        </button>
        <div class="ds-faq-answer">
            <p>
              Of course. Diet Shastra focuses on balance. Your plan includes your favorite foods and allows occasional treats — without guilt or extreme restrictions.
            </p>
        </div>
    </div>

    <div class="ds-faq-item">
        <button class="ds-faq-question">
  When can I expect to see results?
            <span class="ds-faq-icon">+</span>
        </button>
        <div class="ds-faq-answer">
            <p>
              Many users experience better energy, digestion, and mood within 2–3 weeks. Visible physical changes typically follow as healthy habits become consistent.
            </p>
        </div>
    </div>

    <div class="ds-faq-item">
        <button class="ds-faq-question">
      Do I need special equipment or dietary supplements?
            <span class="ds-faq-icon">+</span>
        </button>
        <div class="ds-faq-answer">
            <p>
            No special equipment or costly supplements are necessary. The app is built around everyday kitchen ingredients to promote sustainable, long-term nutrition.
            </p>
        </div>
    </div>

    <div class="ds-faq-item">
        <button class="ds-faq-question">
      How can I begin?
            <span class="ds-faq-icon">+</span>
        </button>
        <div class="ds-faq-answer">
            <p>
           Simply download the app, select who the plan is for, answer a few quick questions, and instantly receive your personalized nutrition plan — ready to start your health journey.
            </p>
        </div>
    </div>

</div>


    

</div>

<?php include 'footer.php'; ?>

<script>
    const faqItems = document.querySelectorAll('.ds-faq-item');

    faqItems.forEach(item => {
        const button = item.querySelector('.ds-faq-question');
        const answer = item.querySelector('.ds-faq-answer');

        if (item.classList.contains('active')) {
            answer.style.maxHeight = answer.scrollHeight + "px";
        }

        button.addEventListener('click', () => {
            faqItems.forEach(i => {
                if (i !== item) {
                    i.classList.remove('active');
                    i.querySelector('.ds-faq-answer').style.maxHeight = null;
                }
            });

            item.classList.toggle('active');

            if (item.classList.contains('active')) {
                answer.style.maxHeight = answer.scrollHeight + "px";
            } else {
                answer.style.maxHeight = null;
            }
        });
    });
</script>

</body>
</html>
