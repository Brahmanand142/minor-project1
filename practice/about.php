<?php
include("includes/header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | Clothes Printing</title>
  <!-- Bootstrap 4.5 CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: black;
    }

    .container {
      background-color: dark;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .row
    {
      background color:green;
    }                        

    h2 {
      color: red;
    }

    h3 {
      color: red;
      font-size: 1.6rem;
    }

    p, ul {
      font-size: 1.1rem;
      color: #666;
    }

    ul {
      list-style-type: none;
      padding-left: 0;
    }

    ul li {
      margin: 8px 0;
    }

    .carousel-item img {
      border-radius: 8px;
    }

    /* Ensure text adjusts well on smaller devices */
    .container {
      padding: 15px;
    }
    .container1
    {
      background:dark;
    }

  </style>
</head>
<body style="background-color: lightblue;">

  <!-- About Section -->
  
  <div class="container my-5">
    <h2 style="color:red;"  class="text-center mb-4">About Us</h2>

    <div class="row">
      <div class="col-md-6">
        <h3 style="color:blue;" >Our Mission</h3>
        <p   > At Clothes Printing, our mission is to bring creative designs to life with high-quality custom clothing. We offer premium t-shirts, hoodies, and other apparel designed to express individuality, creativity, and personality.</p>
        <p   >We pride ourselves on providing great customer service and fast delivery times, ensuring that every order is made to perfection.</p>
      </div>
      <div class="col-md-6">
        <h3 style="color:blue;" >Why Choose Us?</h3>
        <ul>
          <li>High-quality printing for long-lasting designs.</li>
          <li>Affordable prices for custom apparel.</li>
          <li>Fast delivery and excellent customer service.</li>
          <li>Wide selection of clothing and accessories.</li>
        </ul>
      </div>
    </div>
  </div>
  

  <!-- Bootstrap 4.5 JS, Popper.js, jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php
include("includes/footer.php");
?>
