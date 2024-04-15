<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <h1>werrkomeee adminn</h1>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table> Opties:
                    </br></br><input type="text" name="kilometerprijs" placeholder="kilometerprijs" id="">
                    </table>
                    <table></br>
                    <thead>
                        <th>Gebruikersritten: </th>
                    </thead>
                    <tbody>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
