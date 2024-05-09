<x-app-layout>
   
    <div class="sm:p-12 p-8 sm:ml-64">
        <form class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5 sm:p-7" method="POST"
            action="{{ route('leads.update', ['lead' => $lead->id]) }}">
            @method('PUT')
            @csrf
            <div class="grid ">
                @include('components.lead_info')
                @if ($lead->quality_bemerkung)
                    <div class="mt-10">
                        <span class="font-bold"
                            style="background-color:#f3f4f6;border-start-end-radius: 13px;padding: 13px;border-radius: 10px">
                            Quality Informationen
                        </span>
                    </div>
                    <div class="" style="background-color:#f3f4f6;border-radius:8px">
                        <div class="grid grid-cols-1 md:grid-cols-[150px,150px,auto]  gap-4 py-6 p-4">
                            <div class="selector-item mt-1">
                                <input {{$lead->quality_status=='confirmed' ? 'checked' : ''}} disabled type="radio" value="confirmed" id="radio1" name=""
                                    class=" selector selector-item_radio">
                                <label for="radio1" class="selector-item_label"><span
                                        style="color:rgba(20, 174, 92, 1);">Akzeptiert</span> <svg width="24"
                                        height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.7992 8.39999L9.6397 15.6L7.19922 13.1457" stroke="#14AE5C"
                                            stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </label>
                            </div>
                            <div class="selector-item mt-1">
                                <input {{$lead->quality_status=='declined' ? 'checked' : ''}} disabled type="radio" value="declined" id="radio2" name=""
                                    class="selector-item_radio">
                                <label for="radio2" class="selector-item_label"><span
                                        style="color:rgba(244, 63, 94, 1)">Abgeleht</span><svg width="24"
                                        height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 8L8 16M16 16L8 8" stroke="#F43F5E" stroke-width="1.2"
                                            stroke-linecap="round" />
                                    </svg>
                                </label>
                            </div>
                            <div class="mb-5">
                                <label for="quality_bemerkung"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quality
                                    Bemerkung</label>
                                <input type="text" id="quality_bemerkung" disabled
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="Quality bemerkung..." value="{{ $lead->quality_bemerkung }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('quality_bemerkung')" />
                            </div>
                        </div>
                    </div>
                @endif
                @if ($lead->confirmation_bemerkung)
                <div class="mt-10">
                    <span class="font-bold"
                        style="background-color:#f3f4f6;border-start-end-radius: 13px;padding: 13px;border-radius: 10px">
                        Confirmation Informationen
                    </span>
                </div>
                <div class="" style="background-color:#f3f4f6;border-radius:8px">
                    <div class="grid grid-cols-1 md:grid-cols-[150px,150px,auto]  gap-4 py-6 p-4">
                        <div class="selector-item mt-1">
                            <input {{$lead->confirmation_status=='confirmed' ? 'checked' : ''}} disabled type="radio" value="confirmed" id="radio1" name=""
                                class=" selector selector-item_radio">
                            <label for="radio1" class="selector-item_label"><span
                                    style="color:rgba(20, 174, 92, 1);">Akzeptiert</span> <svg width="24"
                                    height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.7992 8.39999L9.6397 15.6L7.19922 13.1457" stroke="#14AE5C"
                                        stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </label>
                        </div>
                        <div class="selector-item mt-1">
                            <input {{$lead->confirmation_status=='declined' ? 'checked' : ''}} disabled type="radio" value="declined" id="radio2" name=""
                                class="selector-item_radio">
                            <label for="radio2" class="selector-item_label"><span
                                    style="color:rgba(244, 63, 94, 1)">Abgeleht</span><svg width="24"
                                    height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 8L8 16M16 16L8 8" stroke="#F43F5E" stroke-width="1.2"
                                        stroke-linecap="round" />
                                </svg>
                            </label>
                        </div>
                        <div class="mb-5">
                            <label for="quality_bemerkung"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmation
                                Bemerkung</label>
                            <input type="text" id="quality_bemerkung" disabled
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                placeholder="Quality bemerkung..." value="{{ $lead->confirmation_bemerkung }}" />
                            <x-input-error class="mt-2" :messages="$errors->get('quality_bemerkung')" />
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <div class="flex justify-end items-center pb-3 mt-3 ">
                <x-primary-button class="fullWidthBtn">Save</x-primary-button>
            </div>
        </form>
        @if (count($feedbacks))
            <div class="mt-5 overflow-hidden mx-auto">
                @include('components.lead-history')
            </div>
        @endif
    </div>
</x-app-layout>
