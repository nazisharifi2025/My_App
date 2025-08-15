<?php
include "Connect.php";
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location:signin.php");
    exit(); 
}
echo $_SESSION['user_id'];
$dastor = "SELECT * FROM post";
if($connect->query($dastor)->num_rows ==0){
    echo "<h1>no post aveleble</h1>";
}
else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
    <nav class="h-20 w-full rounded-2xl rounded-t-none shadow-sm flex justify-between items-center px-4">
        <h1 class="text-2xl">Hi,</h1>
        <button class="p-3 bg-gray-200 rounded-ee-xl shadow-inherit">Upload a post</button>
    </nav>
</body>
</html>
<?php } ?>