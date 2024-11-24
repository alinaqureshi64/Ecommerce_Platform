

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home -  E-commerce Platform</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #ff00ff; /* Green */
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }
        nav {
            text-align: center;
            background-color: #17a2b8; /* Teal */
            padding: 10px 0;
        }
        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.2rem;
        }
        marquee {
            background-color: #ffc107; /* Amber */
            color: #000;
            padding: 10px 0;
            font-weight: bold;
            font-size: 1.2rem;
            text-transform: uppercase;
            border: 2px solid #17a2b8; /* Green */
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .category {
            margin-bottom: 30px;
        }
        .category h2 {
            background-color: #007bff; /* Blue */
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            font-size: 1.5rem;
        }
        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .product {
            width: 30%;
            background-color: #f9f9f9;
            margin: 10px;
            padding: 10px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            transition: transform 0.3s;
        }
        .product:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }
        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .product h3 {
            font-size: 1.3rem;
            margin: 10px 0;
            color: #b30047; /* Blue */
        }
        .product p {
            margin: 0;
            font-size: 1.1rem;
            color: #555;
        }
        button {
            background-color: #007bff; /* Blue */
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #ffff00; /* Darker Blue */
        }
        footer {
            background-color: #343a40; /* Dark Gray */
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<header>
    <h1> E-commerce Platform</h1>
</header>

<!-- Marquee for Announcements -->
<marquee behavior="scroll" direction="left">Big Discounts on Textbooks! Free Shipping on Orders Over $50! Grab College Gear at 20% Off!</marquee>

<nav>
    <a href="">Home</a>
    <a href="http://localhost/DMS/products.php">Products</a>
    <a href="http://localhost/DMS/cart.php">Cart</a>
    <a href="http://localhost/DMS/login.php">Sign-up</a>
    <a href="http://localhost/DMS/feedback.php">Feedback</a> <!-- Link to Feedback Page -->
</nav>

<div class="container">
    <center><h2>Featured Products</h2></center>

    <!-- Textbooks Category -->
    <div class="category">
        <h2>Textbooks</h2>
        <div class="product-list">
            <!-- Product 1 -->
            <div class="product">
                <img src="img1.jpg" alt="Advanced Database Systems" height="90%" width="60%">
                <h3>Advanced Database Systems</h3>
                <p>Price: $50</p>
                
            </div>

            <!-- Product 2 -->
            <div class="product">
                <img src="img2.jpg" alt="Introduction to Algorithms" height="100%" width="80%">
                <h3>Introduction to Algorithms</h3>
                <p>Price: $45</p>
                
            </div>

            <!-- Product 3 -->
            <div class="product">
                <img src="img3.jpg" alt="Linear Algebra for Beginners" height="100%" width="90%">
                <h3>Linear Algebra for Beginners</h3>
                <p>Price: $40</p>
                
            </div>
        </div>
    </div>

    <!-- Electronics Category -->
    <div class="category">
        <h2>Electronics</h2>
        <div class="product-list">
            <!-- Product 4 -->
            <div class="product">
                <img src="img4.jpg" alt="High Performance Laptop"  height="90%" width="60%">
                <h3>High Performance Laptop</h3>
                <p>Price: $1200</p>
                
            </div>

            <!-- Product 5 -->
            <div class="product">
                <img src="img5.jpg" alt="Noise-Cancelling Headphones"  height="90%" width="60%">
                <h3>Noise-Cancelling Headphones</h3>
                <p>Price: $150</p>
                
            </div>

            <!-- Product 6 -->
            <div class="product">
                <img src="img6.jpg" alt="Portable Bluetooth Speaker"  height="90%" width="60%">
                <h3>Portable Bluetooth Speaker</h3>
                <p>Price: $80</p>
                
            </div>
        </div>
    </div>

    <!-- College Gear Category -->
    <div class="category">
        <h2>College Gear</h2>
        <div class="product-list">
            <!-- Product 7 -->
            <div class="product">
                <img src="img7.jpg" alt=" T-shirt"  height="90%" width="60%">
                <h3>T-shirt</h3>
                <p>Price: $20</p>
               
            </div>

            <!-- Product 8 -->
            <div class="product">
                <img src="img8.jpg" alt=" Hoodie"  height="90%" width="60%">
                <h3>Hoodie</h3>
                <p>Price: $35</p>
                
            </div>

            <!-- Product 9 -->
            <div class="product">
                <img src="img9.jpg" alt="College Backpack"  height="90%" width="60%">
                <h3>College Backpack</h3>
                <p>Price: $45</p>
                
            </div>
        </div>
    </div>
</div>
<!-- Contact Us Section with Styling -->
<div class="address" style="background-color: #f1f1f1; padding: 20px; border-radius: 10px; text-align: center; margin-top: 30px;">
    <h2 style="color: #007BFF;">Contact Us</h2>
    <p style="color: #333; font-size: 1.2rem; margin: 10px 0;">Address: <span style="color: #0056b3;">248, E-commerce Ave,
Business Park, Sector 18,
Gurgaon, Haryana - 122001
India
</span></p>
    <p style="color: #333; font-size: 1.2rem; margin: 10px 0;">Contact: <span style="color: #0056b3;">(123) 456-7890</span></p>
    <p style="color: #333; font-size: 1.2rem; margin: 10px 0;">Email: <a href="mailto:info@ecommerceplatform.com" style="color: #007BFF; text-decoration: none;">info@ecommerceplatform.com</a></p>
</div>


<footer>
    <p>© 2024 E-commerce Platform</p>
</footer>

</body>
</html>
