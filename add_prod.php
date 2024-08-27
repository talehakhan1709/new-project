<?php 
include "conn.php";
$sqlcat = "SELECT * FROM `catgeory` ";
$result = mysqli_query($conn,$sqlcat);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
prod name <input type="text" name="pname"><br> <br>
prod price <input type="number" name="pprice"><br> <br>
prod img <input type="file" name="pimg"><br> <br>
prod category <select name="" id="">

<?php  
while($row=mysqli_fetch_array($result)){
    ?>
    <option value="<?php echo $row [0]; ?>"><?php echo $row [1]; ?></option>
    <?php   
}
?> 
</select> <br> <br>
prod desc <input type="text" name="pdesc"><br> <br>
prod qty <input type="text" name="pqty"><br> <br>
<input type="submit" value="add product" name="addprod">
    </form>
</body>
</html>