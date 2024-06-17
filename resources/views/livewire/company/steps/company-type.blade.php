<div class="space-y-6">

    <div class="max-w-2xl mx-auto bg-gray-800 rounded p-8">
        <h3 class="text-2xl font-semibold mb-4 ">Select the type of company you want to register</h3>
        <form wire:submit="submit" class="space-y-4">

            <div class="space-y-4 border border-black/30 rounded p-4">
                <div class="flex space-x-2 items-center">
                    <x-radio class="private-company text-primary-500" type="radio" id="private-company" name="company_type" value="private-company" wire:model="company_type" />
                    <label for="private-company">Private Company (Pty) Ltd. </label>
                </div>

                <div class="flex space-x-2 items-center">
                    <x-radio class="text-primary-500" type="radio" id="none-profit" name="company_type" value="none-profit" wire:model="company_type" />
                    <label for="none-profit">None Profit </label>
                </div>
            </div>
            <x-input-error for="company_type" />

            <x-button>
                Next
            </x-button>
        </form>
    </div>
</div>
