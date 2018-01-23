<div class="row">
<nav class="navbar navbar-fixed nvabar-inverse">
<div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNabar" onclick="openNav();">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand hidden-xs hidden-sm" href="../index.php"><img src="../images/logo.png" alt="Quiz">  </a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
  <ul class="nav navbar-nav pull-right">
    <?php
    foreach($examss as $exam){
    ?>
    <li><a href="<?=$exam['url'];?>" ><?=$exam['course_name'];?></a></li>
<?php } ?>

  </ul>
</div>
</nav>


</div>
