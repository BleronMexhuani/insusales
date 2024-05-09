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
            <x-input-error class="mt-2" :messages="$errors->get('form.vorname')" />

        </div>
        <div class="mb-5">
            <label for="nachname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nachname</label>
            <input type="nachname" id="nachname" value="{{ $lead?->nachname }}" name="nachname"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="John Doe" />
            <x-input-error class="mt-2" :messages="$errors->get('form.nachname')" />
        </div>
        <div class="mb-5">
            <label for="handy_nummer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Handy
                Nummer
            </label>
            <input type="text" id="handy_nummer" name="handy_nummer"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="John Doe" value="{{ $lead->handy_nummer }}" />
            <x-input-error class="mt-2" :messages="$errors->get('form.handy_nummer')" />
        </div>


    </div>
</div>
<div class="mt-10">
    <span class="font-bold"
        style="background-color:#f3f4f6;border-start-end-radius: 13px;padding: 13px;border-radius: 10px">
        Contact Informationen
    </span>
</div>
<div style="background-color:#f3f4f6;border-radius:8px">
    <div class="grid sm:grid-cols-2 gap-4 py-6 p-4 ">
        <div class="mb-5">
            <label for="plz" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PLZ</label>
            <input type="text" id="plz" name="plz"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="John Doe" value="{{ $lead->plz }}" />
            <x-input-error class="mt-2" :messages="$errors->get('form.plz')" />
        </div>
        <div class="mb-5">
            <label for="stadt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stadt</label>
            <input type="text" id="stadt" name="stadt"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="John Doe" value="{{ $lead->stadt }}" />
            <x-input-error class="mt-2" :messages="$errors->get('form.stadt')" />
        </div>
        <div class="mb-5">
            <label for="adresse" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse</label>
            <input type="adresse" id="adresse" name="adresse"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="John Doe"value="{{ $lead->adresse }}" />
            <x-input-error class="mt-2" :messages="$errors->get('form.adresse')" />
        </div>
        <div class="mb-5">
            <label for="haus_nummer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Haus
                nummer</label>
            <input type="text" id="haus_nummer" name="haus_nummer"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="John Doe" value="{{ $lead->haus_nummer }}" />
            <x-input-error class="mt-2" :messages="$errors->get('form.haus_nummer')" />
        </div>
    </div>
</div>
<div class="mt-10">
    <span class="font-bold"
        style="background-color:#f3f4f6;border-start-end-radius: 13px;padding: 13px;border-radius: 10px">
        Termin Informationen
    </span>
</div>
<div style="background-color:#f3f4f6;border-radius:8px">
    <div class="grid sm:grid-cols-2 gap-4 py-6 p-4 ">
        <div class="mb-5">
            <label for="feedback_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Feedback
                Status</label>
            <select id="feedback_status" onchange="checkFeedback(this)" name="feedback_status"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected value="">Choose Feedback</option>
                <option value="Terminiert">Terminiert</option>
                <option value="Kein Interese">Kein Interese</option>
                <option value="Spater Anrufen">Spater Anrufen</option>
                <option value="Nicht Erreicht">Nicht Erreicht</option>
                <option value="Falsche Nummer">Falsche Nummer</option>
                <option value="Krank">Krank</option>
                <option value="Kunde bereits terminiert">Kunde bereits terminiert</option>
                <option value="Hat schon gewechselt">Hat schon gewechselt</option>

            </select>

            <script>
                $("#feedback_status").val('{{ $lead->feedback_status }}').change()
            </script>
            <x-input-error class="mt-2" :messages="$errors->get('feedback_status')" />
        </div>
        {{-- @if ($this->form->feedback_status == 'Terminiert') --}}
        <div class="mb-5" id="termindatumdiv" style="display:none">
            <label for="termindatum" 
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Termindatum</label>
            <input type="date" id="termindatum" name="termindatum"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="John Doe" value="{{ $lead->termindatum }}" />
            <x-input-error class="mt-2" :messages="$errors->get('form.termindatum')" />
        </div>
        <div class="mb-5" id="terminzeitdiv" style="display:none">
            <label for="terminzeit"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Terminzeit</label>
            <input type="time" id="terminzeit" name="terminzeit"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="John Doe" value="{{ $lead->terminzeit }}" />
            <x-input-error class="mt-2" :messages="$errors->get('form.terminzeit')" />
        </div>
        {{-- @endif --}}
        <div class="mb-5">
            <label for="koment_der_konnen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Koment
                der
                konnen</label>
            <input id="koment_der_konnen " name="koment_der_konnen"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                value="{{ $lead->koment_der_konnen }}" />

            <x-input-error class="mt-2" :messages="$errors->get('form.koment_der_konnen')" />
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        let feedback = $("#feedback_status").val();
        if (feedback == 'Terminiert') {
            $("#termindatumdiv").css('display', 'block')
            $("#terminzeitdiv").css('display', 'block')
        }
    })

    function checkFeedback(e) {
        if (e.value == 'Terminiert') {
            $("#termindatumdiv").css('display', 'block')
            $("#terminzeitdiv").css('display', 'block')
        } else {
            $("#termindatumdiv").css('display', 'none')
            $("#terminzeitdiv").css('display', 'none')
        }
    }
</script>
