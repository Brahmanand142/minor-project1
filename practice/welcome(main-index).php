
<?php
include("includes/header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            color: whitesmoke;
        }

        body {
            background-color: rgb(213, 234, 234);
        }

        .nav {
            height: 90px;
            background-color: rgb(57, 105, 22);
            font-size: 22px;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .logo {
            background-image: url("simple logo for mens wear cloth designing website.png");
            background-size: cover;
            margin-left: 1px;
            height: 85px;
            width: 100px;
        }

        .address-border {
            height: 85px;
            background-color: rgb(148, 187, 202);
            width: 62%;
            display: flex;
            justify-content: space-evenly;
            margin-top: 0.5px;
            margin-left: 100px;
            margin-right: 100px;
        }

        button {
            background-color: rgb(210, 73, 94);
        }

        .log-border {
            background-color: rgb(41, 44, 45);
            margin-right: 1px;
            margin-left: 3px;
            height: 90px;
            align-items: center;
        }

        .hero-section {
            background-image: url("assets/stylecraft.png");
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            background-size: cover;
        }

        .shop-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            background-color: rgb(174, 193, 201);
            padding: 30px 0;
        }

        .box {
            height: 250px;
            width: 23%;
            background-color: rgb(195, 129, 129);
            padding: 20px 0px 15px;
            margin-top: 8px;
            border-radius: 10px 10px 10px 10px;
            transition: 0.3s;
            margin-top:25px;
        }

        .box:hover {
            transform: scale(1.05);
        }

        .box-img {
            height: 162.5px;
            background-size: contain;
            background-repeat: no-repeat;
            border-radius: 8px 12px 12px 8px;
        }

        .box-content p {
            color: black;
            text-align: center;
        }

        footer {
            margin-top: 15px;
        }

        .foot-panel1 {
            background-color: #2b6cb3;
            color: rgb(198, 218, 70);
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 0.85rem;
        }

        .foot-panel2 {
            background-color: #2b6cb3;
            color: rgb(198, 218, 70);
            height: 250px;
            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
        }

        .foot-panel2 ul {
            margin-top: 10px;
            list-style: none;
        }

        .foot-panel2 ul a {
            display: block;
            font-size: 0.85rem;
            margin-top: 10px;
            color: #dddd;
        }

        .foot-panel3 {
            background-color: #2b6cb3;
            color: rgb(198, 218, 70);
            border-top: 0.5px solid white;
            height: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

      

        .foot-panel4 {
            background-color: #0f1111;
            color: whitesmoke;
            height: 100px;
            font-size: 0.8rem;
            text-align: center;
        }

        .box-content h2 {
            text-align: center;
        }

        @media (max-width: 767px) {
            .box {
                width: 48%;
            }

            .navbar {
                flex-direction: column;
                align-items: center;
            }

            .address-border {
                width: 100%;
                flex-direction: column;
            }

            .foot-panel2 {
                flex-direction: column;
                align-items: center;
            }

            .box-content p {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 400px) {
            .box {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <!-- <header>
        <div class="navbar">
            <div class="logo"></div>
            <div class="address-border">
                <a href="home.php">Home</a>
                <a href="cart.php">Cart</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact us</a>
            </div>
            <div class="log-border">
                <div class="login">
                    <a href="login-index.php">Login</a>
                </div>
            </div>
        </div>
    </header> -->

    <!-- Hero Section -->
    <div class="hero-section">
    </div>

    <!-- Shop Section -->
    <div class="shop-section">
        <div class="box">
            <div class="box-content">
                <h2>Hoodie</h2>
                <div class="box-img" style="background-image: url('assets/hoodie.png');"></div>
                <p>See more</p>
            </div>
        </div>

        <div class="box">
            <div class="box-content">
                <h2>Sweatshirt</h2>
                <div class="box-img" style="background-image: url('assets/sweatshirt.jpg');"></div>
                <p>See more</p>
            </div>
        </div>

        <div class="box">
            <div class="box-content">
                <h2>T-shirts</h2>
                <div class="box-img" style="background-image: url('assets/t-shirt.png');"></div>
                <p>See more</p>
            </div>
        </div>

        <div class="box">
            <div class="box-content">
                <h2>Women's Sweatshirt</h2>
                <div class="box-img" style="background-image: url('assets/women sweatshirt.jpg');"></div>
                <p>See more</p>
            </div>
        </div>

        <div class="box">
            <div class="box-content">
                <h2>Collar Vest</h2>
                <div class="box-img" style="background-image: url('assets/collor-vest.webp');"></div>
                <p>See more</p>
            </div>
        </div>

        <div class="box">
            <div class="box-content">
                <h2>Stylish Chain Hoodie</h2>
                <div class="box-img" style="background-image: url('assets/chain-hoodie.jpg');"></div>
                <p>See more</p>
            </div>
        </div>

        <div class="box">
            <div class="box-content">
                <h2>Girl's Short-Sleeve</h2>
                <div class="box-img" style="background-image: url('assets/short-sleeve.avif');"></div>
                <p>See more</p>
            </div>
        </div>

        <div class="box">
            <div class="box-content">
                <h2>Cotton Half Vests</h2>
                <div class="box-img" style="background-image: url('assets/mens-half-vest.webp');"></div>
                <p>See more</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <!-- <footer>
        <div class="foot-panel1">
            Back To Top
        </div>
        <div class="foot-panel2">
            <ul>
                <p>Get to Know Us</p>
                <a>Careers</a>
                <a>Blog</a>
                <a>About Style Craft Studios</a>
                <a>Investor Relations</a>
                <a>Our Devices</a>
                <a>Styling and Designing</a>
                <a>Printing</a>
            </ul>
            <ul>
                <p>Customer Service</p>
                <a>Help</a>
                <a>Track Order</a>
                <a>Returns & Exchanges</a>
                <a>Shipping & Delivery</a>
            </ul>
        </div>
        <div class="foot-panel3">
            <div class="logo2"></div>
        </div>
        <div class="foot-panel4">
            <div class="pages">
                <a>Conditions of Use</a>
                <a>Privacy Notice</a>
                <a>Consumer Health Data Privacy Disclosure</a>
                <a>Your Ads Privacy Choice</a>
            </div>
            <div class="copyright">
                © 1996-2024, Amazon.com, Inc. or its affiliates
            </div>
        </div>
    </footer> -->

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



<?php
include("includes/footer.php");
?>

</body>

</html>