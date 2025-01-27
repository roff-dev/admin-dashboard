<x-app-layout>

        <div class="container mx-auto py-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h1 class="text-2xl font-bold text-gray-800 mb-4">Create Employee</h1>

                <!-- Form for Creating an Employee -->
                <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- First Name Field --}}
                    <div class="mb-4">
                        <label for="first_name" class="block text-gray-700 font-medium">First Name <span class="text-red-500">*</span></label>
                        <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}"
                               class="w-full px-4 py-2 border rounded-lg @error('first_name') border-red-500 @enderror" required>
                        @error('first_name')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Last Name Field --}}
                    <div class="mb-4">
                        <label for="last_name" class="block text-gray-700 font-medium">Last Name <span class="text-red-500">*</span></label>
                        <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}"
                               class="w-full px-4 py-2 border rounded-lg @error('last_name') border-red-500 @enderror" required>
                        @error('last_name')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email Field --}}
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-medium">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                               class="w-full px-4 py-2 border rounded-lg @error('email') border-red-500 @enderror">
                        @error('email')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Phone Field --}}
                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 font-medium">Phone</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                               class="w-full px-4 py-2 border rounded-lg @error('phone') border-red-500 @enderror">
                        @error('phone')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Profile Picture Field --}}
                    <div class="mb-4">
                        <label for="profile_picture" class="block text-gray-700 font-medium">Profile Picture</label>
                        <input type="file" name="profile_picture" id="profile_picture"
                               class="w-full px-4 py-2 border rounded-lg">
                        @error('profile_picture')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Company Dropdown Field --}}
                    <div class="mb-4">
                        <label for="company_id" class="block text-gray-700 font-medium">Company</label>
                        <select name="company_id" id="company_id"
                                class="w-full px-4 py-2 border rounded-lg @error('company_id') border-red-500 @enderror">
                            <option value="">Select a company</option>
                            @foreach($companies as $company)
                                <option value="{{ $company->id }}" {{ old('company_id') == $company->id ? 'selected' : '' }}>
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
                            Save Employee
                        </button>
                    </div>
                </form>
            </div>
        </div>
</x-app-layout>
