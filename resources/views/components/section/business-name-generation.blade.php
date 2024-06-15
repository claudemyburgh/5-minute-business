@props(['business_names'])

<section class="my-24 wrapper">
    <x-text.heading-2 >
        Business Names <span class="text-primary-500">Generator</span>
    </x-text.heading-2>
    <x-text.leading>
        Struggling to thing of a unique business name or the names you choose is taken by someone else. Simply use the business name generator a name for you.
    </x-text.leading>

    <div class="shadow-lg flex items-center justify-center shadow-black/20 my-4 text-md font-mono min-h-[400px] isolate border border-primary-500/50 bg-gray-900 p-8 rounded-xl relative overflow-clip">
        <x-svg.line.coner class="-top-[6px] -left-[6px] w-[250px] -z-30"/>
        <x-svg.line.coner class="rotate-180 -right-[6px] -bottom-[6px] w-[250px] -z-30"/>
        <div class="flex flex-wrap pointer-events-none gap-4 absolute inset-8 -z-10 ">
            @foreach(collect($business_names)->take(40) as $name)
                <span class="even:text-primary-500 odd:rotate-2 even:-rotate-1 named-item opacity-5">{{ $name }}</span>
            @endforeach
                <span class="opacity-5">and many more ...</span>
        </div>
        <section class="bg-gray-800 rounded border border-gray-700 p-10">
            <div class="splide splide_names" aria-label="Business Name Generator">
                <span class="font-semibold text-xl mb-2 inline-block" >Business Name</span>
                <div style="width: 320px; height: 64px; overflow: clip;"  class="splide__track border-2 border-primary-500 rounded bg-white/90 dark:bg-gray-800/90 ">
                    <div class="splide__list block">
                        @foreach(collect($business_names) as $name)
                            <div class="splide__slide   flex items-center px-4 bg-transparent text-xl border-0 h-[40px] w-full rounded" >{{ $name }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>


    </div>
</section>
