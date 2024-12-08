<?php
include("includes/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
  <!-- Bootstrap 4.5 CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
<style>
    body {
  font-family: Arial, sans-serif;
}

 .navbar {
  margin-bottom: 30px;
  background:color:red;
} 


table th, table td {
  text-align: center;
}

table td input {
  width: 60px;
  margin: 0 auto;
}

.btn {
  font-size: 14px;
}
.container5
{
color:red;
}

</style></head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Shopping Cart</a>
  </nav>

  <!-- Cart Section -->
  <div class="container5">
    <h2>Your Shopping Cart</h2>

    <!-- Cart Table -->
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Item</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <!-- Cart Item -->
        <tr>
          <td>Graphic T-Shirt</td>
          <td>$20.00</td>
          <td>
            <input type="number" class="form-control" value="1" min="1" />
          </td>
          <td>$20.00</td>
          <td><button class="btn btn-danger">Remove</button></td>
        </tr>
        <!-- Cart Item -->
        <tr>
          <td>Logo Hoodie</td>
          <td>$35.00</td>
          <td>
            <input type="number" class="form-control" value="1" min="1" />
          </td>
          <td>$35.00</td>
          <td><button class="btn btn-danger">Remove</button></td>
        </tr>
      </tbody>
    </table>

    <!-- Cart Summary -->
    <div class="row">
      <div class="col-md-6">
        <button class="btn btn-secondary">Continue Shopping</button>
      </div>
      <div class="col-md-6 text-right">
        <h4>Total: $<span id="total-price">55.00</span></h4>
        <button class="btn btn-primary">Checkout</button>
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