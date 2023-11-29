<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                {{ __('Users Management') }}
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
                            {{ 'Title' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $user->name }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Content' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $user->email }}
                        </p>
                    </div>
                    
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Roles' }}
                        </h2>
                        @if (!empty($user->getRoleNames()))
                            @foreach ($user->getRoleNames() as $v)
                                <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ $v }}</span>
                            @endforeach
                        @endif
                    </div>
                    <a href="{{ route('users.index') }}" class="px-4 py-2 text-white bg-blue-500 rounded-md">BACK</a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
