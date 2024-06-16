<div class="space-y-6">

<div class="max-w-2xl mx-auto bg-gray-800 rounded p-8">
    <h3 class="text-2xl font-semibold mb-4 text-center">Select the type of company you want to register</h3>
    <form wire:submit="submit"  class="space-y-4">
        <div class="grid grid-cols-2 gap-8">
            <div class="w-full aspect-video">
                <input class="hidden peer" type="radio" id="private-company" name="company_type" value="private-company" wire:model="company_type" >
                <label class="size-full font-bold bg-gray-900 border border-gray-950 cursor-pointer flex items-center justify-center rounded peer-checked:bg-primary-500 peer-checked:text-gray-950"  for="private-company">Private Company</label>
            </div>

            <div class="w-full aspect-video">
                <input class="hidden peer" type="radio" id="none-profit" name="company_type" value="none-profit" wire:model="company_type">
                <label class="size-full font-bold bg-gray-900 border border-gray-950 cursor-pointer flex items-center justify-center rounded peer-checked:bg-primary-500 peer-checked:text-gray-950"  for="none-profit">None Profit
                    Company</label>
            </div>
        </div>
        <x-input-error for="company_type"/>

        <x-button>
            Save
        </x-button>
    </form>
</div>
</div>
