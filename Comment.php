<?php
          $username = "homestead";
$password = "secret";
$hostname = "localhost"; 

$dbhandle = mysqli_connect($hostname, $username, $password);


$selected = mysqli_select_db($dbhandle,"bootcamp");


$usersname = $_REQUEST['name'];
$usercomment = $_REQUEST['comment'];


$result = mysqli_query($dbhandle,"INSERT INTO `comments` (`user`, `comment`)VALUES ('$usersname', '$usercomment');");
mysqli_close($dbhandle);
 header("Location:/demo.php");

setcookie("TestCookie", $username, time()+3600);  
setcookie("TestCookie", $usercomment, time()+3600);  
echo $_COOKIE["TestCookie"];

  

  /*$newComment = json_decode(                                 file_get_contents('comments.json'), true);
$aComment = [
    'user' => $_REQUEST['name'],
    'comment' => $_REQUEST['comment'],
];
$newComment[] = $aComment;

file_put_contents("comments.json", json_encode($newComment));
    
header("Location:/demo.php");

 foreach($newComment as $commentNum){
                echo $commentNum;
 }
 */
     