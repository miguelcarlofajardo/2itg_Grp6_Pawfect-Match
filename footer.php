<style>
    @import url('https://fonts.googleapis.com/css2?family=Dongle:wght@700&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
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
    --text-color: #f19c24;
    --main-color: #222327;
}
body{
    min-height: 100vh;
    background-color: var(--bg-color);
    color: var(--text-color);
    padding-bottom: 50px;
}
    /*Footer*/
footer {
    background-image: url("../img/thyFooter-1.png ");
    background-size: cover;
    background-position: center;
    padding-top: 100px;
    margin-top: 100px;
    margin-bottom: -50px;
    color: #fff;
}
.container{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.about{
    font-family: 'Josefin Sans', sans-serif;
    font-size: large;
}
.footer{
	background-color: #2a4d50;
    padding: 70px 0;
}
.footer-p{
	color: #fff;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 50px;
	color: #fff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #BB6b24;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #000;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 50px;
	width: 50px;
	background-color: #f19c24;
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 65px;
	border-radius: 70%;
	color: #2a4d50;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #ffffec;
	background-color: #f19c24;
}
</style>
<footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
              <h4>About Us</h4>
              <p class="about">
            Pawfect Match
          </p>
          </div>
          <!--Footer Social Media-->
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="https://www.facebook.com/permalink.php?story_fbid=pfbid0HmX1jyhrrswiTaVwnpranrkCSg5jU22DPukiJDSyXfAeSUZXTqK9zuJ5EJsisdA4l&id=100090756704795"><i class="fab fa-facebook-f"></i></a>
              <a href="https://twitter.com/ARKphOfficial/status/1632250740302397441/photo/1"><i class="fab fa-twitter"></i></a>
              <a href="https://www.instagram.com/p/CpZTsQoBAJJ/?utm_source=ig_web_copy_link"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
   </footer>