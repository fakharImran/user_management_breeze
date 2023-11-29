<x-app-layout>
    <x-slot name="header">
            {{-- Use 'Edit' for edit mode and create for non-edit/create mode --}}
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                {{ __('Role Management - ') }}{{ isset($role) ? 'Edit' : 'Create' }}
            </h2>
            
    </x-slot>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- don't forget to add multipart/form-data so we can accept file in our form --}}
                    <form method="post" action="{{ isset($role) ? route('roles.update', $role->id) : route('roles.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        {{-- add @method('put') for edit mode --}}
                        @isset($role)
                            @method('put')
                        @endisset
                
                        <div>
                            <x-input-label for="name" value="Name" />
                            <x-text-input id="name" name="name" type="text" class="block w-full mt-1" :value="$role->name ?? old('name')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>
                                          
                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Permission:</strong>
                                <br />
                               

                                @foreach ($permission as $value)
                                @if(isset($role))
                                    <label>{{ Form::checkbox('permission[]', $value->name, in_array($value->id, $rolePermissions) ? true : false, ['class' => 'name']) }}
                                        {{ $value->name }}</label>
                                    <br />     
                                @else
                                    <label>{{ Form::checkbox('permission[]', $value->name, false, ['class' => 'name']) }}
                                        {{ $value->name }}</label>
                                    <br />
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                    <a href="{{ route('roles.index') }}" class="px-4 py-2 text-white bg-blue-500 rounded-md">BACK</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


     
