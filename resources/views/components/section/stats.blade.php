<section class="bg-gray-900 flex items-center min-h-[50vh] my-32 py-32">
    <div class="wrapper grid md:grid-cols-2 gap-6">


        <div>
            <x-text.heading-2 class="text-primary-500">
                Useful <span class="text-primary-500">Stats</span>
            </x-text.heading-2>
            <x-text.leading>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid esse nisi odit? Accusamus ducimus eaque nesciunt odit perspiciatis, quae quisquam!</x-text.leading>
        </div>

        <div>
            <div data-tilt data-tilt-max="10" data-tilt-speed="1400" data-tilt-perspective="1500" class="tilt flex flex-col bg-gray-50 dark:bg-gray-900  isolate items-start rounded-lg aspect-video border border-primary-500/50 relative">
                <canvas class="bg-white/0 mask-image-b mask-image-start-60  absolute inset-x-0  bottom-0 w-full !h-1/2" id="myChart"></canvas>
                <x-svg.line.coner class="-top-[6px] -left-[6px] w-[200px] -z-30" />
                <x-svg.line.coner class="-bottom-[6px] -right-[6px] rotate-180 w-[200px] -z-30" />
                <svg aria-hidden="true" class="absolute pointer-events-none -z-10 text-gray-300/20 dark:text-gray-800/50 mask-image-b mask-image-end-50" id="dbc-svg-a14c5b75-df0b-4521-9fd7-95fcb88c7b26" xmlns="http://www.w3.org/2000/svg"
                     width="100%"
                     height="100%">
                    <pattern id="dbc-pattern-a14c5b75-df0b-4521-9fd7-95fcb88c7b26" width="272.72" height="473.27" x="0" y="0" patternUnits="userSpaceOnUse" patternTransform="rotate(0) skewX(0) scale(0.1)" viewBox="0 0 272.72 473.27">
                        <g id="dbc-p-a14c5b75-df0b-4521-9fd7-95fcb88c7b26">
                            <path fill="currentColor" stroke="none" opacity="1"
                                  d="M272.72 473.27V340.15L146.36 267.2V120.83l126.36-72.95V0h-10v30.56l-126.36 72.95L10 30.56V0H0v47.88l126.36 72.95V267.2L0 340.15v133.12h10v-115.8l126.36-72.95 126.36 72.95v115.8h10z" />
                        </g>
                        <use x="0" y="0" href="#dbc-p-a14c5b75-df0b-4521-9fd7-95fcb88c7b26" />
                    </pattern>
                    <rect width="100%" height="100%" fill="url(#dbc-pattern-a14c5b75-df0b-4521-9fd7-95fcb88c7b26)" />
                </svg>
                <div class="p-6 relative tilt-child-top">
                    <div class="font-druk text-3xl">Register</div>
                    <x-text.heading-2 class="text-primary-500">
                        <span class="text-primary-500">Companies</span>
                    </x-text.heading-2>
                </div>
                <div data-counter-amount="1192" class="counter tilt-child-bottom  font-druk text-stroke-1 text-stroke-primary-500 text-[160px] md:text-[120px] lg:text-[220px] text-gray-900/90 absolute -bottom-12 right-6">0</div>

            </div>
        </div>
        <div class="md:-translate-y-1/3  ">
            <div data-tilt data-tilt-max="10" data-tilt-speed="1400" data-tilt-perspective="1500" class="flex tilt flex-col bg-gray-50 dark:bg-gray-900 isolate items-start rounded-lg aspect-video border border-primary-500/50 relative">
                <canvas class="bg-white/0 mask-image-b mask-image-start-60 absolute inset-x-0  bottom-0 w-full !h-1/2" id="myChart2"></canvas>

                <x-svg.line.coner class="-top-[6px] -left-[6px] w-[200px] -z-30" />
                <x-svg.line.coner class="-bottom-[6px] -right-[6px] rotate-180 w-[200px] -z-30" />
                <svg aria-hidden="true" class="absolute pointer-events-none -z-10 text-gray-300/20 dark:text-gray-800/50 mask-image-b mask-image-end-50" id="dbc-svg-a14c5b75-df0b-4521-9fd7-95fcb88c7b26" xmlns="http://www.w3.org/2000/svg"
                     width="100%"
                     height="100%">
                    <pattern id="dbc-pattern-a14c5b75-df0b-4521-9fd7-95fcb88c7b26" width="272.72" height="473.27" x="0" y="0" patternUnits="userSpaceOnUse" patternTransform="rotate(0) skewX(0) scale(0.1)" viewBox="0 0 272.72 473.27">
                        <g id="dbc-p-a14c5b75-df0b-4521-9fd7-95fcb88c7b26">
                            <path fill="currentColor" stroke="none" opacity="1"
                                  d="M272.72 473.27V340.15L146.36 267.2V120.83l126.36-72.95V0h-10v30.56l-126.36 72.95L10 30.56V0H0v47.88l126.36 72.95V267.2L0 340.15v133.12h10v-115.8l126.36-72.95 126.36 72.95v115.8h10z" />
                        </g>
                        <use x="0" y="0" href="#dbc-p-a14c5b75-df0b-4521-9fd7-95fcb88c7b26" />
                    </pattern>
                    <rect width="100%" height="100%" fill="url(#dbc-pattern-a14c5b75-df0b-4521-9fd7-95fcb88c7b26)" />
                </svg>

                <div class="p-6 relative tilt-child-top">
                    <div class="font-druk text-3xl">Register</div>
                    <x-text.heading-2 class="text-primary-500">
                        <span class="text-primary-500">Users</span>
                    </x-text.heading-2>
                </div>
                <div data-counter-amount="192" class="counter tilt-child-bottom  font-druk text-stroke-1 text-stroke-primary-500 text-[160px] md:text-[120px] lg:text-[220px] text-gray-900/90 absolute -bottom-12 right-6">0</div>
            </div>
        </div>


    </div>
</section>
