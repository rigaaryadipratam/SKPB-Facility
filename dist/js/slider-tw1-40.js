//slider 11 cardclasstw1_40
let sliderContainer11 = document.getElementById('sliderContainer11');
let slider11 = document.getElementById('slider11');
let cards11 = slider11.getElementsByTagName('li');

let elementsToShow11 = 4; // Atur sesuai kebutuhan
if (document.body.clientWidth < 1000) {
    elementsToShow11 = 1;
} else if (document.body.clientWidth > 1000) {
    elementsToShow11 = 4;
}

let sliderContainerWidth11 = sliderContainer11.clientWidth;
let cardWidth11 = sliderContainerWidth11 / elementsToShow11;

slider11.style.width = cards11.length * cardWidth11 + 'px';
slider11.style.transition = 'margin';
slider11.style.transitionDuration = '1s';

for (let index = 0; index < cards11.length; index++) {
    const element11 = cards11[index];
    element11.style.width = cardWidth11 + 'px';
}

function next11() {
    if (+slider11.style.marginLeft.slice(0, -2) != -cardWidth11 * (cards11.length - elementsToShow11))
        slider11.style.marginLeft = ((+slider11.style.marginLeft.slice(0, -2)) - cardWidth11) + 'px';
}

function prev11() {
    if (+slider11.style.marginLeft.slice(0, -2) != 0)
        slider11.style.marginLeft = ((+slider11.style.marginLeft.slice(0, -2)) + cardWidth11) + 'px';
}