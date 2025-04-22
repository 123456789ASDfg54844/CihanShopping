<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        /* Main content area (just for demo purposes) */
        main {
            flex: 1;
            padding: 20px;
            background-color:rgb(255, 255, 255);
        }
        
        /* Footer styles */
        footer {
            background-color: white;
            color: black;
            padding: 40px 20px;
        }
        
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        
        .footer-section {
            flex: 1 1 300px;
            margin-bottom: 20px;
            padding: 0 15px;
        }
        
        .footer-section h3 {
            font-size: 18px;
            margin-bottom: 15px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-section h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 30px;
            height: 2px;
            background-color: #4CAF50;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: #fff;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background-color: rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            color: #fff;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background-color: #4CAF50;
            transform: translateY(-3px);
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            margin-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 14px;
            color: #aaa;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .footer-container {
                flex-direction: column;
            }
            
            .footer-section {
                margin-bottom: 30px;
            }
        }
    </style>
</head>
<body>
    <main>

    
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>About Us</h3>
                <p>We are a company dedicated to providing quality services to our customers. Our mission is to deliver excellence in everything we do.</p>
            </div>
            
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="index.php" style="color: black;">Home</a></li>
                    <li><a href="http://localhost/Cihanshop/category.php?cid=3" style="color: black;">Books</a></li>
                    <li><a href="http://localhost/Cihanshop/category.php?cid=4" style="color: black;">Electronics</a></li>
                    <li><a href="http://localhost/Cihanshop/category.php?cid=5" style="color: black;">Furniture</a></li>
                    <li><a href="http://localhost/Cihanshop/category.php?cid=6" style="color: black;">Fashion</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>60M, Erbil, Iraq</p>
                <p>Email: Cihanshopping@gmail.com</p>
                <p>Phone: +964 751 219 84 31</p>
                <div class="social-links">
                    <a href="#" aria-label="Facebook" style="color: black;">f</a>
                    <a href="#" aria-label="Twitter" style="color: black;">t</a>
                    <a href="#" aria-label="Instagram" style="color: black;">i</a>
                    <a href="#" aria-label="LinkedIn" style="color: black;">in</a>
                </div>
            </div>
        </div>
        
        <div class="copyright">
            <p style="color: black;">&copy; 2025 Cihan Shopping. All Rights Reserved. </p>
        </div>
    </footer>
</body>
</html>