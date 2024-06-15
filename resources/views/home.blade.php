<x-main-layout>

    <x-hero/>

    <section class="my-24 wrapper">
        <x-text.heading-2 >
            Business Names <span class="text-primary-500">Generator</span>
        </x-text.heading-2>
        <x-text.leading>
            Struggling to thing of a unique business name or the names you choose is taken by someone else. Simply use the business name generator a name for you.
        </x-text.leading>


        <div class="flex flex-wrap shadow-lg shadow-black/20 gap-4 my-4 text-md font-mono border border-primary-500/50 bg-gray-900 p-8 rounded-xl relative">
            <x-svg.line.coner class="-top-[6px] -left-[6px] w-[250px]"/>
            <x-svg.line.coner class="rotate-180 -right-[6px] -bottom-[6px] w-[250px]"/>
            @foreach(collect($business_names)->take(24) as $name)
                <span class="even:text-primary-500 odd:rotate-2 even:-rotate-1">{{ $name }}</span> *
            @endforeach
            and many more ...
        </div>
    </section>


    <section class="wrapper my-24">
        <x-text.heading-2 class="text-center">
            Our <span class="text-primary-500">Process</span>
        </x-text.heading-2>
        <div class="grid grid-cols-1  lg:grid-cols-12 grid-rows-4 gap-10 font-mono text-lg md:text-xl">
            <div class="border border-primary-500/50 rounded-2xl p-8 relative md:col-span-6 md:col-start-1">
                <span class="font-druk absolute top-20 left-10 text-stroke-fill-transparent text-stroke-3 text-stroke-primary-500 opacity-20 text-[125px] md:text-[250px]">1</span>
                <p>Quick Form Submission: In just 5 minutes, complete our user-friendly form with the necessary details about your new company.</p>
            </div>
            <div class="border bg-primary-500 text-gray-900 border-primary-500/50 rounded-2xl p-8 relative md:col-span-6 md:col-start-3">
                <span class="font-druk absolute top-20 left-10 text-stroke-fill-transparent text-stroke-3 text-stroke-gray-900 opacity-20 text-[125px] md:text-[250px]">2</span>
                <p>Expert Handling: Our experienced team takes over from there, managing the entire registration process on your behalf.</p>
            </div>
            <div class="border border-primary-500/50 rounded-2xl p-8 relative md:col-span-6 md:col-start-5">
                <span class="font-druk absolute top-20 left-10 text-stroke-fill-transparent text-stroke-3 text-stroke-primary-500 opacity-20 text-[125px] md:text-[250px]">3</span>
                <p>Hassle-Free Experience: We handle all the paperwork and legal requirements, ensuring your company is registered correctly and promptly.</p>
            </div>
            <div class="border border-primary-500/50 rounded-2xl p-8 relative md:col-span-6 md:col-start-7">
                <span class="font-druk absolute top-20 left-10 text-stroke-fill-transparent  text-stroke-3 text-stroke-primary-500 opacity-20 text-[125px] md:text-[250px]">4</span>
                <p>Continuous Support: From initial registration to ongoing compliance, we provide continuous support to keep your business running smoothly.</p>
            </div>
        </div>
    </section>

</x-main-layout>
