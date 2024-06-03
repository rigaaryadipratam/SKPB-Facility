//slider 5 cardclasstw1_80 lt2
let sliderContainer5 = document.getElementById('sliderContainer5');
let slider5 = document.getElementById('slider5');
let cards5 = slider5.getElementsByTagName('li');

let elementsToShow5 = 4; // Atur sesuai kebutuhan
if (document.body.clientWidth < 1000) {
    elementsToShow5 = 1;
} else if (document.body.clientWidth > 1000) {
    elementsToShow5 = 4;
}

let sliderContainerWidth5 = sliderContainer5.clientWidth;
let cardWidth5 = sliderContainerWidth5 / elementsToShow5;

slider5.style.width = cards5.length * cardWidth5 + 'px';
slider5.style.transition = 'margin';
slider5.style.transitionDuration = '1s';

for (let index = 0; index < cards5.length; index++) {
    const element5 = cards5[index];
    element5.style.width = cardWidth5 + 'px';
}

function next5() {
    if (+slider5.style.marginLeft.slice(0, -2) != -cardWidth5 * (cards5.length - elementsToShow5))
        slider5.style.marginLeft = ((+slider5.style.marginLeft.slice(0, -2)) - cardWidth5) + 'px';
}

function prev5() {
    if (+slider5.style.marginLeft.slice(0, -2) != 0)
        slider5.style.marginLeft = ((+slider5.style.marginLeft.slice(0, -2)) + cardWidth5) + 'px';
}



//slider 6 cardclasstw1_80 lt3
let sliderContainer6 = document.getElementById('sliderContainer6');
let slider6 = document.getElementById('slider6');
let cards6 = slider6.getElementsByTagName('li');

let elementsToShow6 = 4; // Atur sesuai kebutuhan
if (document.body.clientWidth < 1000) {
    elementsToShow6 = 1;
} else if (document.body.clientWidth > 1000) {
    elementsToShow6 = 4;
}

let sliderContainerWidth6 = sliderContainer6.clientWidth;
let cardWidth6 = sliderContainerWidth6 / elementsToShow6;

slider6.style.width = cards6.length * cardWidth6 + 'px';
slider6.style.transition = 'margin';
slider6.style.transitionDuration = '1s';

for (let index = 0; index < cards6.length; index++) {
    const element6 = cards6[index];
    element6.style.width = cardWidth6 + 'px';
}

function next6() {
    if (+slider6.style.marginLeft.slice(0, -2) != -cardWidth6 * (cards6.length - elementsToShow6))
        slider6.style.marginLeft = ((+slider6.style.marginLeft.slice(0, -2)) - cardWidth6) + 'px';
}

function prev6() {
    if (+slider6.style.marginLeft.slice(0, -2) != 0)
        slider6.style.marginLeft = ((+slider6.style.marginLeft.slice(0, -2)) + cardWidth6) + 'px';
}



//slider 7 cardclasstw1_80 lt5
let sliderContainer7 = document.getElementById('sliderContainer7');
let slider7 = document.getElementById('slider7');
let cards7 = slider7.getElementsByTagName('li');

let elementsToShow7 = 4; // Atur sesuai kebutuhan
if (document.body.clientWidth < 1000) {
    elementsToShow7 = 1;
} else if (document.body.clientWidth > 1000) {
    elementsToShow7 = 4;
}

let sliderContainerWidth7 = sliderContainer7.clientWidth;
let cardWidth7 = sliderContainerWidth7 / elementsToShow7;

slider7.style.width = cards7.length * cardWidth7 + 'px';
slider7.style.transition = 'margin';
slider7.style.transitionDuration = '1s';

for (let index = 0; index < cards7.length; index++) {
    const element7 = cards7[index];
    element7.style.width = cardWidth7 + 'px';
}

function next7() {
    if (+slider7.style.marginLeft.slice(0, -2) != -cardWidth7 * (cards7.length - elementsToShow7))
        slider7.style.marginLeft = ((+slider7.style.marginLeft.slice(0, -2)) - cardWidth7) + 'px';
}

function prev7() {
    if (+slider7.style.marginLeft.slice(0, -2) != 0)
        slider7.style.marginLeft = ((+slider7.style.marginLeft.slice(0, -2)) + cardWidth7) + 'px';
}





