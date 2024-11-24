<?php include("connect.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - College Student E-commerce Platform</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color:  #ffffb3;
        }
        header {
            background-color: #cc0066;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .product {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }
        .product h3 {
            margin: 0;
            font-size: 1.5rem;
        }
        .product p {
            margin: 5px 0;
            color: #555;
        }
        .product button {
            padding: 10px 20px;
            background-color: #ff3333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .product button:hover {
            background-color: #99ccff;
        }
    </style>
</head>
<body>

<header>
    <h1>Cart</h1>
</header>

<div class="container">
    <div class="product">
        <h3>Data Structures</h3>
        <p>Price: $48</p>
        <button onclick="addToCart('Data Structures', 48)">Add to Cart</button>
    </div>
    <div class="product">
        <h3>Gaming Laptop</h3>
        <p>Price: $1500</p>
        <button onclick="addToCart('Gaming Laptop', 1500)">Add to Cart</button>
    </div>
    <div class="product">
        <h3>Leather Notebook</h3>
        <p>Price: $15</p>
        <button onclick="addToCart('Leather Notebook', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>Advanced Database Systems</h3>
        <p>Price: $50</p>
        <button onclick="addToCart('Advanced Database Systems', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>Introduction to Algorithms</h3>
        <p>Price: $45</p>
        <button onclick="addToCart('Introduction to Algorithms', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>Linear Algebra for Beginners</h3>
        <p>Price: $40</p>
        <button onclick="addToCart('Linear Algebra for Beginners', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>High Performance Laptop</h3>
        <p>Price: $1200</p>
        <button onclick="addToCart('High Performance Laptop', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>Noise-Cancelling Headphones</h3>
        <p>Price: $150</p>
        <button onclick="addToCart('Noise-Cancelling Headphones', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>Portable Bluetooth Speaker</h3>
        <p>Price: $80</p>
        <button onclick="addToCart('Portable Bluetooth Speaker', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>Portable Bluetooth Speaker</h3>
        <p>Price: $80</p>
        <button onclick="addToCart('Portable Bluetooth Speaker', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>T-shirt</h3>
        <p>Price: $20</p>
        <button onclick="addToCart('T-shirt', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>Hoodie</h3>
        <p>Price: $35</p>
        <button onclick="addToCart('Hoodie', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>College Backpack</h3>
        <p>Price: $45</p>
        <button onclick="addToCart('College Backpack', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>Data Structures Book</h3>
        <p>Price: $48</p>
        <button onclick="addToCart('Data Structures Book', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>Discrete Mathematics Book</h3>
        <p>Price: $42</p>
        <button onclick="addToCart('Discrete Mathematics Book', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>Operating Systems Book</h3>
        <p>Price: $55</p>
        <button onclick="addToCart('Operating Systems Book', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>Gaming Laptop</h3>
        <p>Price: $1500</p>
        <button onclick="addToCart('Gaming Laptop', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>SmartPhone</h3>
        <p>Price: $800</p>
        <button onclick="addToCart('SmartPhone', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>Tablet</h3>
        <p>Price: $350</p>
        <button onclick="addToCart('Tablet', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>Leather NoteBook</h3>
        <p>Price: $15</p>
        <button onclick="addToCart('Leather NoteBook', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>Fountain Pen</h3>
        <p>Price: $25</p>
        <button onclick="addToCart('Fountain Pen', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>Scientific Calculator</h3>
        <p>Price: $30</p>
        <button onclick="addToCart('Scientific Calculator', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>Vintage Desk Lamp</h3>
        <p>Price: $55</p>
        <button onclick="addToCart('Vintage Desk Lamp', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>Minimalist Wall Art</h3>
        <p>Price: $25</p>
        <button onclick="addToCart('Minimalist Wall Art', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>Leather Journal with Customizable Cover</h3>
        <p>Price: $35</p>
        <button onclick="addToCart('Leather Journal with Customizable Cover', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>Ceramic Coffee Mug Set</h3>
        <p>Price: $20</p>
        <button onclick="addToCart('Ceramic Coffee Mug Set', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>Wireless Charging Pad with Wooden Finish</h3>
        <p>Price: $45</p>
        <button onclick="addToCart('Wireless Charging Pad with Wooden Finish', 15)">Add to Cart</button>
    </div>
	<div class="product">
        <h3>Nordic Style Plant Pot</h3>
        <p>Price: $18</p>
        <button onclick="addToCart('Nordic Style Plant Pot', 15)">Add to Cart</button>
    </div>
</div>

<!-- Cart Section -->
<div class="container" id="cartContainer" style="display:none;">
    <h2>Items in Your Cart</h2>
    <div id="cartItems"></div>
    <div class="total">
        <strong>Total: $<span id="totalAmount">0</span></strong>
    </div>
</div>

<script>
    let cart = [];
    let total = 0;

    function addToCart(productName, productPrice) {
        // Check if the product is already in the cart
        const existingProduct = cart.find(item => item.name === productName);
        if (existingProduct) {
            existingProduct.quantity += 1; // Increase quantity
        } else {
            cart.push({ name: productName, price: productPrice, quantity: 1 }); // Add new product
        }
        
        // Update total amount
        total += productPrice;

        // Show cart
        document.getElementById('cartContainer').style.display = 'block';

        // Update cart items
        updateCartDisplay();
    }

    function updateCartDisplay() {
        const cartItemsContainer = document.getElementById('cartItems');
        cartItemsContainer.innerHTML = ''; // Clear previous cart items
        
        cart.forEach(item => {
            const itemElement = document.createElement('div');
            itemElement.innerHTML = `${item.name} - $${item.price} x ${item.quantity} = $${item.price * item.quantity}`;
            cartItemsContainer.appendChild(itemElement);
        });
        
        // Update total amount
        document.getElementById('totalAmount').innerText = total;
    }
</script>

</body>
</html>
<footer>
    <p>© 2024  E-commerce Platform</p>
</footer>
<?php
if(isset($_POST['add to cart']))
{
$items = $_POST['items'];


//if($name != "" && $gender != "" && $phone != "" && $address != "" && $caste != "" && $email != "" && $parent != "" && $date != "")
{
    $insert = "INSERT INTO admission values('$items')";
    $data = mysqli_query($connect,$insert);

    if($data)
    {
        echo"<script>alert('Inserted')</script>";
    }
    else
    {
        echo"<script>alert('Error')</script>";
    }
}
//else
//{
//echo"<script>alert('Inserted')</script>";
//}

}
?>