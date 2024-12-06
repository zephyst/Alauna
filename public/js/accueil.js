const imageWrapper = document.querySelector('.image-wrapper');
const imageItems = document.querySelectorAll('.image-wrapper > *');
const imageLength = imageItems.length;
const perView = 1;
let totalScroll = 1;
const delay = 2000;

imageWrapper.style.setProperty('--per-view', perView);
for(let i = 0; i < perView; i++) {
    imageWrapper.insertAdjacentHTML('beforeend', imageItems[i].outerHTML)
}



function scrolling(n) {
    totalScroll += n;

    if(totalScroll == imageLength + 1) {
        totalScroll = 1;
        imageWrapper.style.left = '0';
    }
    if(totalScroll < 1) {
        totalScroll = imageLength;
        imageWrapper.style.left = `-${100*(imageLength)-100}vw`;
    }
    console.log(totalScroll);
    imageWrapper.style.left = `-${totalScroll * 100 - 100}vw`;
}


window.onload = function() {
    const popup = document.getElementById('popup');
    popup.style.display = 'block'; // Affiche le pop-up
}

function closePopup() {
    const popup = document.getElementById('popup');
    popup.style.display = 'none'; // Ferme le pop-up 
}
