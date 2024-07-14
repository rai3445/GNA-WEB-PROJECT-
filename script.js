

let menuToggle = document.querySelector('.menuToggle');
let header = document.querySelector('header');
let section = document.querySelector('section');
// let section = document.getElementsByTagName('*');


menuToggle.onclick = function () {
    header.classList.toggle('active')
    section.classList.toggle('active')
}



// console.log(slides)

let counter = 0;
// console.log(i)


