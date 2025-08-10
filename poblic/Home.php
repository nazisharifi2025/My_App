<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body class="h-screen w-full bg-gray-600 flex justify-center items-center">
    <div class="w-[90%] h-[90%] shadow-md shadow-gray-500  bg-gray-900 ">
        <h1 class="font-bold text-2xl text-center">Sign Up</h1>
    <div class="flex justify-between h-full w-full">
        <form class="w-1/2 h-full flex flex-col justify-between  rounded-2xl">
            <label for="">
                <span class="font-bold text-xl">Last Name</span>
            <input type="text" name="LastName" class="shadow-md shadow-gray-500 border rounded-xl w-full py-3">
            </label>
            <label for="">
                <span class="font-bold text-xl">Name</span>
            <input type="text" name="Name" class="shadow-md shadow-gray-500 border rounded-xl w-full py-3">
            </label>
            <label for="">
                <span class="font-bold text-xl">Email</span>
            <input type="email" name="Email" class="shadow-md shadow-gray-500 border rounded-xl w-full py-3">
            </label>
            <label for="">
                <span class="font-bold text-xl">Password</span>
            <input type="password" name="Password1" class="shadow-md shadow-gray-500 border rounded-xl  w-full py-3">
            </label>
            <label for="">
                <span class="font-bold text-xl">Confirm Password</span>
            <input type="password" name="password2" class="shadow-md shadow-gray-500  rounded-xl  w-full py-3">
            </label>
            <div class="w-full flex justify-between font-bold text-xs">
                <span>Forgit Password?</span>
                <span>Sign In</span>
            </div>
        <button class="py-3 px-4 mx-auto rounded-2xl rounded-t-none font-bold text-xl w-[40%] bg-violet-950 shdow-md shadow-gray-500">Sing Up</button>
        </form>
        <img src="./img/download (1).jpg" alt="">
    </div>
    </div>
</body>
</html>