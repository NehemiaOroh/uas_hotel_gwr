<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms Hotel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Import custom fonts */
     @font-face {
        font-family: Zodiak-Black;
        src: url(Zodiak-Bold.otf);
        }

@font-face {
    font-family: PlusJakarta;
    src: url(PlusJakartaSans-Regular.otf);
}
        body {
            font-family: 'PlusJakarta';
            background-color: #181818; /* Gold color */
    color: #333;
        }

        h1, h2, h3 {
            font-family: 'Zodiak-Black';
        }

        header {
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 120px;
    z-index: 100;
    transition: all 0.5s;
    text-decoration: none;
}

.header h1 {
    font-family: Sans-Bold;
}

/* Flex container to center the links and keep login/register on the right */
.navigation_ {
    margin-left: -100px;
    margin-right: -280px;
    display: flex;
    justify-content: center;
    flex-grow: 1; /* Allows the center section to grow and center the content */
}

.navigation_ a {
    color: #C59D63;
    font-family: SemiBold;
    font-size: 30px;
    text-decoration: none; /* Remove default underline */
    padding: 6px 80px;
    position: relative; /* Required for positioning the ::after element */
    transition: 0.4s;
}

.navigation_ img{
    margin-right: 45px;
    margin-left: 60px;
}

/* Add an underline effect on hover */


.navigation_ a:hover::after {
    width: 100%; /* Expand underline to full width on hover */
    left: 0; /* Start the underline from the left on hover */
}


.navigation_-buttons {
    display: flex;
    gap: 10px; /* Space between login and register buttons */
}

.button {
    text-decoration: none;
    font-family: SemiBold;
    color: #C59D63;
    border: 2px solid #C59D63;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 15px;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.button:hover {
    background-color: #C59D63;
    color: white;
}

