<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
<link rel="manifest" href="assets/site.webmanifest">
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style3433.css" />
    <title>AddonHolidaysCo.</title>
  </head>
  <body>
    <header class="header">
      <p><h1>AddonHolidaysCo.</h1></p>
      <div class="nav__bar">
        <div class="logo">
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      <nav>
        <ul class="nav__links" id="nav-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#service">Services</a></li>
          <li><a href="#contact">Contact</a></li>

          <a href="login.html">
            <button class="signup-btn">Login/CreateAccount</button>
          </a>
        </ul>
      </nav>
      <div class="section__container header__container" id="home">
        <p>Simple - Unique - Friendly</p>
        <h1><span>Collecting Memories One Destination At A Time.</span></h1>
      </div>
    </header>

    <section class="section__container booking__container">
      <form action="/" class="booking__form">
        <div class="input__group">
          <span><i class="ri-calendar-2-fill"></i></span>
          <div>
            <label for="check-in">CHECK-IN</label>
            <input type="date" id="check-in" name="check-in"><br>
          </div>
        </div>
        <div class="input__group">
          <span><i class="ri-calendar-2-fill"></i></span>
          <div>
            <label for="check-out">CHECK-OUT</label>
            <input type="date" id="check-out" name="check-out"><br>
          </div>
        </div>
        <div class="input__group">
          <span><i class="ri-user-fill"></i></span>
          <div>
            <label for="guest">NO. OF GUEST</label>
            <input type="number" id="guests" name="guests" min="1" required><br>
          </div>
        </div>
        <div class="input__group input__btn">
          <a href="travel.html" class="btn">CHECK OUT</a>
        </div>
      </form>
    </section>

    <section class="section__container about__container" id="about">
      <div class="about__image">
        <img src="assets/Capture5.JPG" alt="about" />
      </div>
      <div class="about__content">
        <p class="section__subheader">ABOUT US</p>
        <h4 class="section__header">The Best Holidays Start Here!</h4>
        <p class="section__description">
          With a focus on quality accommodations, personalized experiences, and
          seamless booking, our platform is dedicated to ensuring that every
          traveler embarks on their dream holiday with confidence and
          excitement.
        </p>
        </div>
      </div>
    </section>

    
    <section class="section__container room__container">
      <p class="section__subheader">Internationnal Packages</p>
      <h2 class="section__header">The Most Memorable Vacation Of Your Life Starts Here.</h2>
          </div>
          </div>
          <div class="room__card__details">
            <h3>Bali Tourist Visa</h3>
          <div class="bg-container2">
            <h2>Bali</h2>
            <p>
              One among 17,500 islands, Bali's beauty is unique and incomparable. Known for its fascinating jungles, terraced rice fields, legendary volcanoes, mystical temples and stunning beaches, this island is a welcoming haven for travellers from all over the world.
            </p>
            <h3>Starting from <span>₹50000/Per person</span></h3>
            <button class="btn">
                <a href="visa.html"><h3>Book Now</h3></a>
              </button>
          </div>
        </div>
    </div>

