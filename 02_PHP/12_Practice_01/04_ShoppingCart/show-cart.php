<?php
session_start();

if (!isset($_SESSION['logged_user_email'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Cart</title>
    <style>
        body{
            height: 100vh;
            width: 100vw;
            background-color: skyblue;
            box-sizing: border-box;
            text-align: center;
        }
        h1{

            color: white;
            font-size: 35px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-transform: uppercase;
            text-decoration: underline;
            margin-top: 20px;
        }
       
        a {
        margin-top: 25px;
        font-size: 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-transform: uppercase;
        text-decoration: none;
        color: white;
        background-color: black;
        padding: 10px 20px;
        border-radius: 5px;
        display: inline-block;
    }
    table {
        
        width: 80%;
                margin: 20px auto;
        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
        text-align: center;
        border: 2px solid black;
        color: white;
        font-size: larger;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: bolder;
    }
    th{
        text-decoration: underline;
        font-size: 27px;
    }
    </style>
</head>
<body>
    <h1>Your Cart <?php echo $_SESSION['logged_user_name']?></h1>
    <a href="dashboard.php">← Back to Dashboard</a><br><br>
   

    <?php
    $total = 0;

    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        echo "<table border='2' cellpadding='10' align='center' style='margin: auto;'>";
        echo "<tr><th>Product</th><th>Price</th><th>Quantity</th><th>Subtotal</th></tr>";

        foreach ($_SESSION['cart'] as $item) {
            $subtotal = $item['price'] * $item['quantity'];
            $total += $subtotal;

            echo "<tr>";
            echo "<td>{$item['name']}</td>";
            echo "<td>\${$item['price']}</td>";
            echo "<td>{$item['quantity']}</td>";
            echo "<td>\${$subtotal}</td>";
            echo "</tr>";
        }

        echo "<tr><td colspan='3'><strong>Total</strong></td><td><strong>\${$total}</strong></td></tr>";
        echo "</table>";
         echo "<a href=checkout.php>← Checkout</a><br><br>";
    } else {
        echo "<p>Your cart is empty.</p>";
    }
    ?>
</body>
</html>
