<x-app-layout>
    <div class="p-12 sm:ml-64">
        <div class=" gap-3">
            <form action="{{ route('imports.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="name" id="name" name="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="John Doe" wire:model="name" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />

                </div>

                <div class="mb-5">
                    <label for="file"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">File</label>
                    <input type="file" id="file" wire:model="file" name="file"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                    <x-input-error class="mt-2" :messages="$errors->get('file')" />

                </div>

                <x-primary-button>save</x-primary-button>

            </form>
        </div>
    </div>
</x-app-layout>
