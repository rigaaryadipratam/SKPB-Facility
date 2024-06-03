//slider 12 cardclasstw1_36
let sliderContainer12 = document.getElementById('sliderContainer12');
let slider12 = document.getElementById('slider12');
let cards12 = slider12.getElementsByTagName('li');

let elementsToShow12 = 4; // Atur sesuai kebutuhan
if (document.body.clientWidth < 1000) {
    elementsToShow12 = 1;
} else if (document.body.clientWidth > 1000) {
    elementsToShow12 = 4;
}

let sliderContainerWidth12 = sliderContainer12.clientWidth;
let cardWidth12 = sliderContainerWidth12 / elementsToShow12;

slider12.style.width = cards12.length * cardWidth12 + 'px';
slider12.style.transition = 'margin';
slider12.style.transitionDuration = '1s';

for (let index = 0; index < cards12.length; index++) {
    const element12 = cards12[index];
    element12.style.width = cardWidth12 + 'px';
}

function next12() {
    if (+slider12.style.marginLeft.slice(0, -2) != -cardWidth12 * (cards12.length - elementsToShow12))
        slider12.style.marginLeft = ((+slider12.style.marginLeft.slice(0, -2)) - cardWidth12) + 'px';
}

function prev12() {
    if (+slider12.style.marginLeft.slice(0, -2) != 0)
        slider12.style.marginLeft = ((+slider12.style.marginLeft.slice(0, -2)) + cardWidth12) + 'px';
}