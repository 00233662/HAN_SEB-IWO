<?php
session_start()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gelre Airport - Home</title>

    <link rel="stylesheet" href="css\index.css">
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
    <h1 class="titel_text">Fly with a smile</h1>
    <div>
        <div class="rectangle">
            <div class="titel_flight">
                <h1>Search a flight</h1>
            </div>
            <div class="switch-container">
                <p class="text">One-way</p>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <p class="text">Round trip</p>
                <div class="box-container">
                    <label class="d-box">
                        <input type="text" name="dep-from" placeholder="Departing from *">
                    </label>
                    <label class="f-box">
                        <input type="text" name="dep-from" placeholder="Arriving at *">
                    </label>
                </div>
            </div>
            <div class="b-box-container">
                <label class="dep-day">
                    <input placeholder="Departing date" type="text" onfocus="(type = 'date')">
                </label>
                <label class="drop-down">
                    <select class="adults">
                        <option value="">Adults</option>
                        <option value="0">0 adults</option>
                        <option value="1">1 adult</option>
                        <option value="2">2 adults</option>
                        <option value="3">3 adults</option>
                        <option value="4">4 adults</option>
                        <option value="5">5 adults</option>
                        <option value="6">6 adults</option>
                        <option value="7">7 adults</option>
                        <option value="8">8 adults</option>
                        <option value="9">9 adults</option>
                    </select>
                </label>
                <label class="drop-down">
                    <select class="children">
                        <option value="">Children</option>
                        <option value="0">0 children</option>
                        <option value="1">1 child</option>
                        <option value="2">2 children</option>
                        <option value="3">3 children</option>
                        <option value="4">4 children</option>
                        <option value="5">5 children</option>
                        <option value="6">6 children</option>
                        <option value="7">7 children</option>
                        <option value="8">8 children</option>
                        <option value="9">9 children</option>
                    </select>
                </label>
                <label class="drop-down">
                    <select class="flight-class">
                        <option value="Economy">Economy class</option>
                        <option value="Premium">Premium class</option>
                        <option value="Business">Business class</option>
                    </select>
                </label>
            </div>
        </div>
    </div>
    <div class="more-flights">
        <button class="more" onclick="window.location.href='flight-overview.php';">
            <i>All flights</i>
        </button>
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