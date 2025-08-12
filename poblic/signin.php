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
    <div class="w-[35%] h-[60%] border border-gray-400 gap-18 rounded-2xl mx-auto px-8 items-center relative shadow-md shadow-gray-600 flex flex-col  p-4 justify-center">
        <h1 class="font-bold text-3xl text-center"><span class="material-symbols-outlined p-10 rounded-full absolute -top-14 right-44 bg-gray-400" style="font-size :50px">
          person
         </span></h1>
        <div class="flex flex-col w-full gap-4">
        <div class="flex w-full justify-center">
         <span class="material-symbols-outlined p-3 bg-gray-400">
          person
         </span>
        <input type="text" class="px-2 py-2 bg-gray-300 outline-0">
        </div>
        <div class="flex w-full justify-center">
            <span class="material-symbols-outlined p-3 bg-gray-400">
lock
</span>
        <input type="text" class="px-2 py-2  bg-gray-300  outline-0">
</div>
</div>
<div class="flex justify-between w-full h-fit px-6">
    <div class="flex ">
<input type="checkbox">
<h1 class="text-xl">Remember me</h1>
</div>
<span class="hover:underline hover:cursor-pointer text-xl">Forgit Password?</span>
</div>
<button class="py-3 px-8 mx-auto rounded-2xl rounded-t-none font-bold text-xl absolute -bottom-[53px] left-21 -z-20 hover:shadow-xs  w-[65%] bg-gray-300 shadow-md shadow-gray-600">Sing Up</button>
    </div>
    
</body>
</html>