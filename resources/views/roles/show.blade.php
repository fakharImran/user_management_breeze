<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                {{ __('Show Role') }}
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
                            {{ $role->name }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Permissions' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            @if (!empty($rolePermissions))
                                @foreach ($rolePermissions as $v)
                                    <label class="label label-success">{{ $v->name }},</label>
                                @endforeach
                            @endif
                        </p>
                    </div>
                    <a href="{{ route('roles.index') }}" class="px-4 py-2 text-white bg-blue-500 rounded-md">BACK</a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

