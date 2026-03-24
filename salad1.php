<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaladO - Fresh Salads Delivered</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
<!-- <style>
:root {
    --text-dark: #1a3215;
    --text-muted: #555;
    --border-color: #eeeeee;
}

body {
    font-family: 'Poppins', sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

/* MODIFIED: removed white background + extended width */
.product-card {
    display: flex;
    max-width: 100%;
    width: 100%;
    border-radius: 0;
    overflow: hidden;
    box-shadow: none;
}

/* Image Styling */
.image-container {
    flex: 1;
    position: relative;
    padding: 70px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.image-container img {
    width: 70%;
    height: auto;
    border-radius: 15px;
    object-fit: cover;
}

.expand-btn {
    position: absolute;
    top: 55px;
    right: 55px;
    background: white;
    border: none;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    font-size: 18px;
}

/* Text Content Styling */
.content-container {
    flex: 1;
    padding: 80px 80px 80px 40px;
}

.product-title {
    color: var(--text-dark);
    font-size: 2.5rem;
    margin-bottom: 10px;
    font-weight: 700;
}

.tagline {
    color: #666;
    font-size: 0.95rem;
    margin-bottom: 30px;
}

.divider {
    border: 0;
    border-top: 1px solid var(--border-color);
    margin: 25px 0;
}

.meta-data p {
    font-size: 0.85rem;
    line-height: 1.6;
    margin: 10px 0;
    color: #333;
}

.category-name {
    font-weight: bold;
    color: #000;
}

.tags {
    color: #444;
}

.features-list {
    list-style: none;
    padding: 0;
}

.features-list li {
    font-size: 0.9rem;
    color: #444;
    margin-bottom: 12px;
    position: relative;
    padding-left: 15px;
}

.features-list li::before {
    content: "•";
    position: absolute;
    left: 0;
    color: #333;
}

/* Responsive */
@media (max-width: 768px) {
    .product-card {
        flex-direction: column;
    }

    .content-container {
        padding: 40px 25px;
    }

    .image-container {
        padding: 25px;
    }
}
</style>

<style>

:root {
    --text-dark: #1a3215;
    --text-muted: #555;
    --border-color: #eeeeee;
}

body {
    font-family: 'Poppins', sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

/* PRODUCT CARD */
.product-card {
    display: flex;
    width: 100%;
    max-width: 100%;
    align-items: center;
    overflow: hidden;
}

/* REVERSE LAYOUT (TEXT LEFT, IMAGE RIGHT) */
.product-card.reverse {
    flex-direction: row;
}

/* IMAGE CONTAINER */
.image-container {
    flex: 1;
    position: relative;
    padding: 70px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.image-container img {
    width: 70%;
    height: auto;
    border-radius: 15px;
    object-fit: cover;
}

/* TEXT CONTAINER */
.content-container {
    flex: 1;
    padding: 80px 40px 80px 80px;
}

/* TEXT STYLES */
.product-title {
    color: var(--text-dark);
    font-size: 2.5rem;
    margin-bottom: 10px;
    font-weight: 700;
}

.tagline {
    color: var(--text-muted);
    font-size: 0.95rem;
    margin-bottom: 30px;
}

/* DIVIDER */
.divider {
    border: 0;
    border-top: 1px solid var(--border-color);
    margin: 25px 0;
}

/* META DATA */
.meta-data p {
    font-size: 0.85rem;
    line-height: 1.6;
    margin: 10px 0;
    color: #333;
}

.category-name {
    font-weight: bold;
    color: #000;
}

.tags {
    color: #444;
}

/* FEATURES */
.features-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.features-list li {
    font-size: 0.9rem;
    color: #444;
    margin-bottom: 12px;
    position: relative;
    padding-left: 15px;
}

.features-list li::before {
    content: "•";
    position: absolute;
    left: 0;
    color: #333;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .product-card,
    .product-card.reverse {
        flex-direction: column;
    }

    .content-container {
        padding: 40px 25px;
    }

    .image-container {
        padding: 25px;
    }

    .product-title {
        font-size: 2rem;
    }
}






</style> -->


    <style>
    :root {
        --text-dark: #1a3215;
        --text-muted: #555;
        --border-color: #eeeeee;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    /* PRODUCT CARD */
    .product-card {
        display: flex;
        width: 100%;
        max-width: 100%;
        align-items: center;
        overflow: hidden;
        background-color: transparent;
    }

    /* REVERSE LAYOUT (TEXT LEFT, IMAGE RIGHT) */
    .product-card.reverse {
        flex-direction: row;
    }

    /* IMAGE CONTAINER */
    .image-container {
        flex: 1;
        position: relative;
        padding: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .image-container img {
        width: 70%;
        height: auto;
        border-radius: 15px;
        object-fit: cover;
        max-width: 100%;
    }

    /* TEXT CONTAINER */
    .content-container {
        flex: 1;
        padding: 80px 40px 80px 80px;
    }

    /* TEXT STYLES */
    .product-title {
        color: var(--text-dark);
        font-size: 2.5rem;
        margin-bottom: 10px;
        font-weight: 700;
        line-height: 1.2;
    }

    .tagline {
        color: var(--text-muted);
        font-size: 0.95rem;
        margin-bottom: 30px;
        line-height: 1.5;
    }

    /* DIVIDER */
    .divider {
        border: 0;
        border-top: 1px solid var(--border-color);
        margin: 25px 0;
    }

    /* META DATA */
    .meta-data p {
        font-size: 0.85rem;
        line-height: 1.6;
        margin: 10px 0;
        color: #333;
    }

    .category-name {
        font-weight: bold;
        color: #000;
    }

    .tags {
        color: #444;
    }

    /* FEATURES */
    .features-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .features-list li {
        font-size: 0.9rem;
        color: #444;
        margin-bottom: 12px;
        position: relative;
        padding-left: 15px;
    }

    .features-list li::before {
        content: "•";
        position: absolute;
        left: 0;
        color: #333;
    }

    /* EXPAND BUTTON */
    .expand-btn {
        position: absolute;
        top: 55px;
        right: 55px;
        background: white;
        border: none;
        border-radius: 50%;
        width: 35px;
        height: 35px;
        cursor: pointer;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        font-size: 18px;
    }

    /* RESPONSIVE BREAKPOINTS */

    /* Large tablets and small laptops */
    @media (max-width: 1024px) {
        .image-container {
            padding: 50px;
        }
        
        .content-container {
            padding: 60px 30px 60px 50px;
        }
        
        .product-title {
            font-size: 2.2rem;
        }
    }

    /* Tablets */
    @media (max-width: 900px) {
        .image-container {
            padding: 40px;
        }
        
        .content-container {
            padding: 50px 25px 50px 40px;
        }
        
        .product-title {
            font-size: 2rem;
        }
        
        .image-container img {
            width: 85%;
        }
    }

    /* Mobile devices */
    @media (max-width: 768px) {
        .product-card,
        .product-card.reverse {
            flex-direction: column !important;
        }
        
        .content-container {
            padding: 40px 25px;
            width: 100%;
            order: 2;
        }
        
        .image-container {
            padding: 40px 25px 0 25px;
            width: 100%;
            order: 1;
        }
        
        .image-container img {
            width: 90%;
        }
        
        .product-title {
            font-size: 1.8rem;
        }
        
        .expand-btn {
            top: 30px;
            right: 30px;
        }
    }

    /* Small mobile devices */
    @media (max-width: 480px) {
        .content-container {
            padding: 30px 20px;
        }
        
        .image-container {
            padding: 30px 20px 0 20px;
        }
        
        .product-title {
            font-size: 1.6rem;
        }
        
        .tagline {
            font-size: 0.9rem;
        }
        
        .meta-data p,
        .features-list li {
            font-size: 0.85rem;
        }
        
        .image-container img {
            width: 100%;
        }
        
        .expand-btn {
            top: 20px;
            right: 20px;
            width: 30px;
            height: 30px;
            font-size: 16px;
        }
    }

    /* Extra small devices */
    @media (max-width: 360px) {
        .product-title {
            font-size: 1.4rem;
        }
        
        .content-container,
        .image-container {
            padding: 20px 15px;
        }
        
        .tagline {
            font-size: 0.85rem;
        }
    }

    /* RELATED PRODUCTS SECTION */
    .related-section {
        padding: 40px 15px;
        background: transparent;
    }

    .related-heading {
        font-size: 1.4rem;
        color: #2d4628;
        margin-bottom: 25px;
        letter-spacing: 1px;
        font-weight: 700;
        text-align: center;
    }

    .related-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 16px;
    }

    .related-card {
        display: block;
        text-decoration: none !important;
        color: inherit;
        background: transparent;
        border-radius: 16px;
        padding: 8px;
        border: 1px solid rgba(0, 0, 0, 0.25);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .related-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 18px rgba(0,0,0,0.06);
    }

    .related-card:link,
    .related-card:visited,
    .related-card:hover,
    .related-card:active {
        text-decoration: none;
        color: inherit;
    }

    .related-image-box {
        background-color: #f4f9f1;
        border-radius: 16px;
        padding: 12px;
        margin-bottom: 12px;
        aspect-ratio: 1 / 1;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .related-image-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 12px;
    }

    .related-content {
        padding: 0 4px;
    }

    .related-content h3 {
        font-size: 1rem;
        color: #1a1a1a;
        margin-bottom: 6px;
        font-weight: 600;
    }

    .related-content p {
        font-size: 0.8rem;
        color: #666;
        line-height: 1.4;
    }

    /* Responsive for Related Products */

    /* Large tablets */
    @media (max-width: 1200px) {
        .related-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    /* Tablets */
    @media (max-width: 992px) {
        .related-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;
        }
    }

    /* Mobile */
    @media (max-width: 576px) {
        .related-grid {
            grid-template-columns: 1fr;
            gap: 12px;
        }

        .related-heading {
            font-size: 1.2rem;
        }
        
        .related-section {
            padding: 30px 10px;
        }
    }

    /* Landscape mode for mobile */
    @media (max-height: 500px) and (orientation: landscape) {
        .product-card {
            min-height: 100vh;
        }
        
        .image-container {
            padding: 30px;
        }
        
        .content-container {
            padding: 30px;
        }
    }

    /* Print styles */
    @media print {
        .product-card {
            page-break-inside: avoid;
        }
        
        .image-container img {
            max-width: 300px;
        }
    }




    .product-card {
    scroll-margin-top: 200px; 
}



/* 
.product-card {
    position: relative;
    background-image: url("img/food/bg2.png"); 
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    border-radius: px;
    overflow: hidden;
}


product-card::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.45); dark overlay
     z-index: 0; */
} 


.product-card > * {
    position: relative;
    z-index: 1;
} */


















/* Individual background images for each card */
.product-card:nth-child(1) {
    background-image: url("img/food/bg3.png");
}

.product-card:nth-child(2) {
    background-image: url("img/food/bg2.png");
}

.product-card:nth-child(3) {
    background-image: url("img/food/bg3.png");
}

.product-card:nth-child(4) {
    background-image: url("img/food/bg2.png");
}

.product-card:nth-child(5) {
    background-image: url("img/food/bg3.png");
}

.product-card:nth-child(6) {
    background-image: url("img/food/bg2.png");
}

.product-card:nth-child(7) {
    background-image: url("img/food/bg3.png");
}

.product-card:nth-child(8) {
    background-image: url("img/food/bg2.png");
}

.product-card:nth-child(9) {
    background-image: url("img/food/bg3.png");
}

.product-card:nth-child(10) {
    background-image: url("img/food/bg2.png");
}

.product-card:nth-child(11) {
    background-image: url("img/food/bg3.png");
}

.product-card:nth-child(12) {
    background-image: url("img/food/bg2.png");
}

.product-card:nth-child(13) {
    background-image: url("img/food/bg3.png");
}

.product-card:nth-child(14) {
    background-image: url("img/food/bg2.png");
}

.product-card:nth-child(15) {
    background-image: url("img/food/bg3.png");
}

.product-card:nth-child(16) {
    background-image: url("img/food/bg2.png");
}

.product-card:nth-child(17) {
    background-image: url("img/food/bg3.png");
}

.product-card:nth-child(18) {
    background-image: url("img/food/bg2.png");
}

.product-card:nth-child(19) {
    background-image: url("img/food/bg3.png");
}

.product-card:nth-child(20) {
    background-image: url("img/food/bg2.png");
}
.product-card:nth-child(21) {
    background-image: url("img/food/bg3.png");
}
.product-card:nth-child(22) {
    background-image: url("img/food/bg2.png");
}
.product-card:nth-child(23) {
    background-image: url("img/food/bg3.png");
}
.product-card:nth-child(24) {
    background-image: url("img/food/bg2.png");
}


    </style>
<body>


<!--======================================================== card 0 =========================================================================================-->

<div class="product-card" id="RUSSIAN SALAD">
    <div class="image-container">
        <img src="food/food/russion.png" alt="Crunchy Deli Bowl">
        <!-- <button class="expand-btn">⤢</button> -->
    </div>

    <div class="content-container">
        <h1 class="product-title">RUSSIAN SALAD

</h1>
        <p class="tagline">Rich creamy taste, loaded with fresh vegetables and soft Apple.</p>

        <hr class="divider">

           <div class="meta-data">
            <p><strong>Category:</strong> <span class="category-name">CLASSIC SALADS</span></p>
            <p class="tags">
                <strong>Tags:</strong>
                Russian salad, creamy salad, classic salad, vegetable salad,
                healthy meal, fresh veggies, wholesome lunch
            </p>
        </div>

        <hr class="divider">

         <ul class="features-list">
            <li>Rich & Creamy Texture</li>
            <li>Loaded with Fresh Vegetables</li>
            <li>Perfect Classic Salad Choice</li>
        </ul>
    </div>
</div>



<!--======================================================== card 1 =========================================================================================-->


<div class="product-card reverse" id="KING SALAD">

    <!-- TEXT LEFT -->
    <div class="content-container">
        <h1 class="product-title">KING SALAD</h1>
        <p class="tagline">
            A royal blend of exotic vegetables and aromatic herbs, finished with a rich smoky dressing.
        </p>

        <hr class="divider">

        <div class="meta-data">
            <p><strong>Category:</strong> <span class="category-name">CLASSIC SALADS</span></p>
            <p class="tags">
                <strong>Tags:</strong>
                King Salad, royal salad, smoky salad, exotic vegetable salad,
                herb-infused salad, premium salad bowl, healthy gourmet salad,
                fresh vegetable mix, wholesome meal
            </p>
        </div>

        <hr class="divider">

        <ul class="features-list">
            <li>Exotic Vegetables with Aromatic Herbs</li>
            <li>Rich Smoky Dressing for Bold Flavor</li>
            <li>Perfectly Balanced & Premium Taste</li>
        </ul>
    </div>

    <!-- IMAGE RIGHT -->
    <div class="image-container">
        <img src="food/food/kingsalad.png" alt="King Salad">
    </div>

</div>


<!--======================================================== card 2 =========================================================================================-->


<div class="product-card" id="PAN">
    <div class="image-container">
        <img src="food/food/PANFRIED.png" alt="Crunchy Deli Bowl">
        <!-- <button class="expand-btn">⤢</button> -->
    </div>

    <div class="content-container">
        <h1 class="product-title">PAN FRIED SALAD</h1>
        <p class="tagline">Lightly sauteed vegetables with zesty lemon and mustard flavor. fresh vegetables and soft potatoes.</p>

        <hr class="divider">

        <div class="meta-data">
            <p><strong>Category:</strong> <span class="category-name">CLASSIC SALADS</span></p>
            <p class="tags">
                <strong>Tags:</strong> Pan Fried Salad, sautéed vegetable salad, warm salad bowl, lemon mustard salad, potato salad bowl, healthy warm salad, plant-based salad, fresh vegetable mix, wholesome comfort meal
            </p>
        </div>

        <hr class="divider">

        <ul class="features-list">
            <li>Lightly Sautéed Fresh Vegetables & Soft Potatoes</li>
            <li>Zesty Lemon & Mustard Flavor for a Refreshing Taste</li>
            <li>Warm, Comforting & Wholesome Meal Option</li>
        </ul>
    </div>
</div>



<!--======================================================== card 3 =========================================================================================-->


<div class="product-card reverse" id="tofu">

    <!-- TEXT LEFT -->
    <div class="content-container">
        <h1 class="product-title">TOFU SALAD</h1>
        <p class="tagline">
           Protein-rich tofu cubes tossed with crunchy garden greens and finished with a mildly sweet onion dressing.
        </p>

        <hr class="divider">

        <div class="meta-data">
            <p><strong>Category:</strong> <span class="category-name">CLASSIC SALADS</span></p>
            <p class="tags">
                <strong>Tags:</strong>
             Tofu salad, protein-rich salad, plant-based protein bowl, vegan salad, crunchy green salad, sweet onion dressing, healthy tofu bowl, fresh vegetable mix, wholesome meal
            </p>
        </div>

        <hr class="divider">

        <ul class="features-list">
            <li>High-Protein Tofu Cubes for a Healthy Boost</li>
            <li>Crunchy Greens with a Light Sweet Onion Dressing</li>
            <li>Fresh, Balanced & Nourishing Meal Option</li>
        </ul>
    </div>

    <!-- IMAGE RIGHT -->
    <div class="image-container">
        <img src="food/food/tofusalad.png" alt="King Salad">
    </div>

</div>




<!--======================================================== card 4 =========================================================================================-->



<div class="product-card" id="brown">
    <div class="image-container">
        <img src="food/food/PANFRIED.png" alt="Crunchy Deli Bowl">
        <!-- <button class="expand-btn">⤢</button> -->
    </div>

    <div class="content-container">
        <h1 class="product-title">BROWN RICE SALAD</h1>
        <p class="tagline">Wholesome brown rice tossed with fresh vegetables and finished with a mild teriyaki sauce for a balanced, nourishing meal.
</p>

        <hr class="divider">

        <div class="meta-data">
            <p><strong>Category:</strong> <span class="category-name">CLASSIC SALADS</span></p>
            <p class="tags">
                <strong>Tags:</strong> Brown rice salad, whole grain salad, healthy rice bowl, teriyaki vegetable salad, plant-based rice bowl, fiber-rich meal, fresh vegetable mix, wholesome salad, balanced nutrition bowl
            </p>
        </div>

        <hr class="divider">

        <ul class="features-list">
            <li>Nutritious Brown Rice with Fresh Vegetables</li>
            <li>Mild Teriyaki Sauce for a Subtle Savory Taste</li>
            <li>Wholesome, Filling & Balanced Meal Option</li>
        </ul>
    </div>
</div>



<!--======================================================== card 5 =========================================================================================-->


<div class="product-card reverse" id="grilledcorn">

    <!-- TEXT LEFT -->
    <div class="content-container">
        <h1 class="product-title">GRILLED CORN SALAD</h1>
        <p class="tagline">
    Char-grilled sweet corn kernels tossed in a creamy, tangy Marie Rose sauce for a smoky and satisfying flavor.
        </p>

        <hr class="divider">

        <div class="meta-data">
            <p><strong>Category:</strong> <span class="category-name">CLASSIC SALADS</span></p>
            <p class="tags">
                <strong>Tags:</strong>
           Grilled corn salad, char-grilled corn, smoky corn salad, Marie Rose salad, creamy corn bowl, vegetarian salad, fresh corn mix, tangy salad, wholesome meal
            </p>
        </div>

        <hr class="divider">

        <ul class="features-list">
            <li>Char-Grilled Sweet Corn for a Smoky Bite</li>
            <li>Tangy Marie Rose Sauce with Creamy Balance</li>
            <li>Flavor-Rich, Fresh & Comforting Salad Option</li>
        </ul>
    </div>

    <!-- IMAGE RIGHT -->
    <div class="image-container">
        <img src="food/food/GRILLEDCORN.png" alt="King Salad">
    </div>

</div>



<!--======================================================== card 6 =========================================================================================-->



<div class="product-card" id="BASIL">
    <div class="image-container">
        <img src="food/food/PANFRIED.png" alt="Crunchy Deli Bowl">
        <!-- <button class="expand-btn">⤢</button> -->
    </div>

    <div class="content-container">
        <h1 class="product-title">BASIL PESTO SALAD</h1>
        <p class="tagline">Classic Italian basil pesto blended with extra-virgin olive oil and tossed with fresh, crisp greens.
</p>

        <hr class="divider">

        <div class="meta-data">
            <p><strong>Category:</strong> <span class="category-name">CLASSIC SALADS</span></p>
            <p class="tags">
                <strong>Tags:</strong> Basil pesto salad, Italian pesto salad, herb-infused salad, olive oil dressing, fresh green salad, aromatic basil bowl, gourmet vegetarian salad, Mediterranean flavors, wholesome meal
            </p>
        </div>

        <hr class="divider">

        <ul class="features-list">
            <li>Fresh Basil Pesto with Extra-Virgin Olive Oil</li>
            <li>Crisp Greens Tossed in Aromatic Herbs</li>
            <li>Light, Flavorful & Naturally Nourishing Meal Option</li>
        </ul>
    </div>
</div>



<!--======================================================== card 7 =========================================================================================-->


<div class="product-card reverse" id="GRILLED PINEAPPLESALAD">

    <!-- TEXT LEFT -->
    <div class="content-container">
        <h1 class="product-title">GRILLED PINEAPPLE SALAD</h1>
        <p class="tagline">
Juicy grilled pineapple slices infused with aromatic Moorish spices for a sweet, smoky, and exotic flavor.
        </p>

        <hr class="divider">

        <div class="meta-data">
            <p><strong>Category:</strong> <span class="category-name">CLASSIC SALADS</span></p>
            <p class="tags">
                <strong>Tags:</strong>
          Grilled pineapple salad, smoky pineapple salad, tropical salad bowl, Moorish spiced salad, sweet grilled fruit salad, exotic flavor salad, vegetarian gourmet salad, fresh tropical mix, wholesome meal
            </p>
        </div>

        <hr class="divider">

        <ul class="features-list">
            <li>Juicy Grilled Pineapple with Smoky Caramelized Notes</li>
            <li>Aromatic Moorish Spices for an Exotic Touch</li>
            <li>Sweet, Savory & Comforting Salad Experience</li>
        </ul>
    </div>

    <!-- IMAGE RIGHT -->
    <div class="image-container">
        <img src="food/food/GRILLEDPINEAPPLE.png" alt="King Salad">
    </div>

</div>



<!--======================================================== card 8 =========================================================================================-->




<div class="product-card" id="beetroot">
    <div class="image-container">
        <img src="food/food/beetroot.png" alt="Crunchy Deli Bowl">
        <!-- <button class="expand-btn">⤢</button> -->
    </div>

    <div class="content-container">
        <h1 class="product-title">BEETROOT SALAD</h1>
        <p class="tagline">Fresh beetroot blended with its own naturally tangy dressing for an earthy, refreshing flavor.
</p>

        <hr class="divider">

        <div class="meta-data">
            <p><strong>Category:</strong> <span class="category-name">CLASSIC SALADS</span></p>
            <p class="tags">
                <strong>Tags:</strong> Beetroot salad, fresh beet salad, tangy beetroot bowl, earthy vegetable salad, healthy beet salad, antioxidant-rich salad, plant-based salad, wholesome veggie mix, nutritious meal
            </p>
        </div>

        <hr class="divider">

        <ul class="features-list">
            <li>Fresh Beetroot with Natural Earthy Sweetness</li>
            <li>House-Made Tangy Dressing from Beetroot Essence</li>
            <li>Light, Refreshing & Nutrient-Rich Salad Option</li>
        </ul>
    </div>
</div>




<!--======================================================== card 9 =========================================================================================-->



<div class="product-card reverse" id="GRILLEDPANEER">

    <!-- TEXT LEFT -->
    <div class="content-container">
        <h1 class="product-title">GRILLED PANEER SALAD</h1>
        <p class="tagline">
Soft, perfectly grilled paneer cubes tossed with fresh vegetables and your choice of zesty or sweet dressing.
        </p>

        <hr class="divider">

        <div class="meta-data">
            <p><strong>Category:</strong> <span class="category-name">CLASSIC SALADS</span></p>
            <p class="tags">
                <strong>Tags:</strong>
         Grilled paneer salad, paneer salad bowl, Indian cottage cheese salad, vegetarian protein salad, smoky paneer cubes, healthy paneer meal, fresh vegetable mix, wholesome vegetarian bowl
            </p>
        </div>

        <hr class="divider">

        <ul class="features-list">
            <li>Soft Grilled Paneer Cubes with Light Smoky Flavor</li>
            <li>Choice of Zesty or Sweet House-Made Dressing</li>
            <li>Protein-Rich, Flavorful & Comforting Salad Option</li>
        </ul>
    </div>

    <!-- IMAGE RIGHT -->
    <div class="image-container">
        <img src="food/food/grilledpaneer.png" alt="King Salad">
    </div>

</div>



<!--======================================================== card 10 =========================================================================================-->



<div class="product-card" id="corn">
    <div class="image-container">
        <img src="food/food/CORN.png" alt="Crunchy Deli Bowl">
        <!-- <button class="expand-btn">⤢</button> -->
    </div>

    <div class="content-container">
        <h1 class="product-title">CORN SALAD</h1>
        <p class="tagline">Sweet corn kernels mixed with fresh vegetables and tossed in a mild, refreshing onion dressing.
</p>

        <hr class="divider">

        <div class="meta-data">
            <p><strong>Category:</strong> <span class="category-name">CLASSIC SALADS</span></p>
            <p class="tags">
                <strong>Tags:</strong> Corn salad, sweet corn salad, fresh vegetable salad, onion dressing salad, vegetarian salad bowl, light healthy salad, plant-based meal, wholesome veggie mix, refreshing salad
            </p>
        </div>

        <hr class="divider">

        <ul class="features-list">
            <li>Sweet Corn Kernels with Fresh Crunchy Vegetables</li>
            <li>Mild Onion Dressing for a Light & Balanced Taste</li>
            <li>Fresh, Simple & Comforting Salad Option</li>
        </ul>
    </div>
</div>



<!--======================================================== card 11 =========================================================================================-->



<div class="product-card reverse" id="MIX">

    <!-- TEXT LEFT -->
    <div class="content-container">
        <h1 class="product-title">MIX SPROUT SALAD</h1>
        <p class="tagline">
Power-packed mixed sprouts tossed with fresh vegetables and a light Mediterranean-inspired dressing.
        </p>

        <hr class="divider">

        <div class="meta-data">
            <p><strong>Category:</strong> <span class="category-name">CLASSIC SALADS</span></p>
            <p class="tags">
                <strong>Tags:</strong>
       Mix sprout salad, healthy sprout bowl, protein-rich salad, Mediterranean dressing salad, plant-based protein meal, fresh sprout mix, fitness salad, wholesome nutrition bowl
            </p>
        </div>

        <hr class="divider">

        <ul class="features-list">
            <li>Power-Packed Mixed Sprouts Rich in Natural Protein</li>
            <li>Mediterranean-Inspired Dressing for a Fresh Zesty Taste</li>
            <li>Light, Energizing & Nutrient-Dense Salad Option</li>
        </ul>
    </div>

    <!-- IMAGE RIGHT -->
    <div class="image-container">
        <img src="food/food/MIXSPROUT.png" alt="King Salad">
    </div>

</div>


<!--======================================================== card 12 =========================================================================================-->


<div class="product-card" id="CHICKPEAS">
    <div class="image-container">
        <img src="food/food/chekpeace.png" alt="Crunchy Deli Bowl">
        <!-- <button class="expand-btn">⤢</button> -->
    </div>

    <div class="content-container">
        <h1 class="product-title">CHICKPEAS SALAD</h1>
        <p class="tagline">Protein-loaded chickpeas tossed with a creamy-tangy house dressing and fresh vegetables.
</p>

        <hr class="divider">

        <div class="meta-data">
            <p><strong>Category:</strong> <span class="category-name">CLASSIC SALADS</span></p>
            <p class="tags">
                <strong>Tags:</strong>Chickpeas salad, protein-rich salad, creamy chickpea bowl, tangy dressing salad, plant-based protein meal, healthy vegetarian salad, fresh veggie mix, wholesome nutrition bowl
            </p>
        </div>

        <hr class="divider">

        <ul class="features-list">
            <li>Protein-Loaded Chickpeas for Sustained Energy</li>
            <li>Creamy-Tangy Dressing with a Balanced Flavor</li>
            <li>Wholesome, Filling & Nourishing Salad Option</li>
        </ul>
    </div>
</div>


<!--======================================================== card 13 =========================================================================================-->


<div class="product-card reverse" id="SPAGHETTI">

    <!-- TEXT LEFT -->
    <div class="content-container">
        <h1 class="product-title">SPAGHETTI SALAD

</h1>
        <p class="tagline">
Italian spaghetti tossed with a creamy Caesar-style dressing and fresh aromatic herbs.
        </p>

        <hr class="divider">

        <div class="meta-data">
            <p><strong>Category:</strong> <span class="category-name">CLASSIC SALADS</span></p>
            <p class="tags">
                <strong>Tags:</strong>
       Spaghetti salad, Italian pasta salad, Caesar pasta salad, herb-infused spaghetti, creamy pasta bowl, vegetarian pasta salad, fresh herb salad, wholesome comfort meal
            </p>
        </div>

        <hr class="divider">

        <ul class="features-list">
            <li>Al Dente Italian Spaghetti for a Perfect Bite</li>
            <li>Creamy Caesar Twist with Fresh Herbs</li>
            <li>Rich, Comforting & Flavorful Salad Option</li>
        </ul>
    </div>

    <!-- IMAGE RIGHT -->
    <div class="image-container">
        <img src="food/food/SPAGHETTI .png" alt="King Salad">
    </div>

</div>




<!--======================================================== card 14 =========================================================================================-->



<div class="product-card" id="PASTA">
    <div class="image-container">
        <img src="food/food/pasta.png" alt="Crunchy Deli Bowl">
        <!-- <button class="expand-btn">⤢</button> -->
    </div>

    <div class="content-container">
        <h1 class="product-title">PASTA SALAD</h1>
        <p class="tagline">Creamy pasta tossed with a mild tangy dressing and loaded with fresh vegetables.
</p>

        <hr class="divider">

        <div class="meta-data">
            <p><strong>Category:</strong> <span class="category-name">CLASSIC SALADS</span></p>
            <p class="tags">
                <strong>Tags:</strong>Pasta salad, creamy pasta salad, vegetarian pasta bowl, tangy pasta mix, fresh vegetable pasta, comfort pasta salad, wholesome vegetarian meal, Italian-style salad
            </p>
        </div>

        <hr class="divider">

        <ul class="features-list">
            <li>Perfectly Cooked Pasta with Fresh Veggie Goodness</li>
            <li>Creamy Dressing with a Gentle Tangy Finish</li>
            <li>Comforting, Filling & Crowd-Favorite Salad Option</li>
        </ul>
    </div>
</div>


<!--======================================================== card 15 =========================================================================================-->


<div class="product-card reverse" id="VEG">

    <!-- TEXT LEFT -->
    <div class="content-container">
        <h1 class="product-title">VEG SALAD

</h1>
        <p class="tagline">
Fresh mix of seasonal vegetables tossed in a smooth sesame-based tahini dressing.
        </p>

        <hr class="divider">

        <div class="meta-data">
            <p><strong>Category:</strong> <span class="category-name">CLASSIC SALADS</span></p>
            <p class="tags">
                <strong>Tags:</strong>Veg salad, mixed vegetable salad, tahini dressing salad, sesame veggie bowl, healthy vegetarian salad, fresh seasonal vegetables, plant-based salad, light wholesome mealSpaghetti salad, Italian pasta salad, Caesar pasta salad, herb-infused spaghetti, creamy pasta bowl, vegetarian pasta salad, fresh herb salad, wholesome comfort meal
            </p>
        </div>

        <hr class="divider">

        <ul class="features-list">
            <li>Fresh Seasonal Vegetables for Natural Crunch</li>
            <li>Creamy Sesame Tahini Dressing with Nutty Notes</li>
            <li>Light, Refreshing & Naturally Healthy Salad Option</li>
        </ul>
    </div>

    <!-- IMAGE RIGHT -->
    <div class="image-container">
        <img src="food/food/veg.png" alt="King Salad">
    </div>

</div>



<!--======================================================== card 16 =========================================================================================-->


<div class="product-card" id="DALIYA">
    <div class="image-container">
        <img src="food/food/DALIYA.png" alt="Crunchy Deli Bowl">
        <!-- <button class="expand-btn">⤢</button> -->
    </div>

    <div class="content-container">
        <h1 class="product-title">DALIYA SALAD</h1>
        <p class="tagline">Fiber-rich broken wheat tossed with fresh vegetables and a tangy-sweet honey mustard dressing.
</p>

        <hr class="divider">

        <div class="meta-data">
            <p><strong>Category:</strong> <span class="category-name">CLASSIC SALADS</span></p>
            <p class="tags">
                <strong>Tags:</strong>Daliya salad, broken wheat salad, fiber-rich salad, honey mustard salad, healthy grain bowl, wholesome vegetarian meal, light Indian salad, nutritious grain mix
            </p>
        </div>

        <hr class="divider">

        <ul class="features-list">
            <li>Nutritious Broken Wheat Rich in Natural Fiber</li>
            <li>Tangy-Sweet Honey Mustard Dressing for Balanced Flavor</li>
            <li>Light, Filling & Wholesome Salad Option</li>
        </ul>
    </div>
</div>


<!--======================================================== card 17 =========================================================================================-->



<div class="product-card reverse" id="CAESAR">

    <!-- TEXT LEFT -->
    <div class="content-container">
        <h1 class="product-title">CAESAR SALAD

</h1>
        <p class="tagline">
Crisp lettuce tossed with crunchy croutons, shaved parmesan, and a rich, creamy Caesar dressing.
        </p>

        <hr class="divider">

        <div class="meta-data">
            <p><strong>Category:</strong> <span class="category-name">CLASSIC SALADS</span></p>
            <p class="tags">
                <strong>Tags:</strong>Caesar salad, classic Caesar salad, lettuce salad, croutons salad, parmesan salad, creamy Caesar dressing, vegetarian Caesar bowl, gourmet salad
            </p>
        </div>

        <hr class="divider">

        <ul class="features-list">
            <li>Fresh Crunchy Lettuce with Golden Croutons</li>
            <li>Rich & Creamy Caesar Dressing with Parmesan Notes</li>
            <li>Classic, Flavorful & Comforting Salad Option</li>
        </ul>
    </div>

    <!-- IMAGE RIGHT -->
    <div class="image-container">
        <img src="food/food/CAESAR .png" alt="King Salad">
    </div>

</div>




<!--======================================================== card 18 =========================================================================================-->


<div class="product-card" id="QUINOA">
    <div class="image-container">
        <img src="food/food/QUINOA .png" alt="Crunchy Deli Bowl">
        <!-- <button class="expand-btn">⤢</button> -->
    </div>

    <div class="content-container">
        <h1 class="product-title">QUINOA SALAD</h1>
        <p class="tagline">Protein-rich superfood quinoa tossed with fresh vegetables and bright citrus–mustard notes.
</p>

        <hr class="divider">

        <div class="meta-data">
            <p><strong>Category:</strong> <span class="category-name">CLASSIC SALADS</span></p>
            <p class="tags">
                <strong>Tags:</strong>Quinoa salad, superfood salad, protein-rich quinoa bowl, citrus quinoa salad, mustard dressing salad, healthy grain bowl, plant-based nutrition, wholesome meal
            </p>
        </div>

        <hr class="divider">

        <ul class="features-list">
            <li>High-Protein Superfood Quinoa for Lasting Energy</li>
            <li>Refreshing Citrus & Mustard Dressing for Zesty Flavorr</li>
            <li>Light, Nutritious & Perfectly Balanced Salad Option</li>
        </ul>
    </div>
</div>




<!--======================================================== card 19 =========================================================================================-->


<div class="product-card reverse" id="PANEER">


    <!-- TEXT LEFT -->
    <div class="content-container">
        <h1 class="product-title">PANEER GRILLED SALAD

</h1>
        <p class="tagline">
Double-flavored grilled paneer cubes paired with fresh vegetables and an aromatic house-made dressing.
        </p>

        <hr class="divider">

        <div class="meta-data">
            <p><strong>Category:</strong> <span class="category-name">CLASSIC SALADS</span></p>
            <p class="tags">
                <strong>Tags:</strong>Paneer grilled salad, grilled paneer bowl, vegetarian protein salad, Indian cottage cheese salad, smoky paneer salad, fresh veggie paneer mix, wholesome vegetarian meal
            </p>
        </div>

        <hr class="divider">

        <ul class="features-list">
            <li>Double-Flavored Grilled Paneer with Light Smoky Notes</li>
            <li>Fresh Crunchy Vegetables with Aromatic Dressing</li>
            <li>Protein-Rich, Flavorful & Satisfying Salad Option</li>
        </ul>
    </div>

    <!-- IMAGE RIGHT -->
    <div class="image-container">
        <img src="food/food/grilledpaneer.png" alt="King Salad">
    </div>

</div>


<!--======================================================== card 20 =========================================================================================-->

<!-- 
<section class="related-section">
    <h2 class="related-heading">RELATED PRODUCTS</h2>

    <div class="related-grid">

        <a href="quinoa-bowl.html" class="related-card">
            <div class="related-image-box">
                <img src="food/2.jpeg" alt="Quinoa Energy Bowl">
            </div>
            <div class="related-content">
                <h3>Quinoa Energy Bowl</h3>
                <p>Quinoa, Chickpeas, Red Bell Pepper, Cucumber, Onion, Flanked Parsley...</p>
            </div>
        </a>

        <a href="sprout-medley.html" class="related-card">
            <div class="related-image-box">
                <img src="food/plate2.png" alt="Fresh Sprout Medley">
            </div>
            <div class="related-content">
                <h3>Fresh Sprout Medley</h3>
                <p>Salad Made With Sprout, Mixed With A Variety Of Fresh Veggies.</p>
            </div>
        </a>

        <a href="chickpea-boost.html" class="related-card">
            <div class="related-image-box">
                <img src="food/plate 1.png" alt="Chickpea Energy Boost">
            </div>
            <div class="related-content">
                <h3>Chickpea Energy Boost</h3>
                <p>A Delightful Vegetarian Dish With Layers Of Flavor And Textures.</p>
            </div>
        </a>

        <a href="protein-mix.html" class="related-card">
            <div class="related-image-box">
                <img src="food/plate2.png" alt="Protein Power Mix">
            </div>
            <div class="related-content">
                <h3>Protein Power Mix</h3>
                <p>Spicy, Crunchy, Refreshing, Protein-packed.</p>
            </div>
        </a>

    </div>
</section> -->


    
</body>
</html>
 <?php include 'footer.php'; ?>
