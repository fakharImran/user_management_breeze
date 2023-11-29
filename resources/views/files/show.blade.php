<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                {{ __('File Management') }}
            </h2>
            {{-- <a href="{{ route('users.index') }}" class="px-4 py-2 text-white bg-red-500 rounded-md">Back</a> --}}
        </div>
    </x-slot>



    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'User ID' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $file->user_id }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Name' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $file->name }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'DOB' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $file->dob }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Email' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $file->email }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Age' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $file->age }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Telephone' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $file->telephone }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Next of Kin' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $file->relation }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Passport Photo' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $file->passport_photo }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Illness' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $file->illness }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Address' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $file->address }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Recommended Source' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $file->recommended_source }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Recommended Source Address' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $file->recommended_source_address }}
                        </p>
                    </div>

                    <a href="{{ route('files.index') }}" class="px-4 py-2 text-white bg-blue-500 rounded-md">BACK</a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
