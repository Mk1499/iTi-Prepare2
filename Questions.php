
<?php /*include ('php/connect.php') ; 
include ('head.php'); */
$sql="SELECT ID , Question FROM Questions ";
$result= $conn->query($sql) ;


while($row = $result->fetch_assoc()) {
    

echo "<div class='question'><a href='details.php?id=".$row['ID']."'>" . $row['Question'] . "</a></div><br>" ; 

}

?>
<ul>
    
</ul>