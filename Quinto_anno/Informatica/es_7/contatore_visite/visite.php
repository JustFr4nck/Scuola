<?php
session_start();


if (isset($_SESSION["contatore"])) {

    $_SESSION["contatore"] += 1;
} else {
    $_SESSION["contatore"] = 1;
}

if (isset($_POST["reset"]) || isset($_GET["reset"])) {
    $reset = $_POST["reset"] ?? $_GET["reset"] ?? false;
    if ($reset) {
        session_unset();
        header("location: visite.php");
    }


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visite</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center font-sans">

    <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-md text-center">
        <form action="visite.php" method="POST" class="mb-6">
            <input type="hidden" name="reset" value="true">

            <p class="text-gray-700 mb-4">
                <?php echo "hai loggato nel server ", $_SESSION["contatore"], " volte" ?>
            </p>

            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow transition-all">
                Reset
            </button>
        </form>

        <a href="visite.php?reset=true" class="text-sm text-gray-500 hover:text-blue-600 underline transition-all">
            Reset link
        </a>
    </div>

</body>
</html>





