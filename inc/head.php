<?php 

session_start();


/* this page conclude the all  parts common to the head of the web pages */ ?>


<link      rel="stylesheet"      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"    />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link   rel="stylesheet"    href="css/style.css" />
<style>
      @import url(//fonts.googleapis.com/earlyaccess/notosanssinhala.css);
      .navbar {
        margin-bottom: 0;
        border-radius: 0;
        background-color: black;   
      }
      .row{
        margin: 0;
        
      }
</style>

<?php 
/* navigational panel*/ ?>


<div class="row  hidden-xs" style=" padding:10px;">
        <div class="col-sm-6 hidden-xs">
            <div class="logo"><img class="image" src="img/logo.png" width="400" height="80"></div>
            <div class="clearfix"></div>
        </div>
        <div class="col-sm-6 hidden-xs">
            <h2 class="text-right" >Online Application Portal</h2>
        </div>
    </div>
<nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target="#myNavbar"
          >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs" href="#" >Online Web Portal</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="Home.php">Home</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="ContactUs.php">Contact Us</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right" id="myNavbar">
          
          <?php if(!$_SESSION['UserName']) {?>
            <li>
              <a href="NewAccount.php"><span></span> Register</a>
            </li>
            <li>
              <a href="Login.php"><span></span> Login</a>
            </li>
          <?php } else {?>
            <li><a href="UserJobs.php"><?php echo $_SESSION['UserName'];?></a></li>
            <li><a href="logout.php">Logout</a></li>
          <?php }?>
          </ul>
        </div>
      </div>
	</nav>
    </div>