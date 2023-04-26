let mainNav = document.querySelector('#mainNav');
let navContainer = document.querySelector('#navContainer');
let upToTop = document.querySelector('.upToTop');

window.addEventListener('scroll', ()=>{

    if(window.scrollY > 0){
        mainNav.classList.add('shadow');
        navContainer.classList.add('navscale');
        upToTop.classList.remove('d-none');

    } else {
        mainNav.classList.remove('shadow');
        navContainer.classList.remove('navscale');
        upToTop.classList.add('d-none');
    }
});
document.querySelector('#createAnnouncement').addEventListener('click', function (){
    
    document.querySelector('#images').value=''

})