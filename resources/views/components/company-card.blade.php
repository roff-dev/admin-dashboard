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

    {{-- Company Website --}}
    <p class="text-center text-gray-500 text-sm">{{ $company->website }}</p>
</a>
