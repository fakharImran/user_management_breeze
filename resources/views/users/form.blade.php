
     


<x-app-layout>
    <x-slot name="header">
            {{-- Use 'Edit' for edit mode and create for non-edit/create mode --}}
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                {{ __('Users Management - ') }}{{ isset($user) ? 'Edit' : 'Create' }}
            </h2>
            
    </x-slot>

    {{-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div> --}}


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
                    <form method="post" action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        {{-- add @method('put') for edit mode --}}
                        @isset($user)
                            @method('put')
                        @endisset
                
                        <div>
                            <x-input-label for="name" value="Name" />
                            <x-text-input id="name" name="name" type="text" class="block w-full mt-1" :value="$user->name ?? old('name')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="email" value="Email" />
                            <x-text-input id="email" name="email" type="email" class="block w-full mt-1" :value="$user->email ?? old('email')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>

                        <div>
                            <x-input-label for="password" value="Password" />
                            <x-text-input id="password" name="password" type="password" class="block w-full mt-1" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('password')" />
                        </div>
                        <div>
                            <x-input-label for="confirm-password" value="Confirm Password" />
                            <x-text-input id="confirm-password" name="confirm-password" type="password" class="block w-full mt-1" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('confirm-password')" />
                        </div>
                        <div>
                            <x-input-label for="role" value="Role" />

                            <select id="select" class="block w-full" name="role">
                                @foreach ($roles as $key => $item)
                                    <option value="{{$item}}">{{$item}}</option>
                                @endforeach
                            </select>
                            {{-- {!! Form::select('roles[]', $roles, ['class' => 'form-control', 'multiple']) !!} --}}
                        </div>
                        
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>