</section>
</section>
<section class="section__container room__container">
  <p class="section__subheader">National/Domestic Packages</p>
  <h2 class="section__header">Vacaion Mode : On.</h2>
  <div class="room__grid">
    <div class="room__card">
      <div class="room__card__image">
        <img src="assets/Capture6.JPG" alt="room" />
        <div class="room__card__icons">
        </div>
      </div>
      <div class="room__card__details">
        <h4>Travell Manali</h4>
        <p>
          A gift of the Himalayas to the world, Manali is a beautiful township nestled in the picturesque Beas River valley. It is a rustic enclave known for its cool climate and snow-capped mountains, offering respite to tourists escaping scorching heat of the plains.
        </p>
        <button class="btn">
          <a href="Booking.html" style="color: white;"><h3>Book Now</h3></a>
      </button>
      </div>
    </div>
    <div class="room__card">
      <div class="room__card__image">
        <img src="assets/Capture7.JPG" alt="" />
        <div class="room__card__icons">
        </div>
      </div>
      <div class="room__card__details">
        <h4>Travell Rajesthan : The City Of Desert</h4>
        <p>
          Rajasthan is a timeless land that offers a glimpse into India's rich cultural heritage.” “The forts and palaces of Rajasthan are a testament to the state's glorious past.” “The beauty of Rajasthan lies in its people, who are the custodians of the state's rich culture and traditions.”
        </p>
        <button class="btn">
          <a href="Booking.html" style="color: white;"><h3>Book Now</h3></a>
      </button>
      </div>
    </div>
    <div class="room__card">
      <div class="room__card__image">
        <img src="assets/Capture8.JPG" alt=""/>
        <div class="room__card__icons">
        </div>
      </div>
      <div class="room__card__details">
        <h4>Andaman and Nicobar Islands</h4>
        
          Andaman and Nicobar Islands are developing into a major tourism hub with exotic-looking beaches and pristine islands having equally exotic names, wonderful opportunities for adventure sports like snorkelling and sea-walking etc.
        </p>
        <button class="btn">
          <a href="Booking.html" style="color: white;"><h3>Book Now</h3></a>
      </button>
      </div>
    </div>
  </div>
</section>
    <section class="service" id="service">
      <div class="section__container service__container">
        <div class="service__content">
          <p class="section__subheader">SERVICES</p>
          <h2 class="section__header">Strive Only For The Best.</h2>
          <ul class="service__list">
            <li>
              <span><i class="ri-plane-line"></i></span>
              <a href="travel.html">Holidays Package</a>
            </li>
            <li>
              <span><i class="ri-hotel-bed-line"></i></span>
              <a href="booking.html">Hotel booking</a>
            </li>
            <li>
              <span><i class="ri-flight-takeoff-line"></i></span>
             <a href="Air Booking.html">Air Ticket</a>
            </li>
            <li>
              <span><i class="ri-globe-line"></i></span>
            <a href="visa.html">Visa Services</a>
            </li>
            <li>
              <span><i class="ri-passport-line"></i></span>
            <a href="https://www.passportindia.gov.in/AppOnlineProject/welcomeLink">Passport Services</a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="section__container banner__container">
      <div class="banner__content">
        <div class="banner__card">
          <h4>25+</h4>
          <p>Properties Available</p>
        </div>
        <div class="banner__card">
          <h4>350+</h4>
          <p>Bookings Completed</p>
        </div>
        <div class="banner__card">
          <h4>600+</h4>
          <p>Happy Customers</p>
        </div>
      </div>
    </section>
    <footer class="footer" id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="logo">
            <a href="#home"><img src="assets/logo1.png" alt="logo" /></a>
          </div>
          <p class="section__description">
            Discover a world of comfort, luxury, and adventure as you explore
            our curated selection of hotels, making every moment of your getaway
            truly extraordinary.
          </p>
          <button class="btn">
            <a href="Booking.html" style="color: white;"><h3>Book Now</h3></a>
        </button>
        </div>
        <div class="footer__col">
          <h4>QUICK LINKS</h4>
          <div class="footer__socials">
            <div class="footer__socials">
              <a href="https://www.instagram.com/travelwithaddon/"><img src="assets/instagram.png" alt="Instagram" /></a>
              <a href="https://youtube.com/@travelwithaddon?si=NzAEAkwEzs3vNU8K"><img src="assets/youtube.png" alt="Youtube" /></a>
              <a href="https://www.facebook.com/addonholidays?mibextid=rS40aB7S9Ucbxw6v"><img src="assets/Facebook.png" alt="Facebook" /></a>
            </div>
        </div>
        <div class="footer__col">
          <h4>CONTACT US:+918054056014</h4>
      <div class="footer__bar">
        Copyright © 2018 AddonHolidaysCo. All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js"></script>
  </body>
</html>