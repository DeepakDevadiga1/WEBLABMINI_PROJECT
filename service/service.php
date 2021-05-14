<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
            max-width: 80%;
            max-height: 50%;
            position: relative;
            margin: auto;
        }

        .slider{height:400px;}
        .slider li{height: 400px;}


        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
        }
        .t1{
            background-color: white;
            color: #236e2b;
            margin-top: 5%;
            margin-left: 10%;
            margin-right: 10%;
            font-family: sans-serif;
            size: 18px;
        }
        .t2{
            background-color: white;
            color: #236e2b;
            margin-left: 10%;
            margin-right: 10%;
            font-family: sans-serif;
            size: 18px;
        }
        h1{
            color: #084708;
            margin-left: 20%;
        }
    </style>
</head>
<body>

<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext">1 / 4</div>
        <img src="../Services/images/packing.jpg" height="400" width="1600" style="width:100%">
        <div class="text">Packing</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 4</div>
        <img src="../Services/images/I2.jpg" height="400" width="1600" style="width:100%">
        <div class="text">Handled with Care</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 4</div>
        <img src="../Services/images/I1.jpg" height="400" width="1600" style="width:100%">
        <div class="text">Safe Tranpostation</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">4 / 4</div>
        <img src="../Services/images/I4.jpg" height="400" width="1600" style="width:100%">
        <div class="text">Delivered Safetly</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
</div>

<div>
    <p class="t1">
        City transist is a web application through which users can make use of courier services. Courier services are a more specialized delivery service that businesses and individuals turn to when they need a package or a document to reach its destination quickly. It involves a person or a company engaged in transporting, dispatching and distributing letters, parcels and mails. A courier is much faster, safer and secured than ordinary mail. It is specialized service with authenticated signature. It has tracking services with each service being treated as a specific individual case.
    </p>
</div>
<br/>
<div>
    <p class="t2">
        This service is customized for SMEs and individuals having smaller loads to be shipped anywhere in the particular region and it is proposed for Mangalore region in specific.These could be small business shipments, samples, promotional items or even personal goods and gifts for family and friends. The service is ideal for movement of products not having industrial packing. Through this application user can book for a service and can also know about various services available and the cost of service for a particular type of service.
    </p>
</div>

<h1>"We Are Aiming To Put Smile On Peoples' Face"</h1>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>

</body>
</html>