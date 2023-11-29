<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                {{ __('File Management') }}
            </h2>
            <a href="{{ route('files.create') }}" class="px-4 py-2 text-white bg-blue-500 rounded-md">Create New File</a>
        </div>
    </x-slot>




    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="w-full text-sm border-collapse table-auto" >
                        <thead>
                            <tr>
                                <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b text-slate-400">No</th>
                                {{-- <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b text-slate-400">User ID</th> --}}
                                <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b text-slate-400">Name</th>
                                <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b text-slate-400">DOB</th>
                                <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b text-slate-400">Email</th>
                                {{-- <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b text-slate-400">Age</th> --}}
                                <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b text-slate-400">Telephone</th>
                                {{-- <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b text-slate-400">Next of Kin</th> --}}
                                {{-- <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b text-slate-400">Passport Photo</th> --}}
                                {{-- <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b text-slate-400">Illness</th> --}}
                                <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b text-slate-400">Address</th>
                                {{-- <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b text-slate-400">Recommended Source</th> --}}
                                {{-- <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b text-slate-400">Recommended Source Address</th> --}}
                                <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b text-slate-400">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            {{-- populate our post data --}}
                            @foreach ($files as $key => $file)
                                <tr>
                                    {{-- {{dd($file)}} --}}
                                    <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ ++$i }}</td>  
                                    {{-- <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ $file->user_id }}</td> --}}
                                    <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ $file->name }}</td>
                                    <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ $file->dob }}</td>
                                    <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ $file->email }}</td>
                                    {{-- <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ $file->age }}</td> --}}
                                    <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ $file->telephone }}</td>
                                    {{-- <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ $file->relation }}</td> --}}
                                    {{-- <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        @php
                                        if($file->passport_photo!=null)
                                        {
                                            $imagePath = asset('storage/' . $file->passport_photo);
                                            // dd($imagePath);
                                            echo "<img width='100' src='$imagePath' onclick='displayFullScreenImage(\"$imagePath\")' />";
                                        }
                                        else {
                                            echo "N/A";
                                        }
                                    @endphp     
                                    </td> --}}
                                    {{-- <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ $file->illness }}</td> --}}
                                    <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ $file->address }}</td>
                                    {{-- <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ $file->recommended_source }}</td> --}}
                                    {{-- <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ $file->recommended_source_address }}</td> --}}
                                    <td class="p-4 pl-8 border-b flex border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        <a href="{{ route('files.show', $file->id) }}" class="px-4 mx-2 py-2 border border-blue-500 rounded-md hover:bg-blue-500 hover:text-white">SHOW</a>
                                        <a href="{{ route('files.edit', $file->id) }}" class="px-4 mx-2 py-2 border border-yellow-500 rounded-md hover:bg-yellow-500 hover:text-white">EDIT</a>
                                        {{-- add delete button using form tag --}}
                                        <form method="post" action="{{ route('files.destroy', $file->id) }}" class="inline">
                                            @csrf
                                            @method('delete')
                                            <button class="px-4 py-2 border border-red-500 rounded-md hover:bg-red-500 hover:text-white">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
     
</x-app-layout>



