<?php
include 'dbconn.php';
$a = $_POST['a'];
$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];
$a4 = $_POST['a4'];
if($a!=''){
    $a5 = $a+$a1+$a2+$a3/2+$a4;
}
else{
    $a5=0;
}


if(isset($_POST['submit']))
{	 
	 $sql = "UPDATE testing SET mq1='$a', mq2='$a1',mq3='$a2',mquiz1='$a3',m1assign='$a4',m1total='$a5'";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
        header("Location: re.php");
	 } 

}
?>