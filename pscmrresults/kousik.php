<html lang="en">
<head>
<title>PSCMR RESULTS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: purple;
  padding: 15px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 20%;
  height: 2000px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  width: 80%;
  background-color: #f1f1f1;
  padding: 90px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}



/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
.h2
{
  margin-top: -50px;

}
.h1
{
  margin-top: 270px;
}
</style>
<style>
.scroll-right {
 height: 50px;  
 overflow: hidden;
 position: relative;
 background: gray;
 color: yellow;
 border: 1px solid orange;
}
.scroll-right p {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 transform:translateX(100%);
 /* Apply animation to this element */
 animation: scroll-right 10s linear infinite;
}
/* Move it (define the animation) */
@keyframes scroll-right {
 0%   {
 transform: translateX(100%);    
 }
 100% {
 transform: translateX(-100%);
 }
}
p {
  font-size: 30px;
}
.t1
{
  margin-top: -1px;

}
.t2
{
  margin-top: 10px;
}
</style>
<form method="post" action="">
<div class="scroll-right">
<b><p>PSCMR RESULTS WEB PAGE</p></b>
</div>

</head>
<body>
<header>
  <img src="pscmrb.jpg"height="20%" width="95%" >
</header>

<section>
  <nav >
<br>

<h1 style="color:red;">Student Information System</h1><br>
You are in PSCMR Results web page<br>
Enter your details and check your results
<br>
<br>
<b>JNTUK PREVIOUS YEAR QUESTION PAPERS:</b>
<br>
<a href="https://www.jntufastresult.com/jntuk-b-tech-previous-paper-jntu-kakinada-question-papers/">Check JNTUK Question papers</a>


  </nav>

 
  <article align="center">
<br>
<br>
<br>
<h1 style="color:red;">Enter your Roll Number to check your results</h1><br>
<label for="results"><b>Choose your year and semister:</b></label>
<form method="post" action="">
<select id="results" name="option">
  <option value="1-1">1-1</option>
  <option value="1-2">1-2</option>
  <option value="2-1">2-1</option>
  <option value="2-2">2-2</option>
  <option value="3-1">3-1</option>
  <option value="3-2">3-2</option>
  <option value="4-1">4-1</option>
  <option value="4-2">4-2</option>
  <option value="overall">overall</option>

</select><br>
<br>
    Roll Num:<input type="text" name="htno" id="roll"><br>
<br>
<input  type ="submit" value="Get Details" name="check" id="roll">&nbsp &nbsp
<input type ="reset" value="cancel">
<br>
<br>
<br>
</form>
 
 //php
