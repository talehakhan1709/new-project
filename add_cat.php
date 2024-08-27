<?php 
include 'conn.php';
if(isset($_post['addcat'])){
    $cn=$_post['cat_name'];
    $sql="INSERT INTO `catgeory`( `c_name`) VALUES ('$cn')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo '<script>alert("insertes")</script>';
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="name">
 <input type="submit" value="add category">



    </form>
</body>
</html>