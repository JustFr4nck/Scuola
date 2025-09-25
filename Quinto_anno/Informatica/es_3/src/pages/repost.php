<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>result</title>
</head>
<body>
    <div class="flex flex-col items-center justify-center h-screen bg-blue-200">
        <div class="bg-blue-300 rounded">
            <h4 class="text-orange-600 p-10 font-bold text-2xl">La materia preferita da <?php echo $_POST["nome"]; echo " "; echo $_POST["cognome"]?> è <?php echo $_POST["materia"]?></h4>
        </div> 
    </div>
</body>
</html>
