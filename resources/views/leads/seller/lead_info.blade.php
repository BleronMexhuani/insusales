<x-app-layout>
    
    <div class="sm:p-12 p-8 sm:ml-64">
        <form class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-8 p-6 mb-8" method="POST" action="{{route('sellerleads.update',['sellerlead'=>$lead->id])}}">
            @csrf
            @method('PUT')
            <div class="grid">
                @include('components.lead_info')
                <div class="mt-10">
                    <span class="font-bold"
                        style="background-color:#f3f4f6;border-start-end-radius: 13px;padding: 13px;border-radius: 10px">
                        Seller Status
                    </span>
                </div>
                <div class="" style="background-color:#f3f4f6;border-radius:8px">
                    <div class="grid grid-cols-1 md:grid-cols-[150px,150px,auto]  gap-4 py-6 p-4">
                        <div class="selector-item mt-1">
                            <input type="radio" value="confirmed" id="radio1" name="seller_status"
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
                            <input type="radio" value="declined" id="radio2" name="seller_status"
                                class="selector-item_radio">
                            <label for="radio2" class="selector-item_label"><span
                                    style="color:rgba(244, 63, 94, 1)">Abgeleht</span><svg width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 8L8 16M16 16L8 8" stroke="#F43F5E" stroke-width="1.2"
                                        stroke-linecap="round" />
                                </svg>
                            </label>
                        </div>
                        <x-input-error class="mt-2" :messages="$errors->get('seller_status')" />
                    </div>
                </div>
                <div class="flex justify-end items-center pb-3 mt-3 ">
                    <x-primary-button class="fullWidthBtn">Save</x-primary-button>
                </div>
        </form>
    </div>
    @if (count($feedbacks))
        <div class="mt-5  overflow-hidden shadow-sm sm:rounded-lg  mx-auto mt-5">
            @include('components.lead-history')
        </div>
    @endif
</x-app-layout>
