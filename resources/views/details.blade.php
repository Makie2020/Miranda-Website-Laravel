@extends('layouts.app')
@section('content')
    <div class="header">
      <h3 class="header__subtitle">THE ULTIMATE LUXURY</h3>
      <h1 class="header__title">New Details</h1>
      <div class="header__box">
        <p class="header__box__text">Home 	&nbsp;| &nbsp;<span class="header__box__text__span">Blog</span></p>
      </div>
    </div>
    <!--CONTACT--> 
    <section class="contact">
      <div class="contact__container contact__container__first">
        <div class="contact__container__imagebox">
          <img src="./icons/HotelAdress.png" alt="icon hotel adress" class="contactContainer__imagebox__img"/>
        </div>
        <div class="contact__container__info">
          <h3 class="contact__container__info__title">Hotel Address</h3>
          <p class="contact__container__info__text">19/A, Cirikon City hall Tower <br/> New York, NYC</p>
        </div>
      </div>
      <div class="contact__container contact__container__second">
        <div class="contact__container__imagebox">
          <img src="./icons/HotelAdress.png" alt="icon hotel adress" class="contactContainer__imagebox__img"/>
        </div>
        <div class="contact__container__info">
          <h3 class="contact__container__info__title">Phone Number</h3>
          <p class="contact__container__info__text">+ 97656 8675 7864 7 <br/>
            + 876 766 8675 765 6 </p>
        </div>
      </div>
      <div class="contact__container contact__container__third">
        <div class="contact__container__imagebox">
          <img src="./icons/Mail.png" alt="icon email" class="contactContainer__imagebox__img"/>
        </div>
        <div class="contact__container__info">
          <h3 class="contact__container__info__title">Email</h3>
          <p class="contact__container__info__text">info@hotelMiranda.com <br/>info@hotelMiranda.com</p>
        </div>
      </div>
    </section>
    <!--FORM-->
    <section class="form">
      <div class="form__imagebox">
        <img src="./images/20200703_142446.jpg" alt="picture of the swimmingpool" class="form__imagebox__img"/>
      </div>
      <form  action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form__form">
          <input type="text" class="form__form__input form__form__phon form-control  @error('name') is-invalid @enderror" name="name" placeholder="Name">
          @error('name')
            <div class="form__alert">{{ $message }}</div>
          @enderror
          <input type="text" class="form__form__input form__form__phone form-control  @error('phoneNumber') is-invalid @enderror" name="phoneNumber" placeholder="Add phone number">
          @error('phoneNumber')
            <div class="form__alert">{{ $message }}</div>
          @enderror
          <input type="email" class="form__form__input form__form__email form-control  @error('email') is-invalid @enderror" name="email" placeholder="Email">
              @error('email')
          <div class="form__alert">{{ $message }}</div>
          @enderror
          <input type="text" class="form__form__input form__form__subject form-control  @error('phoneNumber') is-invalid @enderror" name="subject" placeholder="Enter Subject">
          @error('subject')
            <div class="form__alert">{{ $message }}</div>
          @enderror
        </div>
        <input type="text" class="form__form__message form-control  @error('phoneNumber') is-invalid @enderror" name="subject" placeholder="Enter message">
        @error('message')
          <div class="form__alert">{{ $message }}</div>
        @enderror
        <button type = "submit"  name = "submit" value = "Submit" class="form__form__button">SEND</button>
      </form>
    </section>
    <!--SEPARATIONBLOCK-->
    <div class="separationBlock"></div> 
    <!--FOOTER -->  
@endsection