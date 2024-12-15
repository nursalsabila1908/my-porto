<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Nur Salsabila</title>
</head>

<body>
    <!-- Header Section -->

    <header>
        <a href="#home" class="logo">Nur Salsabila</a>

        <div class='bx bx-menu' id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>

        <div class="top-btn">
            <a href="#contact" class="nav-btn">Contact Me</a>
        </div>
    </header>

    <!-- Contact Section Code -->

    <section class="contact" id="contact">

        <h2 class="heading">Contact <span>Me</span></h2>

        <form action="./contact_process.php" method="post">
            <div class="input-box">
                <input type="text" placeholder="Full Name" name="full_name">
                <input type="email" placeholder="Email Address" name="email">
            </div>
            <div class="input-box">
                <input type="text" placeholder="Phone Number" name="phone">
                <input type="text" placeholder="Email Subject" name="subject">
            </div>

            <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>

            <input type="submit" value="Send Message" class="btn">
        </form>

    </section>

    <!-- Footer Section Code -->

    <footer class="footer">
        <div class="social">
            <a href="https://github.com/"><i class='bx bxl-github'></i></a>
            <a href="https://www.facebook.com"><i class='bx bxl-facebook'></i></a>
            <a href="https://https://www.instagram.com/"><i class='bx bxl-instagram'></i></a>
        </div>

        <p class="copyright">
            &copy; nur salsabila@2024
        </p>
    </footer>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="script.js"></script>
</body>

</html>