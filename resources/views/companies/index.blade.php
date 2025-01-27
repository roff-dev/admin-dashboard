<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Company Overview') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6  mt-6">
        @foreach ($companies as $company)
            {{-- Wrapping the card with a link --}}
            <a href="{{ route('companies.show', $company) }}" class="block bg-gray-800 shadow rounded-lg p-6 hover:shadow-lg transition">
                {{-- Company Logo --}}
                @if ($company->logo)
                    <img src="{{ $company->logo }}"
                         alt="{{ $company->name }}" class="h-24 w-24 rounded mx-auto">
                @else
                    <div class="h-24 w-24 bg-gray-200 rounded mx-auto flex items-center justify-center">
                        <span class="text-gray-500">No Logo</span>
                    </div>
                @endif

                {{-- Company Name --}}
                <h2 class="text-white text-lg font-bold text-center mt-4">{{ $company->name }}</h2>

                {{-- Company Email --}}
                <p class="text-center text-gray-500 text-sm">{{ $company->email }}</p>
            </a>
        @endforeach
            <div class="mt-6">
                {{ $companies->links() }}
            </div>
    </div>
</x-app-layout>
