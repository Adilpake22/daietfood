# 🥗 DietFood — Healthy Food Ordering Web App

A web-based diet food ordering platform where customers can browse and order healthy meals. Orders are instantly sent to the owner via **WhatsApp** and simultaneously stored in a **MySQL database** for record-keeping.

---

## 🚀 Features

- Browse diet-friendly food menu
- Place food orders through a simple web form
- Order details automatically sent to the owner via **WhatsApp API**
- All orders saved to a **MySQL database**
- Lightweight frontend built with **HTML & CSS**
- Backend powered by **PHP**

---

## 🛠️ Tech Stack

| Layer      | Technology        |
|------------|-------------------|
| Frontend   | HTML, CSS         |
| Backend    | PHP               |
| Database   | MySQL             |
| Messaging  | WhatsApp API (wa.me link or Twilio/WATI) |

---

## 📁 Project Structure

```
dietfood/
├── index.html           # Homepage / Menu page
├── order.php            # Handles order form submission
├── db_connect.php       # Database connection config
├── whatsapp.php         # WhatsApp message sender
├── css/
│   └── style.css        # Main stylesheet
├── assets/
│   └── images/          # Food images
└── README.md
```

---

## ⚙️ Setup & Installation

### 1. Requirements

- PHP 7.4 or higher
- MySQL / MariaDB
- A web server (Apache via XAMPP / WAMP / LAMP)
- Internet connection (for WhatsApp redirection)

### 2. Clone / Download the Project

```bash
git clone https://github.com/yourusername/dietfood.git
cd dietfood
```

Or simply copy the project folder into your server's root directory (e.g., `htdocs` for XAMPP).

### 3. Database Setup

1. Open **phpMyAdmin** (or your preferred MySQL client)
2. Create a new database:
   ```sql
   CREATE DATABASE dietfood_db;
   ```
3. Import the SQL file (if provided), or create the orders table manually:
   ```sql
   CREATE TABLE orders (
     id INT AUTO_INCREMENT PRIMARY KEY,
     customer_name VARCHAR(100) NOT NULL,
     phone VARCHAR(20) NOT NULL,
     food_item VARCHAR(200) NOT NULL,
     quantity INT NOT NULL,
     address TEXT,
     order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

### 4. Configure Database Connection

Open `db_connect.php` and update with your credentials:

```php
<?php
$host     = "localhost";
$username = "root";       // your DB username
$password = "";           // your DB password
$database = "dietfood_db";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
```

### 5. Configure Owner's WhatsApp Number

Open `order.php` (or `whatsapp.php`) and set the owner's WhatsApp number:

```php
$owner_phone = "91XXXXXXXXXX"; // Country code + number, no + or spaces
// Example for India: "919876543210"
```

The order message is sent using a WhatsApp `wa.me` link like:

```php
$message = urlencode("New Order!\nName: $name\nItem: $item\nQty: $qty\nAddress: $address");
$whatsapp_url = "https://wa.me/$owner_phone?text=$message";
header("Location: $whatsapp_url");
```

---

## 📦 How It Works

1. Customer visits the website and selects a food item
2. Customer fills in their name, phone number, quantity, and address
3. On form submission, `order.php`:
   - Saves the order to the **MySQL database**
   - Redirects the customer to **WhatsApp** with a pre-filled message to the owner
4. Owner receives the order details instantly on WhatsApp

---

## 📋 Environment Variables (Optional)

If you move to a production server, consider using a `.env` file or server environment variables for sensitive credentials instead of hardcoding them.

---

## 🔒 Security Notes

- Sanitize all user inputs using `mysqli_real_escape_string()` or prepared statements to prevent SQL injection
- Validate phone numbers and form fields on both client and server side
- Do not expose `db_connect.php` publicly — keep it outside the web root if possible

---


## 👤 Author

**Your Name**  
📧 adityadilpake22@gmail.com  
