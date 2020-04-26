<?php 
include('php/connect.php') ; 
include ('head.html') ; 
include ('welcome.html') ; 
include ('about.html'); 
include ('reviews.php') ; 
include ('footer.html') ;
$q = 'UPDATE count SET counter=counter+1' ; 
$conn2->query($q);
?>

