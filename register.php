<?php
include("config.php");
$link=$db;
//check connection
if ($link==false){
die("ERROR:could not correct:".Mysqli_connect_error(();
}
$name=$_post['name'];
$cn=$_post['college name'];
$deg=$_post['degree'];
$lang=$_post['language'];
$eml=$_post['email'];
$psw=$_post['password'];
$reppas=$_post['repeat password'];
//Attemt insert query execution
$sql="INSERT INTO register['name','college_name','degree','language','email','password','repeat password']VALUES
values($name,$cn,$deg,$lang,$eml,$psw,$reppas);
if(mysqli_query($db,$sql)){
 echo"Records added successfully:";
}else{
echo'ERROR:could not able to execute $sql"Mysqli_error($link);
}
//close connection
mysqli_close($link);
?>
