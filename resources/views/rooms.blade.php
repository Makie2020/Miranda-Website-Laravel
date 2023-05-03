@extends('layouts.app')
@section('content')
     <!--Header--> 
     <div class="header">
      <h3 class="header__subtitle">THE ULTIMATE LUXURY</h3>
      <h1 class="header__title">Ultimate Room</h1>
      <div class="header__box">
        <p class="header__box__text">Home 	&nbsp;| &nbsp;<span class="header__box__text__span">Rooms</span></p>
      </div>
    </div>
    <!--ROOM--> 
    <section class="room"> 
      <div class="room__container">
      @foreach ($rooms as $room)
        <div class="room__container__box">
          <div class="room__imageBox">
            <img src="./images/20200821_111838.jpg" alt="view apartment" class="room__imageBox__img"/>
          </div>
          <div class="room__iconbox">
            <img src="./icons/Bed_icon.png" class="room__iconbox__icon"/>
            <img src="./icons/Wifi.png"class="room__iconbox__icon"/>
            <img src="./icons/Car.png"class="room__iconbox__icon"/>
            <img src="./icons/SnowFlake.png"class="room__iconbox__icon"/>
            <img src="./icons/Gym.png"class="room__iconbox__icon"/>
            <img src="./icons/NoSmoking.png"class="room__iconbox__icon"/>
            <img src="./icons/Cocktail.png"class="room__iconbox__icon"/>
          </div>
          <div class="room__infobox">
            <h3 class="room__infobox__title">{{ $room['room_type'] }}</h3>
            <p class="room__infobox__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
            <div class="room__infobox__data">
              <p class="room__infobox__data__price">${{ $room['price'] }}/Night</p>
              <p class="room__infobox__data__button">Booking Now</p>
            </div>
          </div>
        </div>   
        @if($loop->iteration > 8)
          @break
          @endif

        @endforeach
      </div>
      <div class="room__pagination"> 
        <img src="./icons/PaginationRooms.png" alt="pagination"/>
      </div>
    </section>
@endsection