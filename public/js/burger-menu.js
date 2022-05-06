function toggleMenu(){
    const navbar = document.querySelector('.container-navbar');
    const burger = document.querySelector('.navbar-burger')
    burger.addEventListener('click', () => {
        navbar.classList.toggle("show-nav");
    })
}
toggleMenu();