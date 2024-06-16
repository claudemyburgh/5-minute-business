<div class="space-y-6">
    @if(session('success'))
        <div class="max-w-2xl mx-auto bg-green-500 rounded p-4 ">
            {{ session('success') }}
        </div>
    @endif

    <div class="max-w-2xl mx-auto bg-gray-800 rounded p-8">
        <livewire:company-wizard/>
    </div>
</div>


