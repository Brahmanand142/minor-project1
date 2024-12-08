

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Boxicons (for icons) -->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url(' assets/WhatsApp Image 2024-12-05 at 19.23.54_1c375c8f.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            background-color: rgba(26, 180, 78, 0.5);
            width: 100%;
            max-width: 400px;
            padding: 30px;
            border-radius: 16px;
            border: solid 5px rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(25px);
            box-shadow: 0px 0px 30px 20px rgba(0, 0, 0, 0.1);
            color: white;
        }

        .login-title {
            margin-bottom: 16px;
            font-size: 32px;
            text-align: center;
        }

        .input-box {
            display: flex;
            width: 100%;
            position: relative;
            margin-top: 20px;
        }

        .input-box input {
            width: 100%;
            padding: 10px 16px 10px 38px;
            border-radius: 99px;
            border: solid 3px transparent;
            background: rgba(255, 255, 255, 0.1);
            outline: none;
            color: white;
            font-weight: 500;
            transition: 0.25s;
        }

        .input-box input:focus {
            border: solid 3px rgba(255, 255, 255, 0.25);
        }

        .input-box input::placeholder {
            color: rgba(255, 255, 255, 0.75);
        }

        .input-box i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 14px;
            color: rgba(255, 255, 255, 0.75);
            font-size: 18px;
            transition: 0.25s;
        }

        .input-box input:focus + i {
            color: white;
        }

        .remember-forget-box {
            display: flex;
            width: 100%;
            margin-top: 16px;
            justify-content: space-between;
        }

        .remember-forget-box h5 {
            font-weight: normal;
        }

        .remember-me {
            display: flex;
            gap: 8px;
        }

        .forget-password:hover {
            text-decoration: underline;
        }

        .login-button {
            width: 100%;
            margin-top: 24px;
            padding: 10px 0;
            background: #32CDD5;
            border: none;
            border-radius: 99px;
            color: white;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
            outline: transparent 3px solid;
            transition: 0.1s;
        }

        .login-button:focus {
            outline: #32CDD58A 3px solid;
        }

        .dont-have-an-account {
            font-weight: normal;
            margin-top: 12px;
            text-align: center;
        }

        /* Responsive Design */
        @media (max-width: 576px) {
            .container {
                padding: 20px;
                max-width: 90%;
            }

            .login-title {
                font-size: 28px;
            }

            .input-box input {
                padding: 10px 16px 10px 38px;
                font-size: 14px;
            }

            .login-button {
                font-size: 14px;
                padding: 12px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="login-title">Login</h1>

    <form>
        <section class="input-box">
            <input type="text" name="username" placeholder="Username" required>
            <i class='bx bxs-user'></i>
        </section>

        <section class="input-box">
            <input type="password" name="password" placeholder="Password" required>
            <i class='bx bxs-lock-alt'></i>
        </section>

        <section class="remember-forget-box">
            <div class="remember-me">
                <input type="checkbox" name="remember-me" id="remember-me">
                <label for="remember-me">
                    <h5>Remember me</h5>
                </label>
            </div>
            <a href="#" class="forget-password">
                <h5>Forget password</h5>
            </a>
        </section>

        <button class="login-button" type="submit">Login</button>

        <h5 class="dont-have-an-account">
            Don't have an account? <a href="sign.php"><b>Sign up</b></a>
        </h5>
    </form>
</div>

<!-- Bootstrap JS (Optional for interactivity) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


