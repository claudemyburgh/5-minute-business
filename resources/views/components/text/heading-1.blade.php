<h1 {{ $attributes->merge(['class' => 'font-druk relative text-gray-950 dark:text-white isolate text-shadow-[20] text-shadow-gray-200/5 dark:text-shadow-gray-950/5 text-balance uppercase text-[72px] md:text-[92px] lg:text-[144px]
leading-[0.8] font-bold mb-10'])
 }}>
    {{ $slot }}
    <span class="translate-y-4 relative block -z-10">
        <x-svg.line.chalk-fat />
    </span>
</h1>
