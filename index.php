<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" sizes="16x16" href="kfcfavicon.png">
    <title>Home</title>
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
            <li><a href="index.php" class="active-page">Home</a></li>
            <li><a href="about.php" class="nav">About</a></li>
            <li><a href="shop.php" class="nav">Shop</a></li>
        </ul>
    </nav>

    <script>
       function toggleMenu() {
    const navbarUl = document.querySelector('.navbar ul');
    navbarUl.classList.toggle('show');
}
    </script>
    

    <div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="KFCslide4.jpg" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="KFCslide4.jpg" alt="Image 2">
            </div>    
            <div class="carousel-item">
                <img src="KFCslide4.jpg" alt="Image 3">
            </div>

        </div>
        <button class="carousel-control prev" onclick="prevSlide()">&#10094;</button>
        <button class="carousel-control next" onclick="nextSlide()">&#10095;</button>
    </div>

    <div class="horizontal-line"></div>

    <div class="content">
        <h1>Welcome to KFC</h1>
        <p>At KFC, we are proud to serve you the best fried chicken in the world. Our secret recipe has been passed down through generations and we are proud to share it with you. We have a wide range of products to suit your needs, from our famous fried chicken to our delicious sides and desserts. We are committed to providing you with the best quality food and service, so come and visit us today!</p>
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

<script src="slider.js"></script>
<script src="scrollToTop.js"></script>
</html>