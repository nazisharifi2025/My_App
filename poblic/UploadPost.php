<?php
include "Connect.php";
session_start();
if(isset($_GET["id"])){
$_SESSION['USER_ID'] = $_GET["id"];
}
    if($_SERVER["REQUEST_METHOD"]=== "POST"){
        $messege = $_POST['Text'];
        $userId = $_SESSION['USER_ID'];
        $image = $_FILES["file"]["name"];
        $tmp_name = $_FILES["file"]["tmp_name"];
        $folder = "./img/". $image;
        if(move_uploaded_file($tmp_name,$folder) === true){
            $dastor = "INSERT INTO post(Post_text , imgUrl,user_id) VALUES('$messege','$image',$userId)";
            if($connect->query($dastor) === true){
                header("location:Home.php");
            }
            else{
                header("location:Home.php");
            }
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
<body>
    <div class="h-screen w-full flex justify-center items-center">
        <form action=<?php echo $_SERVER["PHP_SELF"]; ?> method="POST" class="h-[50%] w-[30%] shadow-md rounded-md relative shadow-gray-300 flex flex-col justify-center gap-7 py-6" enctype = "multipart/form-data">
        <textarea placeholder = "Whts is your mind?" name="Text" class="h-[60%] w-[90%] border border-gray-200 mx-auto rounded-md" id=""></textarea>
        <div class="flex w-full justify-center">
        <span class="material-symbols-outlined p-4 bg-gray-400">
        folder_open
       </span> 
        <input name="file" type="file" class="border focus:outline-0 focus:outline-gray-300 border-gray-200 text-center">   
    </div>
    <button class="py-3 px-8 mx-auto rounded-2xl rounded-t-none font-bold text-xl absolute -bottom-[53px] left-35 hover:shadow-xs  w-[40%] bg-gray-300 shadow-md shadow-gray-600 ">Sing Up</button>
        </form>
    </div>
</body>
</html>