import { gsap } from "gsap"
import { ScrollTrigger } from "gsap/ScrollTrigger"

gsap.registerPlugin(ScrollTrigger)

const container = document.getElementById("highlight-container")
const items = container!.querySelectorAll(".highlight-item")

if (items.length) {
  function getRandomSubset(array: Iterable<unknown> | ArrayLike<unknown>, size: number | undefined) {
    const shuffled = Array.from(array).sort(() => 0.5 - Math.random())
    return shuffled.slice(0, size)
  }

  // Create a timeline with infinite repeat
  const tl = gsap.timeline({ repeat: -1 })

  // Function to add a highlight animation to the timeline
  function addHighlightAnimation() {
    const randomItems = getRandomSubset(items, 3) // Choose 3 random items

    // Add the animation to the timeline
    tl.to(randomItems, {
      // scrollTrigger: ".business_generator_section",
      opacity: 0.7,
      scale: 1.2,
      duration: 0.35,
      stagger: 0.2,
      yoyo: true,
      repeat: 1,
      onComplete: addHighlightAnimation, // Call the function again after completion
    })
  }

  // Start the highlight animation
  addHighlightAnimation()
}
