<x-app-layout>
    <div class="sm:p-12 p-8 sm:ml-64">
        <div class="">
            <div class="mb-3">
                <x-primary-button onclick="location.href='{{route('imports.create')}}'" >Create new Import</x-primary-button>

            </div>
            <div class="overflow-auto md:w-[calc(100vw_-_320px)] mt-5">
                <table class="w-full text-sm  text-gray-500 dark:text-gray-400 t">
                    <thead
                        class="text-xs  text-gray-700 uppercase bg-gray-50 text-center dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th>
                                File
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody wire:loading.remove>
                        @foreach ($imports as $item)
                            <tr class="text-center bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $item->file }}
                                </td>
                                <td class="px-6 py-4 flex justify-center">
                                    <x-primary-button onclick="location.href='{{ route('imports.edit',['import'=>$item->id]) }}'" >Prepare</x-primary-button>
                                </td> 
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>

</x-app-layout>
