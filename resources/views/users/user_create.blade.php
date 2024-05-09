<x-app-layout>
    <div class="sm:p-12 p-8 sm:ml-64">
        <div class="bg-white sm:rounded-lg p-7">
            <div class="mt-10">
                <span class="font-bold"
                    style="background-color:#f3f4f6;border-start-end-radius: 13px;padding: 13px;border-radius: 10px">
                    User Informationen
                </span>
            </div>
            <form class="" method="POST" style="background-color:#f3f4f6;border-start-end-radius: 13px;padding: 13px;border-radius: 10px"
                action="{{ route('users.store') }}">
                @csrf
                <div class="grid sm:grid-cols-2 gap-4">
                    <div class="mb-5 pt-4">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="name" id="name" name="name"
                            class="shadow-sm inputi11 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="John Doe" wire:model="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>
                    <div class="mb-5 pt-4">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" name="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="name@flowbite.com" wire:model="email" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </div>
                    <div class="mb-5">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" id="password" wire:model="password" name="password"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                        <x-input-error class="mt-2" :messages="$errors->get('password')" />
    
                    </div>
                    <div class="mb-5">
    
                        <label for="roles"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Roles</label>
                        <select id="roles" name="role"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Choose a role</option>
                            @if ($roles)
                                @foreach ($roles as $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                            @endif
                        </select>
                        <x-input-error class="mt-2" :messages="$errors->get('role')" />
                    </div>
                   
                </div>
                <div class="flex justify-center w-100 pt-4 pb-4">
                    <x-primary-button class="w-64 flex justify-center rounded-xl">Create User</x-primary-button>
                </div>
            </form>
        </div>
      
    </div>
</x-app-layout>
