@extends('layouts.app')
@section('content')
   <div>
     <!--JUMBOTRON--> 
    <section class="jumbotron">     
      <h2 class="jumbotron__subtitle">THE ULTIMATE LUXURY EXPERIENCE</h2>
      <h1 class="jumbotron__title">The Perfect
        Base For You</h1>
      <button class="jumbotron__button jumbotron__button__tour">TAKE A TOUR</button>
      <button class="jumbotron__button jumbotron__button__learn">LEARN MORE</button>
    </section>
    <!--AVAILIBILITY--> 
    <section class="availibility">
      <div>
        <form action="{{route('search')}}" method="GET" class="availibility__box">
          <div>
            <div class="availibility__firstbox">
              <p class="availibility__text">Arrival Date</p>
              <div class="availibility__input">
                <input class="availibility__input__box" placeholder="24/03/2023" type="text" name="checkin"/>
              </div>
            </div>
            <div class="availibility__secondbox">
              <p class="availibility__text">LeDeparture Date</p>
              <div class="availibility__input">
                <input class="availibility__input__box" placeholder="30/03/2023" type="text" name="checkout"/>
              </div>
            </div>
          </div>
          <button class="availibility__button">CHECK AVAILABILITY</button>
        </form>  
      </div>

    </section>
    <!--SEPARATIONBLOCK-->    
    <div class="separationBlock"></div> 
    <!--ABOUT--> 
    <section class="about">
      <div class="about__containerText">
        <h3 class="about__subtitle">ABOUT US</h3>
        <div class="about__containerText__background">
          <h1 class="about__title">Discover Our Underground.</h1>
          <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <button class="about__button">BOOK NOW</button>
        </div>
    
      </div>
      <div class="about__infobox">
        <div class="about__info">
          <div class="about__first">
            <div class="about__image">
              <img src="./images/20201101_124249.jpg" class="about__image__img">
            </div>
            <div class="about__container">
              <div class="about__container__img">
                <img class="about__container__image" src="./icons/People.png"/>
              </div>
              <div class="about__container__backImg">
              </div>
              <div class="about__container__imageText">
                <h3 class="about__container__imageText__title">Strong Team</h3>
                <p class="about__container__imageText__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
              </div>
          </div>
        </div>
        <div class="about__info about__second">
          <div class="about__image">
            <img src="./images/20210612_110147.jpg" class="about__image__img">
          </div>
          <div class="about__container__last">
            <div class="about__container__img">
              <img class="about__container__image" src="./icons/LuxeryRoom.png"/>
            </div>
            <div class="about__container__imageText">
              <h3 class="about__container__imageText__title about__container__imageText__white">Luxury Room</h3>
              <p class="about__container__imageText__text about__container__imageText__white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--ROOMS--> 
    <section class="rooms">
      <div>
        <h3 class="rooms__subtitle">ROOMS</h3>   
        <h1 class="rooms__title">Hand Picked Rooms</h1>
        <div class="rooms__container">
          <div class="rooms__iconbox">
            <img src="./icons/Bed_icon.png" class="rooms__iconbox__icon"/>
            <img src="./icons/Wifi.png"class="rooms__iconbox__icon"/>
            <img src="./icons/Car.png"class="rooms__iconbox__icon"/>
            <img src="./icons/SnowFlake.png"class="rooms__iconbox__icon"/>
            <img src="./icons/Gym.png"class="rooms__iconbox__icon"/>
            <img src="./icons/NoSmoking.png"class="rooms__iconbox__icon"/>
            <img src="./icons/Cocktail.png"class="rooms__iconbox__icon"/>
          </div>
          <div class="container">
            <!-- main swiper container -->
            <div class="swiper swiper_main">
            <!-- wrapper for slide -->
                <div class="swiper-wrapper">
                <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="image__wrapper">
                            <img src="./images/20191031_172848.jpg" alt="" />
                        </div>
                    </div>
        
                    <div class="swiper-slide">
                        <div class="image__wrapper">
                            <img src="./images/20200528_101712.jpg" alt="" />
                        </div>
                    </div>
        
                    <div class="swiper-slide">
                        <div class="image__wrapper">
                            <img src="./images/20200528_103651.jpg" alt="" />
                        </div>
                    </div>
        
                    <div class="swiper-slide">
                        <div class="image__wrapper">
                            <img src="./images/20200704_092317.jpg" alt="" />
                        </div>
                    </div>
        
                    <div class="swiper-slide">
                        <div class="image__wrapper">
                            <img src="./images/20200528_101727.jpg" alt="" />
                        </div>
                    </div>
        
                    <div class="swiper-slide">
                        <div class="image__wrapper">
                            <img src="./images/20201101_123454.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <!-- pagination -->
                <div class="swiper-pagination"></div>
                <!-- navigation buttton -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="rooms__info">
              <div class="rooms__info__firstbox">
                <h2 class="rooms__info__title">Minimal Duplex Room</h2>
                <p class="rooms__info__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
              </div>
              <div  class="rooms__info__secondbox">
                <p class="rooms__info__price">$345<span class="rooms__info__night">/Night</span></p>
              </div>
            </div>
          </div>    
        </div>
   </section>
    <!--INTRO--> 
    <section class="intro">
      <div class="intro__container">
        <h3 class="intro__subtitle">INTRO VIDEO</h3>.
        <h1 class="intro__title">Meet With Our Luxury Place.</h1>
        <p class="intro__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
        <button class="intro__button intro__button__desktop">BOOK NOW</button>
      </div>
      <div class="intro__video">
        <video width="420" height="340" controls>
          <source src="./video/hotel.mp4" type="video/mp4">
        </video>
      </div>
      <button class="intro__button intro__button__movil">BOOK NOW</button>
    </section>
    <!--FACILITIES--> 
    <section class="facilitiesHome">
      <h3 class="facilitiesHome__subtitle">FACILITIES</h3>
      <h1 class="facilitiesHome__title">Core Features</h1>
      <div class="container facilitiesHome__movil">
        <!-- main swiper container -->
        <div class="swiper swiper_main">
        <!-- wrapper for slide -->
            <div class="swiper-wrapper">
            <!-- single slide -->
                <div class="swiper-slide facilitiesHome__infobox">
                    <div style="background-image: url(./icons/Number\ 1.png);background-position: right 10% top" class="facilitiesHome__infobox__box">
                      <div class="facilitiesHome__infobox__icon">
                        <img src="./icons/Rating.png" class="facilitiesHome__infobox__icon__image"/>
                      </div>
                      <h4 class="facilitiesHome__infobox__title">Have High Rating</h4>
                      <p class="facilitiesHome__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
    
                <div class="swiper-slide facilitiesHome__infobox">
                  <div style="background-image: url(./icons/Number\ 2.png);background-position: right 10% top" class="facilitiesHome__infobox__box">
                    <div class="facilitiesHome__infobox__icon">
                      <img src="./icons/CoreFeaturesHours.png"/>
                    </div>
                    <h4 class="facilitiesHome__infobox__title">Quiet Hours</h4>
                    <p class="facilitiesHome__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                  </div>
                </div>
    
                <div class="swiper-slide facilitiesHome__infobox">
                  <div style="background-image: url(./icons/Number\ 3.png);background-position: right 10% top" class="facilitiesHome__infobox__box">
                    <div class="facilitiesHome__infobox__icon">
                      <img src="./icons/CoreFeaturesLocation.png"/>
                    </div>
                    <h4 class="facilitiesHome__infobox__title">Best Locations</h4>
                    <p class="facilitiesHome__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                  </div>
                </div>
    
                <div class="swiper-slide facilitiesHome__infobox">
                  <div style="background-image: url(./icons/Number\ 4.png);background-position: right 10% top" class="facilitiesHome__infobox__box">
                    <div class="facilitiesHome__infobox__icon">
                      <img src="./icons/CoreFeaturesCancelation.png"/>
                    </div>
                    <h4 class="facilitiesHome__infobox__title">Free Cancellation</h4>
                    <p class="facilitiesHome__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                  </div>
                </div>
    
                <div class="swiper-slide facilitiesHome__infobox">
                  <div style="background-image: url(./icons/Number\ 5.png);background-position: right 10% top" class="facilitiesHome__infobox__box">
                    <div class="facilitiesHome__infobox__icon">
                      <img src="./icons/CoreFeaturesPayment.png" class="facilitiesHome__infobox__icon__image"/>
                    </div>
                    <h4 class="facilitiesHome__infobox__title">Payment Options</h4>
                    <p class="facilitiesHome__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                  </div>
                </div>
    
                <div class="swiper-slide facilitiesHome__infobox">
                  <div style="background-image: url(./icons/Number\ 6.png);background-position: right 10% top" class="facilitiesHome__infobox__box">
                    <div class="facilitiesHome__infobox__icon">
                      <img src="./icons/CoreFeaturesOffer.png"/>
                    </div>
                    <h4 class="facilitiesHome__infobox__title">Special Offers</h4>
                    <p class="facilitiesHome__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                  </div>
                </div>
            </div>
            <!-- pagination -->
            <div class="facilitiesHome__pagination">
              <div class="swiper-pagination"></div>
            </div>
        </div>
      </div> 
      <div class="facilitiesHome__desktop">
        <div class="facilitiesHome__infobox">
          <div style="background-image: url(./icons/Number\ 1.png);" class="facilitiesHome__infobox__box">
            <div class="facilitiesHome__infobox__icon">
              <img src="./icons/Rating.png"/>
            </div>
            <h4 class="facilitiesHome__infobox__title">Have High Rating</h4>
            <p class="facilitiesHome__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
          </div>
          <div style="background-image: url(./icons/Number\ 2.png);" class="facilitiesHome__infobox__box">
            <div class="facilitiesHome__infobox__icon">
              <img src="./icons/CoreFeaturesHours.png"/>
            </div>
            <h4 class="facilitiesHome__infobox__title">Quiet Hours</h4>
            <p class="facilitiesHome__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
          </div>
          <div style="background-image: url(./icons/Number\ 3.png);" class="facilitiesHome__infobox__box">
            <div class="facilitiesHome__infobox__icon">
              <img src="./icons/CoreFeaturesLocation.png"/>
            </div>
            <h4 class="facilitiesHome__infobox__title">Best Locations</h4>
            <p class="facilitiesHome__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
          </div>
          <div style="background-image: url(./icons/Number\ 4.png);" class="facilitiesHome__infobox__box">
            <div class="facilitiesHome__infobox__icon">
              <img src="./icons/CoreFeaturesCancelation.png"/>
            </div>
            <h4 class="facilitiesHome__infobox__title">Free Cancellation</h4>
            <p class="facilitiesHome__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
          </div>
          <div style="background-image: url(./icons/Number\ 5.png);" class="facilitiesHome__infobox__box">
            <div class="facilitiesHome__infobox__icon">
              <img src="./icons/CoreFeaturesPayment.png" class="facilitiesHome__infobox__icon__image"/>
            </div>
            <h4 class="facilitiesHome__infobox__title">Payment Options</h4>
            <p class="facilitiesHome__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
          </div>
          <div style="background-image: url(./icons/Number\ 6.png);" class="facilitiesHome__infobox__box">
            <div class="facilitiesHome__infobox__icon">
              <img src="./icons/CoreFeaturesOffer.png"/>
            </div>
            <h4 class="facilitiesHome__infobox__title">Special Offers</h4>
            <p class="facilitiesHome__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
          </div>
        </div>
      </div>
    </section>
    <div class="facilitiesHome__dec"></div>
    <div class="facilitiesHome__decfull"></div>
    <!--MENU--> 
    <section class="menu">
      <h3 class="menu__subtitle">MENU</h3>
      <h1 class="menu__title">Our Foods Menu</h1>
      <div class="menu__movil">
        <div class="container">
        <!-- main swiper container -->
          <div class="swiper swiper_menu">
        <!-- wrapper for slide -->
            <div class="swiper-wrapper">
            <!-- single slide -->
              <div class="swiper-slide">
                <div class="menu__box">
                  <div class="menu__box__img">
                    <img 
                      class="menu__box__img__image"
                      src="./images/pexels-elevate-1267320.jpg" 
                      alt="Photo by ELEVATE: https://www.pexels.com/photo/chef-preparing-vegetable-dish-on-tree-slab-1267320/"/>
                  </div>
                  <div class="menu__box__text">
                    <h4 class="menu__box__text__title">Eggs & Bacon</h4>
                    <p class="menu__box__text__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                  </div>
                </div>
                <div class="menu__box">
                  <div class="menu__box__img">
                    <img 
                      class="menu__box__img__image"
                      src="./images/pexels-anna-tukhfatullina-food-photographerstylist-2551794.jpg" 
                      alt="Photo by Anna Tukhfatullina Food Photographer/Stylist: https://www.pexels.com/photo/black-wooden-dining-table-in-a-coffee-shop-2551794/"/>
                  </div>
                  <div class="menu__box__text">
                    <h4 class="menu__box__text__title">Tea or Coffee</h4>
                    <p class="menu__box__text__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                  </div>
                </div>
                <div class="menu__box">
                  <div class="menu__box__img">
                    <img 
                      class="menu__box__img__image"
                      src="./images/pexels-rachel-claire-4993266.jpg" 
                      alt="Photo by Rachel Claire: https://www.pexels.com/photo/delicious-pancakes-and-fruits-placed-near-cold-coffee-during-breakfast-on-terrace-4993266/"/>
                  </div>
                  <div class="menu__box__text">
                    <h4 class="menu__box__text__title">Chia Oatmeal</h4>
                    <p class="menu__box__text__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="menu__box">
                  <div class="menu__box__img">
                    <img 
                      class="menu__box__img__image"
                      src="./images/pexels-anastasia-belousova-4696280.jpg" 
                      alt="Photo by Anastasia Belousova: https://www.pexels.com/photo/clear-glasses-with-fresh-strawberry-and-ice-cream-4696280/"/>
                  </div>
                  <div class="menu__box__text">
                    <h4 class="menu__box__text__title">Fruit Parfait</h4>
                    <p class="menu__box__text__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                  </div>
                </div>
                <div class="menu__box">
                  <div class="menu__box__img">
                    <img 
                      class="menu__box__img__image"
                      src="./images/pexels-pixabay-48817.jpg" 
                      alt="Photo by Pixabay: https://www.pexels.com/photo/clear-glass-mason-jars-48817/"/>
                  </div>
                  <div class="menu__box__text">
                    <h4 class="menu__box__text__title">Marmalade Selection</h4>
                    <p class="menu__box__text__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                  </div>
                </div>
                <div class="menu__box">
                  <div class="menu__box__img">
                    <img 
                      class="menu__box__img__image"
                      src="./images/pexels-karolina-grabowska-6660070.jpg" 
                      alt="Photo by Karolina Grabowska: https://www.pexels.com/photo/a-charcuterie-board-with-assorted-foods-6660070/"/>
                  </div>
                  <div class="menu__box__text">
                    <h4 class="menu__box__text__title">Cheese Plate</h4>
                    <p class="menu__box__text__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>     
        </div>  
        <div class="menu__buttons">
          <div class="swiper-button-prev menu__button"></div>
          <div class="swiper-button-next menu__button"></div>
        </div>
    </div>  
    <div class="container menu__desktop">
      <div class="menu__buttons">
        <div class="swiper-button-prev menu__button"></div>
        <div class="swiper-button-next menu__button"></div>
      </div>
    <!-- main swiper container -->
      <div class="swiper swiper_menuDesktop">
      <!-- wrapper for slide -->
         <div class="swiper-wrapper">
              <!-- single slide -->
          <div class="swiper-slide">
            <div class="menu__box">
              <div class="menu__box__img">
                <img 
                class="menu__box__img__image"
                src="./images/pexels-elevate-1267320.jpg" 
                alt="Photo by ELEVATE: https://www.pexels.com/photo/chef-preparing-vegetable-dish-on-tree-slab-1267320/"/>
              </div>
              <div class="menu__box__text">
                <h4 class="menu__box__text__title">Eggs & Bacon</h4>
                <p class="menu__box__text__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
              </div>
            </div>
            <div class="menu__box">
              <div class="menu__box__img">
                <img 
                class="menu__box__img__image"
                src="./images/pexels-anna-tukhfatullina-food-photographerstylist-2551794.jpg" 
                alt="Photo by Anna Tukhfatullina Food Photographer/Stylist: https://www.pexels.com/photo/black-wooden-dining-table-in-a-coffee-shop-2551794/"/>
              </div>
              <div class="menu__box__text">
                <h4 class="menu__box__text__title">Tea or Coffee</h4>
                <p class="menu__box__text__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
              </div>
            </div>
            <div class="menu__box">
              <div class="menu__box__img">
                <img 
                class="menu__box__img__image"
                src="./images/pexels-rachel-claire-4993266.jpg" 
                alt="Photo by Rachel Claire: https://www.pexels.com/photo/delicious-pancakes-and-fruits-placed-near-cold-coffee-during-breakfast-on-terrace-4993266/"/>
              </div>
              <div class="menu__box__text">
                <h4 class="menu__box__text__title">Chia Oatmeal</h4>
                <p class="menu__box__text__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="menu__box">
              <div class="menu__box__img">
                <img 
                class="menu__box__img__image"
                src="./images/pexels-anastasia-belousova-4696280.jpg" 
                alt="Photo by Anastasia Belousova: https://www.pexels.com/photo/clear-glasses-with-fresh-strawberry-and-ice-cream-4696280/"/>
              </div>
              <div class="menu__box__text">
                <h4 class="menu__box__text__title">Fruit Parfait</h4>
                <p class="menu__box__text__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
              </div>
            </div>
            <div class="menu__box">
              <div class="menu__box__img">
                <img 
                class="menu__box__img__image"
                src="./images/pexels-pixabay-48817.jpg" 
                alt="Photo by Pixabay: https://www.pexels.com/photo/clear-glass-mason-jars-48817/"/>
              </div>
              <div class="menu__box__text">
                <h4 class="menu__box__text__title">Marmalade Selection</h4>
                <p class="menu__box__text__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
              </div>
            </div>
            <div class="menu__box">
              <div class="menu__box__img">
                <img 
                class="menu__box__img__image"
                src="./images/pexels-karolina-grabowska-6660070.jpg" 
                alt="Photo by Karolina Grabowska: https://www.pexels.com/photo/a-charcuterie-board-with-assorted-foods-6660070/"/>
              </div>
              <div class="menu__box__text">
                <h4 class="menu__box__text__title">Cheese Plate</h4>
                <p class="menu__box__text__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
              </div>
            </div>
          </div>
        </div>
      </div>    
    </div>
      <div class="menu__imagebox">
        <div class="menu__images">
          <img src="./images/20200604_122923.jpg" alt="Bird at the beach" class="menu__images__photo"/>
        </div>
        <div class="menu__images">
          <img src="./images/20210512_153453.jpg" alt="View from a montain" class="menu__images__photo"/>
        </div>
        <div class="menu__images">
          <img src="./images/20211008_175807.jpg" alt="The beach" class="menu__images__photo"/>
        </div>
      </div>
    </section>
    <!--FACTS--> 
    <section class="facts">
      <div class="facts__box">
        <div class="facts__box__icon">
          <img src="./icons/Rocket.png" class="facts__box__icon__img"/>
        </div>
        <p class="facts__box__title">84k<span class="facts__box__title__symbol">+</span><pre class="facts__box__text">Projects are Completed</pre></p>
      </div>
      <div class="facts__box">
        <div class="facts__box__icon">
          <img src="./icons/People2.png"class="facts__box__icon__img"/>
        </div>
        <p class="facts__box__title">10M<span class="facts__box__title__symbol">+</span><pre class="facts__box__text">Active Backers Around World</pre></p>
      </div>
      <div class="facts__box">
        <div class="facts__box__icon">
          <img src="./icons/PeopleFinance.png"class="facts__box__icon__img"/>
        </div>
        <p class="facts__box__title">02k<span class="facts__box__title__symbol">+</span><pre class="facts__box__text">Categories Served</pre></p>
      </div>
      <div class="facts__box">
        <div class="facts__box__icon">
          <img src="./icons/Book.png"class="facts__box__icon__img"/>
        </div>
        <p class="facts__box__title">100M<span class="facts__box__title__symbol">+</span><pre class="facts__box__text"> Idea Raised Funds</pre></p>
      </div>

    </section>
    <!--SEPARATIONBLOCK-->    
    <div class="separationBlock"></div> 
</div>  
@endsection