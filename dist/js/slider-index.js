
//slider 1 beranda/index tower 1
let sliderContainer = document.getElementById('sliderContainer');
let slider = document.getElementById('slider');
let cards = slider.getElementsByTagName('li');

let elementsToShow = 4;
if(document.body.clientWidth<1000){
    elementsToShow = 1;
}else if(document.body.clientWidth>1000){
    elementsToShow = 4;
}

let sliderContainerWidth = sliderContainer.clientWidth;

let cardWidth = sliderContainerWidth / elementsToShow;

slider.style.width = cards.length * cardWidth + 'px';
slider.style.transition='margin';
slider.style.transitionDuration='1s';

for (let index = 0; index < cards.length; index++) {
  const element = cards[index];
  element.style.width = cardWidth + 'px';
}
function next() {
  if (+slider.style.marginLeft.slice(0, -2) != -cardWidth * (cards.length - elementsToShow))
  slider.style.marginLeft = ((+slider.style.marginLeft.slice(0, -2)) - cardWidth) + 'px'; // 100px
}

function prev() {
  if (+slider.style.marginLeft.slice(0, -2) != 0)
    slider.style.marginLeft = ((+slider.style.marginLeft.slice(0, -2)) + cardWidth) + 'px'; // 100px
}



//slider 2 beranda/index tower 2
let sliderContainer2 = document.getElementById('sliderContainer2');
let slider2 = document.getElementById('slider2');
let cards2 = slider2.getElementsByTagName('li');

let elementsToShow2 = 4; // Atur sesuai kebutuhan
if (document.body.clientWidth < 1000) {
    elementsToShow2 = 1;
} else if (document.body.clientWidth > 1000) {
    elementsToShow2 = 4;
}

let sliderContainerWidth2 = sliderContainer2.clientWidth;
let cardWidth2 = sliderContainerWidth2 / elementsToShow2;

slider2.style.width = cards2.length * cardWidth2 + 'px';
slider2.style.transition = 'margin';
slider2.style.transitionDuration = '1s';

for (let index = 0; index < cards2.length; index++) {
    const element2 = cards2[index];
    element2.style.width = cardWidth2 + 'px';
}

function next2() {
    if (+slider2.style.marginLeft.slice(0, -2) != -cardWidth2 * (cards2.length - elementsToShow2))
        slider2.style.marginLeft = ((+slider2.style.marginLeft.slice(0, -2)) - cardWidth2) + 'px';
}

function prev2() {
    if (+slider2.style.marginLeft.slice(0, -2) != 0)
        slider2.style.marginLeft = ((+slider2.style.marginLeft.slice(0, -2)) + cardWidth2) + 'px';
}


//slider 3 beranda/index teater
let sliderContainer3 = document.getElementById('sliderContainer3');
let slider3 = document.getElementById('slider3');
let cards3 = slider3.getElementsByTagName('li');

let elementsToShow3 = 3; // Atur sesuai kebutuhan
if (document.body.clientWidth < 1000) {
    elementsToShow3 = 1;
} else if (document.body.clientWidth > 1000) {
    elementsToShow3 = 3;
}

let sliderContainerWidth3 = sliderContainer3.clientWidth;
let cardWidth3 = sliderContainerWidth3 / elementsToShow3;

slider3.style.width = cards3.length * cardWidth3 + 'px';
slider3.style.transition = 'margin';
slider3.style.transitionDuration = '1s';

for (let index = 0; index < cards3.length; index++) {
    const element3 = cards3[index];
    element3.style.width = cardWidth3 + 'px';
}

function next3() {
    if (+slider3.style.marginLeft.slice(0, -2) != -cardWidth3 * (cards3.length - elementsToShow3))
        slider3.style.marginLeft = ((+slider3.style.marginLeft.slice(0, -2)) - cardWidth3) + 'px';
}

function prev3() {
    if (+slider3.style.marginLeft.slice(0, -2) != 0)
        slider3.style.marginLeft = ((+slider3.style.marginLeft.slice(0, -2)) + cardWidth3) + 'px';
}



//slider 4 beranda/index perpustakaan
let sliderContainer4 = document.getElementById('sliderContainer4');
let slider4 = document.getElementById('slider4');
let cards4 = slider4.getElementsByTagName('li');

let elementsToShow4 = 4; // Atur sesuai kebutuhan
if (document.body.clientWidth < 1000) {
    elementsToShow4 = 1;
} else if (document.body.clientWidth > 1000) {
    elementsToShow4 = 4;
}

let sliderContainerWidth4 = sliderContainer4.clientWidth;
let cardWidth4 = sliderContainerWidth4 / elementsToShow4;

slider4.style.width = cards4.length * cardWidth4 + 'px';
slider4.style.transition = 'margin';
slider4.style.transitionDuration = '1s';

for (let index = 0; index < cards4.length; index++) {
    const element4 = cards4[index];
    element4.style.width = cardWidth4 + 'px';
}

function next4() {
    if (+slider4.style.marginLeft.slice(0, -2) != -cardWidth4 * (cards4.length - elementsToShow4))
        slider4.style.marginLeft = ((+slider4.style.marginLeft.slice(0, -2)) - cardWidth4) + 'px';
}

function prev4() {
    if (+slider4.style.marginLeft.slice(0, -2) != 0)
        slider4.style.marginLeft = ((+slider4.style.marginLeft.slice(0, -2)) + cardWidth4) + 'px';
}