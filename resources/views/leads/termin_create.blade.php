<x-app-layout>
   
    <div class="sm:p-12 p-8 sm:ml-64">
        <form class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-5 p-5"  method="POST" action="{{ route('leads.store') }}">
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
                </div>
            </div>

            <div class="mt-10">
                <span class="font-bold"
                    style="background-color:#f3f4f6;border-start-end-radius: 13px;padding: 13px;border-radius: 10px">
                    Contact information
                </span>
            </div>
            <div style="background-color:#f3f4f6;border-radius:8px">
                <div class="grid sm:grid-cols-2 gap-4 p-4 py-6">
                    <div class="mb-5">
                        <label for="plz"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Plz</label>
                        <input type="text" id="plz" name="plz"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                        <x-input-error class="mt-2" :messages="$errors->get('form.plz')" />
                    </div>
                    <div class="mb-5">
                        <label for="stadt"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stadt</label>
                        <input type="text" id="stadt" name="stadt"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                        <x-input-error class="mt-2" :messages="$errors->get('form.stadt')" />
                    </div>
                    <div class="mb-5">
                        <label for="adresse"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse</label>
                        <input type="adresse" id="adresse" name="adresse"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                        <x-input-error class="mt-2" :messages="$errors->get('form.adresse')" />
                    </div>

                    <div class="mb-5">
                        <label for="haus_nummer"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Haus
                            nummer</label>
                        <input type="text" id="haus_nummer" name="haus_nummer"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                        <x-input-error class="mt-2" :messages="$errors->get('form.haus_nummer')" />
                    </div>
                 
                </div>
            </div>

            <div class="mt-10">
                <span class="font-bold"
                    style="background-color:#f3f4f6;border-start-end-radius: 13px;padding: 13px;border-radius: 10px">
                    Leads status
                </span>
            </div>
            <div style="background-color:#f3f4f6;border-radius:8px">
                <div class="grid sm:grid-cols-2 gap-4 p-4 py-6">
                    <div class="mb-5">
                        <label for="feedback_status"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Feedback
                            Status</label>
                        <select id="feedback_status"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="Terminiert">Terminiert</option>
                        </select>
                        <x-input-error class="mt-2" :messages="$errors->get('form.feedback_status')" />
                    </div>
                    <div class="mb-5">
                        <label for="termindatum"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Termindatum</label>
                        <input type="date" id="termindatum" name="termindatum"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                        <x-input-error class="mt-2" :messages="$errors->get('form.termindatum')" />
                    </div>
                    <div class="mb-5">
                        <label for="terminzeit"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Terminzeit</label>
                        <input type="time" id="terminzeit" name="terminzeit"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                        <x-input-error class="mt-2" :messages="$errors->get('form.terminzeit')" />
                    </div>
                 
                    <div class="mb-5">
                        <label for="koment_der_konnen"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Koment der
                            konnen</label>
                        <input type="text" id="koment_der_konnen" name="koment_der_konnen"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            cols="30" rows="10">

                        <x-input-error class="mt-2" :messages="$errors->get('form.koment_der_konnen')" />
                    </div>
                </div>
                <div class="flex justify-center sm:justify-end items-center p-3">
                    <x-primary-button wire:loading.remove wire:target="saveLead" class="fullWidthBtn">Create Lead</x-primary-button>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>
