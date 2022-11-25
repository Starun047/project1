<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>R20 mid-2</h2>
<form method='post' action='2.php'>
<select name="dept" id="dept">
  <option value="CSE">CSE</option>
  <option value="CSM">CSM</option>
  <option value="CIC">CIC</option>
  <option value="EEE">EEE</option>
</select>

<table>
  <tr>
    <th>roll no</th>
    <th>subject</th>
    <th>dept</th>
    <th>year</th>
 
    <th>mid2 q1</th>
    <th>mid2 q2</th>
    <th>mid2 q3</th>
    <th>mid 2 quiz</th>
    <th>mid 2 assign</th>
  </tr>
  <tr>
    <?php 
    include "dbconn.php";
    $sql="select * from testing ";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
      while($row=mysqli_fetch_array($res)){
       
    ?>
     <td><?php echo $row['roll']; ?></td>
     <td><?php echo $row['sub']; ?></td>
     <td><?php echo $dept=$row['dept']; ?></td>
     <td><?php echo $row['year']; ?></td>

    
    <td><input type='number'  style='width:30%;' name='a6' min="0" max="5"></td>
    <td><input type='number'  style='width:30%;' name='a7' min="0" max="5"></td>
    <td><input type='number'  style='width:30%;' name='a8' min="0" max="5"></td>
    <td><input type='number'  style='width:30%;' name='a9' min="0" max="20"></td>
    <td><input type='number'  style='width:30%;' name='a10' min="0" max="5"></td>

  </tr>
 <?php   }
    }
    ?>
    <input type='submit' value='submit' name='submit'></form>
</table>





</body>
</html>

