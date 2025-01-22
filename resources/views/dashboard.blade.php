<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div>
        <h1>Overview</h1>
        <div>
            <h2>Total Companies</h2>
            <p>number of companies</p>
            <button>View Companies</button>
        </div>
        <div>
            <h2>Total Employees</h2>
            <p>number of employees</p>
            <button>View Employees</button>
        </div>
    </div>

    <div>
        <h1>Highest Performing Companies</h1>
        <div>card 1</div>
        <div>card 2</div>
        <div>card 3</div>
    </div>

</x-app-layout>

