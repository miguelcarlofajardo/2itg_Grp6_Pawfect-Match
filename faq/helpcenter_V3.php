<!DOCTYPE html>
<html>
<head>
    <title>Pawfect Match FAQ</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffb8d9;
        }

        h1 {
            color: #333333;
            text-align: center;
            margin-top: 50px;
        }

        .accordion {
            background-color: #ffffff;
            color: #333333;
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
        }

        .accordion.active, .accordion:hover {
            background-color: #e6e6e6;
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
    </style>
</head>
<body>
<h1>Frequently Asked Questions</h1>

<div class="accordion-container">
    <button class="accordion">How do I adopt a pet?</button>
    <div class="panel">
        <p>To adopt a pet, simply visit our adoption page and browse through the available pets. Once you find a pet you are interested in, fill out an adoption application and one of our adoption coordinators will contact you to schedule a meeting with the pet.</p>
    </div>

    <button class="accordion">What are the adoption fees?</button>
    <div class="panel">
        <p>Our adoption fees vary depending on the type of pet and their age. You can find our current adoption fees on our adoption page.</p>
    </div>

    <button class="accordion">Are your pets spayed/neutered?</button>
    <div class="panel">
        <p>Yes, all of our pets are spayed or neutered before they are available for adoption.</p>
    </div>

    <button class="accordion">Do you have any requirements for adopting a pet?</button>
    <div class="panel">
        <p>Yes, we have some requirements for adopting a pet. You must be at least 18 years old and have a valid ID. If you rent your home, you must have permission from your landlord to have a pet. Additionally, we require a home visit before finalizing the adoption to ensure that the pet will be in a safe and secure environment.</p>
    </div>

    <button class="accordion">Can I return a pet if it doesn't work out?</button>
    <div class="panel">
        <p>Yes, we understand that sometimes things don't work out and we will take back a pet if needed. Please contact us as soon as possible if you need to return a pet and we will work with you to find a solution.

        </p>
    </div>

    <button class="accordion">Can I volunteer to help with the pets?</button>
    <div class="panel">
        <p>Yes, we are always looking for volunteers to help with our pets. Please visit our volunteer page for more information on how to get <involved class=""></involved></p>
    </div>

    <button class="accordion">How can I make a donation to support your organization?</button>
    <div class="panel">
        <p>We greatly appreciate any donations to help support our organization and the pets we care for. You can make a donation on our donation page or contact us directly for other donation options.</p>
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
<header>
    <header>
        <img id="pet-logo" src="https://www.freewebheaders.com/wp-content/uploads/lovely-basset-hound-dogs-closing-the-road.jpg">\
    </header>
</html>
