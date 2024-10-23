<html>
<head>
    <title>Larp Watches - Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #0047AB;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .header .logo {
            display: flex;
            align-items: center;
        }
        .header .logo i {
            font-size: 24px;
            margin-right: 10px;
        }
        .header .logo span {
            font-size: 20px;
            font-weight: bold;
            color: white;
        }
        .header .nav {
            display: flex;
            align-items: center;
        }
        .header .nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-size: 16px;
        }
        .header .nav a:hover {
            text-decoration: underline;
        }
        .header .nav i {
            font-size: 20px;
            margin-left: 10px;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 60px);
        }
        .signup-box {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .signup-box h2 {
            margin: 0 0 20px;
            font-size: 24px;
        }
        .signup-box label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .signup-box input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .signup-box button {
            width: 100%;
            padding: 10px;
            background-color: #0047AB;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .signup-box button:hover {
            background-color: #0047AB;
        }
        .login-link {
            text-align: center;
            margin-top: 15px;
        }
        .login-link a {
            color: #0047AB;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            
            <span>Larp Watches</span>
        </div>
        <div class="nav">
            <a href="index.php">Home</a>
            <a href="product.html">Products</a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>
            <a href="login.php"><i class="fas fa-user"></i></a>
            <a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </div>
    <div class="container">
        <div class="signup-box">
            <h2>Sign Up</h2>
            <form method="post" action="signup1.php">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" name="signup">Sign Up</button>
            </form>
            <div class="login-link">
                <p>Already have an account? <a href="login.php">Log In</a></p>
            </div>
        </div>
    </div>
</body>
</html>
