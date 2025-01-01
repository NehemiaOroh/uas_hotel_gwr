<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css','resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
        <link rel="stylesheet" href="\resources\css\styles.css">


        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-1000{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-1000{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-1000{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
            </style>
        @endif
    </head>
    


    <body class="page-background">
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

<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-[100vh] overflow-hidden">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/room.jpeg') }}" class="h-[100vh] w-[100vw] object-cover">
            <div class="absolute top-0 w-full h-full bg-black opacity-50"></div>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/room.jpeg') }}" class="h-[100vh] w-[100vw] object-cover">
            <div class="absolute top-0 w-full h-full bg-black opacity-50"></div>
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/room.jpeg') }}" class="h-[100vh] w-[100vw] object-cover">
            <div class="absolute top-0 w-full h-full bg-black opacity-50"></div>
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/room.jpeg') }}" class="h-[100vh] w-[100vw] object-cover">
            <div class="absolute top-0 w-full h-full bg-black opacity-50"></div>
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/room.jpeg') }}" class="h-[100vh] w-[100vw] object-cover">
            <div class="absolute top-0 w-full h-full bg-black opacity-50"></div>
        </div>

        <!-- Heading -->
        <div class="absolute z-40 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center" style="margin-top:-110px;">
            <p style="font-family:PlusJakarta; color:white; font-size:17px; padding-bottom:20px;">Jl.MH Thamrin No.2</p>
            <h1 class="text-white text-4xl md:text-6xl  drop-shadow-lg" style=" font-family:Zodiak-Black;"> 
                GREAT WESTERN RESORT & HOTEL SERPONG
            </h1>
        </div>
    </div>

    <!-- Slider indicators -->
    <div class="absolute z-30 flex flex-col space-y-3 top-1/2 right-5 -translate-y-1/2" style="margin-top:-10vh;">
        <button type="button" class="w-3 h-3 rounded-full bg-gold" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full border border-gold" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full border border-gold" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full border border-gold" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full border border-gold" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
</div>

<div class="container">
        <div class="reservation-container">
            <div class="reservation-item">
                <label for="checkin">Check In</label>
                <input type="date" id="checkin" name="checkin">
            </div>
            <div class="reservation-item">
                <label for="checkout">Check Out</label>
                <input type="date" id="checkout" name="checkout">
            </div>
            <div class="reservation-item">
                <label for="guests">Guests</label>
                <select id="guests" name="guests">
                    <option value="1">1 Guest</option>
                    <option value="2">2 Guests</option>
                    <option value="3">3 Guests</option>
                    <option value="4">4 Guests</option>
                </select>
            </div>
            <div class="room-type">
                <label for="room">Room Type</label>
                <select id="room" name="room">
                    <option value="1">Deluxe 1</option>
                    <option value="2">Deluxe 2</option>
                </select>
            </div>
            <div class="reservation-item">
                <button class="check-availability">Check Availability</button>
            </div>
        </div>
</div>


<div class="container_rooms">
    <section class="py-[20vh] max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-4xl font-bold" id="headingrooms">ROOMS & SUITES</h2>
            <a href="#" class="text-white text-lg font-medium border-b border-transparent hover:border-white transition">See More →</a>
        </div>

        <div class="flex flex-wrap gap-6 justify-center">
            <!-- Kartu 1 -->
            <div class="bg-gray-800 rounded-lg overflow-hidden w-full sm:w-80 flex flex-col" style="background-color:#1E1E1E;     box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);">
                <img src="{{ asset('images/room.jpeg') }}" alt="Executive Room" class="w-full h-48 object-cover">
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex space-x-3 mb-4 text-sm text-white">
                        <span>👤2</span>
                        <span>🎁2</span>
                        <span>🛏2</span>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-white">Executive Room</h3>
                    <p class="text-gray-400 flex-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mattis consectetur dignissim. Etiam magna nisl, facilisis vel odio in, gravida pretium leo. Duis feugiat rhoncus condimentum.</p>
                    <div class="mt-6 flex space-x-3">
                        <!-- Tombol WhatsApp -->
                        <a href="https://wa.me/6281234567890?text=Hi, I would like to book the Executive Room. Can you provide more details?" 
                            target="_blank" 
                            class="px-4 py-2 bg-yellow-600 text-black font-semibold rounded hover:bg-yellow-500 transition">
                            Book Room
                        </a>
                        <button class="px-4 py-2 border border-yellow-600 text-yellow-600 font-semibold rounded hover:bg-yellow-600 hover:text-black transition" onclick="openModal('images/room.jpeg', 'Executive Room', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mattis consectetur dignissim. Etiam magna nisl, facilisis vel odio in, gravida pretium leo. Duis feugiat rhoncus condimentum.')">Details</button>
                    </div>
                </div>
            </div>
            <!-- Kartu 1 -->
            <div class="bg-gray-800 rounded-lg overflow-hidden w-full sm:w-80 flex flex-col " style="background-color:#1E1E1E;     box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);">
                <img src="{{ asset('images/room.jpeg') }}" alt="Executive Room" class="w-full h-48 object-cover">
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex space-x-3 mb-4 text-sm text-white">
                        <span>👤2</span>
                        <span>🎁2</span>
                        <span>🛏2</span>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-white">Executive Room</h3>
                    <p class="text-gray-400 flex-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mattis consectetur dignissim. Etiam magna nisl, facilisis vel odio in, gravida pretium leo. Duis feugiat rhoncus condimentum.</p>
                    <div class="mt-6 flex space-x-3">
                        <!-- Tombol WhatsApp -->
                        <a href="https://wa.me/6281234567890?text=Hi, I would like to book the Executive Room. Can you provide more details?" 
                            target="_blank" 
                            class="px-4 py-2 bg-yellow-600 text-black font-semibold rounded hover:bg-yellow-500 transition">
                            Book Room
                        </a>
                        <button class="px-4 py-2 border border-yellow-600 text-yellow-600 font-semibold rounded hover:bg-yellow-600 hover:text-black transition" onclick="openModal('images/room.jpeg', 'Executive Room', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mattis consectetur dignissim. Etiam magna nisl, facilisis vel odio in, gravida pretium leo. Duis feugiat rhoncus condimentum.')">Details</button>
                    </div>
                </div>
            </div>
            <div class="bg-gray-800 rounded-lg overflow-hidden w-full sm:w-80 flex flex-col" style="background-color:#1E1E1E;     box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);">
                <img src="{{ asset('images/room.jpeg') }}" alt="Executive Room" class="w-full h-48 object-cover">
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex space-x-3 mb-4 text-sm text-white">
                        <span>👤2</span>
                        <span>🎁2</span>
                        <span>🛏2</span>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-white">Deluxe</h3>
                    <p class="text-gray-400 flex-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mattis consectetur dignissim. Etiam magna nisl, facilisis vel odio in, gravida pretium leo. Duis feugiat rhoncus condimentum.</p>
                    <div class="mt-6 flex space-x-3">
                        <!-- Tombol WhatsApp -->
                        <a href="https://wa.me/6281234567890?text=Hi, I would like to book the Executive Room. Can you provide more details?" 
                            target="_blank" 
                            class="px-4 py-2 bg-yellow-600 text-black font-semibold rounded hover:bg-yellow-500 transition">
                            Book Room
                        </a>
                        <button class="px-4 py-2 border border-yellow-600 text-yellow-600 font-semibold rounded hover:bg-yellow-600 hover:text-black transition" onclick="openModal('images/room.jpeg', 'Executive Room', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mattis consectetur dignissim. Etiam magna nisl, facilisis vel odio in, gravida pretium leo. Duis feugiat rhoncus condimentum.')">Details</button>
                    </div>
                </div>
                
            </div>

            <!-- Add more cards as needed -->

        </div>
    </section>

    <!-- Modal -->
    <div id="roomModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-gray-800 rounded-lg max-w-md w-full p-6 relative text-white">
            <button class="absolute top-4 right-4 text-gray-400 hover:text-white" onclick="closeModal()">✖</button>
            <img id="modalImage" src="{{ asset('images/room.jpeg') }}" alt="Room Image" class="rounded-lg w-full h-48 object-cover mb-4">
            <h2 id="modalTitle" class="text-3xl font-bold mb-4">Room Title</h2>
            <p id="modalDescription" class="text-gray-300 mb-6">Room description goes here...</p>
            <button class="px-4 py-2 bg-yellow-600 text-black font-semibold rounded hover:bg-yellow-500 transition" onclick="closeModal()">Close</button>
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

<script>
    function openModal(title, description) {
        document.getElementById('modalTitle').textContent = title;
        document.getElementById('modalDescription').textContent = description;
        document.getElementById('roomModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('roomModal').classList.add('hidden');
    }
</script>










</body>

</html>
