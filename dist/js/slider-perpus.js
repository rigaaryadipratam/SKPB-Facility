//slider 15 cardclassperpustakaan
let sliderContainer15 = document.getElementById('sliderContainer15');
let slider15 = document.getElementById('slider15');
let cards15 = slider15.getElementsByTagName('li');

let elementsToShow15 = 4; // Atur sesuai kebutuhan
if (document.body.clientWidth < 1000) {
    elementsToShow15 = 1;
} else if (document.body.clientWidth > 1000) {
    elementsToShow15 = 4;
}

let sliderContainerWidth15 = sliderContainer15.clientWidth;
let cardWidth15 = sliderContainerWidth15 / elementsToShow15;

slider15.style.width = cards15.length * cardWidth15 + 'px';
slider15.style.transition = 'margin';
slider15.style.transitionDuration = '1s';

for (let index = 0; index < cards15.length; index++) {
    const element15 = cards15[index];
    element15.style.width = cardWidth15 + 'px';
}

function next15() {
    if (+slider15.style.marginLeft.slice(0, -2) != -cardWidth15 * (cards15.length - elementsToShow15))
        slider15.style.marginLeft = ((+slider15.style.marginLeft.slice(0, -2)) - cardWidth15) + 'px';
}

function prev15() {
    if (+slider15.style.marginLeft.slice(0, -2) != 0)
        slider15.style.marginLeft = ((+slider15.style.marginLeft.slice(0, -2)) + cardWidth15) + 'px';
}
