<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                {{ __('Role Management') }}
            </h2>
            <a href="{{ route('roles.create') }}" class="px-4 py-2 text-white bg-blue-500 rounded-md">Create New Role</a>
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
                    <table class="w-full text-sm border-collapse table-auto">
                        <thead>
                            <tr>
                                <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b text-slate-400">No</th>
                                <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b text-slate-400">Name</th>
                                <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b text-slate-400">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            {{-- populate our post data --}}
                            @foreach ($roles as $key => $role)
                                <tr>
                                    <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ ++$i }}</td>
                                    <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ $role->name }}</td>
                                    <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        <a href="{{ route('roles.show', $role->id) }}" class="px-4 py-2 border border-blue-500 rounded-md hover:bg-blue-500 hover:text-white">SHOW</a>
                                        <a href="{{ route('roles.edit', $role->id) }}" class="px-4 py-2 border border-yellow-500 rounded-md hover:bg-yellow-500 hover:text-white">EDIT</a>
                                        {{-- add delete button using form tag --}}
                                        <form method="post" action="{{ route('roles.destroy', $role->id) }}" class="inline">
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
