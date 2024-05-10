<div class="mt-5 pt-4">
    <span class="font-bold"
        style="background-color:#f3f4f6;border-start-end-radius: 13px;padding: 13px;border-radius: 10px">
        Personal Informationen
    </span>
</div>
<div style="background-color:#f3f4f6;border-radius:8px">
    <div class="grid sm:grid-cols-2 gap-4 py-6 p-4 ">
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vorname</label>
            <input type="vorname" id="vorname" value="{{ $lead->vorname }}" name="vorname"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="John Doe" />
            <x-input-error class="mt-2" :messages="$errors->get('vorname')" />

        </div>
        <div class="mb-5">
            <label for="nachname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nachname</label>
            <input type="nachname" id="nachname" value="{{ $lead?->nachname }}" name="nachname"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="John Doe" />
            <x-input-error class="mt-2" :messages="$errors->get('nachname')" />
        </div>
        <div class="mb-5">
            <label for="handy_nummer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Handy
                Nummer
            </label>
            <input type="text" id="handy_nummer" name="handy_nummer"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="John Doe" value="{{ $lead->handy_nummer }}" />
            <x-input-error class="mt-2" :messages="$errors->get('handy_nummer')" />
        </div>

    </div>
</div>

@foreach ($group_names as $groupname)
<div class="mt-5 pt-4">
    <span class="font-bold"
        style="background-color:#f3f4f6;border-start-end-radius: 13px;padding: 13px;border-radius: 10px">
        {{$groupname}}
    </span>
</div>
<div style="background-color:#f3f4f6;border-radius:8px">
    <div class="grid sm:grid-cols-2 gap-4 py-6 p-4 ">
        @foreach ($lead_custom_data->where('group_name',$groupname) as $item)
            <div class="mb-5">
                <label for="{{ $item->customfields?->input_name }}"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $item->customfields?->input_name }}
                </label>
                <input type="{{ $item->customfields?->input_type }}" id="{{ $item->customfields?->input_name }}" name="{{ $item->customfields?->input_name }}"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="John Doe" value="{{ $item->value }}" />
                <x-input-error class="mt-2" :messages="$errors->get('{{ $item->customfields?->input_name }}')" />
            </div>
        @endforeach

    </div>
</div>
@endforeach
