<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="wrapper">

            {{--                <x-welcome />--}}

            <div class="flex space-x-4 my-4">
                <a class="items-center rounded justify-center px-4 py-3 inline-flex bg-white font-semibold hover:bg-gray-100 text-gray-900" href="{{ route('dashboard.register-company.index') }}">Create Company</a>
            </div>
            <div class="max-w-sm p-4 rounded bg-gray-800 ">
                <h3 class="text-white font-semibold text-xl mb-4">Registered Companies</h3>
                <ul class="list-disc list-inside">
                    @foreach($companies as $company)
                        <li class="text-white list-item">{{ $company->company_type }} - {{ $company->created_at->diffForHumans() }}</li>
                    @endforeach
                </ul>
            </div>


        </div>
    </div>

    @section('scripts')

    @endsection
</x-app-layout>
