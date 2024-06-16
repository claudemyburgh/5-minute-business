<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="wrapper">

{{--                <x-welcome />--}}

                <div class="grid grid-cols-6 gap-4 my-4">
                  <div class="bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-100 rounded p-4">
                      <a class="w-full aspect-square items-center rounded justify-center flex bg-primary-400" href="{{ route('dashboard.register-company.index') }}">Create Company</a>
                  </div>
                </div>

                <ul class="p-8 rounded bg-gray-950 ">
                    @foreach($companies as $company)
                        <li class="text-white">{{ $company->company_type }} - {{ $company->created_at->diffForHumans() }}</li>
                    @endforeach
                </ul>


        </div>
    </div>

    @section('scripts')

    @endsection
</x-app-layout>
