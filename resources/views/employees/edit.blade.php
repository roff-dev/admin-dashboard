<x-app-layout>
        <div class="container mx-auto py-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h1 class="text-2xl font-bold text-gray-800 mb-4">Edit Employee</h1>

                <!-- Form for Updating Employee -->
                <form action="{{ route('employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- First Name Field --}}
                    <div class="mb-4">
                        <label for="first_name" class="block text-gray-700 font-medium">First Name <span class="text-red-500">*</span></label>
                        <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $employee->first_name) }}"
                               class="w-full px-4 py-2 border rounded-lg @error('first_name') border-red-500 @enderror" required>
                        @error('first_name')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Last Name Field --}}
                    <div class="mb-4">
                        <label for="last_name" class="block text-gray-700 font-medium">Last Name <span class="text-red-500">*</span></label>
                        <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $employee->last_name) }}"
                               class="w-full px-4 py-2 border rounded-lg @error('last_name') border-red-500 @enderror" required>
                        @error('last_name')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email Field --}}
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-medium">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email', $employee->email) }}"
                               class="w-full px-4 py-2 border rounded-lg @error('email') border-red-500 @enderror">
                        @error('email')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Phone Field --}}
                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 font-medium">Phone</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone', $employee->phone) }}"
                               class="w-full px-4 py-2 border rounded-lg @error('phone') border-red-500 @enderror">
                        @error('phone')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    

                    {{-- Company Field --}}
                    <div class="mb-4">
                        <label for="company_id" class="block text-gray-700 font-medium">Company</label>
                        <select name="company_id" id="company_id"
                                class="w-full px-4 py-2 border rounded-lg @error('company_id') border-red-500 @enderror">
                            <option value="">Select a company</option>
                            @foreach($companies as $company)
                                <option value="{{ $company->id }}"
                                    {{ old('company_id', $employee->company_id) == $company->id ? 'selected' : '' }}>
                                    {{ $company->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('company_id')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Submit Button --}}
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
                            Update Employee
                        </button>
                    </div>
                </form>
            </div>
        </div>

</x-app-layout>
