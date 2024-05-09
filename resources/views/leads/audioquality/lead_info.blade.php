<x-app-layout>
    <div class="p-12 sm:ml-64">
        <form enctype="multipart/form-data" class="bg-white overflow-hidden shadow-sm sm:rounded-lg  mt-5 p-16"
            method="POST" action="{{ route('audios.update', ['audio' => $lead->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <input type="hidden" name="check" value="quality">
            <div class="grid">

                <label for="file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Handy Nummer</label>
                <input value="{{$lead->handy_nummer}}"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    type="text" readonly>
                <div class="mb-5">
                    <label for="file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Audio
                        Upload</label>

                    <input name="audio_file[]" multiple
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file">
                    <x-input-error class="mt-2" :messages="$errors->get('audio')" />
                </div>
            </div>
            @php
                $audio_paths = explode(',', $lead->audio);
            @endphp
            @if (count($audio_paths) > 0 && $audio_paths[0]!=null)
                <div class="mb-5">
                    <label for="file"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Audios</label>

                    @foreach ($audio_paths as $item)
                        @if ($item !== ' ')
                            <div class="flex mb-3">
                                <audio id="audioPlayer" class="" controls
                                    style="display:{{ $item ? 'block' : 'none' }};"
                                    src="{{ $item ? URL::asset('images/' . $item) : '' }}"></audio>
                                <a class="btn btndelete nohoverBtn my-auto  mx-3"
                                    style="border-color: transparent !important;"
                                    onclick="if(confirm('Are you sure?'))window.location.href='{{ route('deleteAudio', ['id' => $lead->id, 'audio' => $item]) }}'"><svg style="cursor: pointer;" height="20px" width="20px"
                                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        stroke="#ff0000" stroke-width="0.36">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"
                                            stroke="#CCCCCC" stroke-width="0.048"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M15.5 4L14.5 3H9.5L8.5 4H5V6H19V4H15.5ZM6 19C6 20.1 6.9 21 8 21H16C17.1 21 18 20.1 18 19V7H6V19ZM16 9H8V19H16V9Z"
                                                fill="#ff0000"></path>
                                            <path d="M10 13H14V15H10V13Z" fill="#ff0000"></path>
                                        </g>
                                    </svg></a>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
            <div>
                <label for="file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Save
                    form</label>
                <x-primary-button>Save</x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
