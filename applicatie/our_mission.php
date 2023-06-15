<?php
session_start()

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gelre, Airport, Gelderland">

    <title>Gelre Airport - Our mission</title>
    <link rel="stylesheet" href="css\our-mission.css">
    <link rel="stylesheet" href="css\standard webpage.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li class="hamburger">
                    <label for="toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>
                    <input type="checkbox" id="toggle">
                    <div class="menu">
                        <button class="menu-logo" onclick="window.location.href='index.php';">
                            <i>Home</i>
                        </button>
                        <button class="menu-logo" onclick="window.location.href='my-flight.php';">
                            <i>My flight</i>
                        </button>
                        <button class="menu-logo" onclick="window.location.href='luggage.php';">
                            <i>Luggage</i>
                        </button>
                        <button class="menu-logo" onclick="window.location.href='check-in.php';">
                            <i>Check-in</i>
                        </button>
                        <button class="menu-logo" onclick="window.location.href='our_mission.php';">
                            <i>Our mission</i>
                        </button>
                    </div>
                </li>
                <li>
                    <img src="images/logo.png" alt="Logo GelreAirport" class="logo">
                </li>
            </ul>
            <aside class="menu-nav">
                <button class="button" onclick="window.location.href='login.php';">Login</button>
                <button class="button" onclick="window.location.href='sign-up.php';">Sign up</button>
            </aside>
        </nav>
    </header>

    <main>
        <div>
            <img src="images/background/Home.jpg" alt="Home Image" class="home_background">
        </div>
        <div class="row">
            <div>
                <h1 Class="text">Our mission</h1>
                <br>
                <p Class="text">
                    At Gelre Airport, we are on a mission to transform air travel, aligning <br>
                    convenience, joy, and eco-consciousness in a seamless flight experience. <br>
                    Guided by our ethos "Fly with a Smile," we are dedicated to providing <br>
                    outstanding customer service that turns each journey into a memorable <br>
                    occasion, while adopting green technologies, minimizing carbon footprints, <br>
                    and promoting sustainable practices. We envision air travel not just as a <br>
                    means to a destination, but as an enriching journey itself. Come, fly with <br>
                    Gelre Airport - where we celebrate the joy of exploration, the thrill of <br>
                    travel, and the splendor of our planet, all in harmony with nature.
                </p>
            </div>
            <div class="image_wrapper">
                <div class="omh_imgs">
                    <div class="omh_img">
                        <img src="images/hp_img/img1.jpg" alt="Horizontaal1">
                    </div>
                    <div class="omh_img">
                        <img src="images/hp_img/img2.jpg" alt="Horizontaal2">
                    </div>
                </div>
                <div class="omv_img">
                    <img src="images/hp_img/img3.jpg" alt="Verticaal1">
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p class="text">Copyright &copy; 2023 by
        <a href="https://www.linkedin.com/in/michael-pas-5105711b0" target="_blank">Michael Pas</a>
        <span>|</span>
        <a href="privacy_policy.php">Privacy Policy</a>
        <span>|</span>
        <a href="terms_of_use.php">Terms of use</a>
        </p>
    </footer>
</body>
</html>