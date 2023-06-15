<?php
session_start()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gelre Airport - Privacy policy</title>

    <link rel="stylesheet" href="css\privacy_policy.css">
    <link rel="stylesheet" href="css\standard webpage.css">
</head>
<body class="body">
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
        <div class="rectangle">
            <div class="pp-text">
                <h1 class="pp-header">Privacy Policy for Gelre Airport</h1>
                <br>
                <br>
                <br>
                <h3>Introduction</h3>
                <br>
                <p>
                    GelreAirport ("we", "us", "our") respects your privacy and is committed to protecting your
                    personal data. This privacy policy will inform you as to how we look after your personal
                    data when you visit our website (regardless of where you visit it from) and tell you about
                    your privacy rights and how the law protects you.
                </p>
                <br>
                <br>
                <br>
                <h3>Data We Collect</h3>
                <br>
                <p>
                    We may collect, use, store and transfer different kinds of personal data about you which we
                    have grouped together as follows:
                    <br>
                    Identity Data includes first name, last name, username or similar identifier, marital status,
                    title, date of birth and gender. Contact Data includes billing address, delivery address,
                    email address and telephone numbers. Financial Data includes bank account and payment card details.
                    How We Use Your Data
                </p>
                <br>
                <br>
                <br>
                <h3>We will only use your personal data when the law allows us to. Most commonly, we will use your
                    personal data in the following circumstances:</h3>
                <br>
                <p>
                    Where we need to perform the contract we are about to enter into or have entered into with you.
                    Where it is necessary for our legitimate interests (or those of a third party) and your interests
                    and fundamental rights do not override those interests. Where we need to comply with a legal
                    obligation.
                </p>
                <br>
                <br>
                <br>
                <h3>Sharing Your Data</h3>
                <br>
                <p>
                    We may have to share your personal data with third parties for the purposes set out in this policy.
                    We require all third parties to respect the security of your personal data and to treat it in
                    accordance with the law. We do not allow our third-party service providers to use your personal
                    data for their own purposes and only permit them to process your personal data for specified
                    purposes and in accordance with our instructions.
                </p>
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