import { gsap } from "gsap"
import { ScrollTrigger } from "gsap/ScrollTrigger"

gsap.registerPlugin(ScrollTrigger)

export default class HighlightAnimatorDump {
    private container: HTMLElement
    private readonly items: NodeListOf<HTMLElement>
    private tl: gsap.core.Timeline

    constructor(
        options: {
            containerId?: string
            highlightItemClass?: string
            gsapOptions?: gsap.TweenVars
        } = {}
    ) {
        this.container = document.getElementById(options.containerId || "highlight-container")
        this.items = this.container.querySelectorAll(options.highlightItemClass || ".highlight-item")

        if (this.items.length) {
            this.tl = gsap.timeline({ repeat: -1, ...options.gsapOptions })
            this.addHighlightAnimation()
        }
    }

    private getRandomSubset(array: Iterable<unknown> | ArrayLike<unknown>, size: number | undefined) {
        const shuffled = Array.from(array).sort(() => 0.5 - Math.random())
        return shuffled.slice(0, size)
    }

    private addHighlightAnimation() {
        const randomItems = this.getRandomSubset(this.items, 3)

        this.tl.to(randomItems, {
            opacity: 0.7,
            scale: 1.2,
            duration: 0.35,
            stagger: 0.2,
            yoyo: true,
            repeat: 1,
            onComplete: this.addHighlightAnimation.bind(this),
        })
    }
}
