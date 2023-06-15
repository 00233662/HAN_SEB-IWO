<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gelre Airport - Sign-up</title>

    <link rel="stylesheet" href="css\sign-up.css">
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
    <div class="sign-up-layout">
        <div class="rectangle">
            <div class="Sign-up_container">
                <h1>Sign up</h1>
                <br>
                <br>
                <h3>Already a user? <a href="login.php">Sign in</a></h3>
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
                        <input type="text" name="username" placeholder="Username or e-mail">
                    </label>
                </div>
                <div>
                    <label class="box-container">
                        <input type="text" name="password" placeholder="Password">
                    </label>
                </div>
                <br>

                <div>
                    <p class="accepting-tou-pp">
                        By clicking Create Account, you acknowledge you have read and <br>
                        agreed to our <a href="terms_of_use.php">Terms of use</a> and <a href="privacy_policy.php">Privacy Policy</a>.
                    </p>
                </div>

                <div class="Sign-up-button">
                    <button class="button">Create account</button>
                </div>
            </div>
        </div>
        <div>
            <img src="images/background/Sign_up.jpg" alt="Sign up" class="Sign-up">
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