<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Menu | Diet Shastra</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>



    <!-- <section class="page-header">
        <div class="header-overlay">
          <div class="header-content" style="display:flex; justify-content:center; align-items:center; text-align:center;">
           <h1>Our Menu</h1>
           </div>

        </div>
    </section> -->

    
<div id="cart-floater" onclick="openCheckout()" style="position:fixed; bottom:20px; right:20px; background:#436117; color:white; padding:15px 25px; border-radius:50px; cursor:pointer; display:none; box-shadow:0 4px 15px rgba(0,0,0,0.3); z-index:1000;">
    View Cart (<span id="cart-count">0</span>) - ₹<span id="cart-total">0</span>
</div>

<div id="checkout-modal" class="hidden" style="position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.7); z-index:2000; display:flex; justify-content:center; align-items:center;">
    <div style="background:white; padding:30px; border-radius:15px; width:90%; max-width:400px; max-height:80vh; overflow-y:auto;">
        <h3>Complete Your Order</h3>
        <div id="cart-items-list" style="margin-bottom:15px; font-size:14px; color:#555;"></div>
        
        <form id="orderForm" method="POST" action="process_order.php">
            <input type="hidden" name="order_details" id="order_details_input">
            <input type="hidden" name="total_price" id="total_price_input">
            
            <input type="text" name="name" placeholder="Your Name" required style="width:100%; padding:10px; margin:5px 0; border:1px solid #ddd; border-radius:5px;">
            <input type="tel" name="phone" placeholder="WhatsApp Number" required style="width:100%; padding:10px; margin:5px 0; border:1px solid #ddd; border-radius:5px;">
            <textarea name="address" placeholder="Delivery Address" required style="width:100%; padding:10px; margin:5px 0; border:1px solid #ddd; border-radius:5px;"></textarea>
            
            <button type="submit" style="width:100%; background:#436117; color:white; padding:12px; border:none; border-radius:5px; font-weight:bold; cursor:pointer; margin-top:10px;">Place Order via WhatsApp</button>
            <button type="button" onclick="closeCheckout()" style="width:100%; background:#ccc; border:none; padding:8px; margin-top:5px; border-radius:5px; cursor:pointer;">Cancel</button>
        </form>
    </div>
</div>



<section>



<div class="filter-wrap">
        <button class="btn active" onclick="filterMenu('all', this)">All</button>
        <button class="btn" onclick="filterMenu('veg', this)">Veg Exotic Salads</button>
        <button class="btn" onclick="filterMenu('non-veg', this)">Non Veg Exotic Salads</button>
        <button class="btn" onclick="filterMenu('pasta', this)">Pasta Exotic Salads</button>
    </div>

    <div class="menu-grid" id="menu-container">


<!--======================================================== card 1 =========================================================================================-->


<div class="card" data-cat="veg">
    <div class="img-area">
        <img src="food/food/russion.png" alt="Veg">
    </div>
    <div class="text-area">
        <h4>RUSSIAN SALAD</h4>
        <p>Rich creamy taste, loaded with fresh vegetables and soft Apple.</p>
        <div class="card-footer" style="display:flex; justify-content:between; align-items:center; margin-top:15px;">
            <span class="price" style="font-weight:bold; color:#436117;">₹199</span>
            <button class="add-btn" onclick="addToCart('RUSSIAN SALAD', 199)" style="margin-left:auto; background:#436117; color:white; border:none; padding:8px 12px; border-radius:5px; cursor:pointer;">
                🛒 Add
            </button>
        </div>
    </div>
</div>


<!--======================================================== card 2 =========================================================================================-->

<div class="card" data-cat="non-veg">
    <div class="img-area">
        <img src="food/food/kingsalad.png" alt="Chicken">
    </div>

    <div class="text-area">
        <h4>KING SALAD</h4>
        <p>Royal mix of exotic veggies & herbs with a smoky dressing.</p>

        <div class="card-footer" style="display:flex; justify-content:space-between; align-items:center; margin-top:15px;">
            <span class="price" style="font-weight:bold; color:#436117;">₹249</span>
            <button class="add-btn" onclick="addToCart('KING SALAD', 249)" 
               style="margin-left:auto; background:#436117; color:white; border:none; padding:8px 12px; border-radius:5px; cursor:pointer;">
                🛒 Add
            </button>
        </div>
    </div>
</div>


