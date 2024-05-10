<x-app-layout>
   
    <div class="sm:p-12 p-8 sm:ml-64">
        <form class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5 sm:p-7" method="POST"
            action="{{ route('leads.update', ['lead' => $lead->id]) }}">
            @method('PUT')
            @csrf
            <div class="grid ">
                @include('components.lead_info')
            </div>
            <div class="flex justify-end items-center pb-3 mt-3 ">
                <x-primary-button class="fullWidthBtn">Save</x-primary-button>
            </div>
        </form>
        
    </div>
</x-app-layout>
