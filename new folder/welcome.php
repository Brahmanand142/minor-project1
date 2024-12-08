<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 0;
        }
        .welcome-container {
            max-width: 600px;
            padding: 30px;
            border: 2px solid #fff;
            border-radius: 15px;
            background-color: rgba(0, 0, 0, 0.7);
        }
        .welcome-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .visit-btn {
            background-color: #fff;
            color: #6a11cb;
            font-weight: bold;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            transition: all 0.3s ease-in-out;
            text-decoration: none;
            font-size: 1.2rem;
        }
        .visit-btn:hover {
            background-color: #6a11cb;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1 class="welcome-title">Welcome to My Amazon Clone</h1>
        <p class="lead">Click the button below to explore the full website.</p>
        <a href="index.php" class="visit-btn">Visit Website</a>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
