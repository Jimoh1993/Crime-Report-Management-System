<?php
session_start();
include 'crime.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
  <style>
  @import "forms.css";
  </style>
  
	<title>Home</title>
	<link rel="stylesheet" media="screen" type="text/css" href="style.css" />
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
  </head>

  <body>
    <div id="container">
      <div id="body_space">
        <div id="header">
		  <div id="logo-block">
		    <!-- type your logo and small slogan here -->
            <p id="logo">Crime<span class="logoblue">report</span></p>
		    <p id="slogan">Alert us Morning</p>
			<!-- end logo and small slogan -->
		  </div>
		  <div id="definels">
		    <!-- login -->
		    <div id="login_top">
			 
			</div>
			<!-- end login -->
			<!-- search -->
			<div id="search"></div>
		    <!-- end search -->
		  </div>
		  <div class="cls"></div>
  		  <div id="top-nav-bg">
            <div id="top-nav">
			  <!-- start top navigation bar -->
              <ul>
                <li><a href="index.php">Home</a></li>
               
                
              </ul>
			  <!-- end top navigation bar -->
            </div>
	      </div>
	    </div>
	    <div id="clouds">
		  <!-- large slogan here -->
   	      <div id="clouds-slogan1">
   	        <p>Be Alert ,Be Alive!</p></div>
	      <div id="clouds-slogan2">
	        <p>Criminal Report System</p></div>
		  <!-- end large slogan -->
	    </div>
	  </div>
	</div>
	<div id="page">
	  <div id="page-padding">
        <!-- start content -->	    
	    <div id="content">
	      <div id="content-padding">
            <h1>Introduction</h1>
            <script>
			function cd(){
				alert("Pin Incorrect");
				window.location='index.php';
				}
			</script>
            <form action="index.php" method="post">
            	<div class="all"><label>Username</label><input style="margin-top:-20px;" type="text" name="uname"></div>
                <div class="all"><label>Password</label><input style="margin-top:-20px;" type="password" name="upass"></div>
                <div class="all"><input type="submit" name="sblog" value="Login"></div>
            </form>
           <?php if(isset($_POST['sblog'])){
           $um=trim($_POST['uname']);
           $up=trim($_POST['upass']);
		   $s=mysql_query("SELECT * FROM admin WHERE name='$um' and password='$up'");
		   
		   if(mysql_num_rows($s)==1){
				$_SESSION['ver']='verified';
				header('location:criminals.php');
			}else{
				echo "<body onload='cd()'></body>";
				}
		   } ?>
		  </div>
		</div>
		<!-- end content -->
	    <div id="right-nav">
		  <!-- right side menu, copy and paste what is contained between these start and end comment tags to make an extra menu -->
          <div class="right-nav-back">
		    
	        <ul>
			  
			</ul>
			<br /><br /><br />
		    <div class="right-nav-bottom"></div>
		  </div>
		  <!-- end right side menu -->
		  <!-- start second menu for the newletter --><!-- end second right side menu, newletter -->
		  <br /><br /><br /><br /><br /><br />
	    </div>
	  </div>
	  <div id="footer">
	    <div id="footer-pad">
	      
		  <!-- footer and copyright notice -->
	      <p>&nbsp;</p>
		  <!-- end footer and copyright notice -->
	    </div>
	  </div>
	</div>
  </body>
</html>