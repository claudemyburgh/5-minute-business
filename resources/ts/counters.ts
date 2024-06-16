import { gsap } from "gsap"
import { ScrollTrigger } from "gsap/ScrollTrigger"
import formatNumber from "./libs/formatNumber"

gsap.registerPlugin(ScrollTrigger)

const counters = document.querySelectorAll("[data-counter-amount]")

// Loop through each counter element
counters.forEach((counter) => {
  // Get the target value from data attribute
  const targetAmount = parseInt(<string>counter.getAttribute("data-counter-amount"))

  // Create a GSAP timeline for the animation
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: counter,
      start: "top 80%", // Trigger animation when top of counter is 80% in view
    },
  })

  // Animation to tween the innerHTML from current value to targetAmount
  tl.to(counter, {
    innerHTML: targetAmount, // Set the innerHTML to targetAmount
    duration: 3, // Animation duration in seconds
    ease: "power1.out", // Easing function
    snap: { innerHTML: 1 },
    onUpdate: function () {
      // Update innerHTML during animation (optional)
      counter.textContent = formatNumber(Math.round(Number(counter.innerHTML)).toString(), "space")
    },
  })
})
