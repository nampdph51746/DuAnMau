<div class="row mb footer">
    <img src="upload/logo.png" height="130px" width="130px" style="margin-left: 30px; margin-top: 30px">
    <img src="upload/logo_2.png" height="130px" width="300px" style="margin-left: 30px; margin-top: 30px">
    <img src="upload/logo_3.png" height="130px" width="130px" style="margin-left: 30px; margin-top: 30px">
    <p>DREDGE © 2024 Black Salt Games Limited. <br> Published under licence by Team17 Digital Limited.</p>
</div>
</div>
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
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
</body>

</html>