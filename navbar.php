<style>
@import url('https://fonts.googleapis.com/css2?family=Dongle:wght@700&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Dongle', sans-serif;
    font-size: xx-large;
    text-decoration: none;
    list-style: none;
}
:root{
    --bg-color: #fff;
    --text-color: #222327;
    --main-color: #446879;
}
body{
    min-height: 100vh;
    background-color: var(--bg-color);
    color: var(--text-color);
    padding-bottom: 50px;
}

header{
    position: fixed;
    width: 100%;
    top: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 28px 12%;
    transition: all .50s ease;
    background-color: var(--text-color);
}
/*Logo & Text Property*/
.logo{
    display: flex;
    align-items: center;
    color: var(--bg-color);
    text-decoration: none;
}
.logo i{
    color: var(--main-color);
    font-size: 28px;
    margin-right: 3px;
    text-decoration: none;
}
.logo span{
    color: var(--bg-color);
    font-size: 2rem;
    font-weight: 600;
    text-decoration: none;
}
.logo span:hover{
    color: #223742;
    transition: all .50s ease;
}
/*Navbar Properties*/
.navbar{
    display: flex;
}
.navbar a{
    color: var(--bg-color);
    font-size: 1.1rem;
    font-weight: 500;
    text-decoration: none;
    padding: 5px 0;
    margin: 0px 30px;
    transition: all .50s ease;
}
.navbar a:hover{
    color: var(--main-color);
}
.navbar a:hover:active{
    color: var(--main-color);
}
#menu-icon{
    font-size: 35px;
    color: var(--bg-color);
    cursor: pointer;
    z-index: 10001;
    display: none;
}

/*Responsiveness*/
@media (max-width:1280px){
    header{
        padding: 14px 2%;
        transition: .2s;
    }
    .navbar a{
        padding: 5px 0;
        margin: 0px 20px;
    }
}
@media (max-width:1090px){
    #menu-icon{
        display: block;
    }
    .navbar{
        position: absolute;
        top: 100%;
        right: -100%;
        width: 270px;
        height: 29vh;
        background:var(--main-color);
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        border-radius: 10px;
        transition: all .50s ease;
    }
    .navbar a{
        display: block;
        margin: 12px 0;
        padding: 0px 25px;
        transition: all .50s ease;
    }
    .navbar a:hover{
        color: var(--text-color);
        transform: translateY(5px);
    }
    .navbar a:active{
        color: var(--text-color);
    }
    .navbar.open{
        right: 20%;
    }
}
</style>
<header>
        <a href="#" class="logo">
            <img src="img/thyLogo.png" alt="ARK Logo" class="Logo" width="100" height="100">
            <span>Always Remember our King</span>
        </a>
        <ul class="navbar">
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">Videos</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Blogs</a></li>
        </ul>

        <div class="bx bx-menu" id="menu-icon"></div>
</header>