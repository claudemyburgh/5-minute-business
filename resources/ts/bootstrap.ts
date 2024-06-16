import axios, { AxiosInstance } from "axios"
import Splide from "@splidejs/splide"
import "@splidejs/splide/css"
import RandomHighlighter from "./RandomHighlighter"
import "./counters"
import "./charts"

declare global {
  interface Window {
    axios: AxiosInstance
  }
}

new RandomHighlighter({
  scale: 1.2,
  randomItemAmount: 3,
})

window.axios = axios
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest"

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