//slider 8 cardclasstw1_80 lt6
let sliderContainer8 = document.getElementById('sliderContainer8');
let slider8 = document.getElementById('slider8');
let cards8 = slider8.getElementsByTagName('li');

let elementsToShow8 = 4; // Atur sesuai kebutuhan
if (document.body.clientWidth < 1000) {
    elementsToShow8 = 1;
} else if (document.body.clientWidth > 1000) {
    elementsToShow8 = 4;
}

let sliderContainerWidth8 = sliderContainer8.clientWidth;
let cardWidth8 = sliderContainerWidth8 / elementsToShow8;

slider8.style.width = cards8.length * cardWidth8 + 'px';
slider8.style.transition = 'margin';
slider8.style.transitionDuration = '1s';

for (let index = 0; index < cards8.length; index++) {
    const element8 = cards8[index];
    element8.style.width = cardWidth8 + 'px';
}

function next8() {
    if (+slider8.style.marginLeft.slice(0, -2) != -cardWidth8 * (cards8.length - elementsToShow8))
        slider8.style.marginLeft = ((+slider8.style.marginLeft.slice(0, -2)) - cardWidth8) + 'px';
}

function prev8() {
    if (+slider8.style.marginLeft.slice(0, -2) != 0)
        slider8.style.marginLeft = ((+slider8.style.marginLeft.slice(0, -2)) + cardWidth8) + 'px';
}



//slider 9 cardclasstw1_80 lt7
let sliderContainer9 = document.getElementById('sliderContainer9');
let slider9 = document.getElementById('slider9');
let cards9 = slider9.getElementsByTagName('li');

let elementsToShow9 = 4; // Atur sesuai kebutuhan
if (document.body.clientWidth < 1000) {
    elementsToShow9 = 1;
} else if (document.body.clientWidth > 1000) {
    elementsToShow9 = 4;
}

let sliderContainerWidth9 = sliderContainer9.clientWidth;
let cardWidth9 = sliderContainerWidth9 / elementsToShow9;

slider9.style.width = cards9.length * cardWidth9 + 'px';
slider9.style.transition = 'margin';
slider9.style.transitionDuration = '1s';

for (let index = 0; index < cards9.length; index++) {
    const element9 = cards9[index];
    element9.style.width = cardWidth9 + 'px';
}

function next9() {
    if (+slider9.style.marginLeft.slice(0, -2) != -cardWidth9 * (cards9.length - elementsToShow9))
        slider9.style.marginLeft = ((+slider9.style.marginLeft.slice(0, -2)) - cardWidth9) + 'px';
}

function prev9() {
    if (+slider9.style.marginLeft.slice(0, -2) != 0)
        slider9.style.marginLeft = ((+slider9.style.marginLeft.slice(0, -2)) + cardWidth9) + 'px';
}

//slider 10 cardclasstw1_80 lt8
let sliderContainer10 = document.getElementById('sliderContainer10');
let slider10 = document.getElementById('slider10');
let cards10 = slider10.getElementsByTagName('li');

let elementsToShow10 = 4; // Atur sesuai kebutuhan
if (document.body.clientWidth < 1000) {
    elementsToShow10 = 1;
} else if (document.body.clientWidth > 1000) {
    elementsToShow10 = 4;
}

let sliderContainerWidth10 = sliderContainer10.clientWidth;
let cardWidth10 = sliderContainerWidth10 / elementsToShow10;

slider10.style.width = cards10.length * cardWidth10 + 'px';
slider10.style.transition = 'margin';
slider10.style.transitionDuration = '1s';

for (let index = 0; index < cards10.length; index++) {
    const element10 = cards10[index];
    element10.style.width = cardWidth10 + 'px';
}

function next10() {
    if (+slider10.style.marginLeft.slice(0, -2) != -cardWidth10 * (cards10.length - elementsToShow10))
        slider10.style.marginLeft = ((+slider10.style.marginLeft.slice(0, -2)) - cardWidth10) + 'px';
}

function prev10() {
    if (+slider10.style.marginLeft.slice(0, -2) != 0)
        slider10.style.marginLeft = ((+slider10.style.marginLeft.slice(0, -2)) + cardWidth10) + 'px';
}