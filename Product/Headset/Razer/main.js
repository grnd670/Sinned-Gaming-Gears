const current = document.querySelector('#current');
const imgs = document.querySelectorAll('.imgs img');
const opacity = 0.3;

imgs[0].style.opacity = opacity;


imgs.forEach(img => img.addEventListener('click', imgClick));

function imgClick(e){
    //reset opacity
    imgs.forEach(img => (img.style.opacity = 1));

    //change current image
    current.src = e.target.src;

    // change the opacity to opacity var
    e.target.style.opacity = opacity;

    //add fade in in current
    current.classList.add('fade-in');

    //remove fade in class in current
    setTimeout(() => current.classList.remove('fade-in'),500);
}
