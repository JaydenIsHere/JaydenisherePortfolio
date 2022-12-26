const navbtn = document.querySelector('.ham')
const navbar = document.querySelector('.nav-bar .main-menu #menu-jaydenishere_main_menu')
const anySection = document.querySelectorAll('elementor-section')
const menuItem = document.querySelectorAll('.menu-item-has-children > a') //arrow onclick


const subMenu = document.querySelectorAll('.sub-menu')
// nav hambergur
navbtn.addEventListener('click', () => {
    navbar.classList.toggle('active');
    navbtn.classList.toggle('change');
  
  })
 

const muneArrow = document.querySelectorAll('.menu-arrow')
// mobile drop down menu
const mobileDropdown = () => {
  for (let i = 0; i < muneArrow.length; i++) {
    //first layer correct target
    muneArrow[i].addEventListener('click', () => {
      subMenu[i].classList.toggle('open');
      muneArrow[i].classList.toggle('change');
    })  
  }
}
mobileDropdown()

//hover effect
const hoverMenu = document.querySelector('#menu-jaydenishere_main_menu')
const menuLink = document.querySelectorAll('.menu-item a')
menuLink.forEach(l => l.classList.add('menu-link-hover'))

const handleMouseEvent = function(e){
  //event delegation

if(e.target.classList.contains('menu-link-hover')){
  const link = e.target;
  //target sibling element
const sibling = link.closest('#menu-jaydenishere_main_menu').querySelectorAll('.menu-link-hover')

sibling.forEach(el => {
  if(el !== link) el.style.opacity = this;})
}

}

hoverMenu.addEventListener('mouseover',handleMouseEvent.bind(0.5));
hoverMenu.addEventListener('mouseout',handleMouseEvent.bind(1));





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
  setTimeout("changeimg()",time);
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
      contact.classList.add('bg-color-1');
    } else {
      contact.classList.remove('bg-color-1');
    }
  }
};
window.addEventListener('scroll', changeColor);

const swiper = new Swiper('.video-swiper', {
  effect: 'coverflow',
  loop:true,
  slidesPerView: 3,
        spaceBetween: 2,
        slidesPerGroup: 4,
        loopFillGroupWithBlank: true,
        grabCursor: true,
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

    breakpoints: {
        1400: {
            slidesPerView: 3,
        },
        640: {
            slidesPerView: 3,
        },
        390: {
            slidesPerView: 3,
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
const youtubeVideo4 = document.querySelector('.youtube-video4');
const thumbnails4 = document.querySelectorAll('.thumbnail4');


const imageChange = (link,video) =>{
  link.forEach(l =>{
    l.addEventListener("click",() =>{
      video.src = l.dataset.src;
    });
  })  
}
imageChange(thumbnails1,youtubeVideo1);
imageChange(thumbnails2,youtubeVideo2);
imageChange(thumbnails3,youtubeVideo3);
imageChange(thumbnails4,youtubeVideo4);


 //*****************************website landing animation****************************
 let bg = document.querySelector('#bg');
 let moon = document.querySelector('#moon');
 let mountain = document.querySelector('#mountain');
 let road = document.querySelector('#road');
 let text = document.querySelector('#landing-text');

 window.addEventListener('scroll',function(){
  let value = window.scrollY;

  bg.style.top = value * 0.5 + 'px';
  moon.style.left = -value * 1 + 'px';
  mountain.style.top = -value * 0.15 + 'px';
  road.style.top = value * 0.15 + 'px';
  text.style.top = value * 1 + 'px';

 });


//------web project animation slide up--------
const webProject = document.querySelectorAll('.project');

const webProjectAbsCallback = function(entries,observer){
  console.log(entries)
const [entry] = entries;
if(!entry.isIntersecting) return;
//only loaded all images then reveal image
  entry.target.classList.remove('project-hidden');
observer.unobserve(entry.target)
}
const webProjectAbs = new IntersectionObserver(webProjectAbsCallback,{
  root:null,
  threshold:0.3
});

webProject.forEach(function(web)  {
  web.classList.add('project-hidden');
  webProjectAbs.observe(web);
})

//------------Lazy load-------------
const lazyLoadAllImages = function(){
const lazyLoadImages = document.querySelectorAll('img[data-lazy-src]');

const lazyLoadAbsCallback = function(entries,observer){
const [entry] = entries;
if(!entry.isIntersecting) return;
const lazySrc = entry.target.dataset.lazySrc
entry.target.setAttribute('src',lazySrc);

entry.target.addEventListener('load',function(){
  entry.target.classList.remove('image-blur');
})
observer.unobserve(entry.target)
}

const lazyLoadAbs = new IntersectionObserver(lazyLoadAbsCallback,{
  root:null,
  threshold:0.2
});

lazyLoadImages.forEach(function(li)  {
  li.classList.add('image-blur');
  lazyLoadAbs.observe(li);
})
}
lazyLoadAllImages()

//  Intersection will affected other function...so I put it at last
const aboutFadeIn = function(){
const aboutMeSection = document.querySelector('.about-me-wrapper');

const aboutAbsCallback = function(entries,observer){
const [entry] = entries;
if(!entry.isIntersecting) return;
entry.target.classList.remove('hidden');
if (entry.isIntersecting) {
  observer.disconnect();
}
}
const aboutAbs = new IntersectionObserver(aboutAbsCallback,{
  root:null,
  threshold:0.3
});
aboutAbs.observe(aboutMeSection);
}
aboutFadeIn()