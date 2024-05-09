<x-app-layout>
    <div class="sm:p-12 p-8 sm:ml-64">
        <div class="bg-white p-5 sm:rounded-lg ">
            <form class="px-3 mt-5" method="POST" action="{{route('roles.store')}}">
                @csrf
                <div class="mb-5">
                    <label for="rolename" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role Name</label>
                    <input type="name" id="name" name="name"
                        class="shadow-sm bg-gray-50 w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="Call Agent" wire:model="form.name" />
                    <x-input-error class="mt-2" :messages="$errors->get('form.name')" />
        
                </div>
                <label for="permissions" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role
                    Permissions</label>
        
                <div class="mb-5 grid grid-cols-2 gap-1">
                    @foreach ($permissions as $item)
                        <div class="flex mb-3  items-center ps-3 border border-gray-200 rounded dark:border-gray-700">
                            <input id="bordered-checkbox-1"  type="checkbox"
                                value="{{ $item->name }}" name="selectedPermissions[]"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-checkbox-1{{ $item->id }}"
                                class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $item->name }}</label>
                        </div>
                    @endforeach
        
                </div>
                <div class="mb-5  ">
                    <x-input-error class="mt-2" :messages="$errors->get('form.selectedPermissions')" />
                </div>
                <div class="flex justify-end">
                    <x-primary-button class="fullWidthBtn">Create Role</x-primary-button>
                </div>
        
              
        
            </form>
    
        </div>
    </div>
</x-app-layout>
