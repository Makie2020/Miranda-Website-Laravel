@extends('layouts.app')
@section('content')
<!--Header-->
<div class="header">
  <h3 class="header__subtitle">THE ULTIMATE LUXURY</h3>
  <h1 class="header__title">Our Offers</h1>
  <div class="header__box">
    <p class="header__box__text">Home &nbsp;| &nbsp;<span class="header__box__text__span">Offers</span></p>
  </div>
</div>
<!--OFFER-->
<section class="offer">
@foreach ($rooms as $room)
  <div class="offer__box">
    <div class="offer__imagebox">
      <img src="./images/20210423_102431.jpg" alt="view from apartment" class="offer__imagebox__img" />
      <div class="offer__imagebox__text">
        <p class="offer__details__priceOld">${{ $room['price'] }} <span class="offer__details__priceOld__night">/Night</span></p>
        <p class="offer__details__priceNew">${{ $room['offer_price'] }} <span class="offer__details__priceNew__night">/Night</span></p>
      </div>
    </div>
    <div class="offer__container">
      <div class="offer__container__details">
        <div class="offer__details">
          <h3 class="offer__details__subtitle"> {{ $room['room_type'] }}</h3>
          <h1 class="offer__details__title">{{ $room['name'] }}</h1>
        </div>
        <div class="offer__details__price">
          <p class="offer__details__priceOld">${{ $room['price'] }} <span class="offer__details__priceOld__night">/Night</span></p>
          <p class="offer__details__priceNew">${{ $room['offer_price'] }} <span class="offer__details__priceNew__night">/Night</span></p>
        </div>
      </div>
      <hr class="offer__line">
      <div class="offer__containerDetails">
        <div class="offer__detailsContainer">
          <p class="offer__details__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <button class="offer__buttonbox__button offer__buttonbox__button__desktop">BOOK NOW</button>
        </div>
        <div class="offer__list">
          <ul class="offer__list__ul">
            <li class="offer__list__li"><img src="./icons/RoomDetails/AC.png" alt="icon Air Conditioning" class="offer__list__img" />Air conditioner </li>
            <li class="offer__list__li"><img src="./icons/RoomDetails/Breakfast.png" alt="icon Breakfast" class="offer__list__img" />Breakfast</li>
            <li class="offer__list__li"><img src="./icons/RoomDetails/Cleaning.png" alt="icon Cleaning" class="offer__list__img" />Cleaning </li>
            <li class="offer__list__li"><img src="./icons/RoomDetails/Grocery.png" alt="icon Grocery" class="offer__list__img" />Grocery</li>
            <li class="offer__list__li"><img src="./icons/RoomDetails/Shop.png" alt="icon Shop" class="offer__list__img" />Shop near</li>
          </ul>
          <ul class="offer__list__ul">
            <li class="offer__list__li"><img src="./icons/RoomDetails/Wifi.png" alt="icon High speed Wifi" class="offer__list__img" />High speed Wifi </li>
            <li class="offer__list__li"><img src="./icons/RoomDetails/Kitchen.png" alt="icon Kitchen" class="offer__list__img" />Kitchen</li>
            <li class="offer__list__li"><img src="./icons/RoomDetails/Shower.png" alt="icon Shower" class="offer__list__img" />Shower </li>
            <li class="offer__list__li"><img src="./icons/RoomDetails/Single Bed.png" alt="icon Single bed" class="offer__list__img" />Single bed</li>
            <li class="offer__list__li"><img src="./icons/RoomDetails/Towels.png" alt="icon Towels" class="offer__list__img" />Towels</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="offer__buttonbox">
      <button class="offer__buttonbox__button offer__buttonbox__button__movil">BOOK NOW</button>
    </div>
  </div>

  @if($loop->iteration > 2)
  @break
  @endif

@endforeach
</section>
<!--POPULAR ROOMS-->
<section class="popular">
  <h3 class="popular__subtitle">POPULAR LIST</h3>
  <h1 class="popular__title">Popular Rooms</h1>
  <div class="popular__container">
  @foreach ($rooms as $room)
    <div class="popular__container__column">
      <div class="popular__imageBox">
        <img src="./images/20200821_111838.jpg" alt="view apartment" class="popular__imageBox__img" />
      </div>
      <div class="popular__iconbox">
        <img src="./icons/Bed_icon.png" class="popular__iconbox__icon" />
        <img src="./icons/Wifi.png" class="popular__iconbox__icon" />
        <img src="./icons/Car.png" class="popular__iconbox__icon" />
        <img src="./icons/SnowFlake.png" class="popular__iconbox__icon" />
        <img src="./icons/Gym.png" class="popular__iconbox__icon" />
        <img src="./icons/NoSmoking.png" class="popular__iconbox__icon" />
        <img src="./icons/Cocktail.png" class="popular__iconbox__icon" />
      </div>
      <div class="popular__infobox">
        <h3 class="popular__infobox__title">{{ $room['room_type'] }}</h3>
        <p class="popular__infobox__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
        <div class="popular__infobox__data">
          <p class="popular__infobox__data__price">${{ $room['price'] }}/Night</p>
          <p class="popular__infobox__data__button">Booking Now</p>
        </div>
      </div>
    </div>
    @if($loop->iteration > 2)
    @break
    @endif

  @endforeach
  </div>
  <div class="container popular__swiper">
    <!-- main swiper container -->
    <div class="swiper swiper_offer popular__swiper">
      <!-- wrapper for slide -->
      <div class="swiper-wrapper">
        <!-- single slide -->
        <div class="swiper-slide">
          <div class="popular__imageBox">
            <img src="./images/20200821_111838.jpg" alt="view apartment" class="popular__imageBox__img" />
          </div>
          <div class="popular__iconbox">
            <img src="./icons/Bed_icon.png" class="popular__iconbox__icon" />
            <img src="./icons/Wifi.png" class="popular__iconbox__icon" />
            <img src="./icons/Car.png" class="popular__iconbox__icon" />
            <img src="./icons/SnowFlake.png" class="popular__iconbox__icon" />
            <img src="./icons/Gym.png" class="popular__iconbox__icon" />
            <img src="./icons/NoSmoking.png" class="popular__iconbox__icon" />
            <img src="./icons/Cocktail.png" class="popular__iconbox__icon" />
          </div>
          <div class="popular__infobox">
            <h3 class="popular__infobox__title">Minimal Duplex Room</h3>
            <p class="popular__infobox__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
            <div class="popular__infobox__data">
              <p class="popular__infobox__data__price">$345/Night</p>
              <p class="popular__infobox__data__button">Booking Now</p>
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </div>
</section>
<div class="popular__seperation"></div>
@endsection