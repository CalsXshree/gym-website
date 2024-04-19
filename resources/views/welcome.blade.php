<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- <----------------- --}}
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <div class="header" id="home">
        <nav class="navbar">
            <div class="logo"> <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 60px">
            </div>
            <div style="display:flex; align-items:center;">
                <a href="#home">Home</a>
                <a href="#about">About Us</a>
                <a href="#service">Our Services</a>
                <a href="*">Contact Us</a>
                <a href="*">Join Now </a>
            </div>
        </nav>
        <div
            style="font-size: 2rem; padding: 20px 0; text-align: center; position: absolute; width: 100%; top: 28rem;
        background: rgba(255, 255, 255, 0.2);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);">
            <span style="color: #E31C37; font-size:3rem;">Now Open!</span>
            <div style="font-size: 2rem; color:#FFFF; padding-top: 1rem"> Reach your fitness goals
                with
                us!
            </div>
        </div>
    </div>
    <div class="container" id="about">
        <main>
            <div>
                <div style="text-align: center">
                    <h2 style="font-size: 2.3rem; color:#E31C37; font-weight: bolder">About Us</h2>
                    <span style="font-size: 20px">Welcome to [Gym Name], where passion meets fitness. Our inclusive
                        community and expert
                        trainers
                        are dedicated to helping you achieve your goals. With cutting-edge facilities, personalized
                        programs, and vibrant group classes, we're here to support your journey to wellness. Join us and
                        let's make every workout count together at [Gym Name]. Welcome to the family!</span>
                </div>
                <div style="display: flex; justify-content: space-around; margin: 3rem 0 4.5rem 0">
                    <div>
                        <h3 style="font-size: 2.3rem; color:#E31C37; font-weight: bolder">Gym Hours</h3>
                        <p
                            style="font-size: 20px; font-weight: 100; color: slategray; display: flex; flex-direction: column; gap: 10px">
                            <span style="color: #555555; font-weight: bold">M / T / W / TH / F:</span> 4:00 am - 12:00
                            am
                            <br>
                            <span style="color: #555555; font-weight: bold">Saturday:</span> 4:00 am - 10:pm<br>
                            <span style="color: #555555; font-weight: bold">Sunday:</span> 7:00 am - 4:00 pm
                        </p>
                    </div>
                    <div>
                        <h3 style="font-size: 2.3rem; color:#E31C37; font-weight: bolder">Location</h3>
                        <p style="color: #555555; font-size: 20px; font-weight:bold">Siddhipur, Mahalaxmi</p>
                        <div class="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                width="30" height="30">
                                <path fill-rule="evenodd"
                                    d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <span style="text-size">
                                +977 984xxxxxxx
                            </span>
                        </div>
                        <div class="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                width="30" height="30">
                                <path fill-rule="evenodd"
                                    d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                            <span>
                                +977 984xxxxxxx
                            </span>
                        </div>
                    </div>
                </div>

            </div>

            <h2 id="service" style="font-size: 2rem; text-align:center; color:#E31C37"> Unlock Your Potential</h2>
            <p style="font-size:18px; color:rgb(92, 91, 91); text-align:center">Get access to state-of-the-art
                equipment, diverse classes,
                and expert
                guidance.
            </p>

            <h2 style="font-size: 2rem; color:#E31C37">Membership Options</h2>
            <p style="font-size:20px; margin-bottom: 45px">We offer various membership plans to fit your needs and
                budget. Experience all the
                Community Center
                has to offer including access to a large,
                clean fitness center, dozens of free
                group exercise classes, pickleball,
                indoor track, open gym, personal training
                and discounts on programs & rentals.
                Please contact us for details.</p>

            @include('slider')
            <a href="/services" style="display: flex;justify-content: center; margin: 2rem 0; text-decoration: none">
                <div class="button" style="font-weight: bold; font-size: 20px">Register now</div>
            </a>
            {{-- <---------------- here ---------------------> --}}
            <h2>What Our Members Say</h2>
            <p>Add testimonials from satisfied members here.</p>
            <div class="tab-tittles">
                <p class="tab-links">Learn More</p>
            </div>

            <div class="benefits">
                <h2>MEMBER BENEFITS YOU WANT</h2>

                <h1>AT A LOWER PRICE</h1>
                <big>So many benefits. So little time.</big>
                <div>
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                    <div></div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
