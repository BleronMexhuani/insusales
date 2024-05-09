<div class="bg-white rounded-3xl">
    <div class="relative overflow-x-auto sm:rounded-lg">
        <div class="px-5 pt-5">
        <span class="font-bold text-xl	">Lead History</span>
        </div>
        <table class="w-full text-sm mb-8  mt-5  text-gray-500 dark:text-gray-400 justify-center">
        <thead class="text-md text-gray-700 uppercase bg-white dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-6 py-4">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>

                <th scope="col" class="px-6 py-3">
                    Feedback
                </th>
                <th scope="col" class="px-6 py-3">
                    Created At
                </th>

            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($feedbacks as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 text-center font-bold"
                    style="border: 1px solid #efefef">
                    <td class="px-6 py-4">
                        {{ $i }}
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $item->getAssginedToName->name }}
                    </td>
                    <td class="px-6 py-4"
                        style="color:{{ ($item->feedback == 'confirmed' || $item->feedback == 'Terminiert')  ? 'green' : 'red'}}">
                        {{ ucfirst($item->feedback) }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->created_at }}
                    </td>

                </tr>
                @php
                    $i++;
                @endphp
            @endforeach


        </tbody>
    </table>
</div>
</div>
