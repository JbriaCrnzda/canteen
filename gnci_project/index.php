<?php 
require 'connect.php';
if(!empty($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
else {
    header('location: login.php');
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Test Project</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar Section -->
    <div class="navbar">
        <div class="brand-logo"><img src="./imgs/gnclogo.png" alt=""></div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="nav-links">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#content">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="./new_logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <!-- Cta Section -->
    <div class="cta" id="home">
        <div class="cta-content">
            <h1><span class="green">GNC</span> <span class="yellow">ONLINE</span> <span class="red">CANTEEN</span></h1>
            <h2>Welcome <?php echo $row["name"]?></h2>
            <p>There are many different kinds of foods and drinks here, maybe you know some of them!</p>
            <p>Sometimes there are new foods and drinks so stay updated!</p>
            <p>Browse through the list of foods and drinks below.</p>
            <button class="yellowbtn"><a href="#content">See More</a></button>
            <button class="redbtn"><a href="#"></a>About Us</button>
        </div>
        <div class="cta-image"><img src="./imgs/food img 1.png" alt=""></div>
    </div>


    <!-- Content Section -->
    <div class="content-title" id="content">
        <h2><span class="green">Here is the</span> <span class="yellow">list of foods </span> <span class="red">that we offer!</span></h2>
    </div>

    <!-- First group cards -->
    <div class="first-group cards-container">
        <div class="content-card first-card ">
            <div class="first-food-detail1 shop-item">
                <h3 class="content-food-name shop-item-title">Burger</h3>
                <img src="./imgs/burger food.png" alt="" class="content-imgs shop-item-image">
                <p class="food-descriptions">Burger is a quick food that can be eaten in a few minutes or even seconds!</p>
            </div>
           
            <div class="first-food-detail2 food-sale shop-item-details">
                <p class="shop-item-price">₱90</p>
                <button class="yellowbtn greenhoverbtn shop-item-button">Take now</button>
            </div>
        </div>

        <div class="content-card second-card ">
            <div class="second-food-detail1 shop-item">
                <h3 class="content-food-name shop-item-title">Fries</h3>
                <img src="./imgs/fries food.png" alt="" class="content-imgs shop-item-image">
                <p class="food-descriptions">Fries are best paired with burgers. Two yummy combinations!</p>
            </div>
           
            <div class="second-food-detail2 food-sale shop-item-details">
                <p class="shop-item-price">₱70</p>
                <button class="redbtn greenhoverbtn shop-item-button">Take now</button>
            </div>
        </div>
        
    </div>

    <div class="second-group cards-container">
        <div class="content-card first-card ">
            <div class="first-food-detail1 shop-item">
                <h3 class="content-food-name shop-item-title">Doughnuts</h3>
                <img src="./imgs/Donut food.png" alt="" class="content-imgs shop-item-image">
                <p class="food-descriptions">Doughnuts are sweets. You must try this!</p>
            </div>
           
            <div class="first-food-detail2 food-sale shop-item-details">
                <p class="shop-item-price">₱125</p>
                <button class="yellowbtn greenhoverbtn shop-item-button">Take now</button>
            </div>
        </div>

        <div class="content-card second-card ">
            <div class="second-food-detail1 shop-item">
                <h3 class="content-food-name shop-item-title">Pizza</h3>
                <img src="./imgs/pizza food.png" alt="" class="content-imgs shop-item-image">
                <p class="food-descriptions">Pizzas can get you full. You can try them!</p>
            </div>
           
            <div class="second-food-detail2 food-sale shop-item-details">
                <p class="shop-item-price">₱150</p>
                <button class="redbtn greenhoverbtn shop-item-button">Take now</button>
            </div>
        </div>
        
    </div>

    <!-- Second group cards -->
    <div class="content-title">
        <h2><span class="green">Here is the</span> <span class="yellow">list of drinks </span> <span class="red">that we offer!</span></h2>
    </div>
    <div class="first-group cards-container">
        <div class="content-card first-card ">
            <div class="first-food-detail1 shop-item">
                <h3 class="content-food-name shop-item-title">Milkshake</h3>
                <img src="./imgs/milkshake drinks.png" alt="" class="content-imgs shop-item-image">
                <p class="food-descriptions">A cold milkshake. Drink it when it's hot!</p>
            </div>
           
            <div class="first-food-detail2 food-sale shop-item-details">
                <p class="shop-item-price">₱200</p>
                <button class="yellowbtn greenhoverbtn shop-item-button">Take now</button>
            </div>
        </div>

        <div class="content-card second-card ">
            <div class="second-food-detail1 shop-item">
                <h3 class="content-food-name shop-item-title">Smoothie</h3>
                <img src="./imgs/smoothie drinks.png" alt="" class="content-imgs shop-item-image">
                <p class="food-descriptions">A smoothie is a healthy drink. Drink healthy!</p>
            </div>
           
            <div class="second-food-detail2 food-sale shop-item-details">
                <p class="shop-item-price">₱100</p>
                <button class="redbtn greenhoverbtn shop-item-button">Take now</button>
            </div>
        </div>
        
    </div>

    <div class="first-group cards-container">
        <div class="content-card first-card ">
            <div class="first-food-detail1 shop-item">
                <h3 class="content-food-name shop-item-title">Coffee</h3>
                <img src="./imgs/coffee drink.png" alt="" class="content-imgs shop-item-image">
                <p class="food-descriptions"> A hot coffee. Drink it while it's hot!</p>
            </div>
           
            <div class="first-food-detail2 food-sale shop-item-details">
                <p class="shop-item-price">₱20</p>
                <button class="yellowbtn greenhoverbtn shop-item-button">Take now</button>
            </div>
        </div>

        <div class="content-card second-card">
            <div class="second-food-detail1 shop-item">
                <h3 class="content-food-name shop-item-title">Iced Tea</h3>
                <img src="./imgs/iced tea drink.png" alt="" class="content-imgs shop-item-image">
                <p class="food-descriptions">Iced tea is a cold refreshing drink!</p>
            </div>
           
            <div class="second-food-detail2 food-sale shop-item-details">
                <p class="shop-item-price">₱30</p>
                <button class="redbtn greenhoverbtn shop-item-button">Take now</button>
            </div>
        </div>
    </div>


    <!-- Cart Section -->
    <div class="container content-section">
        <h2 class="section-header">CART</h2>
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">ITEM</span>
            <span class="cart-price cart-header cart-column">PRICE</span>
            <span class="cart-quantity cart-header cart-column">QUANTITY</span>
        </div>
        <div class="cart-items">
        </div>
        <div class="cart-total">
            <strong class="cart-total-title">Total</strong>
            <span class="cart-total-price">₱0</span>
        </div>
        <button class="btn btn-primary btn-purchase" type="button">CHECK-OUT</button>
    </div>

    <!-- About -->
    <div class="content-title">
        <h2>About Us</h2>
    </div>
    <div class="about-container" id="about">
        <div class="about-image">
            <img src="./imgs/about img.png" alt="" width="250">
        </div>
        <div class="about-info">
            <p>Guagua National Colleges Inc. (GNCI) is a private educational institution in Guagua, Pampanga, Philippines. Established in 1946, GNC offers undergraduate degree programs in various fields, including Business Administration, Education, Information Technology, Engineering, and Tourism. The college also provides diploma and certificate courses. GNC is recognized by the Commission on Higher Education (CHED) and is affiliated with educational organizations. The college has experienced faculty, modern facilities, and resources to support student learning. It promotes extracurricular activities, community engagement, and character development. GNC is committed to continuous improvement, updating its curriculum, and preparing students for successful careers.</p>
        </div>

    </div>

    <!-- Footer -->
    <div class="footer-container" id="contact">
        <div class="footer-image">
            <img src="./imgs/footer img.png" alt="">
        </div>
        <div class="footer-info">
            <p>Gnc Online Canteen will make your stay in canteen efficient, and worth it!</p> <br>
            <a href="https://www.facebook.com/gnc.edu.ph">https://www.facebook.com/gnc.edu.ph</a> <br>
            <div class="footer-copyright">
                <p>Copyright © 2024 GNC Online Canteen. All rights reserved.</p>
            </div>
        </div>
         
    </div>
    
    




    <script src="./script.js"></script>
</body>
</html>