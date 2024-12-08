<?php include("includes/header.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Clothes Printing</title>
  <!-- Bootstrap 4.5 CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color:black  ;
    }

    .contact-section {
      background-image: url('WhatsApp Image 2024-12-05 at 19.23.54_1c375c8f.jpg');
      background-size: cover;
      background-position: center;
      height: 300px;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .container {
      background-color: lightblue;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-top: -50px;
      z-index: 2;
    }

    h2 {
      color: #333;
    }

    .contact-form input, .contact-form textarea {
      margin-bottom: 15px;
    }

    .contact-form button {
      background-color: #d9534f;
      color: white;
      border: none;
    }

    .contact-form button:hover {
      background-color: #c9302c;
    }

    /* Make the content section responsive */
    @media (max-width: 768px) {
      .contact-section {
        height: 250px;
      }
    }
  </style>
</head>
<body style="background-color:dark">

  <!-- Contact Section -->
  <div class="contact-section">
    <div>
      <h1 style="color:red">Contact Us</h1>
      <p>We'd love to hear from you! Reach out with any questions.</p>
    </div>
  </div>

  <!-- Contact Form Section -->
  <div style="background-color=red" class="container my-5">
    <h2 style="color:green;" class="text-center mb-4">Get in Touch</h2>

    <form class="contact-form" action="process_contact.php" method="POST">
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject" required>
      </div>

      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
      </div>

      <button type="submit" class="btn btn-primary btn-block">Send Message</button>
    </form>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php include("includes/footer.php");
 ?>
