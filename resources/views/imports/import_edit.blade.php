<x-app-layout>
    <div class="p-12 sm:ml-64">
        <div class=" gap-3">
    <div class="col ms-0 ms-md-2 px-0  mt-md-4 py-md-4">
        <div class=" my-1 ">
            <div class="mb-4"><span class="textofheadercampaigns" style="font-size: 18px;font-weight:600">
                    {{ __('Prepare import') }}
                </span>
            </div>
            <div class="tableform">
              
                <form method="POST" action="{{ route('imports.update', ['import' => $import->id]) }}">
                    @method('put')
                    {{ csrf_field() }}
                    <div class="box__section bg-white overflow-hidden shadow-sm sm:rounded-lg max-w-7xl p-10" >

                        <div class="grid grid-cols-3 gap-3">
                        
                            <div class="col-12 col-sm-6">
                                <div class="input mb-0 mt-2">
                                    <label class="importsubtextlabel">{{ __('Vorname') }}</label>
                                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 importborderinput mt-1 form-select" name="vorname">
                                        <option value=""></option>

                                        @foreach ($headers as $index => $header)
                                            <option value="{{ $index }}">{{ $header }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="input mb-0 mt-2">
                                    <label class="importsubtextlabel">{{ __('Nachname') }}</label>
                                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 importborderinput mt-1 form-select" name="nachname">
                                        <option value=""></option>

                                        @foreach ($headers as $index => $header)
                                            <option value="{{ $index }}">{{ $header }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                          
                            <div class="col-12 col-sm-6">
                                <div class="input mb-0 mt-2">
                                    <label class="importsubtextlabel">{{ __('Handy Nummer') }}</label>
                                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 importborderinput mt-1 form-select" name="handy_nummer">
                                        <option value=""></option>

                                        @foreach ($headers as $index => $header)
                                            <option value="{{ $index }}">{{ $header }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                         
                            <div class="col-12 col-sm-6">
                                <div class="input mb-0 mt-2">
                                    <label class="importsubtextlabel">{{ __('Adresse') }}</label>
                                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 importborderinput mt-1 form-select" name="adresse">
                                        <option value=""></option>

                                        @foreach ($headers as $index => $header)
                                            <option value="{{ $index }}">{{ $header }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="input mb-0 mt-2">
                                    <label class="importsubtextlabel">{{ __('Hause Nummer') }}</label>
                                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 importborderinput mt-1 form-select" name="haus_nummer">
                                        <option value=""></option>

                                        @foreach ($headers as $index => $header)
                                            <option value="{{ $index }}">{{ $header }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="input mb-0 mt-2">
                                    <label class="importsubtextlabel">{{ __('Plz') }}</label>
                                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 importborderinput mt-1 form-select" name="plz">
                                        <option value=""></option>
                                        @foreach ($headers as $index => $header)
                                            <option value="{{ $index }}">{{ $header }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        
                          
                            <div class=" pt-4 mt-5 pb-5 ">
                                <button style="background-color: #5065f6;" class="inline-flex items-center px-4 py-3 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 importbtn">Submit</button>
                            </div>
                        </div>
                        
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
        </div>
    </div>
</x-app-layout>