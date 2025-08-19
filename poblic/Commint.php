<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
     <div class="h-screen w-full flex justify-center items-center">
        <form action=<?php echo $_SERVER["PHP_SELF"]; ?> method="POST" class="h-[50%] w-[30%] shadow-md rounded-md relative shadow-gray-500 flex flex-col justify-center gap-7 py-6" enctype = "multipart/form-data">
        <textarea placeholder = "Enter a comment" name="Text" class="h-[60%] w-[90%] border border-gray-400 mx-auto rounded-md" id=""></textarea>
    <button class="py-3 px-8 mx-auto rounded-sm hover:shadow-inner shadow-md shadow-gray-400 font-bold text-xl ">Add Comment</button>
        </form>
    </div>
</body>
</html>