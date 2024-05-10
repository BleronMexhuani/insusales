<x-app-layout>

    <div class="sm:p-12 p-8 sm:ml-64">
        <form class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-5 p-5" method="POST"
            action="{{ route('leads.store', ['project_id' => $project_id]) }}">
            @csrf
            <div class="mt-5 pt-4">
                <span class="font-bold"
                    style="background-color:#f3f4f6;border-start-end-radius: 13px;padding: 13px;border-radius: 10px">
                    Personal Information
                </span>
            </div>
            <div style="background-color:#f3f4f6;border-radius:8px">
                <div class="grid sm:grid-cols-2 gap-4 p-4 py-6">
                    <div class="mb-5">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vorname</label>
                        <input type="vorname" id="vorname" name="vorname"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                        <x-input-error class="mt-2" :messages="$errors->get('form.vorname')" />

                    </div>
                    <div class="mb-5">
                        <label for="nachname"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nachname</label>
                        <input type="nachname" id="nachname" name="nachname"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                        <x-input-error class="mt-2" :messages="$errors->get('form.nachname')" />
                    </div>

                    <div class="mb-5">
                        <label for="handy_nummer"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefonnummer </label>
                        <input type="text" id="handy_nummer" name="handy_nummer" required
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                        <x-input-error class="mt-2" :messages="$errors->get('form.handy_nummer')" />
                    </div>

                    @foreach ($customfields as $item)
                        <div class="mb-5">
                            <label for="{{ $item->input_name }}"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $item->input_name }}
                            </label>
                            <input type="{{ $item->input_type }}" id="{{ $item->input_name }}"
                                name="{{ $item->input_name }}" {{ $item->is_required ?? 'required' }}
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                            <x-input-error class="mt-2" :messages="$errors->get('{{ $item->input_name }}')" />
                        </div>
                    @endforeach
                    <div class="mb-5">
                        <x-primary-button class=" w-full">SUBMIT FORM</x-primary-button>

                    </div>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>
