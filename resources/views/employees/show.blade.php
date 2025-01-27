<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container mx-auto p-6">
        {{-- Company Details --}}
        <div class="mb-6">
            <h1 class="text-2xl font-bold">{{ $company->name }}</h1>
            <p class="text-gray-600">{{ $company->email }}</p>

            @if($company->logo)
                <img src="{{ $company->logo }}"
                     alt="{{ $company->name }}" class="h-32 w-32 rounded mt-4">
            @else
                <div class="h-32 w-32 bg-gray-200 rounded mt-4 flex items-center justify-center">
                    <span class="text-gray-500">No Logo</span>
                </div>
            @endif

            {{-- Edit/Delete Buttons --}}
            <div class="mt-4">
                <a href="{{ route('companies.edit', $company) }}"
                   class="bg-yellow-500 text-white px-4 py-2 rounded text-sm hover:bg-yellow-600">
                    Edit Company
                </a>
                <form action="{{ route('companies.destroy', $company) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded text-sm hover:bg-red-600">
                        Delete Company
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
