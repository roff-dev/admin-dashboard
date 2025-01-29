<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Company Overview') }}
            </h2>
            <a href="{{ route('companies.create') }}"
               class="bg-gray-900 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition">
                Add Company
            </a>
        </div>
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6  m-6">
        @foreach ($companies as $company)
            <x-company-card :company="$company" />

        @endforeach
            <div class="mt-6">
                {{ $companies->links() }}
            </div>
    </div>
</x-app-layout>
