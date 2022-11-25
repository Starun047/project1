<?php
include 'dbconn.php';


$a6 = $_POST['a6'];
$a7 = $_POST['a7'];
$a8 = $_POST['a8'];
$a9 = $_POST['a9'];
$a10 = $_POST['a10'];
if($a6!=''){
    $a11 = $a6+$a7+$a8+$a9/2+$a10;
}
else{
    $a5=0;
} ?>
<?php 
    include "dbconn.php";
    $sql="select * from testing ";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
      while($row=mysqli_fetch_array($res)){
       
    ?>
    <?php echo $a5=$row['m1total']; ?>
<?php if($a5>$a11){
  $a12=$a5*(80/100);
  $a13=$a11*(20/100);
  $aa=$a12+$a13;
}
else {
  $a12=$a11*(80/100);
  $a13=$a5*(20/100);
  $aa=$a12+$a13;
} ?>
<?php   }
}
?>
<?php 
if(isset($_POST['submit']))
{	 
	 $sql = "UPDATE testing SET m2q1='$a6',m2q2='$a7',m2q3='$a8',m2quiz='$a9',m2assign='$a10',m2total='$a11',overalltotal='$aa'";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
        header("Location: re.php");
	 } 

}
?>