<?php
if(isset($_POST['check']))
{
  $option = $_POST['option'];
  $htno=$_POST['htno'];
  //$htno = mysqli_real_escape_string($conn, $_POST['htno']);
  $con=mysqli_connect("localhost","root","");
  $db=mysqli_select_db($con,"project");
  
  //1-1 rersuls
  if($option=="1-1"){
  $select ="SELECT * FROM `1-1` WHERE htno = '$htno'" or die('query failed');
  $res=mysqli_query($con,$select);
  $r = mysqli_num_rows($res);


if($r>0){

   if($res)
   {
    echo"<h2 align=left> Roll Number:$htno &nbsp &nbsp &nbsp SEM:$option";
    echo"</br>";
    echo"</br>";
    echo"<table border=4 align=center width=80% height=40%   bordercolor=black>";
    echo"<tr bgcolor=skyblue >";
    echo"<th >Htno</th>";
    echo"<th>Subcode</th>";
    echo"<th>Subname</th>";
    echo"<th>Grade</th>";
    echo"<th>Credits</th>";
    echo"</tr>";
   
 
    while($fetch=mysqli_fetch_array($res))
    {
   
    echo"<tr bgcolor=lightpink align=center>";
    echo"<td >".$fetch['Htno']."</td>";
    echo"<td>".$fetch['subcode']."</td>";
    echo"<td>".$fetch['subname']."</td>";
    echo"<td>".$fetch['Grade']."</td>";
    echo"<td>".$fetch['credits']."</td>";
    echo"</tr>";
   

    }


echo"</table>";
  }
   
}

else{
  echo "<script>alert('RESULT NOT FOUND,PLEASE ENTER CORRECT NUMBER');</script>";
}
}

//1-2 results
elseif($option=="1-2"){
  $select ="SELECT * FROM `1-2` WHERE htno = '$htno'" or die('query failed');
  $res=mysqli_query($con,$select);
  $r = mysqli_num_rows($res);



if($r>0){

   if($res)
   {
    echo"<h2 align=left> Roll Number:$htno &nbsp &nbsp &nbsp SEM:$option";
    echo"</br>";
    echo"</br>";
    echo"<table border=4 align=center width=80% height=40%   bordercolor=black>";
    echo"<tr bgcolor=skyblue >";
    echo"<th >Htno</th>";
    echo"<th>Subcode</th>";
    echo"<th>Subname</th>";
    echo"<th>Grade</th>";
    echo"<th>Credits</th>";
    echo"</tr>";
   
 
    while($fetch=mysqli_fetch_array($res))

{
   
    echo"<tr bgcolor=lightpink align=center>";
    echo"<td >".$fetch['Htno']."</td>";
    echo"<td>".$fetch['subcode']."</td>";
    echo"<td>".$fetch['subname']."</td>";
    echo"<td>".$fetch['Grade']."</td>";
    echo"<td>".$fetch['credits']."</td>";
    echo"</tr>";
   

}


echo"</table>";
   }
   
}

else{
  echo "<script>alert('RESULT NOT FOUND,PLEASE ENTER CORRECT NUMBER');</script>";
}

}

//2-1 results
elseif($option=="2-1"){
  $select ="SELECT * FROM `2-1` WHERE htno = '$htno'" or die('query failed');
  $res=mysqli_query($con,$select);
  $r = mysqli_num_rows($res);


if($r>0){

   if($res)
   {
    echo"<h2 align=left> Roll Number:$htno &nbsp &nbsp &nbsp SEM:$option";
    echo"</br>";
    echo"</br>";
    echo"<table border=4 align=center width=80% height=40%   bordercolor=black>";
    echo"<tr bgcolor=skyblue >";
    echo"<th >Htno</th>";
    echo"<th>Subcode</th>";
    echo"<th>Subname</th>";
    echo"<th>Grade</th>";
    echo"<th>Credits</th>";
    echo"</tr>";
   
 
    while($fetch=mysqli_fetch_array($res))

{
   
    echo"<tr bgcolor=lightpink align=center>";
    echo"<td >".$fetch['Htno']."</td>";
    echo"<td>".$fetch['subcode']."</td>";
    echo"<td>".$fetch['subname']."</td>";
    echo"<td>".$fetch['Grade']."</td>";
    echo"<td>".$fetch['credits']."</td>";
    echo"</tr>";
   

}


echo"</table>";
   }
   
}

else{
  echo "<script>alert('RESULT NOT FOUND,PLEASE ENTER CORRECT NUMBER');</script>";
}

}

//2-2 results
elseif($option=="2-2"){
  $select ="SELECT * FROM `2-2` WHERE htno = '$htno'" or die('query failed');
  $res=mysqli_query($con,$select);
  $r = mysqli_num_rows($res);


if($r>0){

   if($res)
   {
    echo"<h2 align=left> Roll Number:$htno &nbsp &nbsp &nbsp SEM:$option";
    echo"</br>";
    echo"</br>";
    echo"<table border=4 align=center width=80% height=40%   bordercolor=black>";
    echo"<tr bgcolor=skyblue >";
    echo"<th >Htno</th>";
    echo"<th>Subcode</th>";
    echo"<th>Subname</th>";
    echo"<th>Grade</th>";
    echo"<th>Credits</th>";
    echo"</tr>";
   
 
    while($fetch=mysqli_fetch_array($res))

{
   
    echo"<tr bgcolor=lightpink align=center>";
    echo"<td >".$fetch['Htno']."</td>";
    echo"<td>".$fetch['subcode']."</td>";
    echo"<td>".$fetch['subname']."</td>";
    echo"<td>".$fetch['Grade']."</td>";
    echo"<td>".$fetch['credits']."</td>";
    echo"</tr>";
   

}


echo"</table>";
   }
   
}

else{
  echo "<script>alert('RESULT NOT FOUND,PLEASE ENTER CORRECT NUMBER');</script>";
}

}

//3-1 results
elseif($option=="3-1"){
  $select ="SELECT * FROM `3-1` WHERE htno = '$htno'" or die('query failed');
  $res=mysqli_query($con,$select);
  $r = mysqli_num_rows($res);


if($r>0){

   if($res)
   {
    echo"<h2 align=left> Roll Number:$htno &nbsp &nbsp &nbsp SEM:$option";
    echo"</br>";
    echo"</br>";
    echo"<table border=4 align=center width=80% height=40%   bordercolor=black>";
    echo"<tr bgcolor=skyblue >";
    echo"<th >Htno</th>";
    echo"<th>Subcode</th>";
    echo"<th>Subname</th>";
    echo"<th>Grade</th>";
    echo"<th>Credits</th>";
    echo"</tr>";
   
 
    while($fetch=mysqli_fetch_array($res))

{
   
    echo"<tr bgcolor=lightpink align=center>";
    echo"<td >".$fetch['Htno']."</td>";
    echo"<td>".$fetch['subcode']."</td>";
    echo"<td>".$fetch['subname']."</td>";
    echo"<td>".$fetch['Grade']."</td>";
    echo"<td>".$fetch['credits']."</td>";
    echo"</tr>";
   

}


echo"</table>";
   }
   
}

else{
  echo "<script>alert('RESULT NOT FOUND,PLEASE ENTER CORRECT NUMBER');</script>";
}

}
//3-2 results
elseif($option=="3-2"){
  $select ="SELECT * FROM `3-2` WHERE htno = '$htno'" or die('query failed');
  $res=mysqli_query($con,$select);
  $r = mysqli_num_rows($res);


if($r>0){

   if($res)
   {
    echo"<h2 align=left> Roll Number:$htno &nbsp &nbsp &nbsp SEM:$option";
    echo"</br>";
    echo"</br>";
    echo"<table border=4 align=center width=80% height=40%   bordercolor=black>";
    echo"<tr bgcolor=skyblue >";
    echo"<th >Htno</th>";
    echo"<th>Subcode</th>";
    echo"<th>Subname</th>";
    echo"<th>Grade</th>";
    echo"<th>Credits</th>";
    echo"</tr>";
   
 
    while($fetch=mysqli_fetch_array($res))

{
   
    echo"<tr bgcolor=lightpink align=center>";
    echo"<td >".$fetch['Htno']."</td>";
    echo"<td>".$fetch['subcode']."</td>";
    echo"<td>".$fetch['subname']."</td>";
    echo"<td>".$fetch['Grade']."</td>";
    echo"<td>".$fetch['credits']."</td>";
    echo"</tr>";
   

}


echo"</table>";
   }
   
}

else{
  echo "<script>alert('RESULT NOT FOUND,PLEASE ENTER CORRECT NUMBER');</script>";
}

}

//4-1 results
elseif($option=="4-1"){
  $select ="SELECT * FROM `4-1` WHERE htno = '$htno'" or die('query failed');
  $res=mysqli_query($con,$select);
  $r = mysqli_num_rows($res);


if($r>0){

   if($res)
   {
    echo"<h2 align=left> Roll Number:$htno &nbsp &nbsp &nbsp SEM:$option";
    echo"</br>";
    echo"</br>";
    echo"<table border=4 align=center width=80% height=40%   bordercolor=black>";
    echo"<tr bgcolor=skyblue >";
    echo"<th >Htno</th>";
    echo"<th>Subcode</th>";
    echo"<th>Subname</th>";
    echo"<th>Grade</th>";
    echo"<th>Credits</th>";
    echo"</tr>";
   
 
    while($fetch=mysqli_fetch_array($res))

{
   
    echo"<tr bgcolor=lightpink align=center>";
    echo"<td >".$fetch['Htno']."</td>";
    echo"<td>".$fetch['subcode']."</td>";
    echo"<td>".$fetch['subname']."</td>";
    echo"<td>".$fetch['Grade']."</td>";
    echo"<td>".$fetch['credits']."</td>";
    echo"</tr>";
   

}


echo"</table>";
   }
   
}

else{
  echo "<script>alert('RESULT NOT FOUND,PLEASE ENTER CORRECT NUMBER');</script>";
}

}
//4-2 results
elseif($option=="4-2"){
  $select ="SELECT * FROM `4-2` WHERE htno = '$htno'" or die('query failed');
  $res=mysqli_query($con,$select);
  $r = mysqli_num_rows($res);


if($r>0){

   if($res)
   {
    echo"<h2 align=left> Roll Number:$htno &nbsp &nbsp &nbsp SEM:$option";
    echo"</br>";
    echo"</br>";
    echo"<table border=4 align=center width=80% height=40%   bordercolor=black>";
    echo"<tr bgcolor=skyblue >";
    echo"<th >Htno</th>";
    echo"<th>Subcode</th>";
    echo"<th>Subname</th>";
    echo"<th>Grade</th>";
    echo"<th>Credits</th>";
    echo"</tr>";
   
 
    while($fetch=mysqli_fetch_array($res))

{
   
    echo"<tr bgcolor=lightpink align=center>";
    echo"<td >".$fetch['Htno']."</td>";
    echo"<td>".$fetch['subcode']."</td>";
    echo"<td>".$fetch['subname']."</td>";
    echo"<td>".$fetch['Grade']."</td>";
    echo"<td>".$fetch['credits']."</td>";
    echo"</tr>";
   

}


echo"</table>";
   }
   
}

else{
  echo "<script>alert('RESULT NOT FOUND,PLEASE ENTER CORRECT NUMBER');</script>";
}
}

//overall results
elseif($option=="overall"){
  $select ="SELECT * FROM `1-1` WHERE htno = '$htno'" or die('query failed');
  $res=mysqli_query($con,$select);
  $r = mysqli_num_rows($res);


if($r>0){

   if($res)
   {
    echo"<h2 align=left class='h2'>  SEM:1-1</h2>";


    echo"<table class='t1' border=4 align=left width=40% height=30%   bordercolor=black>";
    echo"<tr bgcolor=skyblue >";
    echo"<th>Subname</th>";
    echo"<th>Grade</th>";
    echo"<th>Credits</th>";
    echo"</tr>";
   
 
    while($fetch=mysqli_fetch_array($res))

{
   
    echo"<tr bgcolor=lightpink align=center>";
    echo"<td>".$fetch['subname']."</td>";
    echo"<td>".$fetch['Grade']."</td>";
    echo"<td>".$fetch['credits']."</td>";
    echo"</tr>";
   

}


echo"</table>";

   }
   
}

$select ="SELECT * FROM `1-2` WHERE htno = '$htno'" or die('query failed');
  $res=mysqli_query($con,$select);
  $r = mysqli_num_rows($res);


if($r>0){

   if($res)
   {
    echo"<h2 class='h2' align=right>  SEM:1-2";
    echo"<table class='t1' border=4 align=right width=40% height=30%   bordercolor=black>";
    echo"<tr bgcolor=skyblue >";
    echo"<th>Subname</th>";
    echo"<th>Grade</th>";
    echo"<th>Credits</th>";
    echo"</tr>";
   
 
    while($fetch=mysqli_fetch_array($res))

{
   
    echo"<tr bgcolor=lightpink align=center>";
    echo"<td>".$fetch['subname']."</td>";
    echo"<td>".$fetch['Grade']."</td>";
    echo"<td>".$fetch['credits']."</td>";
    echo"</tr>";
   

}



echo"</table>";

   }

   
}
else{
  echo("RESULT NOT FOUND,PLEASE ENTER CORRECT NUMBER");
}

$select ="SELECT * FROM `2-1` WHERE htno = '$htno'" or die('query failed');
  $res=mysqli_query($con,$select);
  $r = mysqli_num_rows($res);


if($r>0){

   if($res)
   {
    echo"<h2 align=left class='h1'>  SEM:2-1</h2>";


    echo"<table class='t2' border=4 align=left width=40% height=30%   bordercolor=black>";
    echo"<tr bgcolor=skyblue >";
    echo"<th>Subname</th>";
    echo"<th>Grade</th>";
    echo"<th>Credits</th>";
    echo"</tr>";
   
 
    while($fetch=mysqli_fetch_array($res))

{
   
    echo"<tr bgcolor=lightpink align=center>";
    echo"<td>".$fetch['subname']."</td>";
    echo"<td>".$fetch['Grade']."</td>";
    echo"<td>".$fetch['credits']."</td>";
    echo"</tr>";

   

}



echo"</table>";

   }
   
}
$select ="SELECT * FROM `2-2` WHERE htno = '$htno'" or die('query failed');
  $res=mysqli_query($con,$select);
  $r = mysqli_num_rows($res);


if($r>0){

   if($res)
   {
    echo"<h2 class='h2' align=right>  SEM:2-2";
    echo"<table class='t1' border=4 align=right width=40% height=30%   bordercolor=black>";
    echo"<tr bgcolor=skyblue >";
    echo"<th>Subname</th>";
    echo"<th>Grade</th>";
    echo"<th>Credits</th>";
    echo"</tr>";
   
 
    while($fetch=mysqli_fetch_array($res))

{
   
    echo"<tr bgcolor=lightpink align=center>";
    echo"<td>".$fetch['subname']."</td>";
    echo"<td>".$fetch['Grade']."</td>";
    echo"<td>".$fetch['credits']."</td>";
    echo"</tr>";
   

}



echo"</table>";

   }

   
}
$select ="SELECT * FROM `3-1` WHERE htno = '$htno'" or die('query failed');
  $res=mysqli_query($con,$select);
  $r = mysqli_num_rows($res);


if($r>0){

   if($res)
   {
    echo"<h2 align=left class='h1'>  SEM:3-1</h2>";


    echo"<table class='t2' border=4 align=left width=40% height=30%   bordercolor=black>";
    echo"<tr bgcolor=skyblue >";
    echo"<th>Subname</th>";
    echo"<th>Grade</th>";
    echo"<th>Credits</th>";
    echo"</tr>";
   
 
    while($fetch=mysqli_fetch_array($res))

{
   
    echo"<tr bgcolor=lightpink align=center>";
    echo"<td>".$fetch['subname']."</td>";
    echo"<td>".$fetch['Grade']."</td>";
    echo"<td>".$fetch['credits']."</td>";
    echo"</tr>";

   

}



echo"</table>";

   }
   
}
$select ="SELECT * FROM `3-2` WHERE htno = '$htno'" or die('query failed');
  $res=mysqli_query($con,$select);
  $r = mysqli_num_rows($res);


if($r>0){

   if($res)
   {
    echo"<h2 class='h2' align=right>  SEM:3-2";
    echo"<table class='t1' border=4 align=right width=40% height=30%   bordercolor=black>";
    echo"<tr bgcolor=skyblue >";
    echo"<th>Subname</th>";
    echo"<th>Grade</th>";
    echo"<th>Credits</th>";
    echo"</tr>";
   
 
    while($fetch=mysqli_fetch_array($res))

{
   
    echo"<tr bgcolor=lightpink align=center>";
    echo"<td>".$fetch['subname']."</td>";
    echo"<td>".$fetch['Grade']."</td>";
    echo"<td>".$fetch['credits']."</td>";
    echo"</tr>";
   

}



echo"</table>";

   }

   
}
$select ="SELECT * FROM `4-1` WHERE htno = '$htno'" or die('query failed');
  $res=mysqli_query($con,$select);
  $r = mysqli_num_rows($res);


if($r>0){

   if($res)
   {
    echo"<h2 align=left class='h1'>  SEM:4-1</h2>";


    echo"<table class='t2' border=4 align=left width=40% height=30%   bordercolor=black>";
    echo"<tr bgcolor=skyblue >";
    echo"<th>Subname</th>";
    echo"<th>Grade</th>";
    echo"<th>Credits</th>";
    echo"</tr>";
   
 
    while($fetch=mysqli_fetch_array($res))

{
   
    echo"<tr bgcolor=lightpink align=center>";
    echo"<td>".$fetch['subname']."</td>";
    echo"<td>".$fetch['Grade']."</td>";
    echo"<td>".$fetch['credits']."</td>";
    echo"</tr>";

   

}



echo"</table>";

   }
   
}
$select ="SELECT * FROM `4-2` WHERE htno = '$htno'" or die('query failed');
  $res=mysqli_query($con,$select);
  $r = mysqli_num_rows($res);


if($r>0){

   if($res)
   {
    echo"<h2 class='h2' align=right>  SEM:4-2";
    echo"<table class='t1' border=4 align=right width=40% height=30%   bordercolor=black>";
    echo"<tr bgcolor=skyblue >";
    echo"<th>Subname</th>";
    echo"<th>Grade</th>";
    echo"<th>Credits</th>";
    echo"</tr>";
   
 
    while($fetch=mysqli_fetch_array($res))

{
   
    echo"<tr bgcolor=lightpink align=center>";
    echo"<td>".$fetch['subname']."</td>";
    echo"<td>".$fetch['Grade']."</td>";
    echo"<td>".$fetch['credits']."</td>";
    echo"</tr>";
   

}



echo"</table>";

   }

   
}





//overclosing
}


}
?>
</article>
</section>

<footer>
 
</footer>
</form>
</body>
</html>

