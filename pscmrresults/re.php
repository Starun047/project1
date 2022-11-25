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
<a href='sava tarun.php'><button>Back</button></a>
<h2>R20 mid-1 mid-2</h2>

<table>
  <tr>
    <th>roll no</th>
    <th>subject</th>
    <th>dept</th>
    <th>year</th>
    <th>mid1 q1</th>
    <th>mid1 q2</th>
    <th>mid1 q3</th>
    <th>mid 1 quiz</th>
    <th>mid 1 assign</th>
    <th>total</th>
    <th>mid2 q1</th>
    <th>mid2 q2</th>
    <th>mid2 q3</th>
    <th>mid 2 quiz</th>
    <th>mid 2 assign</th>
    <th>total</th>
    <th>over all total </th>
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

    <td><?php echo $row['mq1']; ?></td>
    <td><?php echo $row['mq2']; ?></td>
    <td><?php echo $row['mq3']; ?></td>
    <td><?php echo $row['mquiz1']; ?></td>
    <td><?php echo $row['m1assign']; ?></td>
    <td><?php echo $row['m1total']; ?></td>
    <td><?php echo $row['m2q1']; ?></td>
    <td><?php echo $row['m2q2']; ?></td>
    <td><?php echo $row['m2q3']; ?></td>
    <td><?php echo $row['m2quiz']; ?></td>
    <td><?php echo $row['m2assign']; ?></td>
    <td><?php echo $row['m2total']; ?></td>
    <td><?php echo $row['overalltotal']; ?></td>
  </tr>
 <?php   }
    }
    ?>

</table>





</body>
</html>

