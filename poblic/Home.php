<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body class="h-screen w-full  bg-linear-180 from-pink-500 to-violet-950 flex justify-center items-center">
    <div class="w-[90%] h-[90%] shadow-md shadow-gray-500 flex-col  flex justify-between">
        <form action="" class="w-1/2 h-full flex flex-col bg-gray-200 rounded-2xl">
            <label for="">
                <span class="font-bold text-xl">Name</span>
            <input type="text" class="shadow-md shadow-gray-500 border rounded-xl w-full py-3">
            </label>
            <label for="">
                <span class="font-bold text-xl">Email</span>
            <input type="email" class="shadow-md shadow-gray-500 border rounded-xl w-full py-3">
            </label>
            <label for="">
                <span class="font-bold text-xl">Password</span>
            <input type="password" class="shadow-md shadow-gray-500 border rounded-xl  w-full py-3">
            </label>
            <label for="">
                <span class="font-bold text-xl">Confirm Password</span>
            <input type="password" class="shadow-md shadow-gray-500 border rounded-xl  w-full py-3">
            </label>
            <div class="w-full flex justify-between font-bold text-xs">
                <span>Forgit Password?</span>
                <span>Sign In</span>
            </div>
        </form>
        <button class="py-3 px-4 rounded-2xl rounded-t-none w-[40%] bg-violet-950 shdow-md shadow-gray-500">Sing Up</button>
    </div>
</body>
</html>