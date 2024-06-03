//slider 14 cardclassteater
let sliderContainer14 = document.getElementById('sliderContainer14');
let slider14 = document.getElementById('slider14');
let cards14 = slider14.getElementsByTagName('li');

let elementsToShow14 = 3; // Atur sesuai kebutuhan
if (document.body.clientWidth < 1000) {
    elementsToShow14 = 1;
} else if (document.body.clientWidth > 1000) {
    elementsToShow14 = 3;
}

let sliderContainerWidth14 = sliderContainer14.clientWidth;
let cardWidth14 = sliderContainerWidth14 / elementsToShow14;

slider14.style.width = cards14.length * cardWidth14 + 'px';
slider14.style.transition = 'margin';
slider14.style.transitionDuration = '1s';

for (let index = 0; index < cards14.length; index++) {
    const element14 = cards14[index];
    element14.style.width = cardWidth14 + 'px';
}

function next14() {
    if (+slider14.style.marginLeft.slice(0, -2) != -cardWidth14 * (cards14.length - elementsToShow14))
        slider14.style.marginLeft = ((+slider14.style.marginLeft.slice(0, -2)) - cardWidth14) + 'px';
}

function prev14() {
    if (+slider14.style.marginLeft.slice(0, -2) != 0)
        slider14.style.marginLeft = ((+slider14.style.marginLeft.slice(0, -2)) + cardWidth14) + 'px';
}