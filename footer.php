<style>
    @import url('https://fonts.googleapis.com/css2?family=Dongle:wght@700&display=swap');
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
    font-family: 'Dongle', sans-serif;
    font-size: xx-large;
}
.footer{
	background-color: #24262b;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #000;
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
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
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
	height: 40px;
	width: 40px;
	background-color: rgba(88, 132, 159, 0.67);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #000;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #fff;
	background-color: #24262b;
}
</style>
<footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
              <h4>About Us</h4>
              <p class="about">
            A.R.K.: Always Remember our King is a Christian website focused on community, 
            kindness, and reflecting Christ's teachings in our daily lives. <br>
            A.R.K. aims to create a space where individuals can declare their 
            fiat and remember their King.
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