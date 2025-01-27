<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Employee Overview') }}
            </h2>
            <a href="{{ route('employees.create') }}"
               class="bg-gray-900 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition">
                Add Employee
            </a>
        </div>
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($employees as $employee)
            <div class="bg-gray-800 shadow rounded-lg p-4 hover:shadow-lg transition">
                <h3 class="text-gray-200 text-lg font-bold">{{ $employee->first_name }}  {{ $employee->last_name }}</h3>
                <p class="text-gray-600 text-sm">{{ $employee->email }}</p>
                <p class="text-gray-600 text-sm">{{ $employee->phone_number }}</p>
                <p class="text-gray-200 text-m">{{ $employee->company ? $employee->company->name : 'N/A' }}</p>


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
        <div class="mt-6">
            {{ $employees->links() }}
        </div>
    </div>

</x-app-layout>
