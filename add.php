<?php include('php/connect.php');

?> 
<form class="form-group" action="" method = "POST" style="margin-top:20%">
<?php 
include('Questions.php') ;
?>

<input class="form-control col-md-5" type="text" placeholder="َ Add New Question "name ="Question" />
<button class="btn btn-action col-md-3 " type="submit" name = "submit" > Add Question </button>


</form>

<?php 
if (isset($_POST['submit']) and !empty($_POST['Question'])){

    $Q = $_POST['Question'] ; 
    $sql = " INSERT INTO questions (Question) VALUE ('$Q')" ; 
    $conn->query($sql) ;
    //echo "<script> alert('Adding Question Success ') </script>" ; 
}

?>