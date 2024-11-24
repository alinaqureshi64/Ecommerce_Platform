<?php include("connect.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #007BFF;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        marquee {
            background-color: #ffcc00;
            color: #000;
            padding: 10px;
            font-weight: bold;
            font-size: 1.2rem;
            text-transform: uppercase;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        .feedback-container {
            margin-top: 20px;
        }
        .feedback-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #007BFF;
        }
        .feedback-form {
            display: flex;
            flex-direction: column;
        }
        .feedback-form label {
            margin-bottom: 5px;
            color: #333;
        }
        .feedback-form input[type="text"],
        .feedback-form textarea,
        .feedback-form select {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .feedback-form button {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }
        .feedback-form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<header>
    <h1>Feedback Page</h1>
</header>

<!-- Marquee for Announcements -->
<marquee behavior="scroll" direction="left">We value your feedback! Please let us know your thoughts and suggestions!</marquee>

<div class="container">
    <div class="feedback-container">
        <h2>Submit Your Feedback</h2>
        <form class="feedback-form" action="#" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="rating">Rating:</label>
            <select id="rating" name="rating" required>
                <option value="">Select your rating</option>
                <option value="5">5 - Excellent</option>
                <option value="4">4 - Good</option>
                <option value="3">3 - Average</option>
                <option value="2">2 - Poor</option>
                <option value="1">1 - Very Poor</option>
            </select>

            <label for="comments">Comments:</label>
            <textarea id="comments" name="comments" rows="5" required></textarea>

            <button name="submit" type="submit">Submit Feedback</button>
        </form>
    </div>
</div>

</body>
</html>
<?php
if(isset($_POST['submit']))
{
$Name = $_POST['name'];
$Email= $_POST['email'];
$rating = $_POST['rating'];
$Comments = $_POST['comments'];


//if($name != "" && $gender != "" && $phone != "" && $address != "" && $caste != "" && $email != "" && $parent != "" && $date != "")
{
    $insert = "INSERT INTO feedback values('$Name','$Email','$rating','$Comments')";
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
/*else
{
echo"<script>alert('Inserted')</script>";
}*/

}
?>