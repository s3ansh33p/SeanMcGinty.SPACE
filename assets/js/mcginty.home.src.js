    //GSAP Load
    gsap.registerPlugin(ScrollTrigger);
    gsap.from('.welcomer', {opacity: 0, duration: 1.25, ease: 'Power3.easeInOut'})
    gsap.from('.content', {opacity: 0, duration: 1.25, ease: 'Power3.easeInOut'})
    gsap.from('.social', {opacity: 0, duration: 1, x: -150, ease: 'Power3.easeInOut', delay: 0.25})
    gsap.from('.footer', {opacity: 0, duration: 1, x: 350, ease: 'Power3.easeInOut', delay: 0.25})

    ScrollTrigger.once = true;
    const contents = document.querySelectorAll('.main-content');
    const endcontents = document.querySelectorAll('.end-content');
    var explored = 0;

    document.getElementById("explore").addEventListener("click", explore);

function scrollSetup() {
    audio.play();
    document.getElementById("explore").removeEventListener("click", explore)
    contents.forEach(section => {
        ScrollTrigger.defaults({toggleActions: "play none none reset"})
        gsap.from(section.querySelectorAll("h1, p, img, i, span"), {
            scrollTrigger: section,
            autoAlpha: 0,
            y: 25,
            duration: 1.75,
            stagger: 0.05,
        });
    });
    endcontents.forEach(section => {
        ScrollTrigger.defaults({toggleActions: "play none none reset"})
        gsap.from(section.querySelectorAll("h1, div"), {
            scrollTrigger: section,
            autoAlpha: 0,
            y: 25,
            duration: 1.75,
        });
    });
    explored = 1;
}

function contactMe() {
    if (explored == 0) {
        scrollSetup();
        showScroll();
        gsap.to('.welcomer', {opacity: 0, duration: 0, y: 15, ease: 'Power3.easeInOut', onComplete: hideExploreCall})
        gsap.to('.explore-0', {opacity: 1, duration: 0, y: 50, ease: 'Power2.easeInOut'})
        gsap.to('.explore-0', {opacity: 0, duration: 0, y: 150, ease: 'Power2.easeInOut'})
        gsap.to('.explore-1', {opacity: 1, duration: 0, y: 35, ease: 'Power2.easeInOut'})
        gsap.to('.explore-2', {opacity: 1, duration: 0, y: 100, ease: 'Power2.easeInOut'})
    }
    document.getElementsByClassName("contact")[0].scrollIntoView();

}

function explore() {
    scrollSetup();
    gsap.to('.welcomer', {opacity: 0, duration: 1, y: 15, ease: 'Power3.easeInOut', onComplete: hideExploreCall})
    gsap.to('.explore-0', {opacity: 1, duration: 1, y: 50, ease: 'Power2.easeInOut', delay: 0.25})
    gsap.to('.explore-0', {opacity: 0, duration: 1, y: 150, ease: 'Power2.easeInOut', delay: 1.5})
    gsap.to('.explore-1', {opacity: 1, duration: 1, y: 35, ease: 'Power2.easeInOut', stagger: 0.1, delay: 2.25})
    gsap.to('.explore-2', {opacity: 1, duration: 1, y: 100, ease: 'Power2.easeInOut', delay: 3, onComplete: showScroll})
}

function showScroll() {
    document.getElementsByClassName("m-scroll-down-arrow")[0].classList.replace("m-hide","m-show");
    document.getElementsByTagName("body")[0].classList.replace("overflow-none","overflow-show");
    document.getElementsByTagName("body")[0].classList.add("hidescroll");
    var mc = document.getElementsByClassName("main-content");
    for (let i=0; i<mc.length; i++) {
        mc[i].classList.remove("explore")
    }
    document.getElementsByClassName("end-content")[0].classList.remove("explore");
    gsap.to('.footer-wrapper', {opacity: 1, duration: 1.25, ease: 'Power3.easeInOut'})
}

function hideExploreCall() {
    document.getElementById("explore").style.display = 'none';
}