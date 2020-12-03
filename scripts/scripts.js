var emaki = document.getElementById('emaki');
var left = document.getElementById('arrow-left');
var right = document.getElementById('arrow-right');
var descriptions = [].slice.call(document.getElementsByClassName('description'));
var artworks = [].slice.call(document.getElementsByClassName('artwork'));

const MU = 0.9;
const SCROLL_VEL = 0.12;

var scroll = 0;
var vel = 0;
var damp = 0;

window.addEventListener('wheel', function(e) {
    if (e.deltaY > 0) {
        vel = Math.min(e.deltaY, 1.2 * SCROLL_VEL);
    } else {
        vel = Math.max(e.deltaY, -1.2 * SCROLL_VEL)
    }
    damp = MU;
});

left.addEventListener('mousedown', function() {
    vel = SCROLL_VEL;
    damp = 1;
});

right.addEventListener('mousedown', function() {
    vel = -SCROLL_VEL;
    damp = 1;
});

window.addEventListener('mouseup', function() {
    damp = MU;
});

artworks.forEach(function(artwork) {
    let img = artwork;
    var imgFull = new Image();
    imgFull.src = img.dataset.src;
    imgFull.onload = function() {
        img.src = imgFull.src;
        img.classList.add("loaded");
    }
});

function update() {
    scroll += vel;
    if (scroll > 100) {
        scroll = 100;
    }
    if (scroll < 0) {
        scroll = 0;
    }
    vel *= damp;

    descriptions.forEach(function(description) {
        if (scroll >= description.dataset.start && scroll <= description.dataset.end) {
            description.classList.add('show');
        } else {
            description.classList.remove('show');
        }
    });

    var maxScrollLeft =  emaki.clientWidth - emaki.scrollWidth;
    emaki.scrollLeft = Math.trunc(scroll * maxScrollLeft / 100);

    window.requestAnimationFrame(update);
}

window.requestAnimationFrame(update);