<html>
    <head>
      <?php
          $json = file_get_contents('classroom.json');
          $data = json_decode($json,true);
          $title=$data['title'];
          $heading=$data['heading'];
          $button_heading=$data['button_heading'];
          $card_data=$data['card_content'];


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
        <!-- <link href='../css/main.css' rel='stylesheet' type='text/css'> -->
        <link href='classroom.css' rel='stylesheet' type='text/css'>

        <!-- Daily Prep Icon -->
        <link rel="icon" type="image/x-icon" href="../images/logo.png">




    </head>
    <body>
      <div class="container-fluid">

        <!--coursal start-->
        <div class="row width" style="background:rgba(0, 0, 0, 0.87);height:300px;">
      <!--Navabr-->
      <div class="row">
    <nav class="navbar navbar-fixed nvabar-inverse">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNabar" onclick="openNav();">
          <span class="icon-bar" style="color:white;position:absolute;"></span>
          <span class="icon-bar" style="color:white"></span>
          <span class="icon-bar" style="color:white"></span>
        </button>
        <a class="navbar-brand hidden-xs" href="../index.php"><img src="../images/logo.png" alt="Quiz" style="border-right:5px solid white;padding-right:15px; width:196px; height:70px;"><p style="color:white;
    position: relative;
    left: 214px;
    top: -45px;
    font-size: 31px;
    font-weight: 100;">for classroom</p>   </a>

    <a class="navbar-brand visible-xs  " href="../index.php"><img src="../images/logo.png" class="mobile-brandview-img" alt="Quiz" style="border-right:5px solid white;padding-right:15px; width:125px; height:64px;"><p style="color:white;
position: relative;
left:128px;
top: -42px;
font-size: 26px;
font-weight: 100;" class="mobile-brandview-data">for classroom</p>   </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav pull-right">
          <li class="user"><a href="../index.php"><img src="../images/video.png" class="img-circle" style="width:50px; height:54px; margin-right:12px;" alt="">Ishan Jalan</a></li>


        </ul>
      </div>
  </nav>
</div>


  <div class="row">
    <!--number section start-->
    <div class="col-md-6">
      <div class="number_section col-md-offset-6 row-md-offset-6 " style="float:left;">


        <p class="heading hidden-xs"><?=$heading?></p>
        <p class="btn btn-default create_classroom_button hidden-xs hidden-sm"><?=$button_heading?></p>
        </a>
      </div>

    </div>
    <!--number section end-->



  </div>

</div>
        <!--coursal End-->

        <!--content start-->

          <div class="col-md-12 content">
            <p class="user visible-xs "><a href="../index.php"><img src="../images/video.png" class="img-circle" style="width:50px; height:54px; margin-right:12px;" alt="">Ishan Jalan</a></p>
            <p class="heading visible-xs "><?=$heading?></p>
            <p class="btn btn-default classroom_button visible-xs visible-sm"><?=$button_heading?></p>

            <?php
            foreach($card_data as $content){
              // $user_pics=$content['pics'];
            ?>
            <div class="card_body">
              <?=$content['class_name']?><span class="glyphicon glyphicon-cog"></span>
              <p class="sub_heading1">  <?=$content['course_name']?></p>
              <br>

              <div class="img_section">
                <?php
                $pic=$content['pics'];
                  foreach($pic as $pics){
                ?>

                <img src="<?=$pics['url']?>" class="img-circle" alt="">
                <?php } ?>
              </div>

              <button type="button" class="card_footer btn btn-default" name="button"><?=$content['students']?></button>

            </div>

            <?php } ?>
            <div class="card_body add_classroom" data-toggle="modal" data-target="#myModal">
          <center style="font-weight:100;color:black;padding-left:12px;"  >  Create Classroom <br>
              <button type="button" name="button" class="add_button">+</button>
          </center>
            </div>
          </div>
      </div>
      <!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog ">
     <div class="modal-content">
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>

       <div class="modal-body">
         <form class="form-horizontal" action="/action_page.php">
       <div class="form-group">
         <label class="control-label col-sm-2" for="email">Email:</label><br>
         <div class="col-sm-12">
           <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
         </div>
       </div>
       <div class="form-group">
         <label class="control-label col-sm-2" for="pwd">Password:</label>
         <div class="col-sm-10">
           <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
         </div>
       </div>
       <div class="form-group">
         <div class="col-sm-offset-2 col-sm-10">
           <div class="checkbox">
             <label><input type="checkbox" name="remember"> Remember me</label>
           </div>
         </div>
       </div>
       <div class="form-group">
         <div class="col-sm-offset-2 col-sm-10">
           <button type="submit" class="btn btn-default">Submit</button>
         </div>
       </div>
     </form>
       </div>

     </div>
   </div>
 </div>
</div>


    </body>
    <script type="text/javascript" src="../Quiz.js"></script>
    <script type="text/javascript" src="../bootstrap/js/jquery-2.0.2.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</html>
