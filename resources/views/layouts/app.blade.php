<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Miranda Hotel @yield('title')</title>
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&family=Old+Standard+TT&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
  </head>
  <body>
  <section class="navbarSection">
    <nav class="navbar">
      <div class="navbar__left">
        <a href="index.php" class="navbar__left__a">
          <p class="navbar__left__logo">H</p>
          <div class="navbar__left__title">
            <h4 class="navbar__left__title__hotel">HOTEL</h4>
            <h4 class="navbar__left__title__name">MIRANDA</h4>
          </div>
        </a>
      </div>
      <a id="menu-icon" class="navbar__icon" onclick="buttonClick()">
        <i class="fa fa-bars"></i>
      </a>
      <div class="navbar__list"  id="navbar" >
          <a href="about" class="navbar__list__links navbar__active">About Us</a>
          <a href="rooms" class="navbar__list__links">Rooms</a>
          <a href="offers" class="navbar__list__links">Offers</a>
          <a href="details" class="navbar__list__links">Contact</a>
      </div>
      <div class="navbar__iconsContainer">
        <div class="navbar__iconsContainer__box">  
          <img src="./icons/User.png" class="navbar__iconsContainer__icon"/>
        </div>
        <div class="navbar__iconsContainer__box">
          <img src="{{url('./icons/Search.png')}}" class="navbar__iconsContainer__icon"/>
        </div>
      </div>
    </nav> 
  </section> 
  <body>
  <div class="container">
     @yield('content')
  </div>
    <!--FOOTER --> 
    <footer class="footer">
      <div class="footer__container">
        <div >
          <div class="footer__logo">
            <img src="./icons/LogoFooter.png" alt="Logo Hotel Miranda" class="footer__logo__image"/>
          </div>
          <p class="footer__text">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.</p>
          <div class="footer__icons">
            <img src="./icons/Facebook.png" alt="Icon Facebook" class="footer__icons__icon"/>
            <img src="./icons/twitter.svg" alt="Icon Twitter" class="footer__icons__icon footer__icons__icon__twitter" style="color:#777777"/>
            <img src="./icons/Behance.png" alt="Icon Behance" class="footer__icons__icon"/>
            <img src="./icons/LinkedIn.png" alt="Icon LinkedIn" class="footer__icons__icon"/>
            <img src="./icons/Youtube.png" alt="Icon Youtube" 
            class="footer__icons__icon"/>
          </div>
        </div>
        <div class="footer__list">
          <h3 class=footer__list__title>Services.</h3>
          <ul class="footer__list__ul">
            <div class="footer__list__ul__column">
              <li class="footer__list__li">+ Resturent & Bar </li>
              <li class="footer__list__li">+ Swimming Pool </li>
              <li class="footer__list__li">+ Wellness & Spa</li>
              <li class="footer__list__li">+ Restaurant</li>
              <li class="footer__list__li">+ Conference Room</li>
              <li class="footer__list__li">+ Coctail Party House</li>
            </div>
            <div class="footer__list__ul__column">
              <li class="footer__list__li">+ Gaming Zone</li>
              <li class="footer__list__li">+ Marrige Party</li>
              <li class="footer__list__li">+ Party Planning</li>
              <li class="footer__list__li">+ Tour Consultancy</li>
            </div>
          </ul>
        </div>
        <div>  
          <h3 class=footer__list__title>Contact Us.</h3>
          <div class="footer__contact">
            <div class="footer__contact__icon">
              <img src="./icons/Phone.png"/>
            </div>
            <div class="footer__contact__info">
              <p class="footer__contact__info__title">Phone Number </p>
              <p class="footer__contact__info__data">+987 876 765 76 577</p>
            </div>
          </div>
          <div class="footer__contact">
            <div class="footer__contact__icon">
              <img src="./icons/Email.png"/>
            </div>
            <div class="footer__contact__info">
              <p class="footer__contact__info__title">Email </p>
              <p class="footer__contact__info__data">info@mirandahotel.com</p>
            </div>
          </div>
          <div class="footer__contact">
            <div class="footer__contact__icon">
              <img src="./icons/Location.png"/>
            </div>
            <div class="footer__contact__info">
              <p class="footer__contact__info__title">Location </p>
              <p class="footer__contact__info__data">Paseo Maritimo 07006 Palma</p>
            </div>
          </div>
        </div>
      </div>    
    </footer>
    <div class="disclaimer">
      <p class="disclaimer__text">Copyright By@Marieke - 2023</p>
      <p class="disclaimer__text">Terms of use | Privacy Environmental Policy</p>
    </div>  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./javascript/homepage.js"></script>
    <script src="./javascript/swiper.js"></script>
  </body>
</html>