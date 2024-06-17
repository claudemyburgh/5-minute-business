<a {{ $attributes->merge(['class' => 'font-bold px-8 py-5 rounded-2xl inline-flex items-center justify-center transition duration-200 ease-in-out isolate relative']) }}>
    {{ $slot }}
    <x-svg.button.1 />
</a>
