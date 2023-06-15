<?php
session_start()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gelre Airport - Login</title>

    <link rel="stylesheet" href="css\login.css">
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
    <div class="login-layout">
        <div class="rectangle">
            <div class="Sign-in_container">
                <h1>Sign in</h1>
                <br>
                <br>
                <h3>New user? <a href="/sign-up.html">Create an account</a></h3>
                <br>
                <br>
                <div>
                    <label class="box-container">
                        <input type="text" name="username" placeholder="Username or e-mail">
                    </label>
                </div>
                <br>
                <br>
                <div>
                    <label class="box-container">
                        <input type="text" name="password" placeholder="Password">
                    </label>
                </div>
                <br>
                <br>
                <div>
                    <label class="s-sign-in">
                        <input type="checkbox" class="checkbox" name="sign-sign-in">
                        <label>Keep me signed in</label>
                    </label>
                </div>
                <br>
                <br>
                <div class="Sign-in-button">
                    <button class="button">Sign in</button>
                </div>
            </div>
        </div>
        <div>
            <img src="images/background/Sign_in.jpg" alt="Sign in" class="Sign-in">
        </div>
    </div>
    <div>
        <label class="emp-sign-in">
            <input type="checkbox" class="emp-checkbox" name="emp-sign-in">
            <label>Employee</label>
        </label>
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