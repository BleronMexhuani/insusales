<x-app-layout>
    <div class="sm:p-12 p-8 sm:ml-64">
        <div class=" space-y-6">
            <div class="bg-white sm:rounded-lg p-7">
                <div class="mb-5 gap-3">
                    <div>
                        <input type="text" id="keyword" name="keyword"
                            class="shadow-sm bg-gray-50 w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Suche" />
                        <x-input-error class="mt-2" :messages="$errors->get('form.keyword')" />
                    </div>
                </div>
                <div class="relative overflow-x-auto sm:rounded-lg">

                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <table class="w-full text-sm  text-gray-500 dark:text-gray-400 ">
                        <thead
                            class="text-xs  text-gray-700 uppercase bg-gray-50 text-center dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
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
                                <th scope="col" class="px-2 py-3">
                                    Termin Zeit
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    PLZ
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Ort
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Seller status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leads as $item)
                                <tr class="text-center bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
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
                                        style="color:{{ $item->feedback_status == 'Terminiert' ? 'green' : 'orange' }}">
                                        {{ $item->feedback_status }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->termindatum }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ $item->terminzeit }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->plz }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->ort }}
                                    </td>
                                    <td>
                                        {{ ucfirst($item->seller_status) }}
                                    </td>

                                    <td class="px-6 py-4 flex justify-center">
                                        <a href="{{ route('sellerleads.edit', ['sellerlead' => $item->id]) }}"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M11.9426 1.25L13.5 1.25C13.9142 1.25 14.25 1.58579 14.25 2C14.25 2.41421 13.9142 2.75 13.5 2.75H12C9.62178 2.75 7.91356 2.75159 6.61358 2.92637C5.33517 3.09825 4.56445 3.42514 3.9948 3.9948C3.42514 4.56445 3.09825 5.33517 2.92637 6.61358C2.75159 7.91356 2.75 9.62178 2.75 12C2.75 14.3782 2.75159 16.0864 2.92637 17.3864C3.09825 18.6648 3.42514 19.4355 3.9948 20.0052C4.56445 20.5749 5.33517 20.9018 6.61358 21.0736C7.91356 21.2484 9.62178 21.25 12 21.25C14.3782 21.25 16.0864 21.2484 17.3864 21.0736C18.6648 20.9018 19.4355 20.5749 20.0052 20.0052C20.5749 19.4355 20.9018 18.6648 21.0736 17.3864C21.2484 16.0864 21.25 14.3782 21.25 12V10.5C21.25 10.0858 21.5858 9.75 22 9.75C22.4142 9.75 22.75 10.0858 22.75 10.5V12.0574C22.75 14.3658 22.75 16.1748 22.5603 17.5863C22.366 19.031 21.9607 20.1711 21.0659 21.0659C20.1711 21.9607 19.031 22.366 17.5863 22.5603C16.1748 22.75 14.3658 22.75 12.0574 22.75H11.9426C9.63423 22.75 7.82519 22.75 6.41371 22.5603C4.96897 22.366 3.82895 21.9607 2.93414 21.0659C2.03933 20.1711 1.63399 19.031 1.43975 17.5863C1.24998 16.1748 1.24999 14.3658 1.25 12.0574V11.9426C1.24999 9.63423 1.24998 7.82519 1.43975 6.41371C1.63399 4.96897 2.03933 3.82895 2.93414 2.93414C3.82895 2.03933 4.96897 1.63399 6.41371 1.43975C7.82519 1.24998 9.63423 1.24999 11.9426 1.25ZM16.7705 2.27592C18.1384 0.908029 20.3562 0.908029 21.7241 2.27592C23.092 3.6438 23.092 5.86158 21.7241 7.22947L15.076 13.8776C14.7047 14.2489 14.4721 14.4815 14.2126 14.684C13.9069 14.9224 13.5761 15.1268 13.2261 15.2936C12.929 15.4352 12.6169 15.5392 12.1188 15.7052L9.21426 16.6734C8.67801 16.8521 8.0868 16.7126 7.68711 16.3129C7.28742 15.9132 7.14785 15.322 7.3266 14.7857L8.29477 11.8812C8.46079 11.3831 8.56479 11.071 8.7064 10.7739C8.87319 10.4239 9.07761 10.0931 9.31605 9.78742C9.51849 9.52787 9.7511 9.29529 10.1224 8.924L16.7705 2.27592ZM20.6634 3.33658C19.8813 2.55448 18.6133 2.55448 17.8312 3.33658L17.4546 3.7132C17.4773 3.80906 17.509 3.92327 17.5532 4.05066C17.6965 4.46372 17.9677 5.00771 18.48 5.51999C18.9923 6.03227 19.5363 6.30346 19.9493 6.44677C20.0767 6.49097 20.1909 6.52273 20.2868 6.54543L20.6634 6.16881C21.4455 5.38671 21.4455 4.11867 20.6634 3.33658ZM19.1051 7.72709C18.5892 7.50519 17.9882 7.14946 17.4193 6.58065C16.8505 6.01185 16.4948 5.41082 16.2729 4.89486L11.2175 9.95026C10.801 10.3668 10.6376 10.532 10.4988 10.7099C10.3274 10.9297 10.1804 11.1676 10.0605 11.4192C9.96337 11.623 9.88868 11.8429 9.7024 12.4017L9.27051 13.6974L10.3026 14.7295L11.5983 14.2976C12.1571 14.1113 12.377 14.0366 12.5808 13.9395C12.8324 13.8196 13.0703 13.6726 13.2901 13.5012C13.468 13.3624 13.6332 13.199 14.0497 12.7825L19.1051 7.72709Z"
                                                    fill="#358856" />
                                            </svg></a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <style>
                        .bckdoi {
                            width: calc(100vw - 318px) !important;
                        }

                        @media (max-width: 767.98px) {
                            .bckdoi {
                                width: calc(100vw - 52px) !important;
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

                </div>

            </div>

        </div>
        <script>
            function changePaginateLength() {
                let paginate = document.getElementById('paginationi').value;
                location.href = paginate;
            }
        </script>
    </div>
</x-app-layout>
