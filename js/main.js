// Preloader
const preloader = document.querySelector('.preloader');
window.onload = () => {
  preloader.style.opacity -= 0.4;
  setTimeout(()=> preloader.remove(),500)
};


// ScrollTo using GSAP
document.querySelectorAll('.navbarHandler').forEach(item => {
    item.addEventListener('click', event => {
        const target = event.target;
        if (target.tagName != 'A') return; // not an anchor? Then we're not interested
        const section = target.getAttribute("data-section")
        if (section == 'contacts') {
            gsap.to(window, { duration: 1.5, scrollTo: { y: "max" } })
        } else {
            gsap.to(window, { duration: 1.5, scrollTo: { y: "#" + section, offsetY: 200 } });
        }
    })
})
// Scroll to "Get Quote"
getQuote = () => {
    gsap.to(window, { duration: 1.5, scrollTo: { y: "#quote", offsetY: 150 } }); //GSAP Scroll
}


//Google Analytics
window.ga = () => {
    ga.q.push(arguments)
};
ga.q = [];
ga.l = +new Date;
ga('create', 'UA-135408723-2', 'auto');
ga('send', 'pageview')


// Swiper
const mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },
})
