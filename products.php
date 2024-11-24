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
            background-color: #ffff4d;
        }
        header {
            background-color: #cc00cc;
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
            background-color: #99ff33;
            padding: 10px 0;
        }
        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.2rem;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #007BFF;
            margin-bottom: 20px;
        }
        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .product {
            width: 30%;
            background-color: #ffff99;
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
        }
        .product p {
            margin: 0;
            font-size: 1.1rem;
            color: #555;
        }
        .filter {
            text-align: center;
            margin-bottom: 20px;
        }
        .filter select {
            padding: 10px;
            font-size: 1rem;
        }
        footer {
            background-color: #333;
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


<div class="container">
    <h2>Our Products</h2>
    
    <!-- Filter for Categories -->
    <div class="filter">
        <label for="category">Filter by Category:</label>
        <select id="category">
            <option value="all">All Products</option>
            <option value="textbooks">Textbooks</option>
            <option value="electronics">Electronics</option>
            <option value="college-gear">College Gear</option>
        </select>
    </div>

    <div class="product-list">
        <!-- Product 1 -->
        <div class="product">
            <img src="img10.jpg" alt="Data Structures" height="90%" width="60%">
            <h3>Data Structures</h3>
            <p>Price: $48</p>
            
        </div>

        <!-- Product 2 -->
        <div class="product">
            <img src="img11.jpg" alt="Discrete Mathematics" height="100%" width="80%">
            <h3>Discrete Mathematics</h3>
            <p>Price: $42</p>
           
        </div>

        <!-- Product 3 -->
        <div class="product">
            <img src="img12.jpg" alt="Operating Systems" height="100%" width="80%">
            <h3>Operating Systems</h3>
            <p>Price: $55</p>
           
        </div>

        <!-- Product 4 -->
        <div class="product">
            <img src="img13.jpg" alt="Gaming Laptop" height="100%" width="90%">
            <h3>Gaming Laptop</h3>
            <p>Price: $1500</p>
            
        </div>

        <!-- Product 5 -->
        <div class="product">
            <img src="img14.jpg" alt="Smartphone" height="100%" width="80%">
            <h3>Smartphone</h3>
            <p>Price: $800</p>
            
        </div>

        <!-- Product 6 -->
        <div class="product">
            <img src="img15.jpg" alt="Tablet" height="100%" width="80%">
            <h3>Tablet</h3>
            <p>Price: $350</p>
           
        </div>

        <!-- Product 7 -->
        <div class="product">
            <img src="img16.jpg" alt="Leather Notebook" height="100%" width="80%">
            <h3>Leather Notebook</h3>
            <p>Price: $15</p>
           
        </div>

        <!-- Product 8 -->
        <div class="product">
            <img src="img17.jpg" alt="Fountain Pen" height="100%" width="80%">
            <h3>Fountain Pen</h3>
            <p>Price: $25</p>
           
        </div>

        <!-- Product 9 -->
        <div class="product">
            <img src="img18.jpg" alt="Scientific Calculator" height="100%" width="80%">
            <h3>Scientific Calculator</h3>
            <p>Price: $30</p>
            
        </div>
		<!-- Product 10 -->
<div class="product">
    <img src="img19.jpg" alt="Vintage Desk Lamp" height="100%" width="80%">
    <h3>Vintage Desk Lamp</h3>
    <p>Price: $55</p>
</div>

<!-- Product 11 -->
<div class="product">
    <img src="img20.jpg" alt="Minimalist Wall Art" height="100%" width="80%">
    <h3>Minimalist Wall Art</h3>
    <p>Price: $25</p>
</div>

<!-- Product 12 -->
<div class="product">
    <img src="img21.jpg" alt="Leather Journal with Customizable Cover" height="100%" width="80%">
    <h3>Leather Journal with Customizable Cover</h3>
    <p>Price: $35</p>
</div>

<!-- Product 13 -->
<div class="product">
    <img src="img22.jpg" alt="Ceramic Coffee Mug Set" height="100%" width="80%">
    <h3>Ceramic Coffee Mug Set</h3>
    <p>Price: $20</p>
</div>

<!-- Product 14 -->
<div class="product">
    <img src="img23.jpg" alt="Wireless Charging Pad with Wooden Finish" height="100%" width="80%">
    <h3>Wireless Charging Pad with Wooden Finish</h3>
    <p>Price: $45</p>
</div>

<!-- Product 15 -->
<div class="product">
    <img src="img24.jpg" alt="Nordic Style Plant Pot" height="100%" width="80%">
    <h3>Nordic Style Plant Pot</h3>
    <p>Price: $18</p>
</div>

    </div>
</div>




</body>
</html>
<?php
if(isset($_POST['submit']))
{
$TextBooks = $_POST['TextBooks'];
$Electronics= $_POST['Electronics'];
$Collegegear = $_POST['Collegegear'];


if($name != "" && $gender != "" && $phone != "" && $address != "" && $caste != "" && $email != "" && $parent != "" && $date != "")
{
    $insert = "INSERT INTO admission values('$TextBooks','$Electronics','$Collegegear')";
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
else
{
echo"<script>alert('Inserted')</script>";
}

}
?>