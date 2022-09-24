const navbtn = document.querySelector('.ham')
const navbar = document.querySelector('.nav-bar .main-menu #menu-jaydenishere_main_menu')
const anySection = document.querySelectorAll('elementor-section')
const menuItem = document.querySelectorAll('.menu-item-has-children > a') //arrow onclick


const subMenu = document.querySelectorAll('.sub-menu')
// nav hambergur
navbtn.addEventListener('click', () => {
    navbar.classList.toggle('active')
    navbtn.classList.toggle('change')
  
  })
 
  // // click anywhere to close the nav sidebar
  // if(navbar.classList.contains('active'))
  // anySection.addEventListener('click',()=>{
  //   // navbar.classList.remove('active')
  //   alert('clicked')
  // })

// show arrow down if has children
const addIcon = () => {
  for (let i = 0; i < menuItem.length; i++) {
      menuItem[i].insertAdjacentHTML(
        'afterend',
        '<span class="menu-arrow"></span>'
      )
  }
}
addIcon()


const muneArrow = document.querySelectorAll('.menu-arrow')
// mobile drop down menu
const mobileDropdown = () => {
  for (let i = 0; i < muneArrow.length; i++) {
    //first layer correct target
    muneArrow[i].addEventListener('click', () => {
      subMenu[i].classList.toggle('open')
      muneArrow[i].classList.toggle('change')
    })  
  }
}
mobileDropdown()

//about-me simple slideshow
var i = 0;
var images = [];
var time = 3000;

//image list
images[0] = 'https://bit.ly/3T0kmc3';
images[1] = 'https://bit.ly/3Qr7nP0';
images[2] = 'https://bit.ly/3C6PeSm';
images[3] = 'https://bit.ly/3AmFOjh';

//Change Image
function changeimg(){
  document.slide.src = images[i]

  if(i< images.length -1){//make 0 - 1 = -1
  i++;
  }else{
    i = 0;
  }
  setTimeout("changeimg()",time)
}

window.onload = changeimg;//run function when the page intially load

//change contact me background color
const changeColor = () => {
  const contact = document.querySelector('#contact')
  if (contact) {
    if (
      window.innerHeight + window.pageYOffset + contact.offsetHeight >
      document.body.offsetHeight
    ) {
      contact.classList.add('bg-color-1')
    } else {
      contact.classList.remove('bg-color-1')
    }
  }
}
window.addEventListener('scroll', changeColor)

const swiper = new Swiper('.swiper', {
  slidesPerView: '2',
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
    breakpoints: {
        1400: {
            slidesPerView: 3,
        },
        640: {
            slidesPerView: 2,
        },
        320: {
            slidesPerView: 1,
        }
      }
});

//thumbnail change video
const youtubeVideo1 = document.querySelector('.youtube-video1');
const thumbnails1 = document.querySelectorAll('.thumbnail1');
const youtubeVideo2 = document.querySelector('.youtube-video2');
const thumbnails2 = document.querySelectorAll('.thumbnail2');
const youtubeVideo3 = document.querySelector('.youtube-video3');
const thumbnails3 = document.querySelectorAll('.thumbnail3');
function imageChangeSrc1(){
  thumbnails1.forEach(thumbnail1 =>{
    thumbnail1.addEventListener("click",() =>{
      youtubeVideo1.src = thumbnail1.getAttribute("data-src")
    })
  })  
}

function imageChangeSrc2(){
  thumbnails2.forEach(thumbnail2 =>{
    thumbnail2.addEventListener("click",() =>{
      youtubeVideo2.src = thumbnail2.getAttribute("data-src")
    })
  })
}

function imageChangeSrc3(){
  thumbnails3.forEach(thumbnail3 =>{
    thumbnail3.addEventListener("click",() =>{
      youtubeVideo3.src = thumbnail3.getAttribute("data-src")
    })
  })
}

imageChangeSrc1()
imageChangeSrc2()
imageChangeSrc3()

 //*****************************website landing animation****************************
 let bg = document.querySelector('#bg');
 let moon = document.querySelector('#moon');
 let mountain = document.querySelector('#mountain');
 let road = document.querySelector('#road');
 let text = document.querySelector('#landing-text');

 window.addEventListener('scroll',function(){
  var value = window.scrollY;

  bg.style.top = value * 0.5 + 'px';
  moon.style.left = -value * 1 + 'px';
  mountain.style.top = -value * 0.15 + 'px';
  road.style.top = value * 0.15 + 'px';
  text.style.top = value * 1 + 'px';

 })