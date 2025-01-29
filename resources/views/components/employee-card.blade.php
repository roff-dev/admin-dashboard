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
