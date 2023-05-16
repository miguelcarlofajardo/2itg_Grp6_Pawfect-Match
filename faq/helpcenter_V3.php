<!DOCTYPE html>
<html>
<head>
    <title>Pawfect Match FAQ</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container{
            align-items: center;
            justify-content: center;
            align-items: center;
        }
        h1 {
            color: #234F1E;
            text-align: center;
            margin-top: 50px;
        }
        .accordion-container{
            width: 100%;
            height: 100%;
            align-items: center;
            justify-content: center;
            align-items: center;
        }

        .accordion {
            background-color:#EC9706;;
            color: #fff;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 18px;
            transition: 0.4s;
            border-radius: 10px;
            margin: 10px 0;
            font-size: 25px;
        }

        .accordion.active, .accordion:hover {
            background-color: #2a4d10;
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: #ffffff;
            overflow: hidden;
            border-radius: 0 0 10px 10px;
        }

        .panel p {
            margin: 0;
            padding: 10px;
        }

        #pet-logo {
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body> 
<br><br><br>

<div class="container">
<h1>Frequently Asked Questions</h1>

<div class="accordion-container">
    <button class="accordion">How do I adopt a pet?</button>
    <div class="panel">
        <p>We made it simple for you! To adopt a pet, just visit our adoption page and browse through the available pets. Once you find the pet you are interested in, fill out an adoption application form. After which, one of our adoption coordinators will contact you to schedule a meeting with your furrever buddy.</p>
    </div>

    <button class="accordion">How much are the adoption fees?</button>
    <div class="panel">
        <p>Our adoption fees vary depending on the type of pet and their age. You can find our current adoption fees on our adoption page.</p>
    </div>

    <button class="accordion">Are your pets spayed/neutered?</button>
    <div class="panel">
        <p>Yes, all of our pets are spayed or neutered before they are available for adoption.</p>
    </div>

    <button class="accordion">Do you have any requirements for adopting a pet?</button>
    <div class="panel">
        <p>Yes, we do have requirements for adopting a pet. 
            <br> 1.) You must be at least 18 years old.
            <br> 2.) A valid ID must be presented.
            <br> 3.) If you rent your home, you must have permission from your landlord regarding living with a pet. 
            <br> 4.) Additionally, we will be requiring a home visit before finalizing the adoption to ensure that the pet will be in a safe and secure environment.</p>
    </div>

    <button class="accordion">Can I return a pet if it doesn't work out?</button>
        <div class="panel">
            <p> We do understand that sometimes things don't work out. We will take back a pet if needed. Please contact us as soon as possible if you need to return a pet, and we will work with you to find a solution.</p>
        </div>

        <button class="accordion">Can I volunteer to help with the pets?</button>
        <div class="panel">
            <p>Absolutely! We are constantly looking for volunteers to help with our pets. Please visit our volunteer page for more information on how to get involved. You can also message us in our social media pages!</p>
        </div>

        <button class="accordion">How can I make a donation to support your organization?</button>
        <div class="panel">
            <p>We greatly appreciate any donations to help support our organization and the pets we care for. You may message us directly on our social media pages for more details.</p>
        </div>
</div>
</div>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>
</body>
</html>
