@extends('layouts.app')
@section('content')
    <!--Header--> 
    <section class="header">
      <h3 class="header__subtitle">THE ULTIMATE LUXURY</h3>
      <h1 class="header__title">Ultimate Room</h1>
      <div class="header__box ">
        <p class="header__box__text">Home 	&nbsp;| &nbsp;<span class="header__box__text__span">Room Details</span></p>
      </div>
    </section>
    <!--ROOM DETAIL--> 
    <div class="detail__container">
      <section class="detail">
        <div class="detail__info">
          <div class="detail__columnText"> 
            <h3 class="detail__info__subtitle">DOUBLE BED</h3>
            <h1 class="detail__info__title">Luxury Double Bed</h1>
          </div>
          <div class="detail__columnPrice">
            <p class="detail__info__price">$345<span class="detail__info__night">/Night</span></p>
          </div>
        </div>
        <div class="detail__img">
          <img src="./images/20210527_143006.jpg" alt="view from room" class="detail__img__image"/>
        </div>
      </section>
      <!--AVAILIBILITY-->   
      <section class="availability">
        <h4 class="availability__title">Check Availability</h4>
        <div class="availability__input">
          <p class="availability__input__name">Check in</p>
          <input 
            placeholder="Fri, 16th June 2023" 
            class="availability__input__input"
          />
        </div>
        <div class="availability__input">
          <p class="availability__input__name">Check Out</p>
          <input 
            placeholder="Sun, 18th June 2023" 
            class="availability__input__input"
          />
        </div>
        <div class="availability__buttonbox">
          <button class="availability__buttonbox__button">CHECK AVAILABILITY</button>
        </div>
      </section>
    </div>
    <!--TEXT-->  
    <section>
      <p  class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
    </section>
    <!--AMENITIES-->   
    <section class="amenities">
      <h1 class="amenities__title">Amenities</h1>
      <hr class="amenities__line"/>
      <div class="amenities__list">
        <ul class="amenities__list__ul">
          <li class="amenities__list__li"><img src="./icons/RoomDetails/AC.png" alt="icon Air Conditioning" class="amenities__list__img"/>Air conditioner </li>
          <li class="amenities__list__li"><img src="./icons/RoomDetails/Breakfast.png" alt="icon Breakfast" class="amenities__list__img"/>Breakfast</li>
          <li class="amenities__list__li"><img src="./icons/RoomDetails/Cleaning.png" alt="icon Cleaning" class="amenities__list__img"/>Cleaning </li>
          <li class="amenities__list__li"><img src="./icons/RoomDetails/Grocery.png" alt="icon Grocery" class="amenities__list__img"/>Grocery</li>
          <li class="amenities__list__li"><img src="./icons/RoomDetails/Shop.png" alt="icon Shop" class="amenities__list__img"/>Shop near</li>
          <li class="amenities__list__li"><img src="./icons/RoomDetails/247 support.png" alt="icon 24/7 Online Support" class="amenities__list__img"/>24/7  Online Support</li>
          <li class="amenities__list__li"><img src="./icons/RoomDetails/SmartSecurity.png" alt="icon Smart Security" class="amenities__list__img"/>Smart Security</li>
          <li class="amenities__list__li"><img src="./icons/RoomDetails/Wifi.png" alt="icon High speed Wifi" class="amenities__list__img"/>High speed Wifi </li>
          <li class="amenities__list__li"><img src="./icons/RoomDetails/Kitchen.png" alt="icon Kitchen" class="amenities__list__img"/>Kitchen</li>
          <li class="amenities__list__li"><img src="./icons/RoomDetails/Shower.png" alt="icon Shower" class="amenities__list__img"/>Shower </li>
          <li class="amenities__list__li"><img src="./icons/RoomDetails/Single Bed.png" alt="icon Single bed" class="amenities__list__img"/>Single bed</li>
          <li class="amenities__list__li"><img src="./icons/RoomDetails/Towels.png" alt="icon Towels" class="amenities__list__img"/>Towels</li>
          <li class="amenities__list__li"><img src="./icons/RoomDetails/Locker.png" alt="icon Strong Locker" class="amenities__list__img"/>Strong Locker</Strong></li>
          <li class="amenities__list__li"><img src="./icons/RoomDetails/Expert Team.png" alt="icon Expert Team" class="amenities__list__img"/>Expert Team</li>
        </ul>
      </div>
    </section>
    <!--Founder-->
    <section class="founder">
      <div class="founder__imagebox">
        <img src="./images/pexels-thisisengineering-3861954.jpg" alt="Fouder Hotel Miranda" class="founder__imagebox__img"/>
        <div class="founder__imagebox__circle"><img src="./icons/About/okayicon.png" class="founder__imagebox__icon"></div> 
      </div>
      <div class="founder__infobox">
        <h1 class="founder__infobox__title">Rosalina D. William</h1>
        <h3 class="founder__infobox__subtitle">Founder, Qux Co.</h3>
        <p class="founder__infobox__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
      </div>
    </section>
    <!--Cancellation-->
    <section class="cancellation">
      <h1 class="cancellation__title">Cancellation</h1>
      <hr class="cancellation__line"/>
      <p class="cancellation__text">Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.</p>
    </section>
    <!--RELATED ROOMS-->    
    <section class="related">
      <h1 class="cancellation__title">Related Rooms</h1>
      <hr class="cancellation__line"/>
      <div class="related__container">
        <div class="related__container__column">
          <div class="related__imageBox">
            <img src="./images/20200821_111838.jpg" alt="view apartment" class="related__imageBox__img"/>
          </div>
          <div class="related__iconbox">
            <img src="./icons/Bed_icon.png" class="related__iconbox__icon"/>
            <img src="./icons/Wifi.png"class="related__iconbox__icon"/>
            <img src="./icons/Car.png"class="related__iconbox__icon"/>
            <img src="./icons/SnowFlake.png"class="related__iconbox__icon"/>
            <img src="./icons/Gym.png"class="related__iconbox__icon"/>
            <img src="./icons/NoSmoking.png"class="related__iconbox__icon"/>
            <img src="./icons/Cocktail.png"class="related__iconbox__icon"/>
          </div>
          <div class="related__infobox">
            <h3 class="related__infobox__title">Minimal Duplex Room</h3>
            <p class="related__infobox__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
            <div class="related__infobox__data">
              <p class="related__infobox__data__price">$345/Night</p>
              <p class="related__infobox__data__button">Booking Now</p>
            </div>
          </div>
        </div>
        <div  class="related__container__column">
          <div class="related__imageBox">
            <img src="./images/20200821_111838.jpg" alt="view apartment" class="related__imageBox__img"/>
          </div>
          <div class="related__iconbox">
            <img src="./icons/Bed_icon.png" class="related__iconbox__icon"/>
            <img src="./icons/Wifi.png"class="related__iconbox__icon"/>
            <img src="./icons/Car.png"class="related__iconbox__icon"/>
            <img src="./icons/SnowFlake.png"class="related__iconbox__icon"/>
            <img src="./icons/Gym.png"class="related__iconbox__icon"/>
            <img src="./icons/NoSmoking.png"class="related__iconbox__icon"/>
            <img src="./icons/Cocktail.png"class="related__iconbox__icon"/>
          </div>
          <div class="related__infobox">
            <h3 class="related__infobox__title">Minimal Duplex Room</h3>
            <p class="related__infobox__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
            <div class="related__infobox__data">
              <p class="related__infobox__data__price">$345/Night</p>
              <p class="related__infobox__data__button">Booking Now</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <!-- main swiper container -->
        <div class="swiper swiper_roomdetail">
        <!-- wrapper for slide -->
            <div class="swiper-wrapper">
            <!-- single slide -->
                <div class="swiper-slide">
                    <div class="related__imageBox">
                      <img src="./images/20200821_111838.jpg" alt="view apartment" class="related__imageBox__img"/>
                    </div>
                    <div class="related__iconbox">
                      <img src="./icons/Bed_icon.png" class="related__iconbox__icon"/>
                      <img src="./icons/Wifi.png"class="related__iconbox__icon"/>
                      <img src="./icons/Car.png"class="related__iconbox__icon"/>
                      <img src="./icons/SnowFlake.png"class="related__iconbox__icon"/>
                      <img src="./icons/Gym.png"class="related__iconbox__icon"/>
                      <img src="./icons/NoSmoking.png"class="related__iconbox__icon"/>
                      <img src="./icons/Cocktail.png"class="related__iconbox__icon"/>
                    </div>
                    <div class="related__infobox">
                      <h3 class="related__infobox__title">Minimal Duplex Room</h3>
                      <p class="related__infobox__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                      <div class="related__infobox__data">
                        <p class="related__infobox__data__price">$345/Night</p>
                        <p class="related__infobox__data__button">Booking Now</p>
                      </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>    
      </div>   
    </section> 
@endsection