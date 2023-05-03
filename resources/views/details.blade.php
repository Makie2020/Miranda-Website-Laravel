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
      <?php
            if (isset($_POST['submit'])) {
                echo "<script>alert('We have receoved yor request and will contact you within 48 hours');</script>" ;
            }
        ?>
      <form method="post" action="details.php">
        <div class="form__form">
          <input placeholder="Your full name" class="form__form__input form__form__name"/>
          <input placeholder="Add phone number"class="form__form__input form__form__phone"/>
          <input placeholder="Enter email address"class="form__form__input form__form__email"/>
          <input placeholder="Enter subject"class="form__form__input form__form__subject"/>
        </div>
        <input placeholder="Enter message"class="form__form__message"/>
        <button type = "submit"  name = "submit" value = "Submit" class="form__form__button">SEND</button>
      </form>
    </section>
    <!--SEPARATIONBLOCK-->
    <div class="separationBlock"></div> 
    <!--FOOTER -->  
@endsection