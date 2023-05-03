@extends('layouts.app')
@section('content')
    <div class="header">
      <h3 class="header__subtitle">THE ULTIMATE LUXURY</h3>
      <h1 class="header__title">About Us</h1>
      <div class="header__box">
        <p class="header__box__text">Home 	&nbsp;| &nbsp;<span class="header__box__text__span">About</span></p>
      </div>
    </div>
      <!--VIDEO-->   
    <div>
      <div class="aboutPage">
        <div class="aboutPage__video">
          <video width="450" height="300" controls>
            <source src="./video/hotel.mp4" type="video/mp4">
          </video>
        </div>
        <h3 class="aboutPage__title">Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</h3>
      </div>
    </div>
      <!--ICONS-->  
      <section class="icons">
        <div class="icons__column">
          <div class="icons__box">
            <div class="icons__box__data">
              <img src="icons/About/Breakfast.png" class="icons__box__data__img"/>
            </div>
            <h3 class="icons__box__data__text">BREAKFAST</h3>
          </div>
          <div class="icons__box icons__box__data__img__airplane">
            <div class="icons__box__data ">
              <img src="./icons/About/Airplane.png" class="icons__box__data__img "/>
            </div>
            <h3 class="icons__box__data__text">Airport Pickup</h3>
          </div>
        </div>
        <div  class="icons__column">
          <div class="icons__box">
            <div class="icons__box__data">
              <img src="./icons/About/Location.png" class="icons__box__data__img"/>
            </div>
            <h3 class="icons__box__data__text">City Guide</h3>
          </div>
          <div class="icons__box">
            <div class="icons__box__data">
              <img src="./icons/About/Room.png" class="icons__box__data__img"/>
            </div>
            <h3 class="icons__box__data__text">Luxury Room</h3>
          </div>
          <div class="icons__desktop icons__box">
            <div class="icons__box__data">
              <img src="./icons/About/BBQ.png" class="icons__box__data__img"/>
            </div>
            <h3 class="icons__box__data__text">BBQ Party</h3>
          </div>
        </div>
      </section>
      <!--RESTAURANT-->
      <section class="rest">
        <div class="rest__container">
          <div class="rest__image">
            <img 
            src="./images/pexels-mary-10610009.jpg" 
            alt="Photo by Mary: https://www.pexels.com/photo/picnic-with-wine-on-beach-10610009/"
            class="rest__image__img"/>
          </div>
          <div>
            <h3 class="rest__subtitle">RESTAURANT</h3>
            <h1 class="rest__title">Get Restaurant Facilities & Many Other More</h1>
            <p class="rest__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
            <button class="rest__button">TAKE A TOUR</button>
          </div>
        </div>
      </section>   
      <!--SEPARATIONBLOCK-->    
      <div class="separationBlock"></div>
      <!--FACILITIES-->  
      <section class="facilities">
        <h3 class="facilities__subtitle">FACILITIES</h3>
        <h1 class="facilities__title">Core Features</h1>
        <div class="container facilities__movil">
          <!-- main swiper container -->
          <div class="swiper swiper_facilities">
          <!-- wrapper for slide -->
            <div class="swiper-wrapper">
              <!-- single slide -->
              <div class="swiper-slide">
                <div class="facilities__infobox"  style="background-image: url(./icons/About/01.png)">
                  <div class="facilities__infobox__icon">
                    <img src="./icons/About/Rating.png"/>
                  </div>
                  <h4 class="facilities__infobox__title">Have High Rating</h4>
                  <p class="facilities__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="facilities__infobox"  style="background-image: url(./icons/About/02.png)">
                  <div class="facilities__infobox__icon">
                    <img src="./icons/CoreFeaturesHours.png"/>
                  </div>
                  <h4 class="facilities__infobox__title">Quiet Hours</h4>
                  <p class="facilities__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="facilities__infobox" style="background-image: url(./icons/About/03.png)">
                  <div class="facilities__infobox__icon">
                    <img src="./icons/CoreFeaturesLocation.png"/>
                  </div>
                  <h4 class="facilities__infobox__title">Best Location</h4>
                  <p class="facilities__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="facilities__infobox"  style="background-image: url(./icons/About/04.png)">
                  <div class="facilities__infobox__icon">
                    <img src="./icons/CoreFeaturesCancelation.png"/>
                  </div>
                  <h4 class="facilities__infobox__title">Free Cancellation</h4>
                  <p class="facilities__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="facilities__infobox"  style="background-image: url(./icons/About/05.png)">
                  <div class="facilities__infobox__icon">
                    <img src="./icons/CoreFeaturesPayment.png"/>
                  </div>
                  <h4 class="facilities__infobox__title">Payment Options</h4>
                  <p class="facilities__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="facilities__infobox"  style="background-image: url(./icons/About/06.png)">
                  <div class="facilities__infobox__icon">
                    <img src="./icons/CoreFeaturesOffer.png"/>
                  </div>
                  <h4 class="facilities__infobox__title">Special Offers</h4>
                  <p class="facilities__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
              </div>
            </div> 
          
          </div>   
          <!-- pagination -->
          <div class="swiper-pagination"></div>
        </div>
        <div class="facilities__container facilities__desktop">
          <div class="facilities__infobox"  style="background-image: url(./icons/About/01.png)">
            <div class="facilities__infobox__icon">
              <img src="./icons/About/Rating.png"/>
            </div>
            <h4 class="facilities__infobox__title">Have High Rating</h4>
            <p class="facilities__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
          </div>
          <div class="facilities__infobox"  style="background-image: url(./icons/About/02.png)">
            <div class="facilities__infobox__icon">
              <img src="./icons/CoreFeaturesHours.png"/>
            </div>
            <h4 class="facilities__infobox__title">Quiet Hours</h4>
            <p class="facilities__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
          </div>
          <div class="facilities__infobox" style="background-image: url(./icons/About/03.png)">
            <div class="facilities__infobox__icon">
              <img src="./icons/CoreFeaturesLocation.png"/>
            </div>
            <h4 class="facilities__infobox__title">Best Location</h4>
            <p class="facilities__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
          </div>
          <div class="facilities__infobox"  style="background-image: url(./icons/About/04.png)">
            <div class="facilities__infobox__icon">
              <img src="./icons/CoreFeaturesCancelation.png"/>
            </div>
            <h4 class="facilities__infobox__title">Free Cancellation</h4>
            <p class="facilities__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
          </div>
          <div class="facilities__infobox"  style="background-image: url(./icons/About/05.png)">
            <div class="facilities__infobox__icon">
              <img src="./icons/CoreFeaturesPayment.png"/>
            </div>
            <h4 class="facilities__infobox__title">Payment Options</h4>
            <p class="facilities__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
          </div>
          <div class="facilities__infobox"  style="background-image: url(./icons/About/06.png)">
            <div class="facilities__infobox__icon">
              <img src="./icons/CoreFeaturesOffer.png"/>
            </div>
            <h4 class="facilities__infobox__title">Special Offers</h4>
            <p class="facilities__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
          </div>
        </div>
      </section>
      <!--COUNTER --> 
      <section class="counter">
        <h3 class="counter__subtitle">COUNTER</h3>
        <h1 class="counter__title">Some Fun Facts</h1>
        <div class="counter__container">
          <div class="counter__box">
            <div class="counter__box__icon">
              <img src="./icons/About/Happy Users.png" alt="icon happy users"/>
            </div>
            <div class="counter__box__text">
              <p class="counter__box__text__number">8000</p>
              <p class="counter__box__text__title">Happy Users</p>
            </div>
            <div>
              <img src="./icons/About/Arrow.png"/>
            </div>
          </div>  
          <div class="counter__box">
            <div class="counter__box__icon">
              <img src="./icons/About/Reviews.png" alt="icon happy users"/>
            </div>
            <div class="counter__box__text">
              <p class="counter__box__text__number">10M</p>
              <p class="counter__box__text__title">Reviews & Appriciate</p>
            </div>
            <div>
              <img src="./icons/About/Arrow.png"/>
            </div>
          </div>  
          <div class="counter__box">
            <div class="counter__box__icon">
              <img src="./icons/About/Earth.png" alt="icon happy users"/>
            </div>
            <div class="counter__box__text">
              <p class="counter__box__text__number">100</p>
              <p class="counter__box__text__title">Country Coverage</p>
            </div>
            <div>
              <img src="./icons/About/Arrow.png"/>
            </div>
          </div> 
        </div>
        <div class="container counter__movil" pagination="true">
          <div class="swiper swiper_about" >
              <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <div class="image__wrapper">
                        <img src="./images/20200703_142446.jpg" alt="image beach" class="counter__image__img"/>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="image__wrapper">
                        <img src="./images/20200528_103651.jpg" alt="image beach" class="counter__image__img"/>
                      </div>
                  </div>
      
                  <div class="swiper-slide">
                      <div class="image__wrapper">
                        <img src="./images/20200821_111831.jpg" alt="image beach" class="counter__image__img"/>
                      </div>
                  </div>

              </div>
      
              <!-- navigation buttton -->
          </div>
        </div>  
        <div class="counter__imageContainer">
          <div>
            <img src="./images/20200703_142446.jpg" alt="image beach" class="counter__image__img"/>
          </div>
          <div>
            <img src="./images/20200528_101727.jpg" alt="image beach" class="counter__image__img"/>
          </div>
      </div>
    </section>
@endsection