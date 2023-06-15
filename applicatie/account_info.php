<?php
session_start()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gelre Airport - Account information</title>

    <link rel="stylesheet" href="css\account_info.css">
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
    <div class="acc-info-layout">
        <div class="rectangle">
            <div class="account-info-container">
                <h2>Account information</h2>
                <br>
                <br>
                <div>
                    <label class="n-box-container">
                        <input type="text" name="First name" placeholder="First name">
                    </label>
                    <label class="n-box-container">
                        <input type="text" name="Last name" placeholder="Last name">
                    </label>
                </div>
                <div>
                    <label class="box-container">
                        <input type="text" name="E-mail" placeholder="E-mail">
                    </label>
                </div>
                <div>
                    <label class="box-container">
                        <input placeholder="Date of birth" type="text" onfocus="(type = 'date')">
                    </label>
                </div>
                <div>
                    <label class="box-container">
                        <input type="tel" name="telephone" placeholder="+31 6 123 45 678">
                    </label>
                </div>
                <div>
                    <label class="box-container">
                        <input type="text" name="address" placeholder="Address">
                    </label>
                </div>
                <div class="save-info">
                    <button class="button">Save</button>
                </div>
            </div>
        </div>
        <div>
            <img src="images/background/Account_details.jpg" alt="account details" class="account-details">
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