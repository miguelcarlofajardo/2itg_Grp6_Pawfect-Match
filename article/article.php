<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawfect Match | Articles</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/article.css">
    <link rel="shortcut icon" href="../home/img/PM-icon.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@700&family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400&family=Merriweather:wght@300&family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
<!--navbar-->
<?php require_once "../components/navbar.php"; ?>

<!--body-->
<section id="articles" class="section-padding">
    <div class="radio-switch">
        <label class="radio-switch__label radio-switch__label--selected">
        <input type="radio" class="radio-switch__input" id="toggleBtn" />
        Article
        </label>
        Video
    </div>


    <div class="col-12 text-center">
        <h1> How to take care of your new pet? </h1>
        <h2>Articles</h2>
        <br></br>
            <div class="container-article">
            <div class="text"> 
                <img src="./images/article-image-1.png" alt="">
                <h3> Everything a First-Time Dog Owner Should Know </h3> 
                <h6> Published on September 23, 2022 by Jackie Brown</h6>
                    <p>
                    If you’re embarking on the journey to dog ownership for the first time, you probably have a lot of questions. Doing a bit of homework and research before choosing a dog can help you make a great match, and understanding how to be a responsible dog owner will allow you and your new dog to share many years of happy companionship.     
                        <a href="https://www.thesprucepets.com/everything-a-first-time-dog-owner-should-know-5667284" target="_blank" class="link"><u>Know more!</u></a>
                    </p>
                </div>
            </div>
        </div>
    <br>
    <div class="col-12 text-center">
        <div class="container-article">
            <div class="text"> 
                <img src="./images/article-image-2.png" alt="">
                <h3> 10 Responsible Pet Care Tips </h3> 
                <h6> Published on August 2, 2018 by  Christine O'Brien </h6>
                    <p>
                    As a pet parent you want to do everything you can to care for your pet; this involves regular, everyday activities to ensure they stay happy and healthy. Practice these ten responsible pet care tips year after year for a lifetime of happy and healthy cats and dogs.
                        <a href="https://www.hillspet.com/pet-care/routine-care/10-responsible-pet-care-tips?lightboxfired=true#" target="_blank" class="link"><u>Know more></u></a>
                    </p>
                </div>
            </div>
        </div>
    <br>
    <div class="col-12 text-center">
        <div class="container-article">
            <div class="text">
                <img src="./images/article-image-3.jpg" alt=""> 
                <h3> The Basic Necessities of Proper Pet Care </h3> 
                <h6> Published on January 23,2018 by The Animal Foundation </h6>
                    <p>
                    The unconditional love and joy that pets bring to our lives more than makes up for the added responsibility that comes with welcoming adding a furry child to your family. To ensure your pet’s health and happiness, following are the necessities that all responsible pet owners need to provide.
                        <a href="https://animalfoundation.com/whats-going-on/blog/basic-necessities-proper-pet-care" target="_blank" class="link"><u>Know more></u></a>
                    </p>
                </div>
            </div>
        </div>
    <br>
    <div class="col-12 text-center">
         <div class="container-article">
            <div class="text">
                <img src="./images/article-image-4.png" alt=""> 
                <h3> 18 essential tips for first-time pet owners </h3> 
                <h6> Updated on April 19, 2023 by Amy McCarthy </h6>
                    <p>
                        Getting a new pet is a seriously exciting time, but it's also fraught with tons of questions — especially if you've never owned a dog or cat before. Preparing a little in advance will help ensure that you and your new pet can enjoy a comfortable, stress-free time, even when you're in the midst of potty training and teaching them how to sit.
                        <a href="https://www.yardbarker.com/lifestyle/articles/18_essential_tips_for_first_time_pet_owners/s1__35769011#slide_4" target="_blank" class="link"><u>Know more></u></a>
                    </p>
                </div>
             </div>
        </div>
    <br>
    <div class="col-12 text-center">
        <div class="container-article">
            <div class="text">
                <img src="./images/article-image-5.png" alt=""> 
                <h3> The Basic Necessities of Proper Pet Care </h3> 
                <h6> Puslished by Tuft + Paw </h6>
                    <p>
                        For this guide, we sat down with Feline Behavior Expert Marci Koski to figure out exactly how to tell the difference between a cat that’s anxious, fearful, or angry and one that’s friendly and comfortable. We’ll also share some fun stories that will help you understand some common cat body language quirks.
                        <a href="https://www.tuftandpaw.com/blogs/cat-guides/the-definitive-guide-to-cat-behavior-and-body-language" target="_blank" class="link"><u>Know more></u></a>
                    </p>
                </div>
            </div>
        </div>

<!--footer-->
<?php require_once "../components/footer.php"; ?>

<script>
    function togglePages() {
  var currentPage = window.location.pathname;
  if (currentPage == '/2itg_Grp6_Pawfect-Match/article/article.php') {
    window.location.href = '/2itg_Grp6_Pawfect-Match/article/video.php';
  } else {
    window.location.href = '/2itg_Grp6_Pawfect-Match/article/article.php';
  }
}

var toggleBtn = document.getElementById('toggleBtn');
toggleBtn.addEventListener('click', togglePages);
</script>


</body>

</html>