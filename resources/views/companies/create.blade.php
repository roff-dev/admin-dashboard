<x-app-layout>

        <div class="container mx-auto py-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h1 class="text-2xl font-bold text-gray-800 mb-4">Create Company</h1>

                <!-- Form for Creating a Company -->
                <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Name Field --}}
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-medium">Company Name <span class="text-red-500">*</span></label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                               class="w-full px-4 py-2 border rounded-lg @error('name') border-red-500 @enderror" required>
                        @error('name')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email Field --}}
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-medium">Company Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                               class="w-full px-4 py-2 border rounded-lg @error('email') border-red-500 @enderror">
                        @error('email')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Website Field --}}
                    <div class="mb-4">
                        <label for="website" class="block text-gray-700 font-medium">Company Website</label>
                        <input type="url" name="website" id="website" value="{{ old('website') }}"
                               class="w-full px-4 py-2 border rounded-lg @error('website') border-red-500 @enderror">
                        @error('website')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Logo Field --}}
                    <div class="mb-4">
                        <label for="logo" class="block text-gray-700 font-medium">Company Logo</label>
                        <input type="file" name="logo" id="logo" class="w-full px-4 py-2 border rounded-lg">
                        <p class="text-sm text-gray-500 mt-1">Recommended size: 100x100px, Max size: 2MB</p>
                        @error('logo')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Submit Button --}}
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
                            Save Company
                        </button>
                    </div>
                </form>
            </div>
        </div>
</x-app-layout>
