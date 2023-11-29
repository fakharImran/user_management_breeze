
     


<x-app-layout>
    <x-slot name="header">
            {{-- Use 'Edit' for edit mode and create for non-edit/create mode --}}
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                {{ __('Files Management - ') }}{{ isset($file) ? 'Edit' : 'Create' }}
            </h2>
            
    </x-slot>

    {{-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New file</h2>
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
                    <form method="post" action="{{ isset($file) ? route('files.update', $file->id) : route('files.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        {{-- add @method('put') for edit mode --}}
                        @isset($file)
                            @method('put')
                        @endisset
                
                        <div>
                            <x-input-label for="name" value="Name" />
                            <x-text-input id="name" name="name" type="text" class="block w-full mt-1" :value="$file->name ?? old('name')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="email" value="Email" />
                            <x-text-input id="email" name="email" type="email" class="block w-full mt-1" :value="$file->email ?? old('email')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>

                        <div>
                            <x-input-label for="dob" value="DOB" />
                            <x-text-input id="dob" name="dob" type="date" class="block w-full mt-1" :value="$file->dob ?? old('dob')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('dob')" />
                        </div>
                        <div>
                            <x-input-label for="telephone" value="Telephone" />
                            <x-text-input id="telephone" name="telephone" type="text" class="block w-full mt-1" :value="$file->telephone ?? old('telephone')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('telephone')" />
                        </div>
                        <div>
                            <x-input-label for="age" value="Age" />
                            <x-text-input id="age" name="age" type="text" class="block w-full mt-1" :value="$file->age ?? old('age')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('age')" />
                        </div>
                        <div>
                            <x-input-label for="relation" value="Next of Kin:  (if applicable)" />
                            <x-text-input id="relation" name="relation" type="text" class="block w-full mt-1" :value="$file->relation ?? old('relation')" autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('relation')" />
                        </div>
                        <div>
                            <x-input-label for="passport_photo" value="Passport Photo" />
                            <x-text-input id="passport_photo" name="passport_photo" type="file" class="block w-full mt-1" :value="$file->passport_photo ?? old('passport_photo')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('passport_photo')" />
                        </div>
                        <div>
                            <x-input-label for="illness" value="Illness" />
                            <x-text-input id="illness" name="illness" type="text" class="block w-full mt-1" :value="$file->illness ?? old('illness')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('illness')" />
                        </div>
                        <div>
                            <x-input-label for="address" value="Last Residence Address:  (if applicable)" />
                            <x-text-input id="address" name="address" type="text" class="block w-full mt-1" :value="$file->address ?? old('address')" autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('address')" />
                        </div>
                        <div>
                            <x-input-label for="recommended_source" value="Recommended Source" />
                            <x-text-input id="recommended_source" name="recommended_source" type="text" class="block w-full mt-1" :value="$file->recommended_source ?? old('recommended_source')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('recommended_source')" />
                        </div>
                        <div>
                            <x-input-label for="recommended_source_address" value="Recommended Source Address" />
                            <x-text-input id="recommended_source_address" name="recommended_source_address" type="text" class="block w-full mt-1" :value="$file->recommended_source_address ?? old('recommended_source_address')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('recommended_source_address')" />
                        </div>
                        
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                    <a href="{{ route('files.index') }}" class="px-4 py-2 text-white bg-blue-500 rounded-md">BACK</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>