<!--======================================================== card 3 =========================================================================================-->
<div class="card" data-cat="pasta">
    <div class="img-area">
        <img src="food/food/PANFRIED.png" alt="Pasta">
    </div>

    <div class="text-area">
        <h4>PAN FRIED SALAD</h4>
        <p>Lightly sauteed vegetables with zesty lemon and mustard flavor.</p>

        <div class="card-footer" style="display:flex; justify-content:space-between; align-items:center; margin-top:15px;">
            <span class="price" style="font-weight:bold; color:#436117;">₹220</span>
            <button class="add-btn" onclick="addToCart('PAN FRIED SALAD', 220)" 
                style="background:#436117; color:white; border:none; padding:8px 12px; border-radius:5px; cursor:pointer;">
                🛒 Add
            </button>
        </div>
    </div>
</div>

<!--======================================================== card 4 =========================================================================================-->

<div class="card" data-cat="pasta">
    <div class="img-area">
        <img src="food/food/tofusalad.png" alt="TOFU SALAD">
    </div>

    <div class="text-area">
        <h4>TOFU SALAD</h4>
        <p>Protein-rich tofu cubes mixed with crunchy greens and sweet onion dressing.</p>

        <div class="card-footer" style="display:flex; justify-content:space-between; align-items:center; margin-top:15px;">
            <span class="price" style="font-weight:bold; color:#436117;">₹210</span>
            <button class="add-btn" onclick="addToCart('TOFU SALAD', 210)" 
                style="background:#436117; color:white; border:none; padding:8px 12px; border-radius:5px; cursor:pointer;">
                🛒 Add
            </button>
        </div>
    </div>
</div>


<!--======================================================== card 5 =========================================================================================-->

<div class="card" data-cat="pasta">
    <div class="img-area">
        <img src="food/food/BROWNRICE .png" alt="BROWN RICE SALAD">
    </div>

    <div class="text-area">
        <h4>BROWN RICE SALAD</h4>
        <p>Wholesome brown rice with veggies and mild teriyaki sauce.</p>

        <div class="card-footer" style="display:flex; justify-content:space-between; align-items:center; margin-top:15px;">
            <span class="price" style="font-weight:bold; color:#436117;">₹230</span>
            <button class="add-btn" onclick="addToCart('BROWN RICE SALAD', 230)" 
                style="background:#436117; color:white; border:none; padding:8px 12px; border-radius:5px; cursor:pointer;">
                🛒 Add
            </button>
        </div>
    </div>
</div>


<!--======================================================== card 6 =========================================================================================-->


<div class="card" data-cat="pasta">
    <div class="img-area">
        <img src="food/food/GRILLEDCORN.png" alt="GRILLED CORN SALAD">
    </div>

    <div class="text-area">
        <h4>GRILLED CORN SALAD</h4>
        <p>Char-grilled sweet corn tossed in tangy Marie Rose sauce.</p>

        <div class="card-footer" style="display:flex; justify-content:space-between; align-items:center; margin-top:15px;">
            <span class="price" style="font-weight:bold; color:#436117;">₹200</span>
            <button class="add-btn" onclick="addToCart('GRILLED CORN SALAD', 200)" 
                style="background:#436117; color:white; border:none; padding:8px 12px; border-radius:5px; cursor:pointer;">
                🛒 Add
            </button>
        </div>
    </div>
</div>


<!--======================================================== card 7 =========================================================================================-->


<div class="card" data-cat="pasta">
    <div class="img-area">
        <img src="food/food/BASILPESTO .png" alt="BASIL PESTO SALAD">
    </div>

    <div class="text-area">
        <h4>BASIL PESTO SALAD</h4>
        <p>Italian basil pesto blended with olive oil and fresh greens.</p>

        <div class="card-footer" style="display:flex; justify-content:space-between; align-items:center; margin-top:15px;">
            <span class="price" style="font-weight:bold; color:#436117;">₹240</span>
            <button class="add-btn" onclick="addToCart('BASIL PESTO SALAD', 240)" 
                style="background:#436117; color:white; border:none; padding:8px 12px; border-radius:5px; cursor:pointer;">
                🛒 Add
            </button>
        </div>
    </div>
</div>


<!--======================================================== card 8 =========================================================================================-->


