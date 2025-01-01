<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/zodiak.css" />
    <link rel="stylesheet" href="css/plus-jakarta-sans.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    
    <link rel="stylesheet" href="css/styles.css" />
    <title>FACILITIES</title>
</head>

<body>
    
    <header class="header" id="home">
        <div class="section__container header__container">
            <div class="header__content">
                <h1 class="section__header">
                    Facilities
                </h1>
            </div>
        </div>
    </header>

    <section class="about">
        <div class="section__container about__container">


            <div class="about__image about__image-1" id="about">
                <img src="{{ asset('images/pool.jpg') }}" alt="about" />
            </div>
            <div class="about__content about__content-1">
                <h3 class="section__subheader">Swimming Pool</h3>
                <h2 class="section__header">Swim in Style</h2>
                <p>
                    An outdoor pool offering stunning views, a refreshing ambiance, and modern facilities to ensure a
                    delightful swimming experience for guests of all ages.
                </p>
                <div class="about__btn">
                    <a href="#">
                        Read more
                        <span><i class="ri-arrow-right-line"></i></span>
                    </a>
                </div>
            </div>


            <div class="about__image about__image-2" id="equipment">
                <img src="images/rest-transformed.jpeg" alt="about" />
            </div>
            <div class="about__content about__content-2">
                <h3 class="section__subheader">Restaurant</h3>
                <h2 class="section__header">Breakfast like a Champion</h2>
                <p>
                    Savor a delightful selection of freshly prepared breakfast dishes, from international classics to
                    local favorites, served in a warm and inviting ambiance </p>
                <div class="about__btn">
                    <a href="#">
                        Explore Menu
                        <span><i class="ri-arrow-right-line"></i></span>
                    </a>
                </div>
            </div>


            <div class="about__image about__image-3" id="blog">
                <img src="images/gim-transformed.jpg" alt="about" />
            </div>
            <div class="about__content about__content-3">
                <h3 class="section__subheader">Your Fitness Haven</h3>
                <h2 class="section__header">Stay Fit, Stay Strong</h2>
                <p>
                    Keep up with your fitness routine in our fully equipped gym, featuring modern machines and a
                    dedicated space for strength and cardio training to ensure you stay energized during your stay. </p>
                <div class="about__btn">
                    <a href="#">
                        See Details
                        <span><i class="ri-arrow-right-line"></i></span>
                    </a>
                </div>
            </div>


            <div class="about__image about__image-4" id="new-equipment">
                <img src="images/parking2.jpg  " alt="about" />
            </div>
            <div class="about__content about__content-4">
                <h3 class="section__subheader">Effortless Access</h3>
                <h2 class="section__header">Secure Free Parking</h2>
                <p>
                    Take advantage of our free parking facilities, equipped with round-the-clock security and easy
                    access, ensuring peace of mind throughout your stay </p>
                <div class="about__btn">
                    <a href="#">
                        Read more
                        <span><i class="ri-arrow-right-line"></i></span>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/main.js"></script>
</body>
<footer>

    <!-- Footer Section -->
    <div class="footer">
        <!-- Contact Info -->
        <div class="contact-info">
            <h2>CONTACT US</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mattis consectetur dignissim.</p>
            <p><strong>Address:</strong> Jl. MH. Thamrin No.2, Pinang, Kota Tangerang, Banten 15143</p>
            <p><strong>Phone:</strong> <a href="tel:+62812381238">0812381238</a></p>
            <p><strong>Email:</strong> <a href="mailto:GreatWestern@gmail.com">GreatWestern@gmail.com</a></p>

            <!-- Social Media Icons -->
            <div class="social-icons">
                <a href="https://wa.me/628214507010" target="_blank" title="WhatsApp">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="24" height="24">
                </a>
                <a href="https://instagram.com/great_western_resort" target="_blank" class="instagram" title="Instagram">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" width="24" height="24">
                </a>
                
            </div>
        </div>

        <!-- Map -->
        <div class="map">
            <h3>Find Us on the Map</h3>
            <!-- Google Maps Embed iframe -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.319589913427!2d106.63042177475059!3d-6.221522193766523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fecae24a2a1b%3A0x17f02a0bd3c70cc0!2sGreat%20Western%20Resort!5e0!3m2!1sid!2sid!4v1733743664435!5m2!1sid!2sid" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

</footer>


</html>
