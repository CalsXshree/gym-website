<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="header">
        <nav>
            <div class="logo"> <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 60px">
            </div>
            <div style="display:flex; align-items:center;">
                <!-- <Header> -->
                <a href="*">Home</a>
                <a href="#about">About Us</a>
                <a href="#service">Our Services</a>
                <a href="*">Contact Us</a>
                <a href="*">Join Now </a>
                <!-- </Header> -->

            </div>
        </nav>
        <div
            style="margin-top:25%;font-size: 2rem; padding: 20px; text-align: center;
        background: rgba(255, 255, 255, 0.2);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);">
            <span style="color: #E31C37; font-size:3rem;">Now Open!</span>
            <div style="font-size: 2rem; color:; padding-top: 1rem"> Reach your fitness goals
                with
                us!
            </div>
        </div>
        <div><img src="" alt=""></div>
    </div>
    <div class="container">
        <main>
            <div id="about">
                <div style="text-align: center">
                    <h2 style="font-size: 2.3rem; color:#E31C37; font-weight: bolder">About Us</h2>
                    <span style="font-size: 20px">Welcome to [Gym Name], where passion meets fitness. Our inclusive
                        community and expert
                        trainers
                        are dedicated to helping you achieve your goals. With cutting-edge facilities, personalized
                        programs, and vibrant group classes, we're here to support your journey to wellness. Join us and
                        let's make every workout count together at [Gym Name]. Welcome to the family!</span>
                </div>
                <h3 style="font-size: 2.3rem; color:#E31C37; font-weight: bolder">Location</h3>
                <p style="color: #555555; font-size: 20px; font-weight:bold">Siddhipur, Mahalaxmi</p>
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
            <div class="membership-plans">
                <div class="membership-items">
                    <h3>Fitness Memberships</h3>
                    <div> <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 15rem">
                    </div>
                    <div style="display:flex; align-items:center;">At CalsxShree, we know it
                        can be hard to get started at the gym. Many customers who are unsure
                        which gym to choose or who are not yet ready to commit to a gym
                        membership prefer to purchase pay as you go gym day passes.
                        CalsxShree gym day passes are often cheaper than the day passes
                        you could buy from the gyms directly.
                    </div>
                    <div></div>
                </div>
                <div class="membership-items">
                    <h3>Program Memberships</h3>
                    <div> <img src="{{ asset('images/logo.png') }}" style="width: 15rem" alt="Logo">
                    </div>
                    <div style="display:flex; align-items:center;">Program Memberships entitle you to the discounted
                        member
                        rate for classes, summer camps and after our school
                        program. Membership does not include rental
                        discounts or use of the fitness center,
                        group ex classes and open gym.
                    </div>
                </div>
                <div class="membership-items">
                    <h3>Basic Memberships</h3>
                    <div> <img src="{{ asset('images/logo.png') }}" style="width: 15rem" alt="Logo">
                    </div>
                    <div style="display:flex; align-items:center;">Anything but basic! For only Nrs.999 a month, you
                        get:</h2>
                    </div>
                    <ul>
                        <li>Cardio equipment, free weights, & resistance machines </li>
                        <li>Performance lifting area </li>
                        <li> Full locker room access</li>
                        <li> A fully equipped turf training area</li>
                        <li>Affordable personal training for as low as Nrs 3500</li>
                    </ul>
                </div>
            </div>

            <h2>What Our Members Say</h2>
            <p>Add testimonials from satisfied members here.</p>
            <div class="tab-tittles">
                <p class="tab-links">Learn More</p>
            </div>
            <div class="premium">
                <div>
                    <div>
                        <h1> Premium Membership </h1>
                        <h2>Luxe amenities at low prices</h2>
                        <li>Cardio equipment, free weights, & resistance machines</li>
                        <li>All the group fitness classes you want</li>
                        <li>Indoor pickleball (where available)</li>
                        <li>Performance lifting area</li>
                        <li>Full locker room access</li>
                        <li>Unlimited guest passes</li>
                        <li>Access to any CalsxShree gym, anywhere</li>
                    </div>
                </div>
                <div> <img src="{{ asset('images/logo.png') }}" alt="Logo">
                </div>
            </div>
            <div class="premiummember">
                <div>
                    <div>
                        <img src="{{ asset('images/logo.png') }}" alt="Logo">
                    </div>
                </div>
                <div>
                    <h1>Premium+ Membership</h1>
                    <h2>Nothing is off limits</h2>
                    <li>Unlimited small group training
                        (with fewer than 8 people and
                        led by a personal trainer!)</li>
                    <li>All the group fitness classes you want</li>
                    <li>Cardio equipment, free weights, & resistance machines</li>
                    <li>Full locker room access</li>
                    <li>Unlimited guest passes</li>
                    <li>Discounted drinks</li>
                    <li>Access to any CalsxShree gym, anywhere</li>
                    <li>Affordable personal training for as low as NRs.4500</li>
                </div>
            </div>
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

    </div>
    </main>
    </div>
</body>

</html>