<div class="card" data-cat="pasta">
    <div class="img-area">
        <img src="food/food/GRILLEDPINEAPPLE.png" alt="GRILLED PINEAPPLE SALAD">
    </div>

    <div class="text-area">
        <h4>GRILLED PINEAPPLE SALAD</h4>
        <p>Juicy grilled pineapple with aromatic Moorish spices.</p>

        <div class="card-footer" style="display:flex; justify-content:space-between; align-items:center; margin-top:15px;">
            <span class="price" style="font-weight:bold; color:#436117;">₹225</span>
            <button class="add-btn" onclick="addToCart('GRILLED PINEAPPLE SALAD', 225)" 
                style="background:#436117; color:white; border:none; padding:8px 12px; border-radius:5px; cursor:pointer;">
                🛒 Add
            </button>
        </div>
    </div>
</div>

<!--======================================================== card 9 =========================================================================================-->

<div class="card" data-cat="pasta">
    <div class="img-area">
        <img src="food/food/beetroot.png" alt="BEETROOT SALAD">
    </div>

    <div class="text-area">
        <h4>BEETROOT SALAD</h4>
        <p>Fresh beetroot blended with its own tangy dressing.</p>

        <div class="card-footer" style="display:flex; justify-content:space-between; align-items:center; margin-top:15px;">
            <span class="price" style="font-weight:bold; color:#436117;">₹210</span>
            <button class="add-btn" onclick="addToCart('BEETROOT SALAD', 210)" 
                style="background:#436117; color:white; border:none; padding:8px 12px; border-radius:5px; cursor:pointer;">
                🛒 Add
            </button>
        </div>
    </div>
</div>


<!--======================================================== card 10 =========================================================================================-->


<div class="card" data-cat="pasta">
    <div class="img-area">
        <img src="food/food/grilledpaneer.png" alt="GRILLED PANEER SALAD">
    </div>

    <div class="text-area">
        <h4>GRILLED PANEER SALAD</h4>
        <p>Soft grilled paneer cubes with your choice of zesty or sweet dressing.</p>

        <div class="card-footer" style="display:flex; justify-content:space-between; align-items:center; margin-top:15px;">
            <span class="price" style="font-weight:bold; color:#436117;">₹250</span>
            <button class="add-btn" onclick="addToCart('GRILLED PANEER SALAD', 250)" 
                style="background:#436117; color:white; border:none; padding:8px 12px; border-radius:5px; cursor:pointer;">
                🛒 Add
            </button>
        </div>
    </div>
</div>






</section>




<style>



/* --- FILTER BUTTONS --- */

.filter-wrap { 
    display: flex; 
    flex-wrap: wrap;       
    justify-content: center; 
    gap: 12px;              
    margin: 40px auto 30px;
    max-width: 600px;       
    padding: 0 15px;
}

.btn {
    padding: 10px 20px; 
    border: 1px solid #ddd; 
    background: #fff; 
    border-radius: 50px;
    cursor: pointer; 
    font-size: 13px; 
    font-weight: 600; 
    transition: all 0.3s ease;
    text-transform: uppercase;
    white-space: nowrap;    
    flex: 0 1 auto;         
}

.btn:hover {
    background: #f0f0f0;
    border-color: #ccc;
}

.btn.active { 
    background: #436117; 
    color: white; 
    border-color: #436117; 
    box-shadow: 0 4px 12px rgba(67, 97, 23, 0.3);
}

/* --- MENU GRID --- */
.menu-grid { 
    display: grid; 
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); 
    gap: 30px;
    max-width: 1200px; 
    margin: 0 auto 60px; 
    padding: 0 15px;
}

/* --- CARD DESIGN --- */
.card { 
    background: #f4f9ed; 
    border-radius: 25px; 
    overflow: hidden; 
    border: 1px solid #e0eacc; 
    transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
}

.card:hover { 
    transform: translateY(-10px); 
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
}

/* --- IMAGE AREA --- */
.img-area { 
    background: #fff; 
    padding: 15px; 
    text-align: center;
    overflow: hidden;
}

.img-area img { 
    width: 100%; 
    border-radius: 20px; 
    object-fit: cover; 
    aspect-ratio: 1/1; 
    transition: transform 0.5s ease;
}

.card:hover .img-area img {
    transform: scale(1.05);
}

/* --- TEXT AREA --- */
.text-link {
    text-decoration: none;
    color: inherit;
    display: block;
    flex-grow: 1;
}

.text-area { 
    padding: 25px; 
    text-align: left;
}

.text-area h4 { 
    margin: 0 0 10px; 
    font-size: 1.25rem; 
    color: #1a2a10; 
    font-weight: 700;
}

.text-area p { 
    margin: 0; 
    font-size: 0.95rem; 
    color: #556b43; 
    line-height: 1.6; 
}

