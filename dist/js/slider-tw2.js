//slider 13 cardclasstw2
let sliderContainer13 = document.getElementById('sliderContainer13');
let slider13 = document.getElementById('slider13');
let cards13 = slider13.getElementsByTagName('li');

let elementsToShow13 = 4; // Atur sesuai kebutuhan
if (document.body.clientWidth < 1000) {
    elementsToShow13 = 1;
} else if (document.body.clientWidth > 1000) {
    elementsToShow13 = 4;
}

let sliderContainerWidth13 = sliderContainer13.clientWidth;
let cardWidth13 = sliderContainerWidth13 / elementsToShow13;

slider13.style.width = cards13.length * cardWidth13 + 'px';
slider13.style.transition = 'margin';
slider13.style.transitionDuration = '1s';

for (let index = 0; index < cards13.length; index++) {
    const element13 = cards13[index];
    element13.style.width = cardWidth13 + 'px';
}

function next13() {
    if (+slider13.style.marginLeft.slice(0, -2) != -cardWidth13 * (cards13.length - elementsToShow13))
        slider13.style.marginLeft = ((+slider13.style.marginLeft.slice(0, -2)) - cardWidth13) + 'px';
}

function prev13() {
    if (+slider13.style.marginLeft.slice(0, -2) != 0)
        slider13.style.marginLeft = ((+slider13.style.marginLeft.slice(0, -2)) + cardWidth13) + 'px';
}