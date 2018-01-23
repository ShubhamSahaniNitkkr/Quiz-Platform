<html>
    <head>
      <?php
          $json = file_get_contents('web-data/home_page.json');
          $data = json_decode($json,true);
          $title=$data['title'];
          $pics=$data['aptitude'];
          $heading=$data['heading'];
          $sub_heading1=$data['sub_heading1'];
          $content_heading=$data['content_heading'];
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
        <link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <!--custom css-->
        <link href='css/main.css' rel='stylesheet' type='text/css'>
        <!-- Daily Prep Icon -->
        <link rel="icon" type="image/x-icon" href="images/logo.png">
        <!--Roboto Font-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,500i,700" rel="stylesheet">


        <style>
body {
    font-family: "Lato", sans-serif;
    background-image: linear-gradient(-180deg, #3E50B4 0%, #A42F73 100%);

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
        <div class="row width widths fade-scroll" id="background">
          <img src="images/home_page.jpeg" class="background-overlay background-overlays hidden-xs">
      <!--Navabr-->
      <div class="row">
      <nav class="navbar navbar-fixed nvabar-inverse">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" onclick="openNav();">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand  hidden-xs hidden-sm fade-scroll" href="../index.php"><img src="images/logo.png" alt="Quiz" class="fade-scroll img-responsive">  </a>
      </div>
      <div class="collapse navbar-collapse" id="myavbar">
        <ul class="nav navbar-nav pull-right">

          <?php
          foreach($examss as $exam){
          ?>
          <li><a href="exams/<?=$exam['url'];?>" class="active"><?=$exam['course_name'];?></a></li>
      <?php } ?>
        </ul>
      </div>
      </nav>
      </div>



<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<ul class="nav navbar-nav pull-right">
  <?php
  foreach($examss as $exam){
  ?>
  <li><a href="exams/<?=$exam['url'];?>" class="active"><?=$exam['course_name'];?></a></li>
<?php } ?>
</ul>
</div>




  <div class="row">
    <!--number section start-->
    <div class="col-md-6">
      <div class="number_section col-md-offset-6 row-md-offset-6 ">
        <img src="../images/logo.png" alt="Quiz" class="fade-scroll img-responsive visible-xs visible-sm">
        <div class="space">

        </div>
        <p class="headings" style=""><?=$heading?></p>
        <p class="sub_headingss" style=""><?=$sub_heading1?></p>

        <form class="" action="index.html" method="post">

        </form>

      </div>

    </div>
    <!--number section end-->
<div class="home_mobile_view ">

    <div class="col-md-12 contents hidden-sm ">

      <?php
      foreach($examss as $exam){
      ?>
<a href="exams/<?=$exam['url'];?>" style="color:rgb(78, 69, 155);text-decoration:none;">
      <div class="btns">
      <center style="color:purple;">
        <?=$exam['course_name'];?>
      <center>

      </div></a>
      <?php } ?>

    </div>

    <div class="col-md-12 conten visible-sm ">

      <?php
      foreach($examss as $exam){
      ?>
      <div class="btns">
      <center>
        <a href="exams/<?=$exam['url'];?>" style="color:rgb(78, 69, 155);text-decoration:none;"><?=$exam['course_name'];?></a>
      <center>

      </div>
      <?php } ?>

    </div>
  </div>

  </div>



</div>


</div>

<center>

  <a href="https://play.google.com/store/apps/details?id=com.Quiz.app.aptitude&hl=en">
  <img src="../images/googlePlay.png" alt="Download on Play store" width="230px" height="67px" class="visible-xs play_icon_home_page" style="margin:0px auto;"/>
  </a>
</center>



<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

    </body>
    <script type="text/javascript" src="Quiz.js"></script>
    <script type="text/javascript" src="bootstrap/js/jquery-2.0.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</html>
