<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<!-- npx @tailwindcss/cli -i ./src/input.css -o ./src/output.css --watch -->
<body class="h-screen w-full  flex justify-center items-center flex-col">
        <form action="" class="w-[27%] h-fit gap-4 flex flex-col ">
        <input placeholder ="Email" type="text" class="w-full py-3 rounded border-2 border-gray-300 bg-gray-100">
        <input  placeholder ="password" type="text" class="w-full py-3 rounded border-2 border-gray-300 bg-gray-100">
        <button class="bg-blue-400 rounded w-full py-3 text-white font-bold">Log in</button>
        <div class="flex justify-center items-center space-x-4 mt-8">
            <div class="w-[35%] border border-gray-300"></div>
            <h1 class="font-bold text-xl text-gray-600">OR</h1>
            <div class="w-[35%] border border-gray-300"></div>
        </div>
        <div class="flex justify-center font-bold hover:border-b  w-[60%] text-blue-500 cursor-pointer mx-auto">
            <h1>Log in with faceBook</h1>
        </div>
        <div class="flex justify-center font-bold hover:border-b  w-[40%]  cursor-pointer mx-auto">
            <h1>Forgot Password?</h1>
        </div>
        <div class="flex justify-center mx-auto w-[60%] ">
            <h1>Don't have an acount? <span class="text-blue-600">Sign Up</span></h1>
        </div>
        </form>
</body>
</html>