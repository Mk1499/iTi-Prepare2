<?php
//session_start() ;
/*$dbname = 'iti';
$host ='127.0.0.1'  ;
$dbuser= 'root';
$dbpass = ''; 
$dbname = 'mailock';
$host ='db4free.net'  ;
$dbuser= 'mkhaled';
$dbpass = '22823910mk14'; */
$dbname = 'id2937530_iti';
$host ='localhost'  ;
$dbuser= 'id2937530_mohamedkhaled1994';
$dbpass = '22823910mK14';
$conn = new mysqli($host , $dbuser , $dbpass , $dbname ) ; 
$sql1 = " CREATE TABLE if not exists Questions (
  
ID int NOT NULL AUTO_INCREMENT ,  
Question varchar(255) NOT NULL , 
PRIMARY KEY (ID)
    
)" ;

    $conn->query($sql1) ;
    $conn->query("SET Questions utf8"); 
    
 
    $sql2 = " CREATE TABLE if not exists IqAnswers (
  
         
        Question varchar(255) NOT NULL ,
        Name varchar(255) NOT NULL , 
        Answer varchar(255) NOT NULL 
            
        )" ;
        
            $conn->query($sql2) ;
            $conn->query("SET IqAnswers utf8"); 
         
    
?>