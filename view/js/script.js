const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');

menuToggle.addEventListener('click', function(){
     nav.classList.toggle('slide');
});
const menuPost = document.querySelector('.menu-post input');
const navbar = document.querySelector('.navbar ul');

menuPost.addEventListener('click', function(){
     navbar.classList.toggle('slide');
});

