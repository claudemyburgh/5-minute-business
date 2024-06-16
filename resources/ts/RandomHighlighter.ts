import { gsap } from "gsap"

// Define the options interface extending GSAP's TweenVars
interface RandomHighlighterOptions extends gsap.TweenVars {
  containerSelector?: string | undefined // Selector for the container element
  containerChildren?: string // Selector for child elements within the container to be highlighted
  randomItemAmount?: number // Number of items to be randomly selected for highlighting
}

// Main class for the highlight animation
export default class RandomHighlighter {
  private readonly items: NodeListOf<Element> | undefined // List of items to be highlighted
  private tl: gsap.core.Timeline | undefined // Timeline for managing animations
  private readonly options: RandomHighlighterOptions // Options for configuring the animation

  // Constructor to initialize the animation with default or custom options
  constructor(options: RandomHighlighterOptions = {}) {
    // Define default options for the animation
    const defaultOptions: RandomHighlighterOptions = {
      containerSelector: "#highlight-container",
      containerChildren: ".highlight-item",
      randomItemAmount: 3,
      opacity: 0.7,
      scale: 1.2,
      duration: 0.35,
      stagger: 0.2,
      yoyo: true,
      repeat: 1,
    }

    // Merge default options with user-provided options
    this.options = { ...defaultOptions, ...options }
    const containerSelector = this.options.containerSelector!
    const container = document.querySelector(containerSelector) // Get the container element

    // Check if the container exists
    if (!container) {
      console.error(`Container with selector "${this.options.containerSelector}" not found.`)
      return
    }

    // Select child items within the container
    this.items = container.querySelectorAll(this.options.containerChildren!)

    // Check if any items are found
    if (this.items.length === 0) {
      console.error(`No items with class ".highlight-item" found inside the container "${containerSelector}".`)
      return
    }

    // Initialize the GSAP timeline for the animation, set to loop infinitely
    this.tl = gsap.timeline({ repeat: -1 })

    // If items are found, add the highlight animation
    if (this.items.length) {
      this.addHighlightAnimation()
    }
  }

  // Utility function to get a random subset of items
  private getRandomSubset(array: NodeListOf<Element>, size: number | undefined) {
    const shuffled = Array.from(array).sort(() => 0.5 - Math.random()) // Shuffle the array
    return shuffled.slice(0, size) // Return a subset of the specified size
  }

  // Function to add the highlight animation to the timeline
  private addHighlightAnimation() {
    if (this.items === undefined) return
    const randomItems = this.getRandomSubset(this.items, this.options.randomItemAmount) // Get random items

    // Add the animation to the timeline with options and a callback to repeat the animation
    this.tl!.to(randomItems, {
      ...this.options,
      onComplete: this.addHighlightAnimation.bind(this), // Call the function again after completion
    })
  }
}
