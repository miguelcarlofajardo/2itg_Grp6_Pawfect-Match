<link rel="stylesheet" href="../css/navbar.css">
<link rel="stylesheet" href="../css/login.css">
<header>
        <a href="#" class="logo">
        <a href="../home/index.php"> <img src="../home/img/PM-transparent green-logo.png" alt="Pawfect Match Logo" class="Logo" width="125" height="125"></a>
        <a href="../home/index.php"> <span class="brand-name">Pawfect Match</span> </a>
        </a>
       
        <ul class="navbar">
            <li><a href="../home/index.php">Home</a></li>
            <li><a href="../about/ourstory.php">Our Story</a></li>
            <li><a href="../gallery/petlist.php">Meet Your Furbaby</a></li>
            <li><a href="../article/article.php">Help</a></li>
            <button onclick="redirectToProfile()" style="width:auto;">
                Profile
                <div class="arrow-wrapper">
                    <div class="arrow"></div>
                </div>
            </button>
        </ul>

        <div class="bx bx-menu" id="menu-icon"></div>
<script>
function redirectToProfile() {
    window.location.href = "../profile/logindex.php";
}
</script>
</header>