/* --- UTILS --- */
.hidden { 
    display: none !important; 
}


/* --- DESKTOP: FORCE 4 CARDS --- */
@media (min-width: 1024px) {
    .menu-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

/* --- RESPONSIVE ADJUSTMENTS --- */
@media (max-width: 768px) {
    .menu-grid {
        grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
        gap: 20px;
    }
    
    .btn {
        padding: 10px 20px;
        font-size: 12px;
    }
}

/* --- MOBILE SPECIFIC FIX --- */
@media (max-width: 480px) {
    .filter-wrap {
        gap: 10px;          /* Tighter gap for small screens */
    }

    .btn {
        padding: 8px 16px;  /* Slightly smaller buttons */
        font-size: 11px;
        flex: 1 1 40%;      /* Forces 2 buttons per row (approx 40% width + gap) */
        text-align: center;
    }
}
    </style>




    <script>
        function filterMenu(category, button) {
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                const cardCat = card.getAttribute('data-cat');
                if (category === 'all' || cardCat === category) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        }







        let cart = [];

function addToCart(name, price) {
    cart.push({ name, price });
    updateCartUI();
}

function updateCartUI() {
    const floater = document.getElementById('cart-floater');
    const countSpan = document.getElementById('cart-count');
    const totalSpan = document.getElementById('cart-total');
    
    if (cart.length > 0) {
        floater.style.display = 'block';
        countSpan.innerText = cart.length;
        const total = cart.reduce((sum, item) => sum + item.price, 0);
        totalSpan.innerText = total;
    }
}

function openCheckout() {
    document.getElementById('checkout-modal').classList.remove('hidden');
    const list = document.getElementById('cart-items-list');
    const detailsInput = document.getElementById('order_details_input');
    const totalInput = document.getElementById('total_price_input');
    
    let itemsText = cart.map(item => `${item.name} (₹${item.price})`).join(', ');
    let total = cart.reduce((sum, item) => sum + item.price, 0);
    
    list.innerText = "Items: " + itemsText;
    detailsInput.value = itemsText;
    totalInput.value = total;
}

function closeCheckout() {
    document.getElementById('checkout-modal').classList.add('hidden');
}






document.getElementById('orderForm').onsubmit = function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    
    // Get values from the form
    const customerName = this.name.value;
    const customerPhone = this.phone.value.replace(/\D/g,''); // Number from input
    const address = this.address.value;
    const items = document.getElementById('order_details_input').value;
    const total = document.getElementById('total_price_input').value;
    
    // Delivery Details (You can make these dynamic or static)
    const deliveryBoyNumber = "9876543210"; 
    const deliveryDate = new Date().toLocaleDateString();
    const deliveryTime = "Within 45-60 mins";

    fetch('process_order.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        
        // MESSAGE 1: For the ADMIN (You)
        const adminMsg = `*New Order Received!*%0A` +
                         `*Customer:* ${encodeURIComponent(customerName)}%0A` +
                         `*Phone:* ${customerPhone}%0A` +
                         `*Items:* ${encodeURIComponent(items)}%0A` +
                         `*Total:* ₹${total}%0A` +
                         `*Address:* ${encodeURIComponent(address)}`;

        // MESSAGE 2: For the CUSTOMER (Confirmation)
        const customerMsg = `*Order Confirmed - Diet Shastra*%0A%0A` +
                            `Hi ${encodeURIComponent(customerName)}, your order is confirmed!%0A` +
                            `*Amount:* ₹${total}%0A` +
                            `*Delivery Address:* ${encodeURIComponent(address)}%0A` +
                            `*Delivery Boy:* ${deliveryBoyNumber}%0A` +
                            `*Date/Time:* ${deliveryDate} | ${deliveryTime}%0A%0A` +
                            `Thank you for choosing health!`;

        // Strategy: Open Admin WhatsApp link. 
        // Note: Browsers usually block two popups. 
        // It's better to send the order to YOUR number so you can forward/reply to them.
        
        const adminUrl = `https://wa.me/918262990600?text=${adminMsg}`;
        
        // If you want to message the CUSTOMER directly instead:
        const customerUrl = `https://wa.me/91${customerPhone}?text=${customerMsg}`;

        // Choose which one opens automatically (Usually Admin)
        window.open(adminUrl, '_blank');
        
        // Optional: Reset UI
        cart = [];
        updateCartUI();
        closeCheckout();
        alert("Order details sent to Admin!");
    });
};












    </script>





</body>
</html>
 <?php include 'footer.php'; ?>













