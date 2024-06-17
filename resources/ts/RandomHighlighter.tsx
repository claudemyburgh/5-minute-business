import { gsap } from "gsap"
import { ScrollTrigger } from "gsap/ScrollTrigger"

gsap.registerPlugin(ScrollTrigger)

/**
 * Interface for options to customize the RandomHighlighter.
 */
interface RandomHighlighterOptions {
    /**
     * Selector for the container element.
     * @default "#highlight-container"
     */
    containerSelector?: string | undefined
    /**
     * Selector for child elements within the container to be highlighted.
     * @default ".highlight-item"
     */
    containerChildren?: string
    /**
     * Number of items to be randomly selected for highlighting.
     * @default 3
     */
    randomItemAmount?: number // Number of items to be randomly selected for highlighting
    /**
     * Options for the GSAP animation.
     */
    gsapOptions?: gsap.TweenVars
}

export default class RandomHighlighter {
    private readonly items: NodeListOf<HTMLElement>
    private readonly container: HTMLElement | null
    private readonly defaultOptions: RandomHighlighterOptions
    private options: RandomHighlighterOptions

    /**
     * Creates a new instance of RandomHighlighter.
     * @param options - Options to customize the highlighter.
     */
    constructor(options: RandomHighlighterOptions = {}) {
        this.defaultOptions = {
            containerSelector: "#highlight-container",
            containerChildren: ".highlight-item",
            randomItemAmount: 3,
            gsapOptions: {
                opacity: 0.9,
                scale: 1.2,
                duration: 0.35,
                stagger: 0.2,
                yoyo: true,
                repeat: 1,
            },
        }

        this.options = {
            ...this.defaultOptions,
            ...options,
            gsapOptions: {
                ...this.defaultOptions.gsapOptions,
                ...options.gsapOptions,
            },
        }

        this.container = document.querySelector("#highlight-container")

        this.items = this.container!.querySelectorAll(".highlight-item")

        this.addHighlightAnimation()
    }

    /**
     * Returns a random subset of the given array or iterable.
     * @param array - The array or iterable to select from.
     * @param size - The number of items to select.
     * @returns A random subset of the given array or iterable.
     * @example
     * const array = [1, 2, 3, 4, 5]
     * const randomSubset = getRandomSubset(array, 3) // [3, 1, 5] (random order)
     */
    private getRandomSubset(array: Iterable<unknown> | ArrayLike<unknown>, size: number | undefined) {
        const shuffled = Array.from(array).sort(() => 0.5 - Math.random())
        return shuffled.slice(0, size)
    }

    /**
     * Adds a highlight animation to a random subset of items.
     */
    private addHighlightAnimation() {
        const randomItems = this.getRandomSubset(this.items, this.options.randomItemAmount)
        gsap.to(randomItems, {
            ...this.options.gsapOptions,
            onComplete: this.addHighlightAnimation.bind(this),
        })
    }
}
