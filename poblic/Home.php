<?php
include "Connect.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["Name"];
    $lastName = $_POST["LastName"];
    $email = $_POST["Email"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
    if($password1 === $password2){
        $dastor = "INSERT INTO form(name,lastName,email,passwrd) VALUES('$name','$lastName','$email','$password1')";
        $query = "SELECT * FROM form WHERE email = '$email'";
        if($connect->query($query)->num_rows > 0){
          header("location: signin.php?err=error");
        }
        else{
        if($connect ->query($dastor) === true){
            header("location: signin.php");
        }
        else{
            echo "not a found";
        }
    }}
    else{
        echo "<script>alert('password do not match!')</script>";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="../src/output.css">
</head>
<body class="h-screen w-full bg-gradient-to-tl from-pink-300 to-gray-700 via-gray-300 text-white flex py-4">
    <div class="w-[35%] mx-auto h-[90%] relative shadow-md shadow-gray-500 rounded-xl  bg-gray-200 my-3">
        <h1 class="font-bold text-3xl my-4 text-center">Sign Up</h1>
    <!-- <div class="flex justify-between h-full w-full"> -->
        <form action=<?php echo $_SERVER["PHP_SELF"] ?> method="post" class="w-[90%] mx-auto h-full gap-1 flex flex-col  rounded-2xl">
            <label for="">
                <span class="font-bold text-xl">Name</span>
                <div class="flex w-full justify-center">
         <span class="material-symbols-outlined p-4 bg-gray-400">
          person
         </span>
        <input type="text" name="Name" class="px-2 py-4 bg-gray-300 outline-0 w-[90%]">
        </div>
            <!-- <input type="text"  class="shadow-md shadow-gray-500 border rounded-xl w-full py-3"> -->
            </label>
            <label for="">
                <span class="font-bold text-xl">Last Name</span>
                       <div class="flex w-full justify-center">
         <span class="material-symbols-outlined p-4 bg-gray-400">
          person_4
         </span>
        <input type="text" name="LastName" class="px-2 py-4 bg-gray-300 outline-0 w-[90%]">
        </div>
            <!-- <input type="text"  class="shadow-md shadow-gray-500 border rounded-xl w-full py-3"> -->
            </label>
            <label for="">
                <span class="font-bold text-xl">Email</span>
                              <div class="flex w-full justify-center">
         <span class="material-symbols-outlined p-4 bg-gray-400">
          mark_email_unread
         </span>
        <input type="text" name="Email" class="px-2 py-4 bg-gray-300 outline-0 w-[90%]">
        </div>
            <!-- <input type="email"  class="shadow-md shadow-gray-500 border rounded-xl w-full py-3"> -->
            </label>
            <label for="">
                <span class="font-bold text-xl">Password</span>
                                    <div class="flex w-full justify-center">
         <span class="material-symbols-outlined p-4 bg-gray-400">
          lock
         </span>
        <input type="text" name="password1" class="px-2 py-4 bg-gray-300 outline-0 w-[90%]">
        </div>
            <!-- <input type="password"  class="shadow-md shadow-gray-500 border rounded-xl  w-full py-3"> -->
            </label>
            <label for="">
                <span class="font-bold text-xl">Confirm Password</span>
                                         <div class="flex w-full justify-center">
         <span class="material-symbols-outlined p-4 bg-gray-400">
          passkey
         </span>
        <input type="text" name="password2" class="px-2 py-4 bg-gray-300 outline-0 w-[90%]">
        </div>
            <!-- <input type="password"  class="shadow-md shadow-gray-500 border  rounded-xl  w-full py-3"> -->
            </label>
            <div class="w-full flex justify-between font-bold text-[16px]">
                <span class="hover:underline hover:cursor-pointer">Forgit Password?</span>
                <span class="hover:underline hover:cursor-pointer">Sign In</span>
            </div>
        <button class="py-3 px-8 mx-auto rounded-2xl rounded-t-none font-bold text-xl absolute -bottom-[53px] left-35 hover:shadow-xs  w-[40%] bg-gray-300 shadow-md shadow-gray-600 ">Sing Up</button>
        </form>
        <!-- <img src="./img/download (1).jpg" alt=""> -->
    </div>
    </div>
</body>
</html> 