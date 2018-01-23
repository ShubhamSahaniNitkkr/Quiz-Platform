<html>
    <head>
      <?php
          $json = file_get_contents('../web-data/cat.json');
          $data = json_decode($json,true);
          $title=$data['title'];
          $pics=$data['aptitude'];
          $heading=$data['heading'];
          $bold_heading=$data['bold_heading'];
          $sub_heading1=$data['sub_heading1'];
          $sub_heading2=$data['sub_heading2'];
          $content_heading=$data['content_heading'];
          $phone_pic=$data['mobile_pic'];
          $examss=$data['exams'];


      ?>

        <!-- mobile meta -->
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <title><?=$title?> | Quiz</title>
        <!--lib css-->
        <link href='../bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <!--custom css-->
        <link href='../css/main.css' rel='stylesheet' type='text/css'>
        <!-- Daily Prep Icon -->
        <link rel="icon" type="image/x-icon" href="../images/logo.png">


        <style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>


    </head>
    <body>
      <div class="container-fluid">

        <!--coursal start-->
        <div class="row width" style="background:linear-gradient(-180deg, #3E50B4 0%, #A42F73 100%);height:600px;">
      <!--Navabr-->
      <?php include('navbar.php'); ?>
  

<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<ul class="nav navbar-nav pull-right">
  <?php
  foreach($examss as $exam){
  ?>
  <li><a href="<?=$exam['url'];?>" class="active"><?=$exam['course_name'];?></a></li>
<?php } ?>


</ul>
</div>




  <div class="row">
    <!--number section start-->
    <div class="col-md-6">
      <div class="number_section col-md-offset-6 row-md-offset-6 ">
        <a href="../index.php"><img src="../images/logo.png" alt="Quiz" class="fade-scroll img-responsive visible-xs visible-sm"></a>
        <p class="heading"><?=$heading?> <b><?=$bold_heading?></b></p>
        <p class="sub_heading"><?=$sub_heading1?></p>
        <p class="sub_heading"><?=$sub_heading2?></p>
        <a href="https://play.google.com/store/apps/details?id=com.Quiz.app.aptitude&hl=en">
        <img src="../images/googlePlay.png" alt="Download on Play store" width="178px" height="53px">
        </a>
      </div>

    </div>
    <!--number section end-->

    <!--phone layout  section-->
    <div class="col-md-6">
      <div class="phone">
        <img src="../images/phone-face.png" alt="" style="position:relative" class="hidden-xs ipad_view">
      </div>
      <img src="<?=$phone_pic?>" class="mobilecontents hidden-xs" >
      <img src="<?=$phone_pic?>" class="mobilecontent visible-xs" style="width:253px;height:379px;position: absolute;
      left:248px;
      top: 118px;"  >

    </div>
    <!--phone layout  section end-->

  </div>

</div>
        <!--coursal End-->

        <!--content start-->
          <p class="heading text-center"><?=$content_heading?></p>

          <div class="col-md-12 content">

            <?php
            foreach($pics as $aptitude){
            ?>
            <div class="card_body">
              <img src="<?=$aptitude['url'];?>"  alt="">
            <center>  <p class="sub_headings"><?=$aptitude['short_desc'];?></p><center>

            </div>
            <?php } ?>
            <a href="https://play.google.com/store/apps/details?id=com.Quiz.app.aptitude&hl=en">
            <img src="../images/googlePlay.png" alt="Download on Play store" width="178px" height="53px" class="play_icon visible-xs">
            </a>
          </div>
      </div>




<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

    </body>
    <script type="text/javascript" src="../Quiz.js"></script>
    <script type="text/javascript" src="../bootstrap/js/jquery-2.0.2.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</html>
