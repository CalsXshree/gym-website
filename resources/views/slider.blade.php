    <div class="container2">
        <!-- Swiper -->
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="display: flex;  flex-direction: column; align-items: center">
                    <h3 style="font-size: 1.8rem">Premium+ Membership</h3>
                    <div> <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 15rem">
                    </div>
                    <div>
                        <ul>
                            <li>Unlimited small group training
                                (with fewer than 8 people and
                                led by a personal trainer!)</li>
                            <li>All the group fitness classes you want</li>
                            <li>Cardio equipment, free weights, & resistance machines</li>
                            <li>Full locker room access</li>
                            <li>Unlimited guest passes</li>
                            <li>Discounted drinks</li>
                            <li>Personal training discount</li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide" style="display: flex;  flex-direction: column; align-items: center">
                    <h3> Premium Membership </h3>
                    <div> <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 15rem">
                    </div>
                    <ul>
                        <li>Luxe amenities at low prices</li>
                        <li>Cardio equipment, free weights, & resistance machines</li>
                        <li>All the group fitness classes you want</li>
                        <li>Indoor pickleball (where available)</li>
                        <li>Performance lifting area</li>
                        <li>Full locker room access</li>
                        <li>Unlimited guest passes</li>
                        <li>Access to any CalsxShree gym, anywhere</li>
                    </ul>
                </div>
                <div class="swiper-slide" style="display: flex;  flex-direction: column; align-items: center">
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
                </div>
                <div class="swiper-slide" style="display: flex;  flex-direction: column; align-items: center">
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
                <div class="swiper-slide" style="display: flex;  flex-direction: column; align-items: center">

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
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper', {
            slidesPerView: 3,
            direction: getDirection(),
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            on: {
                resize: function() {
                    swiper.changeDirection(getDirection());
                },
            },
        });

        function getDirection() {
            var windowWidth = window.innerWidth;
            var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

            return direction;
        }
        window.addEventListener("scroll", function() {
            var navbar = document.querySelector(".navbar");
            navbar.classList.toggle("scroll", window.scrollY > 0);
        });
    </script>
