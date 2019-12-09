const jumboTl = gsap.timeline();

jumboTl.from("#home", { duration: 0.7, opacity: 0, stagger: 0.25, ease: "power1.out" })
    .from("#nav-inner", { duration: 0.5, opacity: 0 })
    .from(".header-text", { duration: 1, opacity: 0, ease: "back" }, '-=0.2')
    .from(".jumbo-bar", { duration: 1, opacity: 0, y: -200, stagger: 0.25 }, '-=1')
    .from(".service-card", { duration: 0.6, opacity: 0, y: 200, stagger: 0.25, ease: "back" }, '-=1');


// About

const aboutTl = gsap.timeline();
aboutTl.from("#about-desc", { duration: 0.7, opacity: 0, stagger: 0.25, y: 20, ease: "power1.out" })
    .from("#about-img", { duration: 0.7, opacity: 0, stagger: 0.25, y: -20, ease: "power1.out" }, '-=0.7');

const aboutCtrl = new ScrollMagic.Controller();
const aboutScene = new ScrollMagic.Scene({
    triggerElement: "#about"
})
    .setTween(aboutTl)
    .addTo(aboutCtrl)


// Industries

const industriesTl = gsap.timeline();
var navLink = document.querySelectorAll('.custom-tabs li a')

industriesTl.from(".tab-content", { duration: 0.6, opacity: 0,  y: -20, ease: "power1.out" })
    .from(".markets-list", { duration: 0.6, opacity: 0,  ease: "power1.out" }, '-=0.6')
    .from(navLink, { duration: 0.2, opacity: 0, x: 20, stagger: 0.10, ease: "power1.out" }, '-=0.6');

const industriesCtrl = new ScrollMagic.Controller();
const industriesScene = new ScrollMagic.Scene({
    triggerElement: "#industries"
})
    .setTween(industriesTl)
    .addTo(industriesCtrl)


// Quote

const quoteTl = gsap.timeline();
quoteTl.from("#quote", { duration: 0.2, opacity: 0, ease: "power1.out" })
    .from("#quote-header", { duration: 0.4, opacity: 0, y: 20,  ease: "power1.out" })
    .from(".custom-input-quote", { duration: 0.4, opacity: 0, y: 20, stagger: 0.25, ease: "power1.out" }, '-=0.2')
    .from("#quote-btn", { duration: 0.4, opacity: 0, y: 20, ease: "power1.out" }, '-=0.2');

const quoteCtrl = new ScrollMagic.Controller();
const quoteScene = new ScrollMagic.Scene({
    triggerElement: "#quote"
})
    .setTween(quoteTl)
    .addTo(quoteCtrl)


// Shippers

const shippersTl = gsap.timeline();
shippersTl.from("#shippers-desc", { duration: 0.7, opacity: 0, stagger: 0.25, y: 20, ease: "power1.out" })
    .from("#shippers-img", { duration: 0.7, opacity: 0, stagger: 0.25, y: -20, ease: "power1.out" }, '-=0.7');

const shippersCtrl = new ScrollMagic.Controller();
const shippersScene = new ScrollMagic.Scene({
    triggerElement: "#shippers"
})
    .setTween(shippersTl)
    .addTo(shippersCtrl)


// Carriers

const carriersTl = gsap.timeline();
carriersTl.from("#carriers-img", { duration: 0.7, opacity: 0, stagger: 0.25, y: 20, ease: "power1.out" })
    .from("#carriers-desc", { duration: 0.7, opacity: 0, stagger: 0.25, y: -20, ease: "power1.out" }, '-=0.7');

const carriersCtrl = new ScrollMagic.Controller();
const carriersScene = new ScrollMagic.Scene({
    triggerElement: "#carriers"
})
    .setTween(carriersTl)
    .addTo(carriersCtrl)




// Career

const careerTl = gsap.timeline();
careerTl.from("#career", { duration: 0.7, opacity: 0, stagger: 0.25, ease: "power1.out" });

const careerCtrl = new ScrollMagic.Controller();
const careerScene = new ScrollMagic.Scene({
    triggerElement: "#career"
})
    .setTween(careerTl)
    .addTo(careerCtrl)



// Contacts

const contactsTl = gsap.timeline();
contactsTl.from("#contact-map", { duration: 0.7, opacity: 0, stagger: 0.25, y: 20, ease: "power1.out" })
    .from("#contact-form", { duration: 0.7, opacity: 0, stagger: 0.25, y: -20, ease: "power1.out" }, '-=0.7');

const contactsCtrl = new ScrollMagic.Controller();
const contactsScene = new ScrollMagic.Scene({
    triggerElement: "#contacts",
    triggerHook: 0.70
})
    .setTween(contactsTl)
    .addTo(contactsCtrl)


