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

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 m-6">
        @foreach ($employees as $employee)
            <x-employee-card :employee="$employee" />
        @endforeach
        <div class="mt-6">
            {{ $employees->links() }}
        </div>
    </div>

</x-app-layout>