.button2 {
    font-family: SemiBold;
    text-decoration: none;
    background-color: #C59D63;
    color: black;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 15px;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;
}

        .scroll-container {
            scroll-snap-type: y mandatory;
            overflow-y: scroll;
            height: 100vh; 
            scrollbar-width: none; 
            -ms-overflow-style: none; 
        }
        .scroll-container::-webkit-scrollbar {
            display: none; 
        }
        .scroll-item {
            scroll-snap-align: start;
            height: 100vh; 
            display: flex;
            align-items: center;
            justify-content: center;
        }
        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
    
            justify-content: center;
            align-items: center;
            z-index: 50;
        }
        .modal.active {
            display: flex;
        }
        .modal-content {
            background: #1e1e1e;
            padding: 30px;
            border-radius: 12px;
            max-width: 600px;
            width: 90%;
            text-align: center;
            animation: fadeInScale 0.3s ease-in-out;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
        }
        .modal-content img {
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .modal-content h3 {
            margin-bottom: 16px;
            color: #c59d63;
        }
        .modal-content p {
            margin-bottom: 16px;
            color: #cbd5e0;
        }
        .modal-content ul {
            margin-bottom: 20px;
            text-align: left;
            padding-left: 20px;
            color: #a0aec0;
        }
        .modal-content ul li {
            margin-bottom: 8px;
            list-style: disc;
        }
        .modal-close {
            position: absolute;
            top: 16px;
            right: 16px;
            background: #ef4444;
            color: white;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: background 0.2s ease-in-out;
        }
        .modal-close:hover {
            background: #dc2626;
        }
         {
            background-color: #1e1e1e;
        }
        .text-yellow-500 {
            color: #c59d63;
        }
        .bg-yellow-500 {
            background-color: #c59d63;
        }
        .border-yellow-500 {
            border-color: #c59d63;
        }
        .bg-yellow-500:hover {
            background-color: #b28a56;
        }
        .text-yellow-500:hover {
            color: #b28a56;
        }
        .footer {
    font-family:Zodiak-Black;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 40px 80px;
    background-color: #1c1c1c;
    color: #fff;
    font-size: 16px;
    flex-wrap: wrap;
}

/* Contact Info */
.contact-info {
    width: 40%;
}

.contact-info h2, .contact-info p {
    margin: 10px 0;
}

.contact-info a {
    color: #fff;
    text-decoration: none;
}

.contact-info a:hover {
    text-decoration: underline;
}

/* Map */
.map {
    width: 50%;
}

iframe {
    width: 100%;
    height: 300px;
    border: 0;
}

/* Social Media Icons */
.social-icons {
    display: flex;
    gap: 20px;
    margin-top: 20px;
}

.social-icons a {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #25D366; /* WhatsApp Green */
    border-radius: 50%;
    width: 50px;
    height: 50px;
    color: white;
    font-size: 20px;
    text-decoration: none;
}

.social-icons a.instagram {
    background-color: #E4405F; /* Instagram Pink */
}

.social-icons a.youtube {
    background-color: #FF0000; /* YouTube Red */
}

/* Responsive Design */
@media (max-width: 768px) {
    .footer {
        flex-direction: column;
        align-items: center;
    }

    .contact-info, .map {
        width: 100%;
        text-align: center;
    }
}

    </style>
</head>
<body class= "text-gray-100">

<header class="header" style="margin-top: 10px;">
    <nav class="navigation_">
        <a href="index.php">Home</a>
        <a href="/pagerooms">Rooms</a>
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-[50px]">
        <a href="events.php">Events</a>
        <a href="/facilities">Facilities</a>
    </nav>
    
    <div class="navigation_-buttons">
            <a href="login" class="button">Login</a>
            <a href="register" class="button2">Register</a>
    </div>
</header>

    <!-- div Section -->
    <div class="h-screen flex flex-col items-center justify-center text-center px-6">
        <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">Home Away From Home</h1>
        <p class="text-base sm:text-lg font-medium text-gray-300">Free WiFi • Premium Room Service • Free Gym Access</p>
    </div>

    <!-- Rooms Section -->
    <div class="scroll-container">

        <!-- Standard Room -->
        <div class="scroll-item flex flex-col lg:flex-row items-center gap-6 px-4 md:px-12">
            <div class="w-full lg:w-1/2 overflow-hidden">
                <img src="{{ asset('images/gambar_kamar.jpeg') }}" alt="Standard Room" class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <h3 class="text-3xl font-bold mb-4 text-white">Standard Room</h3>
                <p class="text-gray-300 mb-4">Kamar yang nyaman untuk dua orang, dilengkapi dengan fasilitas dasar yang memadai untuk pengalaman menginap yang menyenangkan.</p>
                <ul class="text-sm text-gray-400 mb-6">
                    <li>✔ 22m²</li>
                    <li>✔ 2 Adults</li>
                    <li>✔ 180x200cm Bed</li>
                    <li>✔ Shower</li>
                </ul>
                <div class="flex flex-wrap justify-center lg:justify-start gap-4">
                    <button class="bg-yellow-500 text-black px-6 py-3 rounded font-medium w-full md:w-1/2 hover:bg-yellow-400 transition-all duration-300">Book Now</button>
                    <button onclick="openModal('modal-standard')" class="border border-yellow-500 text-yellow-500 px-6 py-3 rounded font-medium w-full md:w-1/2 hover:bg-yellow-500 hover:text-black transition-all duration-300">Details</button>
                </div>
            </div>
        </div>

        <!-- Modal for Standard Room -->
        <div id="modal-standard" class="modal">
            <div class="modal-content">
                <div class="modal-close" onclick="closeModal('modal-standard')">✕</div>
                <img src="{{ asset('images/gambar_kamar.jpeg') }}" alt="Standard Room" class="w-full">
                <h3 class="text-2xl font-bold">Standard Room Details</h3>
                <p>Standard Room menawarkan kenyamanan maksimal untuk dua orang, dengan fasilitas seperti:</p>
                <ul>
                    <li>Free WiFi</li>
                    <li>Air Conditioning</li>
                    <li>Flat Screen TV</li>
                    <li>Mini Bar</li>
                </ul>
                <button onclick="closeModal('modal-standard')" class="bg-yellow-500 text-black px-6 py-2 rounded font-medium hover:bg-yellow-400 transition-all duration-300">Close</button>
            </div>
        </div>

        <!-- Deluxe Room -->
        <div class="scroll-item flex flex-col lg:flex-row-reverse items-center gap-6 px-4 md:px-12" style="background-color:#1c1c1c;">
            <div class="w-full lg:w-1/2 overflow-hidden">
                <img src="{{ asset('images/gambar_kamar2.jpeg') }}" alt="Deluxe Room" class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <h3 class="text-3xl font-bold mb-4 text-white">Deluxe Room</h3>
                <p class="text-gray-300 mb-4">Ruangan lebih luas dengan fasilitas tambahan seperti bathtub dan pemandangan kota untuk kenyamanan maksimal.</p>
                <ul class="text-sm text-gray-400 mb-6">
                    <li>✔ 35m²</li>
                    <li>✔ 3 Adults</li>
                    <li>✔ 200x200cm Bed</li>
                    <li>✔ Bathtub</li>
                </ul>
                <div class="flex flex-wrap justify-center lg:justify-start gap-4">
                    <button class="bg-yellow-500 text-black px-6 py-3 rounded font-medium w-full md:w-1/2 hover:bg-yellow-400 transition-all duration-300">Book Now</button>
                    <button onclick="openModal('modal-deluxe')" class="border border-yellow-500 text-yellow-500 px-6 py-3 rounded font-medium w-full md:w-1/2 hover:bg-yellow-500 hover:text-black transition-all duration-300">Details</button>
                </div>
            </div>
        </div>

        <!-- Modal for Deluxe Room -->
        <div id="modal-deluxe" class="modal">
            <div class="modal-content">
                <div class="modal-close" onclick="closeModal('modal-deluxe')">✕</div>
                <img src="{{ asset('images/gambar_kamar2.jpeg') }}" alt="Deluxe Room" class="w-full">
                <h3 class="text-2xl font-bold">Deluxe Room Details</h3>
                <p>Deluxe Room hadir dengan kenyamanan ekstra dan fasilitas seperti:</p>
                <ul>
                    <li>Sea View</li>
                    <li>Complimentary Breakfast</li>
                    <li>Access to Swimming Pool</li>
                    <li>Free Airport Shuttle</li>
                </ul>
                <button onclick="closeModal('modal-deluxe')" class="bg-yellow-500 text-black px-6 py-2 rounded font-medium hover:bg-yellow-400 transition-all duration-300">Close</button>
            </div>
        </div>

        <!-- Premium Suite -->
        <div class="scroll-item flex flex-col lg:flex-row items-center gap-6 px-4 md:px-12">
            <div class="w-full lg:w-1/2 overflow-hidden">
                <img src="{{ asset('images/gambar_kamar3.jpeg') }}" alt="Premium Suite" class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <h3 class="text-3xl font-bold mb-4 text-white">Premium Suite</h3>
                <p class="text-gray-300 mb-4">Suite mewah dengan pemandangan eksklusif, balkon pribadi, dan jacuzzi untuk pengalaman menginap yang tiada duanya.</p>
                <ul class="text-sm text-gray-400 mb-6">
                    <li>✔ 50m²</li>
                    <li>✔ 4 Adults</li>
                    <li>✔ King-size Bed</li>
                    <li>✔ Balcony & Jacuzzi</li>
                </ul>
                <div class="flex flex-wrap justify-center lg:justify-start gap-4">
                    <button class="bg-yellow-500 text-black px-6 py-3 rounded font-medium w-full md:w-1/2 hover:bg-yellow-400 transition-all duration-300">Book Now</button>
                    <button onclick="openModal('modal-premium')" class="border border-yellow-500 text-yellow-500 px-6 py-3 rounded font-medium w-full md:w-1/2 hover:bg-yellow-500 hover:text-black transition-all duration-300">Details</button>
                </div>
            </div>
        </div>

        <!-- Modal for Premium Suite -->
        <div id="modal-premium" class="modal">
            <div class="modal-content">
                <div class="modal-close" onclick="closeModal('modal-premium')">✕</div>
                <img src="{{ asset('images/gambar_kamar3.jpeg') }}" alt="Premium Suite" class="w-full">
                <h3 class="text-2xl font-bold">Premium Suite Details</h3>
                <p>Premium Suite hadir dengan fasilitas eksklusif seperti:</p>
                <ul>
                    <li>Private Butler Service</li>
                    <li>Exclusive Lounge Access</li>
                    <li>Complimentary Spa Treatment</li>
                    <li>Personalized Check-in</li>
                </ul>
                <button onclick="closeModal('modal-premium')" class="bg-yellow-500 text-black px-6 py-2 rounded font-medium hover:bg-yellow-400 transition-all duration-300">Close</button>
            </div>
        </div>

    </div>

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


    <!-- JavaScript for Modal -->
    <script>
        function openModal(modalID) {
            const modal = document.getElementById(modalID);
            modal.classList.add('active');
        }

        function closeModal(modalID) {
            const modal = document.getElementById(modalID);
            modal.classList.remove('active');
        }
    </script>
</body>
</html>
