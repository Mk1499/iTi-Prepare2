<section class="reviews app" id="grammer"> 
    <div class="container wow fadeInDown">
        <div class="text-center">
            <h1> Reviews   </h1>
            <p>=========================</p>
        </div>
        <h4 class="text-center">See What others Said about<span class="blue"> iTi Preparation </span> </h4> 
        <hr>
        <?php 
            include('php/connect.php') ; 
            $sql22="SELECT Review , Name FROM Reviews";
            $result22 = $conn2->query($sql22);
            while($ans1 = $result22->fetch_assoc()){
                echo "<div class='answer name blue h3'>" . $ans1['Name'] . "</a></div><br>" ;
                echo "<div class='answer'>" . $ans1['Review'] . "</a></div><br>" ;

            }




            
            ?>




<form class="form-group" action="" method = "POST" style="margin-top:20%">

   <input class="form-control col-md-5" type="text" placeholder="َ Add Your Name "name ="name" />
   <input class="form-control col-md-5" type="text" placeholder="َ Add Your Review "name ="review" />
   <button class="btn btn-action col-md-3 " type="submit" name = "submit" > Add Review </button>


</form>

<?php 
if (isset($_POST['submit']) and !empty($_POST['review']) and !empty($_POST['name'])){

    $review = $_POST['review'] ;
    $name = $_POST['name'] ;
     
    $sql23 = " INSERT INTO Reviews ( Review , Name) VALUE ('$review','$name')" ; 
    $conn2->query($sql23) ;
    //echo "<script> alert('Adding Question Success ') </script>" ; 
}

?>


</section>