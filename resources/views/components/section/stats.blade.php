<section class="bg-gray-900 flex items-center min-h-[50vh] my-32 py-32">
    <div class="wrapper grid md:grid-cols-2 gap-6">


        <div>
            <x-text.heading-2 class="text-primary-500">
                Useful <span class="text-primary-500">Stats</span>
            </x-text.heading-2>
            <x-text.leading>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid esse nisi odit? Accusamus ducimus eaque nesciunt odit perspiciatis, quae quisquam!</x-text.leading>
        </div>


        <div class="flex flex-col bg-gray-50 dark:bg-gray-900  isolate items-start rounded-lg aspect-video border border-primary-500/50 relative">
            <x-svg.line.coner class="-top-[6px] -left-[6px] w-[200px] -z-30" />

            <div class="p-6 relative z-20">
                <div class="font-druk text-3xl">Register</div>
                <x-text.heading-2 class="text-primary-500">
                    <span class="text-primary-500">Companies</span>
                </x-text.heading-2>
            </div>

            <div data-counter-amount="1192" class="counter font-druk text-stroke-1 text-stroke-primary-500 text-[160px] md:text-[120px] lg:text-[220px] text-gray-900/90 absolute z-10 -bottom-12 right-6">
                0
            </div>
            <canvas class="bg-white/0 mask-image-b mask-image-start-60  absolute inset-x-0  bottom-0 w-full !h-1/2" id="myChart"></canvas>

        </div>


        <div class="flex flex-col bg-gray-50 dark:bg-gray-900 -translate-y-1/3 items-start p-6 isolate rounded-lg aspect-video border border-primary-500/50 relative">
            <x-svg.line.coner class="rotate-180 -right-[6px] -bottom-[6px] w-[200px] -z-30" />

            <div class="font-druk text-3xl">Register</div>
            <x-text.heading-2 class="text-primary-500">
                <span class="text-primary-500">Users</span>
            </x-text.heading-2>
            <div data-counter-amount="134" class="counter font-druk -z-10 text-[160px] md:text-[120px] lg:text-[220px] opacity-20 absolute bottom-0 right-2">
                0
            </div>
        </div>

        <div class="flex flex-col bg-gray-50 dark:bg-gray-900  items-start p-6 isolate rounded-lg aspect-video border border-primary-500/50 relative">
            <x-svg.line.coner class="rotate-180 -right-[6px] -bottom-[6px] w-[200px] -z-30" />

            <div class="font-druk text-3xl">Register</div>
            <x-text.heading-2 class="text-primary-500">
                <span class="text-primary-500">Users</span>
            </x-text.heading-2>
            <div data-counter-amount="6" class="counter font-druk -z-10 text-[160px] md:text-[120px] lg:text-[220px] opacity-20 absolute bottom-0 right-2">
                0
            </div>
        </div>

    </div>
</section>
