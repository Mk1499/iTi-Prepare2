<?php
include('php/connect.php') ;  
include('head.html') ;
$id = $_GET['id'];
if ($id == null){
$id = 255 ;
}
$sql1="SELECT  Question FROM Questions WHERE ID=$id ";
$result1= $conn->query($sql1) ;


//$row = $result1->fetch_assoc() ; 
  $row = mysqli_fetch_row($result1) ;  

?>

<div class="main app form" id="main"><!-- Main Section-->
    <div class="details">
        <div class="shadow">
      <div class="container nopadding">
        <div class="col-md-12">
          <div class="hero-content text-center">
            <h1 class="wow fadeInUp" data-wow-delay="0.1s"><?php
            if ($id==255)
            echo 'Sorry but This Question Not Found';
            else
            echo $row[0] ; ?></h1>
            
            
            
            <?php 
            $Quest= $row[0] ; 
            $sql2="SELECT  Answer , Name FROM IqAnswers WHERE Question='$Quest' ";
            $result2 = $conn->query($sql2);
            while($ans = $result2->fetch_assoc()){
                echo "<div class='answer name'>" . $ans['Name'] . "</a></div><br>" ;
                echo "<div class='answer'>" . $ans['Answer'] . "</a></div><br>" ;

            }

            ?>


        </div>
      </div>
    

<?php if ($id !=255){ ?>
<form class="form-group" action="" method = "POST" style="margin-top:20%">

<input class="form-control col-md-5" type="text" placeholder="َ Add Your Name "name ="name" />
<input class="form-control col-md-5" type="text" placeholder="َ Add Answer "name ="newAns" />
<button class="btn btn-action col-md-3 " type="submit" name = "submit" > Add Answer </button>


</form>

<?php 
if (isset($_POST['submit']) and !empty($_POST['newAns']) and !empty($_POST['name'])){

    $newAns = $_POST['newAns'] ;
    $name = $_POST['name'] ;
     
    $sql3 = " INSERT INTO IqAnswers (Question , Answer , Name) VALUE ('$Quest','$newAns','$name')" ; 
    $conn->query($sql3) ;
    //echo "<script> alert('Adding Question Success ') </script>" ; 
}

?>
</div>
</div>
<?php 
}
include ('footer.html') ; 
?>

