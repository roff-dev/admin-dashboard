<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="m-6">
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4 mt-4 mb-4">
            <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Overview</h1>
        </div>
        <div class="flex space-x-4">
            <div class="flex-1 bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Total Companies</h2>
                <p class="text-gray-600 dark:text-gray-400 mt-2">Number of Companies: {{ $companyCount }}</p>
                <a href="{{route('companies.index')}}">
                    <button class="mt-4 px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-600 dark:bg-blue-700 dark:hover:bg-blue-600">View Companies</button>
                </a>
            </div>
            <div class="flex-1 bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Total Employees</h2>
                <p class="text-gray-600 dark:text-gray-400 mt-2">Number of Employees: {{ $employeeCount }}</p>
                <a href="{{route('employees.index')}}">
                    <button class="mt-4 px-4 py-2 bg-green-500 text-white text-sm font-medium rounded hover:bg-green-600 dark:bg-green-700 dark:hover:bg-green-600">
                        View Employees
                    </button>
                </a>
            </div>
        </div>
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4 mt-4 mb-4">
            <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight pb-6">Highest Performing Companies</h1>
            <div class="flex space-x-4">
                <div class="flex-1 bg-white dark:bg-gray-700 shadow rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Example Company 1</h2>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Number of Companies:</p>
                    <button class="mt-4 px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-600 dark:bg-blue-700 dark:hover:bg-blue-600">
                        View
                    </button>
                </div>
                <div class="flex-1 bg-white dark:bg-gray-700 shadow rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Total Employees</h2>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Example Company 2:</p>
                    <button class="mt-4 px-4 py-2 bg-green-500 text-white text-sm font-medium rounded hover:bg-green-600 dark:bg-green-700 dark:hover:bg-green-600">
                        View
                    </button>
                </div>
                <div class="flex-1 bg-white dark:bg-gray-700 shadow rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Total Employees</h2>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Example Company 3:</p>
                    <button class="mt-4 px-4 py-2 bg-green-500 text-white text-sm font-medium rounded hover:bg-green-600 dark:bg-green-700 dark:hover:bg-green-600">
                        View
                    </button>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>

