document.getElementById("explore").addEventListener("click", explore);

function explore() {
    console.log("Explore");
    gsap.to('.welcomer', {opacity: 0, duration: 1, y: 15, ease: 'Power3.easeInOut', onComplete: hideExploreCall})
    gsap.to('.explore-0', {opacity: 1, duration: 1, y: 50, ease: 'Power2.easeInOut', delay: 0.25})
    gsap.to('.explore-0', {opacity: 0, duration: 1, y: 150, ease: 'Power2.easeInOut', delay: 1.5})
    gsap.to('.explore-1', {opacity: 1, duration: 1, y: 35, ease: 'Power2.easeInOut', stagger: 0.1, delay: 2.25})
    gsap.to('.explore-2', {opacity: 1, duration: 1, y: 150, ease: 'Power2.easeInOut', delay: 3, onComplete: showScroll})
}

function showScroll() {
    document.getElementsByClassName("ca3-hide")[0].classList.replace("ca3-hide","ca3-show");
    document.getElementsByTagName("body")[0].classList.replace("overflow-none","overflow-show");
}

function hideExploreCall() {
    document.getElementById("explore").style.display = 'none';
}