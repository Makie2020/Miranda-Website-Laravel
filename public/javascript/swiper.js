const swiper_text = new Swiper(".swiper_text", {
  loop: true, 
})
const swiper_main = new Swiper('.swiper_main', {
  loop: true,   
  slidesPerView: 1,
  spaceBetween: 20,                   
  pagination: {
      el: '.swiper-pagination',
  },                  
  navigation: {                       
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
  },    
  breakpoints: {
    1000: {
      slidesPerView: 3,
      spaceBetween: 20
    }
  }                              
})

const swiper_offer = new Swiper('.swiper_offer', {
  loop: true,                                        
  navigation: {                       
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
  },                               
})
const swiper_roomdetail = new Swiper('.swiper_roomdetail', {
  loop: true,                                        
  navigation: {                       
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
  },                               
})

const swiper_facilities = new Swiper('.swiper_facilities', {
  loop: true,                                        
  navigation: {                       
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
  },                               
})
const swiper_about = new Swiper('.swiper_about', {
  loop: true,                                                                  
})
const swiper_menu = new Swiper('.swiper_menu', {
  loop: true,                                        
  navigation: {                       
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
  },                               
})
const swiper_menuDesktop = new Swiper('.swiper_menuDesktop', {
  loop: true,   
  slidesPerView: 2,
  spaceBetween: 30,                                      
  navigation: {                       
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
  },                               
})