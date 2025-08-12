<?php
if(isset($_GET['err'])){
    echo "<h1>You already have an account</h1>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body class="h-screen w-full bg-gray-100 text-2xl text-black flex justify-center items-center flex-col">
    <div class="w-[35%] h-[60%] border border-gray-400 rounded-2xl px-8 items-center shadow-md shadow-gray-600 flex flex-col gap-2.5 p-4 justify-center">
        <h1 class="font-bold text-xl text-center">Login Page</h1>
        <div class="flex w-full">
         <span class="material-symbols-outlined p-3 bg-gray-400">
          person
         </span>
        <input type="text" class="px-2 py-2 bg-gray-300 outline-0">
        </div>
        <div class="flex w-full">
            <span class="material-symbols-outlined p-3 bg-gray-400">
lock
</span>
        <input type="text" class="px-2 py-2  bg-gray-300  outline-0">
</div>
    </div>
</body>
</html>