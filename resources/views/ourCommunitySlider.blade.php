<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <div class="numbertext">1 / 4</div>
        <img src="https://assets-global.website-files.com/62d964a7de0430c6f4c45556/62e164d7ff091ae19393b01f_MG2_3238%20(1).jpeg"
            style="width:100%">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 4</div>
        <img src="https://www.coinstreet.org/sites/default/files/styles/banner_image/public/2023-06/Colombo%20centre%20gym%20weights.jpg?itok=Fh89o5ZM"
            style="width:100%">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 4</div>
        <img src="https://prod-ne-cdn-media.puregym.com/media/823924/the-best-gym-cardio-workouts_blogheader-notitle.jpg?quality=80"
            style="width:100%">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">4 / 4</div>
        <img src="https://21614986.fs1.hubspotusercontent-na1.net/hubfs/21614986/2024%20BFT%20Website%20Images%20Resized/bft-2.webp"
            style="width:100%">
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
