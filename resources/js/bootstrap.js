import axios from 'axios';
window.axios = axios;
import { gsap } from "gsap"
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Splide from '@splidejs/splide';
import '@splidejs/splide/css';

new Splide( '.splide_names', {
    direction: "ttb",
    type: "loop",
    height: 64,
    width: 320,
    wheel: true,
    autoplay: true,
    interval: 1000,
    arrows: false,
    pagination: false
} ).mount();


const items = document.querySelectorAll(".named-item");

function getRandomSubset(array, size) {
    const shuffled = Array.from(array).sort(() => 0.5 - Math.random());
    return shuffled.slice(0, size);
}

// Create a timeline with infinite repeat
const tl = gsap.timeline({ repeat: -1 });

// Function to add a highlight animation to the timeline
function addHighlightAnimation() {
    const randomItems = getRandomSubset(items, 3); // Choose 3 random items

    // Add the animation to the timeline
    tl.to(randomItems, {
        opacity: 0.7,
        scale: 1.1,
        duration: 0.25,
        stagger: 0.1,
        yoyo: true,
        repeat: 1,
        onComplete: addHighlightAnimation // Call the function again after completion
    });
}

// Start the highlight animation
addHighlightAnimation();

