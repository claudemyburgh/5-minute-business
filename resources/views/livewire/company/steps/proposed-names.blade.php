<div class="space-y-6">
    @if(session('success'))
        <div class="max-w-2xl mx-auto bg-green-500 rounded p-4 ">
            {{ session('success') }}
        </div>
    @endif

    <div class="max-w-2xl mx-auto bg-gray-800 rounded p-8">
        <h3 class="text-2xl font-semibold mb-4 text-center">Choose 5 name in order</h3>
        <form wire:submit="submit"  class="space-y-4">

            <div>
                <div>
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" wire:model="name"  />
                    <x-input-error for="name"/>
                </div>
            </div>

            <x-button>
                Save
            </x-button>
        </form>
    </div>
</div>
