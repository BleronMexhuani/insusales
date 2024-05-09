<x-app-layout>
    <div class="sm:p-12 p-8 sm:ml-64">
        <div class="">
            <x-primary-button class="my-5" onclick="location.href='{{ route('roles.create') }}'" wire:navigate>Create
                Role</x-primary-button>

                <div class="relative overflow-x-auto sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Role Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Created At
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody wire:loading.remove>
                            @foreach ($roles as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $item->created_at }}
                                    </td>
                                    <td class="px-6 py-4 flex">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            
                    <div class="my-3 p-3">
                        {{ $roles->links() }}
                    </div>
            
                </div>
        </div>
    </div>
</x-app-layout>
