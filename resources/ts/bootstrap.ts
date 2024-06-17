import axios, { AxiosInstance } from "axios"
import Splide from "@splidejs/splide"
import "@splidejs/splide/css"
import RandomHighlighter from "./RandomHighlighter"
import "./counters"
import "./charts"

import "vanilla-tilt/dist/vanilla-tilt"

new RandomHighlighter({
    gsapOptions: {
        scale: 1.4,
    },
})

declare global {
    interface Window {
        axios: AxiosInstance
    }
}

window.axios = axios
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest"

// const tilt = document.querySelectorAll(".tilt")
//
// VanillaTilt.init(document.querySelector(".your-element"), {
//     max: 25,
//     speed: 400,
// })

const splide_names = document.querySelector(".splide_names")
if (splide_names) {
    new Splide(".splide_names", {
        direction: "ttb",
        type: "loop",
        height: 64,
        width: 320,
        wheel: true,
        autoplay: true,
        interval: 1000,
        arrows: false,
        pagination: false,
    }).mount()
}
