<x-app-layout>
    <div class="sm:p-12 p-8 sm:ml-64">
        <div class="">
            <x-primary-button onclick="location.href='{{ route('leads.create') }}'" class="my-5">Create
                Termin</x-primary-button>
            <div class="">
                <form action="" method="GET">
                    <div class="accordion">
                        <div style="display: flex;justify-content:end;">
                            <button type="button" class="filtern mb-3">
                                <span
                                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                                    style="background-color: #5065f6">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="path-1-inside-1_459_11530" fill="white">
                                            <path
                                                d="M4.5 9.24998H19.5V10.75H4.5V9.24998ZM7.875 14H16.125V15.5H7.875V14ZM10.125 18.75H13.875V20.25H10.125V18.75ZM2.25 4.5H21.75V6H2.25V4.5Z" />
                                        </mask>
                                        <path
                                            d="M4.5 9.24998H19.5V10.75H4.5V9.24998ZM7.875 14H16.125V15.5H7.875V14ZM10.125 18.75H13.875V20.25H10.125V18.75ZM2.25 4.5H21.75V6H2.25V4.5Z"
                                            fill="#ffffff" />
                                        <path
                                            d="M4.5 9.24998V7.24998H2.5V9.24998H4.5ZM19.5 9.24998H21.5V7.24998H19.5V9.24998ZM19.5 10.75V12.75H21.5V10.75H19.5ZM4.5 10.75H2.5V12.75H4.5V10.75ZM7.875 14V12H5.875V14H7.875ZM16.125 14H18.125V12H16.125V14ZM16.125 15.5V17.5H18.125V15.5H16.125ZM7.875 15.5H5.875V17.5H7.875V15.5ZM10.125 18.75V16.75H8.125V18.75H10.125ZM13.875 18.75H15.875V16.75H13.875V18.75ZM13.875 20.25V22.25H15.875V20.25H13.875ZM10.125 20.25H8.125V22.25H10.125V20.25ZM2.25 4.5V2.5H0.25V4.5H2.25ZM21.75 4.5H23.75V2.5H21.75V4.5ZM21.75 6V8H23.75V6H21.75ZM2.25 6H0.25V8H2.25V6ZM4.5 11.25H19.5V7.24998H4.5V11.25ZM17.5 9.24998V10.75H21.5V9.24998H17.5ZM19.5 8.74998H4.5V12.75H19.5V8.74998ZM6.5 10.75V9.24998H2.5V10.75H6.5ZM7.875 16H16.125V12H7.875V16ZM14.125 14V15.5H18.125V14H14.125ZM16.125 13.5H7.875V17.5H16.125V13.5ZM9.875 15.5V14H5.875V15.5H9.875ZM10.125 20.75H13.875V16.75H10.125V20.75ZM11.875 18.75V20.25H15.875V18.75H11.875ZM13.875 18.25H10.125V22.25H13.875V18.25ZM12.125 20.25V18.75H8.125V20.25H12.125ZM2.25 6.5H21.75V2.5H2.25V6.5ZM19.75 4.5V6H23.75V4.5H19.75ZM21.75 4H2.25V8H21.75V4ZM4.25 6V4.5H0.25V6H4.25Z"
                                            fill="#ffffff" mask="url(#path-1-inside-1_459_11530)" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div class="collapsable ">
                            <div class="grid sm:rounded-lg grid-cols-1 sm:grid-cols-6 gap-2 p-8">
                                <div class="">
                                    <label for="Feeedback">Feedback</label>
                                    <select id="" name="feedback_status"
                                        class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected value="">Select Feedback</option>
                                        <option value="Terminiert">Terminiert</option>
                                        <option value="Kein Interese">Kein Interese</option>
                                        <option value="Spater Anrufen">Spater Anrufen</option>
                                        <option value="Nicht Erreicht">Nicht Erreicht</option>
                                        <option value="Falsche Nummer">Falsche Nummer</option>
                                        <option value="Krank">Krank</option>
                                        <option value="Kunde bereits terminiert">Kunde bereits terminiert</option>
                                        <option value="Hat schon gewechselt">Hat schon gewechselt</option>
                                    </select>
                                </div>
                                <div class="">
                                    <label for="Feeedback">Termindatum</label>
                                    <div class="mb-5">
                                        <input type="date" id="termindatum" name="termindatum"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                                    </div>
                                </div>
                                <div class="">
                                    <label for="Feeedback">Sprachen</label>
                                    <select name="sprachen"
                                        class="w-full  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="">Select sprachen</option>
                                        <option value="DE">DE</option>
                                        <option value="IT">IT</option>
                                        <option value="AL">AL</option>
                                        <option value="EN">EN</option>
                                    </select>
                                </div>
                                <div class="">
                                    <label for="Feeedback">Assigned to ?</label>
                                    <select id="" name="assigned_to"
                                        class="w-full  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected value="">Select Agent</option>
                                        @foreach ($agents as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="">
                                    <label for="Feeedback">Created at</label>
                                    <input type="date" id="" name="created_at"
                                        class="w-full  shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                                </div>
                                <div class="w-full" style="margin: auto">
                                    <div class=" ">
                                        <x-primary-button class="w-full justify-center">Search</x-primary-button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="bg-white mt-5 sm:rounded-lg p-5 sm:p-7 ">
            <div class="sm:flex gap-3 mb-4">
                <form action="" class="w-full mb-4" method="GET">
                    <div class="">
                        <input type="text" id="keyword" name="keyword"
                            class="shadow-sm w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Suche id,vorname,nachname,handy nummer ...." />
                        <x-input-error class="mt-2" :messages="$errors->get('form.keyword')" />
                    </div>
                </form>
                {{-- @if (Auth::user()->hasPermissionTo('edit role')) --}}
                <div class="mb-4">
                    <select id="agent_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected value="">Select Agent</option>
                        @foreach ($agents as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error class="mt-2" :messages="$errors->get('role')" />
                </div>
                <div>
                    <x-primary-button id="shareButton">Share</x-primary-button>
                </div>
                {{-- @endif --}}
                <div id="error" style="display: none">
                </div>
            </div>
            <div class="relative overflow-x-auto">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <table class="w-full text-sm text-gray-500 dark:text-gray-400 t">
                    <thead
                        class="text-xs  text-gray-700 uppercase bg-gray-50 text-center dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="">
                                <input type="checkbox"
                                    class="w-4 h-4  bg-white text-blue-600  border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    id="selectAll" name="" id="">
                            </th>
                            <th>
                                ID
                            </th>
                            <th>
                                Vorname
                            </th>
                            <th>
                                Nachname
                            </th>
                            <th>
                                Handy Nummer
                            </th>
                            <th>
                                Feedback
                            </th>
                            <th>
                                Termindatum
                            </th>
                            <th>
                                Quality Status
                            </th>
                            <th>
                                Confirmation Status
                            </th>
                            <th>
                                Assigned To
                            </th>
                            <th scope="col" class=" py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($leads as $item)
                            <tr class="text-center bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                                <th class="p-4">
                                    <div class="flex items-center">
                                        <input id="link-checkbox" type="checkbox" value="{{ $item->id }}"
                                            class="checkBox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>

                                </th>
                                <td class="px-6 py-4">
                                    {{ $item->id }}
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->vorname }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $item->nachname }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->handy_nummer }}
                                </td>
                                <td class="px-6 py-4"
                                    style="color:{{ $item->feedback_status == 'Terminiert' ? 'green' : ($item->feedback_status == 'pending' ? 'orange' : 'red') }}">
                                    {{ $item->feedback_status }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->termindatum }}
                                </td>
                                <td class="px-6 py-4"
                                    style="color:{{ $item->quality_status == 'confirmed' ? 'green' : ($item->quality_status == 'declined' ? 'red' : 'orange') }}">
                                    {{ ucfirst($item->quality_status) }}
                                </td>
                                <td class="px-6 py-4"
                                    style="color:{{ $item->confirmation_status == 'confirmed' ? 'green' : 'orange' }}">
                                    {{ ucfirst($item->confirmation_status) }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->assigned_to ? $item->getAssginedToName->name : 'Not assgined' }}
                                </td>
                                <td class="flex justify-center py-4 ">
                                    {{-- @if ($item->status == 'for call agent') --}}
                                    <a href="{{ route('leads.edit', ['lead' => $item->id]) }}"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M11.9426 1.25L13.5 1.25C13.9142 1.25 14.25 1.58579 14.25 2C14.25 2.41421 13.9142 2.75 13.5 2.75H12C9.62178 2.75 7.91356 2.75159 6.61358 2.92637C5.33517 3.09825 4.56445 3.42514 3.9948 3.9948C3.42514 4.56445 3.09825 5.33517 2.92637 6.61358C2.75159 7.91356 2.75 9.62178 2.75 12C2.75 14.3782 2.75159 16.0864 2.92637 17.3864C3.09825 18.6648 3.42514 19.4355 3.9948 20.0052C4.56445 20.5749 5.33517 20.9018 6.61358 21.0736C7.91356 21.2484 9.62178 21.25 12 21.25C14.3782 21.25 16.0864 21.2484 17.3864 21.0736C18.6648 20.9018 19.4355 20.5749 20.0052 20.0052C20.5749 19.4355 20.9018 18.6648 21.0736 17.3864C21.2484 16.0864 21.25 14.3782 21.25 12V10.5C21.25 10.0858 21.5858 9.75 22 9.75C22.4142 9.75 22.75 10.0858 22.75 10.5V12.0574C22.75 14.3658 22.75 16.1748 22.5603 17.5863C22.366 19.031 21.9607 20.1711 21.0659 21.0659C20.1711 21.9607 19.031 22.366 17.5863 22.5603C16.1748 22.75 14.3658 22.75 12.0574 22.75H11.9426C9.63423 22.75 7.82519 22.75 6.41371 22.5603C4.96897 22.366 3.82895 21.9607 2.93414 21.0659C2.03933 20.1711 1.63399 19.031 1.43975 17.5863C1.24998 16.1748 1.24999 14.3658 1.25 12.0574V11.9426C1.24999 9.63423 1.24998 7.82519 1.43975 6.41371C1.63399 4.96897 2.03933 3.82895 2.93414 2.93414C3.82895 2.03933 4.96897 1.63399 6.41371 1.43975C7.82519 1.24998 9.63423 1.24999 11.9426 1.25ZM16.7705 2.27592C18.1384 0.908029 20.3562 0.908029 21.7241 2.27592C23.092 3.6438 23.092 5.86158 21.7241 7.22947L15.076 13.8776C14.7047 14.2489 14.4721 14.4815 14.2126 14.684C13.9069 14.9224 13.5761 15.1268 13.2261 15.2936C12.929 15.4352 12.6169 15.5392 12.1188 15.7052L9.21426 16.6734C8.67801 16.8521 8.0868 16.7126 7.68711 16.3129C7.28742 15.9132 7.14785 15.322 7.3266 14.7857L8.29477 11.8812C8.46079 11.3831 8.56479 11.071 8.7064 10.7739C8.87319 10.4239 9.07761 10.0931 9.31605 9.78742C9.51849 9.52787 9.7511 9.29529 10.1224 8.924L16.7705 2.27592ZM20.6634 3.33658C19.8813 2.55448 18.6133 2.55448 17.8312 3.33658L17.4546 3.7132C17.4773 3.80906 17.509 3.92327 17.5532 4.05066C17.6965 4.46372 17.9677 5.00771 18.48 5.51999C18.9923 6.03227 19.5363 6.30346 19.9493 6.44677C20.0767 6.49097 20.1909 6.52273 20.2868 6.54543L20.6634 6.16881C21.4455 5.38671 21.4455 4.11867 20.6634 3.33658ZM19.1051 7.72709C18.5892 7.50519 17.9882 7.14946 17.4193 6.58065C16.8505 6.01185 16.4948 5.41082 16.2729 4.89486L11.2175 9.95026C10.801 10.3668 10.6376 10.532 10.4988 10.7099C10.3274 10.9297 10.1804 11.1676 10.0605 11.4192C9.96337 11.623 9.88868 11.8429 9.7024 12.4017L9.27051 13.6974L10.3026 14.7295L11.5983 14.2976C12.1571 14.1113 12.377 14.0366 12.5808 13.9395C12.8324 13.8196 13.0703 13.6726 13.2901 13.5012C13.468 13.3624 13.6332 13.199 14.0497 12.7825L19.1051 7.72709Z"
                                                fill="#358856" />
                                        </svg>
                                    </a>
                                    {{-- @endif --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <style>
                    .bckdoi {
                        width: calc(100vw - 335px) !important;
                    }

                    @media (max-width: 767.98px) {
                        .bckdoi {
                            width: calc(100vw - 69px) !important;
                        }

                        .okd04 {
                            padding: 11px 8px 13px 27px;
                        }
                    }
                </style>

                @php
                    $parameters = request()->input();

                @endphp
                <div class=" py-4 px-4">
                    <div class="row g-0">
                        <div class="col-auto text-center text-sm-start  my-4 ps-0">
                            <span>Zeigt {{ $leads->firstItem() }} - {{ $leads->lastItem() }}
                                Insgesamt
                            </span>

                        </div>
                        <div class="col-auto my-auto mx-2">
                            <select name="paginate" onchange="changePaginateLength()"
                                class=" form-select paginateSelectStyle" id="paginationi"
                                style="max-width: 100px;border-radius: 10px;">

                                <option selected
                                    value="@php echo url()->full() . ($parameters ? '&' : '?').'paginate=25' @endphp">
                                    25
                                </option>
                                <option
                                    {{ isset($parameters['paginate']) ? ($parameters['paginate'] == '50' ? 'selected' : '') : '' }}
                                    value="@php echo url()->full() . ($parameters ? '&' : '?').'paginate=50' @endphp">
                                    50
                                </option>
                                <option
                                    {{ isset($parameters['paginate']) ? ($parameters['paginate'] == '100' ? 'selected' : '') : '' }}
                                    value="@php echo url()->full() . ($parameters ? '&' : '?').'paginate=100' @endphp">
                                    100
                                </option>
                                <option
                                    {{ isset($parameters['paginate']) ? ($parameters['paginate'] == '500' ? 'selected' : '') : '' }}
                                    value="@php echo url()->full() . ($parameters ? '&' : '?').'paginate=500' @endphp">
                                    500
                                </option>
                                <option
                                    {{ isset($parameters['paginate']) ? ($parameters['paginate'] == '1000' ? 'selected' : '') : '' }}
                                    value="@php echo url()->full() . ($parameters ? '&' : '?').'paginate=1000' @endphp">
                                    1000
                                </option>
                            </select>
                        </div>
                        <div class="col col-xl-8 my-auto">

                            <div class="">
                                {{ $leads->onEachSide(1)->appends(['paginate' => $leads->perPage(), 'von' => request('von'), 'bis' => request('bis')])->links() }}

                            </div>
                        </div>

                    </div>

                </div>

                <script>
                     function changePaginateLength() {
                            let paginate = document.getElementById('paginationi').value;
                            location.href = paginate;
                        }
                    $("#selectAll").on("change", function() {
                        $('input:checkbox').prop('checked', this.checked);

                    })
                    $('#shareButton').on("click", async function() {
                        let leads = [];
                        var checkboxes = $('.checkBox');
                        var agent_id = $("#agent_id").val()
                        for (let i = 0; i < checkboxes.length; i++) {
                            if (checkboxes[i].checked) {
                                leads.push(checkboxes[i].value)
                            }

                        }
                        await $.ajax({
                            url: "{{ route('leads.share') }}",
                            method: "POST",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "leads": leads,
                                "agent_id": agent_id
                            },
                            success: function(response) {
                                console.log(response);
                            }
                        })
                    })

                    document.addEventListener("DOMContentLoaded", function() {
                        const accordionButton = document.querySelector(".accordion button");
                        const collapsible = document.querySelector(".collapsable");

                        accordionButton.addEventListener("click", function() {
                            collapsible.classList.toggle("active");
                        });
                    });
                </script>
            </div>
        </div>

    </div>
</x-app-layout>
