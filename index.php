<?php
// Create database connection using config file
include("config.php");
include("get_tree.php");

// Fetch all users data from database
//$result = mysqli_query($con, "SELECT * FROM calon_interview ORDER BY id");

// menghitung jumlah data
///$total = mysqli_num_rows($result);
?>


 

<html>
<head>    
    <title>Tampilan Parents</title>
</head>

<body>
<table border=1>      	
<tr>
    <th>Name</th>  <th>Children</th> 
 </tr>   
    <?php  
    //tampilkan hasil query

    $tree = get_tree('root');
     while ($row = mysqli_fetch_row($tree)) 
    {
        echo "<tr>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$row[1]."</td>";
        //echo "<br/>";
        echo "</tr>";
    }       
    
    ?>
  </table>  
</body>
</html>
