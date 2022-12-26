//popup image
const allGraphics = document.querySelector('.graphic-image-container')
const graphicCross = document.querySelector('.graphic-image-container .popup-image span')
const popUpImage = document.querySelector('.graphic-image-container .popup-image')

//event delegation.bubbling
allGraphics.addEventListener('click', (e) => {
  if (e.target.matches('.graphic-image')) {
    const src = e.target.getAttribute('src');
    document.querySelector('.popup-img').src = src;
    popUpImage.style.display = 'block';
  }
});

const eventForPopUpImage = function(img){
  img.addEventListener( 'click',() => {
    popUpImage.style.display = 'none';
  });
}
eventForPopUpImage(graphicCross)
eventForPopUpImage(popUpImage)

document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    popUpImage.style.display = 'none'
  }
});