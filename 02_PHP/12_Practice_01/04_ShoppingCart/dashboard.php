<?php
session_start();


// if(isset($_GET['product_id'])){
    
//         echo "<h3 style='color:green'>Added Successfully </h3>";
    
// }

if (!isset($_SESSION['logged_user_email'])) {
    header("Location: login.php?error=error2");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
    body {
        /* height: 100vh;
        width: 100vw; */
        background-color: skyblue;
        box-sizing: border-box;
    }
    .main-heading {
        text-align: center;
        font-size: 50px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-transform: uppercase;
        text-decoration: underline;
        
    }
    .container {
        width: 55%;
        height: 50%;
        margin: auto;
        margin-top: 5%;
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px black;
        text-align: center;
    }
    .profile {
        width: 50%;
        margin: auto;
        margin-top: 6%;
        background-color: yellowgreen;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px black;
        text-align: center;
    }
    .container .profile h2 {
        font-size: 25px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-transform: uppercase;
        margin: 10px 0;
        text-decoration: wavy underline;
    }
    .container .profile h3 {
        font-size: 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-transform: uppercase;
        margin: 10px 0;
    }
   .container a {
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
    nav {
        width: 100%;
        height: 50px;
        background-color: black;
        color: white;
        padding: 10px;
        text-align: center;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    nav h1 {
        padding: 2px;
        font-size: 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    nav ul {
        display: flex;
        justify-content: center;
        align-items: center;
        list-style: none;
        padding: 0;
    }
    nav ul li {
        display: inline;
        margin: 0 15px;
        
        font-size: 23px;
        font-weight: bolder;
    }
    nav ul li a{
        
        color: white;
        
    }
/*  */
.products {
    margin-top: 50px;
    padding: 2rem;
    background-color:beige;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    border-radius: 20px;
}


.products h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
    text-align: center;
    color: #333;
}

.product-card{
    display: flex;
    justify-content: center;
    gap: 2rem;
    flex-wrap: wrap;
    margin-top: 50px;
}
.phone-card {
    display: flex;
    justify-content: center;
    gap: 2rem;
    flex-wrap: wrap;
}

.phone-card h3 {
    width: 100%;
    text-align: center;
    font-size: 1.5rem;
    color: #555;
    margin-bottom: 1rem;
}

.phone-card {
    background-color: white;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 1rem;
    width: 250px;
    text-align: center;
    transition: transform 0.3s ease;
    /* display: flex;
    justify-content: space-between;
    align-items: center; */
}

.phone-card:hover {
    transform: translateY(-5px);
}

.phone-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
    background-color: #e0e0e0; /* placeholder bg if image is missing */
}

.phone-card h4 {
    margin: 0.5rem 0;
    font-size: 1.2rem;
    color: #222;
}

.phone-card p {
    color: #777;
    margin-bottom: 1rem;
}

.phone-card button {
    padding: 0.5rem 1rem;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.phone-card button:hover {
    background-color: #0056b3;
}
.phone-card a{
    padding: 0.5rem 1rem;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}



</style>

</head>
<body>
    <nav>
        <h1>Shop Store</h1>
        <ul>
            <li><a href="show-cart.php">View Cart</a></li>
            <li><a href="#iphone">Mobiles</a></li>
            <li><a href="#electronics">Electronics</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>

                  
    </nav>



    <h1 class="main-heading">Welcome, <i><?php echo $_SESSION['logged_user_name']; ?></i> to the Shop Store!!!</h1>
     <?php if(isset($_GET['product_id'])){
    
        echo "<h2 style='color:green; text-align:center' >Added Successfully <i>($_GET[product_id])</i> </h2>";
    
}?>
   
   
    <div class="container">
        <div class="profile">
            <h2>Your Profile</h2>
            <h3>Name: <?php echo $_SESSION['logged_user_name']; ?> </h3>
                    </div>
        
    </div>

    <div class="products">
 
    <h2>Smart Phones Section</h2>
    <div class="product-card" id="category1">
   
    <div class="phone-card" id="iphone">
        <img src="https://www.apple.com/newsroom/images/2024/09/apple-debuts-iphone-16-pro-and-iphone-16-pro-max/article/Apple-iPhone-16-Pro-hero-240909_inline.jpg.large.jpg" alt="Iphone 16 Image">
        <h4>Iphone 16</h4>
        <p>Price: $999</p>
        <a href="add-to-cart.php?product_id=iphone16">Add</a>
    </div>
    <div class="phone-card" id="electronics">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuvAad5uKFj2fOk7eJ8psl1XS_o1NXIEqTwA&s" alt="Samsung Galaxy S24 Image">
        <h4>Samsung Galaxy S24</h4>
        <p>Price: $990</p>
         <a href="add-to-cart.php?product_id=samsung24">Add</a>
    </div>
   </div>


   <br>
   <br>

    <h2>Electronics Section</h2>
    <div class="product-card">
   
    <div class="phone-card">
        <img src="https://cityelectronics.com.pk/wp-content/uploads/2023/01/City-06-scaled-2500x2500.jpg" alt="Washing Machine Image">
        <h4>Washing Machine</h4>
        <p>Price: $599</p>
        <a href="add-to-cart.php?product_id=washingmachine">Add</a>
    </div>
    <div class="phone-card">
        <img src="https://modernelectronics.pk/cdn/shop/files/91999-chrome-gray_4be799a9-b964-4b1a-8116-fa890afe1827.jpg?v=1696688855" alt="Fridge Image">
        <h4>Fridge</h4>
        <p>Price: $790</p>
         <a href="add-to-cart.php?product_id=fridge">Add</a>
    </div>
   </div>
   
</div> 

</body>
</html>
