let embodied = document.querySelector("body")
let bulb = document.querySelector(".dark-mode");
let about_me = document.querySelector(".about-me"); 
let titled = document.querySelector('.title');

function perspectivity(){
    embodied.classList.toggle('dark-theme')
    about_me.classList.toggle('theme-dark')

    /* bulb.style.backgroundColor = 'white'
    bulb.style.border = 'none' 
    bulb.style.borderRadius = '100%'
    titled.style.transition = 'all 0.5s ease-in-out'
    titled.style.fontFamily = "Edu AU VIC WA NT Pre" */

    bulb.classList.toggle('swerve')
}

bulb.addEventListener('click', perspectivity)