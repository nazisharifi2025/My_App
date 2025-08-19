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
    <!-- nave start -->
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
    <!-- nave ended -->
    <?php
      if($gittingPost->num_rows === 0 ){
        ?>
        
      <h1 class="gont-bold text-2xl text-center">No post Available</h1>
      <?php
      }
      else{ while($row =$gittingPost->fetch_assoc()){
    ?>
    <!-- Post start -->
    <div class=" w-full flex my-7 p-5 flex-wrap justify-center">
        <div class="w-[40%] shadow-md shadow-gray-400 h-fit p-6 flex flex-col"> 
            <!-- Name and lastname start -->
        <?php   
            $userId = $row["user_id"];
            $dastor = "SELECT  name , lastName FROM form where id =".$userId;
            $natija =$connect->query($dastor);
            while($rows =$natija->fetch_assoc()){
            ?>
            <h1 class="font-bold text-left mx-5 mt-2">
                <?php
                echo $rows["name"]. " ". $rows["lastName"];
                ?>
            </h1>
            <?php
            }
            ?>
            <!-- name and lastname ended -->
            <!-- Created_at start -->
            <p class="text-gray-400 text-left my-1 mx-5 text-2xl">
            <?php
            $postdate =new DateTime( $row["created_at"]);
            //  $date2 = DateTime::createFromFormat('m/d/y',$date);
            $now = new DateTime();
            $diff = $postdate->diff($now); 
            if($diff->y >0){
                echo $diff->y . 'year' . ($diff->y  > 1 ? 's' : '') . 'ago';
            }else if($diff->m >0){
                echo $diff->m . 'mon' . ($diff->m >1 ? 's' : '') . 'ago';
            }else if($diff->d >0){
                echo $diff->d . 'day' . ($diff->d >1 ? 's' : '') . 'ago';
            }else if($diff->h >0){
                echo $diff->h . 'hour' . ($diff->h >1 ? 's' : '') . 'ago';
            }else if($diff->i >0){
                echo $diff->i . 'minute' . ($diff->i >1 ? 's' : '') . 'ago';
            }else{
                echo 'just now';
            }
            ?>
            </p>
            <!-- created_at ended -->
             <!-- img start -->
            <img src=<?php echo "img/".  $row["imgUrl"]; ?> class="h-[80%] w-[90%] shadow-inner mx-auto" alt="">
            <!-- img ended -->
             <!-- comment stert -->
            <a href="Commint.php" class="w-[100%] px-6 text-right mx-auto"><span class="material-symbols-outlined">
comment
            </span></a> 
            <!-- comment-ended -->
            <p class="text-center font-bold"><?php echo $row["Post_text"]; ?></p>
        </div>
    </div>
    <?php
      }}
    ?>
    <!-- post endded -->
</body>
</html>