<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="shop.css">
    <link rel="icon" type="image/png" sizes="16x16" href="kfcfavicon.png">
    <title>Shop</title>
</head>
<body>

<nav class="navbar">
    <a href="index.php"><img src="kfc-logo.png" alt="KFC Logo"></a>

    <input type="checkbox" id="checkbox3" class="checkbox3 visuallyHidden">
        <label for="checkbox3">
            <div class="hamburger hamburger3" onclick="toggleMenu()">
                <span class="bar bar1"></span>
                <span class="bar bar2"></span>
                <span class="bar bar3"></span>
                <span class="bar bar4"></span>
            </div>
        </label>

        <ul>
            <li><a href="index.php" class="nav">Home</a></li>
            <li><a href="about.php" class="nav">About</a></li>
            <li><a href="shop.php" class="active-page">Shop</a></li>
        </ul>
    </nav>

    <script>
       function toggleMenu() {
    const navbarUl = document.querySelector('.navbar ul');
    navbarUl.classList.toggle('show');
}
    </script>

    <h1 id="main-title">Our Delicious Food</h1>
    

    <div class="shop-container">
        <div class="shop-item">
            <img src="kfcbucket.jpeg" alt="Chicken Bucket">
            <h3>Chicken Bucket</h3>
            <p>Price: $10.00</p>
            <button class="shop-btn">Add to Cart</button>
        </div>
        <div class="shop-item">
            <img src="kfcwings.jpeg" alt="Chicken Wings">
            <h3>Chicken Wings</h3>
            <p>Price: $5.00</p>
            <button class="shop-btn">Add to Cart</button>
        </div>
        <div class="shop-item">
            <img src="kfcstrips.jpeg" alt="Chicken Wings">
            <h3>Chicken Strips</h3>
            <p>Price: $9.00</p>
            <button class="shop-btn">Add to Cart</button>
        </div>

        </div>
        






        <button id="scrollToTop" title="Scroll To Top">↑</button>


    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h1>Quick Links</h1>
                <ul>
                    <a href="index.php"><li>Home</li></a>
                    <a href="about.php"><li>About</li></a>
                    <a href="shop.php"><li>Shop</li></a>
                </ul>
            </div>
            <div class="footer-section">
                <h1>Contact Us</h1>
                <form action="contactmsgs.php" method="POST">
                    <input type="email" name="email" class="text-input" placeholder="Your email address..." required>
                    <textarea name="message" class="text-input" placeholder="Your message..." required></textarea>
                    <button type="submit" class="contact-btn" name="submit">
                        Send
                    </button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; KFC | Designed by Redon Bytyqi
        </div>
        </footer>
    
</body>

<script src="scrollToTop.js"></script>
</html>