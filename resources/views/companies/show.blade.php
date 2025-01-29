<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Company Overview: {{ $company->name }}
            </h2>
            <a href="{{ route('employees.create') }}"
               class="bg-gray-900 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition">
                Add Employee
            </a>
        </div>
    </x-slot>
    <div class="container mx-auto p-6">
        {{-- Company Details --}}

        <div class="mb-6 bg-gray-800 rounded-lg shadow-md p-6 flex items-center">
            {{-- Logo Section --}}
            @if($company->logo)
                <img src="{{ asset($company->logo) }}" alt="{{ $company->name }}"
                     class="h-24 w-24 object-cover rounded mr-4">
            @else
                <div class="h-24 w-24 bg-gray-200 rounded flex items-center justify-center mr-4">
                    <span class="text-gray-500 text-sm">No Logo</span>
                </div>
            @endif

            {{-- Name Email and Website Section --}}
            <div class="flex-1 text-center">
                <h1 class="text-gray-200 text-xl font-bold">{{ $company->name }}</h1>
                <p class="text-gray-600">{{ $company->email }}</p>
                <p class="text-gray-600">{{ $company->website }}</p>
            </div>

            {{-- Edit/Delete Buttons Section --}}
            <div class="flex flex-col space-y-2">
                <a href="{{ route('companies.edit', $company) }}"
                   class="bg-yellow-500 text-white px-4 py-2 rounded text-sm hover:bg-yellow-600 text-center">
                    Edit
                </a>
                <form action="{{ route('companies.destroy', $company) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="bg-red-500 text-white px-4 py-2 rounded text-sm hover:bg-red-600 text-center">
                        Delete
                    </button>
                </form>
            </div>
        </div>


        {{-- Employees List --}}
        <h2 class="text-gray-200 text-xl font-bold mb-4">Employees</h2>

        @if ($company->employees->isEmpty())
            <p class="text-gray-600">No employees for this company yet.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($company->employees as $employee)
                    <div class="bg-gray-800 shadow rounded-lg p-4 hover:shadow-lg transition">
                        {{-- Employee Details --}}
                        <h3 class="text-gray-200 text-lg font-bold">{{ $employee->first_name }}  {{ $employee->last_name }}</h3>
                        <p class="text-gray-600 text-sm">{{ $employee->email }}</p>
                        <p class="text-gray-600 text-sm">{{ $employee->phone }}</p>

                        {{-- View/Edit/Delete Buttons for Employee --}}
                        <div class="mt-4 space-y-2">

                            <a href="{{ route('employees.edit', $employee) }}" class="text-yellow-500">Edit</a>
                            <form action="{{ route('employees.destroy', $employee) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-app-layout>
