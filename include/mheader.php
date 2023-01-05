<!-- HEADER -->
<header>
     

  <nav class="navbar navbar-expand-md jibran-top-nav fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand p-4" href="index.php"><img src="img/logo/jibran.png" alt="logo" class="img-responsive logo"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav" id="navidact">
          <!-- <li class="active"><a href="#">Link </a></li> -->
          <li class="navbar-li-tag <?php if ($page == 'home') { echo 'active';}  ?>"><a class="" href="index.php">Home</a></li>
          <li class="navbar-li-tag <?php if ($page == 'carriculam') { echo 'active';}  ?>"><a class="" href="carriculam.php">Carriculum</a></li>

          <li class="navbar-li-tag <?php if ($page == 'career') { echo 'active';}  ?>"><a class="" href="career.php">Career</a></li>
          <li class="navbar-li-tag <?php if ($page == 'suggetion') { echo 'active';}  ?>"><a class="" href="suggetion.php">Suggetion</a></li>
          <li class="navbar-li-tag <?php if ($page == 'about') { echo 'active';}  ?>"><a class="" href="aboutus.php">About us</a></li>
          <li class="navbar-li-tag <?php if ($page == 'contact') { echo 'active';}  ?>"><a class="" href="contactUs.php">Contact us</a></li>
          

        </ul>
        

        <form class="navbar-form navbar-left">
          <div class="form-group form-searchbox">
            <input type="text" class="form-control" placeholder="Search">
            <a href="#" class="searchbtn"><i class="fa fa-search"></i></a>
          </div>
          
          <!-- <button type="submit" class="btn btn-default">Submit</button> -->
        </form>
        <ul class="nav form-signin-head navbar-nav navbar-right ms-auto">
          <li><a href="user_panel/index.php"><i class="fa fa-sign-in"></i> Login</a></li>
          <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li> -->
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</header>