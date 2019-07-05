<?php

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

$dbname2 = 'sql7297699';
$host2 ='sql7.freemysqlhosting.net'  ;
$dbuser2= 'sql7297699';
$dbpass2 = 'Z17lAdnSH7';
/*
$dbname2 = 'mailock';
$host2 ='localhost'  ;
$dbuser2= 'root';
$dbpass2 = '';
*/
$conn = new mysqli($host , $dbuser , $dbpass , $dbname ) ; 
$conn2 = new mysqli($host2 , $dbuser2 , $dbpass2 , $dbname2 ) ; 
  
$sql1 = " CREATE TABLE if not exists Questions (
  
ID int NOT NULL AUTO_INCREMENT ,  
Question varchar(255) NOT NULL , 
PRIMARY KEY (ID)
    
)" ;

    $conn->query($sql1) ;

    $sql2 = " CREATE TABLE if not exists IqAnswers (
  
         
        Question varchar(255) NOT NULL ,
        Name varchar(255) NOT NULL , 
        Answer varchar(255) NOT NULL 
            
        )" ;
        
            $conn->query($sql2) ;


            $sql21 = " CREATE TABLE if not exists Reviews (
                Name varchar(255) NOT NULL , 
                Review varchar(255) NOT NULL 
                    
                )" ;
                
            $conn->query($sql21) ;


    
?>