<?php
include "Connect.php";
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location:signin.php");
    exit(); 
}
$userId = $_SESSION['user_id'];
$dastor = "SELECT * FROM post";
$gittingPost = $connect->query($dastor);
$gettinguser = "SELECT * FROM form WHERE id =".$userId;
$result = $connect->query($gettinguser);
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
    <nav class="h-20 w-full rounded-2xl rounded-t-none shadow-lg flex justify-between items-center px-8">
        <h1 class="text-2xl">Hi,
            <?php 
            while($row = $result->fetch_assoc()){
                echo $row['name']." ".$row['lastName']; 
            };
            ?>
        </h1>
        <button class="p-3  hover:shadow-sm font-bold shadow-inner  shadow-gray-400">
        <a href="<?php echo "UploadPost.php?id=" .$userId  ?>">
        Upload a post
        </a>
    </button>
    </nav>
    <?php
      if($gittingPost->num_rows === 0 ){
        ?>
        
      <h1 class="gont-bold text-2xl text-center">No post Available</h1>
      <?php
      }
      else{ while($row =$gittingPost->fetch_assoc()){
    ?>
    <div class=" w-full flex my-7 p-5 flex-wrap justify-center">
        <div class="w-[40%] shadow-md shadow-gray-400 h-fit p-2 flex flex-col"> 
            <img src=<?php echo "img/".  $row["imgUrl"]; ?> class="h-[80%] w-[90%] shadow-inner mx-auto" alt="">
            <button class="w-[100%] px-6 text-right mx-auto"><span class="material-symbols-outlined">
comment
</span></button>
            <p class="text-center font-bold"><?php echo $row["Post_text"]; ?></p>
        </div>
    </div>
    <?php
      }}
    ?>
</body>
</html>