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
                <a href="#community">Community</a>
                <a href="#contact">Contact Us</a>
                <a href="/join">Join Now </a>
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
            <a href="/join" style="display: flex;justify-content: center; margin: 2rem 0; text-decoration: none">
                <div class="button" style="font-weight: bold; font-size: 20px">Register now</div>
            </a>
            <hr id="community">
            {{-- <---------------- Our community ---------------------> --}}
            <h2 style="text-align: center; font-size: 4rem; color: #E31C37">OUR COMMUNITY</h2>
            <p style="font-size: 20px; text-align: center; margin-bottom: 3rem">
                Step into our gym and step into a supportive family, where every member is valued. From beginners to
                pros, we're united by a passion for fitness and a commitment to each other's success. Here,
                encouragement flows as freely as the sweat, creating an atmosphere where everyone thrives. Join us and
                experience the power of community in reaching your fitness goals.</p>
        </main>
    </div>
    <div style="margin-bottom: 4rem">
        @include('ourCommunitySlider')
    </div>
    <hr style="margin: 0 5rem; margin-bottom: 5rem" id="contact">
    <div style="display: flex; justify-content: space-between; padding: 0 6rem; margin-bottom: 5rem">
        <div style="width: 40%;display: flex; flex-direction: column; gap: 2rem">
            <span style="font-size: 4rem; font-weight: bold;">Contact Us</span>
            <div style="">
                <div style="display: flex; gap: 2rem"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor" style="width: 2rem">
                        <path
                            d="M19.5 22.5a3 3 0 0 0 3-3v-8.174l-6.879 4.022 3.485 1.876a.75.75 0 1 1-.712 1.321l-5.683-3.06a1.5 1.5 0 0 0-1.422 0l-5.683 3.06a.75.75 0 0 1-.712-1.32l3.485-1.877L1.5 11.326V19.5a3 3 0 0 0 3 3h15Z" />
                        <path
                            d="M1.5 9.589v-.745a3 3 0 0 1 1.578-2.642l7.5-4.038a3 3 0 0 1 2.844 0l7.5 4.038A3 3 0 0 1 22.5 8.844v.745l-8.426 4.926-.652-.351a3 3 0 0 0-2.844 0l-.652.351L1.5 9.589Z" />
                    </svg>
                    <span style="font-size: 22px">calsxshree@gym.com</span>
                </div>
                <div style="display: flex; gap: 2rem; padding-top: 1rem"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="currentColor" style="width: 2rem">
                        <path fill-rule="evenodd"
                            d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span style="font-size: 22px">+977 984xxxxxxxx</span>
                </div>
                <div style="padding-top: 1rem">
                    <a href="https://www.facebook.com/">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" viewBox="0 0 50 50">
                            <path
                                d="M25,3C12.85,3,3,12.85,3,25c0,11.03,8.125,20.137,18.712,21.728V30.831h-5.443v-5.783h5.443v-3.848 c0-6.371,3.104-9.168,8.399-9.168c2.536,0,3.877,0.188,4.512,0.274v5.048h-3.612c-2.248,0-3.033,2.131-3.033,4.533v3.161h6.588 l-0.894,5.783h-5.694v15.944C38.716,45.318,47,36.137,47,25C47,12.85,37.15,3,25,3z">
                            </path>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" viewBox="0 0 50 50">
                            <path
                                d="M 16 3 C 8.83 3 3 8.83 3 16 L 3 34 C 3 41.17 8.83 47 16 47 L 34 47 C 41.17 47 47 41.17 47 34 L 47 16 C 47 8.83 41.17 3 34 3 L 16 3 z M 37 11 C 38.1 11 39 11.9 39 13 C 39 14.1 38.1 15 37 15 C 35.9 15 35 14.1 35 13 C 35 11.9 35.9 11 37 11 z M 25 14 C 31.07 14 36 18.93 36 25 C 36 31.07 31.07 36 25 36 C 18.93 36 14 31.07 14 25 C 14 18.93 18.93 14 25 14 z M 25 16 C 20.04 16 16 20.04 16 25 C 16 29.96 20.04 34 25 34 C 29.96 34 34 29.96 34 25 C 34 20.04 29.96 16 25 16 z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="form-style-2" style="width: 80%">
            <form action="" method="post">
                <label for="field1"><span>Name <span class="required">*</span></span><input type="text"
                        class="input-field" name="field1" value="" /></label>
                <label for="field2"><span>Email <span class="required">*</span></span><input type="text"
                        class="input-field" name="field2" value="" /></label>
                <label for="field4"><span>Regarding</span><select name="field4" class="select-field">
                        <option value="General Question">General</option>
                        <option value="Advertise">Advertisement</option>
                        <option value="Partnership">Partnership</option>
                    </select></label>
                <label for="field5"><span>Message <span class="required">*</span></span>
                    <textarea name="field5" class="textarea-field"></textarea>
                </label>

                <label><span> </span><input type="submit" value="Submit" /></label>
            </form>
        </div>
    </div>
</body>

</html>
