<?php
session_start();

if (!$_SESSION["logged"]) {

    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ordine</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-2xl">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6 text-center">
            Il cameriere del vostro tavolo è:
            <span class="text-indigo-600 font-bold">
                <?php echo $_SESSION["cameriere"]; ?>
            </span>
        </h1>

        <form action="ordineEffettuato.php" method="POST" class="space-y-6">
            <!-- Numero tavolo -->
            <div>
                <label for="tables" class="block text-gray-700 font-medium mb-1">
                    Numero del tavolo:
                </label>
                <select name="tables" id="tables" required
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <option value="1">Tavolo 1</option>
                    <option value="2">Tavolo 2</option>
                    <option value="3">Tavolo 3</option>
                    <option value="4">Tavolo 4</option>
                    <option value="5">Tavolo 5</option>
                    <option value="6">Tavolo 6</option>
                    <option value="7">Tavolo 7</option>
                    <option value="8">Tavolo 8</option>
                    <option value="9">Tavolo 9</option>
                    <option value="10">Tavolo 10</option>
                    <option value="11">Tavolo 11</option>
                    <option value="12">Tavolo 12</option>
                </select>
            </div>

            <!-- Piatti -->
            <div class="mb-6">
                <label for="piatti" class="block text-gray-800 text-lg font-semibold mb-3">
                    I piatti e le bevande:
                </label>

                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">

                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="pizza" name="piatti[]" value="Pizza"
                            class="form-checkbox text-blue-600">
                        <span>Pizza</span>
                        <input type="number" name="quantita[Pizza]" min="0" max="999" value="0"
                            class="w-16 text-center border border-gray-300 rounded-md" placeholder="Qty">
                    </div>

                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="pasta" name="piatti[]" value="Pasta"
                            class="form-checkbox text-blue-600">
                        <span>Pasta</span>
                        <input type="number" name="quantita[Pasta]" min="0" max="999" value="0"
                            class="w-16 text-center border border-gray-300 rounded-md" placeholder="Qty">
                    </div>

                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="patatine" name="piatti[]" value="Patatine"
                            class="form-checkbox text-blue-600">
                        <span>Patatine</span>
                        <input type="number" name="quantita[Patatine]" min="0" max="999" value="0"
                            class="w-16 text-center border border-gray-300 rounded-md" placeholder="Qty">
                    </div>

                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="gnocchi" name="piatti[]" value="Gnocchi"
                            class="form-checkbox text-blue-600">
                        <span>Gnocchi</span>
                        <input type="number" name="quantita[Gnocchi]" min="0" max="999" value="0"
                            class="w-16 text-center border border-gray-300 rounded-md" placeholder="Qty">
                    </div>

                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="bistecca" name="piatti[]" value="Bistecca"
                            class="form-checkbox text-blue-600">
                        <span>Bistecca</span>
                        <input type="number" name="quantita[Bistecca]" min="0" max="999" value="0"
                            class="w-16 text-center border border-gray-300 rounded-md" placeholder="Qty">
                    </div>

                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="insalata" name="piatti[]" value="Insalata"
                            class="form-checkbox text-blue-600">
                        <span>Insalata</span>
                        <input type="number" name="quantita[Insalata]" min="0" max="999" value="0"
                            class="w-16 text-center border border-gray-300 rounded-md" placeholder="Qty">
                    </div>

                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="branzino" name="piatti[]" value="Branzino"
                            class="form-checkbox text-blue-600">
                        <span>Branzino</span>
                        <input type="number" name="quantita[Branzino]" min="0" max="999" value="0"
                            class="w-16 text-center border border-gray-300 rounded-md" placeholder="Qty">
                    </div>

                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="tiramisu" name="piatti[]" value="Tiramisu"
                            class="form-checkbox text-blue-600">
                        <span>Tiramisù</span>
                        <input type="number" name="quantita[Tiramisu]" min="0" max="999" value="0"
                            class="w-16 text-center border border-gray-300 rounded-md" placeholder="Qty">
                    </div>

                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="gelato" name="piatti[]" value="Gelato"
                            class="form-checkbox text-blue-600">
                        <span>Gelato</span>
                        <input type="number" name="quantita[Gelato]" min="0" max="999" value="0"
                            class="w-16 text-center border border-gray-300 rounded-md" placeholder="Qty">
                    </div>

                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="acqua" name="piatti[]" value="Acqua"
                            class="form-checkbox text-blue-600">
                        <span>Acqua</span>
                        <input type="number" name="quantita[Acqua]" min="0" max="999" value="0"
                            class="w-16 text-center border border-gray-300 rounded-md" placeholder="Qty">
                    </div>

                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="vino" name="piatti[]" value="Vino"
                            class="form-checkbox text-blue-600">
                        <span>Vino</span>
                        <input type="number" name="quantita[Vino]" min="0" max="999" value="0"
                            class="w-16 text-center border border-gray-300 rounded-md" placeholder="Qty">
                    </div>

                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="birra" name="piatti[]" value="Birra"
                            class="form-checkbox text-blue-600">
                        <span>Birra</span>
                        <input type="number" name="quantita[Birra]" min="0" max="999" value="0"
                            class="w-16 text-center border border-gray-300 rounded-md" placeholder="Qty">
                    </div>

                </div>
            </div>

            <!-- Pulsante invio -->
            <div class="text-center">
                <button type="submit"
                    class="bg-indigo-600 text-white px-6 py-2 rounded-xl hover:bg-indigo-700 transition duration-200 shadow">
                    Invia ordine
                </button>
            </div>
        </form>
    </div>
</body>

</html>