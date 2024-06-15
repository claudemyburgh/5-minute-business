<x-main-layout>

    <x-section.hero/>
    <x-section.business-name-generation :$business_names/>


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
