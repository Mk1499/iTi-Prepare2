<?php include('head.html') ; ?>
<div class="main app form" id="main"><!-- Main Section-->
    <div class="hero-section soft">
        <div class="shadow">
      <div class="container nopadding">
        <div class="col-md-12">
          <div class="hero-content text-center">
            <h1 class="wow fadeInUp" data-wow-delay="0.1s">Welcome To Soft Skills Questions</h1>
            <p class="wow fadeInUp" data-wow-delay="0.2s"> Don't be Shy .... That's Your Chance  </p>
            <a href="#questions" class="page-scroll btn btn-action wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Get Strated</a> </div>
        </div>
      </div>
    </div>
</div>

<section class="soft questions" id="questions" >
<div > 
    <div class="container wow fadeInDown">
        <div class="text-center">
            <h1> Common Soft Skills Questions </h1>
            <p>=========================</p>
</div>
        <h4 class="text-center">Here most Questions asked to Previous Applicants 
        <span class="blue"> Click On Question To Show & Add Answers </span>
        </h4> 
       
<div class="quest">
        <?php 
              include('add.php') ; 
        ?>
        </div>
        </div>
</div>




</section>


<?php include ('footer.html') ; ?>