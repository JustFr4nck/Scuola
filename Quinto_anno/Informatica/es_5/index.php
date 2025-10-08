<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es_5</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="flex flex-col items-center justify-center min-h-screen border-2 border-orange-500 p-6 bg-orange-50">
  <form action="./pages/gestionePrenotazione.php" method="post" onchange="validateForm()" class="w-full max-w-md bg-white p-6 rounded-lg shadow-md border border-orange-400">
    
    <div class="mb-4">
      <label for="nome" class="block text-orange-700 font-semibold mb-1">Inserire nome:</label>
      <input
        type="text"
        name="nome"
        id="nome"
        placeholder="nome"
        required
        class="w-full border border-orange-400 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500"
      >
    </div>

    <div class="mb-4">
      <label for="cognome" class="block text-orange-700 font-semibold mb-1">Inserire cognome:</label>
      <input
        type="text"
        name="cognome"
        id="cognome"
        placeholder="cognome"
        required
        class="w-full border border-orange-400 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500"
      >
    </div>

    <div class="mb-4">
      <label for="nTavolo" class="block text-orange-700 font-semibold mb-1">Seleziona tavolo:</label>
      <select
        name="nTavolo"
        id="nTavolo"
        required
        class="w-full border border-orange-400 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500"
      >
        <option value="1">Tavolo 1</option>
        <option value="2">Tavolo 2</option>
        <option value="3">Tavolo 3</option>
        <option value="4">Tavolo 4</option>
        <option value="5">Tavolo 5</option>
      </select>
    </div>

    <div class="mb-4">
      <label for="orario" class="block text-orange-700 font-semibold mb-1">Inserire orario:</label>
      <input
        type="time"
        name="orario"
        id="orario"
        required
        class="w-full border border-orange-400 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500"
      >
    </div>

    <div class="mb-4">
      <label for="note" class="block text-orange-700 font-semibold mb-1">Eventuali note:</label>
      <textarea
        name="note"
        id="note"
        placeholder="inserisci testo"
        class="w-full border border-orange-400 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500"
      ></textarea>
    </div>

    <div class="mb-4">
      <h3 class="text-orange-700 font-bold mb-2">Piatti:</h3>
      <div class="flex flex-col space-y-1 text-orange-800">
        <label class="inline-flex items-center">
          <input type="checkbox" name="piatto[]" id="antipasto" value="antipasto" class="form-checkbox text-orange-500">
          <span class="ml-2">Antipasto</span>
        </label>
        <label class="inline-flex items-center">
          <input type="checkbox" name="piatto[]" id="primo" value="primo" class="form-checkbox text-orange-500">
          <span class="ml-2">Primo</span>
        </label>
        <label class="inline-flex items-center">
          <input type="checkbox" name="piatto[]" id="secondo" value="secondo" class="form-checkbox text-orange-500">
          <span class="ml-2">Secondo</span>
        </label>
      </div>
    </div>

    <div class="mb-6">
      <h3 class="text-orange-700 font-bold mb-2">Parcheggio:</h3>
      <div class="flex flex-col space-y-1 text-orange-800">
        <label class="inline-flex items-center">
          <input type="radio" name="parcheggio" id="custodito" value="custodito" required class="form-radio text-orange-500">
          <span class="ml-2">Parcheggio custodito</span>
        </label>
        <label class="inline-flex items-center">
          <input type="radio" name="parcheggio" id="nonCustodito" value="nonCustodito" required class="form-radio text-orange-500">
          <span class="ml-2">Parcheggio non custodito</span>
        </label>
        <label class="inline-flex items-center">
          <input type="radio" name="parcheggio" id="noParcheggio" value="noParcheggio" required class="form-radio text-orange-500">
          <span class="ml-2">Nessun parcheggio</span>
        </label>
      </div>
    </div>

    <button
      id="invia"
      class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded disabled:opacity-50 disabled:cursor-not-allowed"
      disabled
    >
      Invia
    </button>

  </form>
</div>


</body>

<script>
    function validateForm() {
        const checkboxes = document.querySelectorAll('input[name="piatto[]"]');
        const isChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
        const submitButton = document.getElementById('invia');
        submitButton.disabled = !isChecked;
    }
</script>

</html>

<?php

?>