<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard User') }}
        </h2>
    </x-slot>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
    }

    h1 {
        text-align: center;
    }

    .dashboard {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .dashboard-item {
        flex: 1;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .dashboard-item h2 {
        margin-top: 0;
    }

    .dashboard-item ul {
        list-style-type: none;
        padding: 0;
    }

    .dashboard-item li {
        margin-bottom: 10px;
    }

    .completed {
        color: green;
    }

    .ongoing {
        color: orange;
    }

    .planned {
        color: blue;
    }
    form {
        max-width: 500px;
        margin: 0 auto;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
                </head>
                    <body>
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <h2>Profiel</h2>
                            <form id="profileForm">
                                <label for="companyName"></label>
                                <input type="text" id="companyName" name="companyName" required placeholder="Voer de bedrijfsnaam in">

                                <label for="address"></label>
                                <input type="text" id="address" name="address" required placeholder="Voer de straat en huisnummer in">

                                <label for="postcode"></label>
                                <input type="text" id="postcode" name="postcode" required placeholder="Voer de postcode in">

                                <label for="city"></label>
                                <input type="text" id="city" name="city" required placeholder="Voer de plaats in">

                                <label for="country"></label>
                                <input type="text" id="country" name="country" required placeholder="Voer het land in">

                                <label for="kvkNumber"></label>
                                <input type="text" id="kvkNumber" name="kvkNumber" required placeholder="Voer het KVK-nummer in">

                                <label for="phoneNumber"></label>
                                <input type="text" id="phoneNumber" name="phoneNumber" required placeholder="Voer het telefoonnummer in">
                                </br>
                                <input type="submit" value="Opslaan">
                                </br>
                                </br>
                            </form>
                                <div class="container">
                                <h1>Ritten Dashboard</h1>

                                <div class="dashboard">
                                    <div class="dashboard-item">
                                        <h2>Uitgevoerde Ritten</h2>
                                        <ul>
                                            <li class="completed">Rit 1</li>
                                            <li class="completed">Rit 2</li>
                                            <li class="completed">Rit 3</li>
                                        </ul>
                                    </div>

                                    <div class="dashboard-item">
                                        <h2>Lopende Ritten</h2>
                                        <ul>
                                            <li class="ongoing">Rit 4</li>
                                            <li class="ongoing">Rit 5</li>
                                        </ul>
                                    </div>

                                    <div class="dashboard-item">
                                        <h2>Geplande Ritten</h2>
                                        <ul>
                                            <li class="planned">Rit 6</li>
                                            <li class="planned">Rit 7</li>
                                            <li class="planned">Rit 8</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <form id="bookingForm" method="POST" action="getMiles">
                                @csrf
                                <label for="pickupAddress">Ophaaladres:</label>
                                <input type="text" id="pickupAddress" name="pickupAddress" required>

                                <label for="deliveryAddress">Afleveradres:</label>
                                <input type="text" id="deliveryAddress" name="deliveryAddress" required>

                                <input type="submit" value="Boek Rit">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        function cities(){

        var options = {
        types: ['(cities)'] 
        };

        var pickInput = document.getElementById('pickupAddress');
        var pickAutocomplete = new google.maps.places.Autocomplete(pickInput, options);

        var deliveryInput = document.getElementById('deliveryAddress');
        var deliveryAutocomplete = new google.maps.places.Autocomplete(deliveryInput, options);
        }
    </script>

    <script type="text/javascript" src="https://api.distancematrix.ai/maps/api/distancematrix/json?origins=51.4822656,-0.1933769&destinations=51.4994794,-0.1269979&key=bqXR5q8e345vwH6zqC2QfXeWqQzTLhvgBmfEoUBlBPX4Cih4tfLmK56Ax3IYqY2j&callback=cities"></script>
    
</x-app-layout>
