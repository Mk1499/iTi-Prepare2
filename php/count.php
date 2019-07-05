<?php 
include('connect.php') ; 
$viewCounts = "SELECT counter FROM count"; 
$result = $conn2->query($viewCounts) ; 
$count = mysqli_fetch_array($result) ; 
echo $count[0] ;  
?>