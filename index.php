<html>
 <head>
  <title>
   Larp Watches
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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
            font-size: 60px;
            margin-right:10px;
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
        .hero {
            position: relative;
            text-align: center;
            color: white;
        }
        .hero img {
            width: 100%;
            height: 90vh;
        }
        .hero .hero-text {
            position: absolute;
            top: 60%;
            left: 15%;
            transform: translate(-50%, -50%);
        }
        .hero .hero-text h1 {
            font-size: 3em;
            margin: 0;
        }
        .hero .hero-text p {
            font-size: 1.2em;
        }
        .hero .hero-text .btn {
            background-color: #0047AB;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            align-items: start;
        }
        .welcome {
            text-align: center;
            padding: 50px 20px;
        }
        .welcome h2 {
            font-size: 2em;
            margin-bottom: 10px;
        }
        .welcome p {
            font-size: 1.2em;
            color: #666;
        }
        .featured-products {
            padding: 20px;
        }
        .featured-products h3 {
            font-size: 1.8em;
            margin-bottom: 20px;
        }
        .products {
            display: flex;
            gap: 20px;
            justify-content: center;
        }
        .product {
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            width: 30%;
            text-align: center;
        }
        .product img {
            width: 100%;
            height: auto;
        }
        .product .product-info {
            padding: 20px;
        }
        .product .product-info h4 {
            font-size: 1.2em;
            margin: 10px 0;
        }
        .product .product-info p {
            color: #0047AB;
            font-size: 1.2em;
            margin: 10px 0;
        }
        .product .product-info .btn {
            background-color: #0047AB;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .why-choose-us {
            padding: 50px 20px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .why-choose-us .feature {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            width: 30%;
            text-align: center;
        }
        .why-choose-us .feature h4 {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .why-choose-us .feature p {
            color: #666;
        }
        .footer {
            background-color: #333;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .footer .footer-section {
            width: 30%;
        }
        .footer .footer-section h4 {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .footer .footer-section p,
        .footer .footer-section a {
            color: white;
            text-decoration: none;
            font-size: 0.9em;
        }
        .footer .footer-section a {
            display: block;
            margin: 5px 0;
        }
        .footer .social-icons {
            display: flex;
            gap: 10px;
        }
        .footer .social-icons a {
            color: white;
            font-size: 1.2em;
        }
  </style>
 </head>
 <body>
    <div class="header">
        <div class="logo">
            <form method="post" action="signup.php"></form>
            <i class="fa-solid fa-watch"></i>
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
  <div class="hero">
   <img alt="watchesbackground" height="400" src="https://www.kapoorwatch.com/blogs/wp-content/uploads/Banner1470x680-6.webp" width="1200"/>
   <div class="hero-text">
    
    <a class="btn" href="product.html">
     Shop Now
    </a>
   </div>
  </div>
  <div class="welcome">
   <h2>
    Welcome to Larp Watches
   </h2>
   <p>
    Discover our exquisite collection of watches
   </p>
  </div>
  <div class="featured-products">
   <h3>
    Featured Products
   </h3>
   <div class="products">
    <div class="product">
     <img alt="Titan" height="200" src="https://www.titan.co.in/dw/image/v2/BKDD_PRD/on/demandware.static/-/Sites-titan-master-catalog/default/dw7646cf71/images/Titan/Catalog/90140QM03_1.jpg?sw=600&sh=600" width="300"/>
     <div class="product-info">
      <h4>
      Titan
      </h4>
      <p>
       $599.99
      </p>
      <a class="btn" href="product.html">
       View Details
      </a>
     </div>
    </div>
    <div class="product">
     <img alt="Bidens" height="200" src="https://i5.walmartimages.com/seo/BIDEN-Mens-Watches-Chronograph-Stainless-Steel-Waterproof-Date-Analog-Quartz-Watch-Business-Wrist-Watches-for-Men_12356033-d520-425d-b809-8880f4dcaf94.86f75057d0ed7af1087764c538a1488e.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF" width="300"/>
     <div class="product-info">
      <h4>
      Bidens
      </h4>
      <p>
       $599.99
      </p>
      <a class="btn" href="product.html">
       View Details
      </a>
     </div>
    </div>
    <div class="product">
     <img alt="Hublot" height="200" src="https://tocgwatches.in/cdn/shop/files/FIRSTedited.jpg?v=1700704076" width="300"/>
     <div class="product-info">
      <h4>
      Hublot
      </h4>
      <p>
       $599.99
      </p>
      <a class="btn" href="product.html">
       View Details
      </a>
     </div>
    </div>
   </div>
  </div>
  <div class="why-choose-us">
   <div class="feature">
    <h4>
    Authenticity Guaranteed
    </h4>
    <p>
     Our watches is crafted with the utmost care and precision.
    </p>
   </div>
   <div class="feature">
    <h4>
     Unique Designs
    </h4>
    <p>
     Discover one-of-a-kind pieces that reflect your style.
    </p>
   </div>
   <div class="feature">
    <h4>
    Curated Collection
    </h4>
    <p>
     We prioritize your happiness with our products and service.
    </p>
   </div>
  </div>
  <div class="footer">
   <div class="footer-section">
    <h4>
     Larp Watches
    </h4>
    <p>
     Exquisite watches for every occasion.
    </p>
   </div>
   <div class="footer-section">
    <h4>
     Quick Links
    </h4>
    <a href="index.php">
     Home
    </a>
    <a href="#">
     Products
    </a>
    <a href="#">
     About Us
    </a>
    <a href="#">
     Contact
    </a>
   </div>
   <div class="footer-section">
    <h4>
     Follow Us
    </h4>
    <div class="social-icons">
     <a href="#">
      <i class="fab fa-facebook-f">
      </i>
     </a>
     <a href="#">
      <i class="fab fa-twitter">
      </i>
     </a>
     <a href="#">
      <i class="fab fa-instagram">
      </i>
     </a>
    </div>
   </div>
  </div>
 </body>
</html>