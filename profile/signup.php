<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="shortcut icon" href="../home/img/PM-icon.png">
    <title>Sign Up to Pawfect Match</title>
</head>
<body>
<header>
        <a href="#" class="logo">
            <img src="../home/img/PM-transparent green-logo.png" alt="Pawfect Match Logo" class="Logo" width="125" height="125">
            <span class="brand-name">Pawfect Match</span>
        </a>
       
        <ul class="navbar">
            <li><a href="../home/index.php">Home</a></li>
            <li><a href="../about/ourstory.php">Our Story</a></li>
            <li><a href="../gallery/petlist.php">Meet Your Furbaby</a></li>
            <li><a href="../article/article.php">Help</a></li>
            <button class="profile" onclick="redirectToHome()" style="width:auto;">
                Profile
                <div class="arrow-wrapper">
                    <div class="arrow"></div>
                </div>
            </button>
        </ul>

        <div class="bx bx-menu" id="menu-icon"></div>
</header>
<br><br><br>
<div class="container">
    <form class="form" action="../signuppw/authenticates.php" method="POST">
        <p id="heading">Sign Up</p>
            <div class="field">
                <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"></path>
                </svg>
                <input autocomplete="off" placeholder="Username" class="input-field" type="text" name="username">
            </div>
            <div class="field">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M13.402 3H2.598C1.717 3 1 3.716 1 4.598v6.805c0 .881.717 1.598 1.598 1.598h10.804c.881 0 1.598-.717 1.598-1.598V4.598C15 3.716 14.283 3 13.402 3zM14 4.598c0-.225-.183-.408-.402-.408H2.598c-.219 0-.402.183-.402.408v6.805c0 .225.183.408.402.408h10.804c.219 0 .402-.183.402-.408V4.598zm-8.04 1.51c.003-.167.067-.3.197-.396.13-.096.314-.144.552-.144h4.582c.238 0 .422.048.552.144.13.096.194.229.197.396l-.006 3.015-.006-.018-3.92 2.93H7.96L4.04 9.125l-.006.018-.006-3.015zm.548 3.69l2.51 1.872 2.51-1.872H5.508z"/>
                </svg>
                <input placeholder="Email" class="input-field" type="text" name="email">
            </div>
            <div class="field">
                <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                </svg>
                <input placeholder="Password" class="input-field" type="password" name="password">
            </div>
            <div class="field">
                <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                </svg>
                <input placeholder="Re-enter Password" class="input-field" type="password" name="password">
            </div>
            <div class="btn">
                <button class="button1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign Up&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                <button class="button2" onclick="redirectToLogin()">Login</button>
            </div>
                <button class="button3">Forgot Password</button>
    </form>
    </div>

<script>
function redirectToHome() {
    window.location.href = "../home/index.php";
}
function redirectToLogin() {
    window.location.href = "../profile/logindex.php";
}
</script>
</body>
</html>

