<?php
session_start();
include 'crime.php';
$_SESSION['veri'];
if(!empty($_SESSION['ver'])){	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
  <style>
  @import "forms.css";
  </style>
  <script>
<!--

function sea(){
	alert("Success");
	window.location="register.php";
	}

function go(){
	window.location="print.php";
	}
function sear(){	
	alert("Empty Field(s)");
	}
function ut(){
	alert("Unsuppoted Image format/ Limit of 500MB");
	}
function utau(){
	alert("Audio format must be .wav/ limit of 10MB");
	}

function ad(){
	alert("Successfully joined admins");
	}

function wl(){
	var i;
	window.location='print.php';
	alert('You will be redirected soon');
	}
function red(){
	alert("Successfully Joined Admins");
	setTimeout('wl()',100);
	}

	-->
</script>
  
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
                <?php include 't.php';?>
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
	    <div id="content" style=" background:gainsboro; width:auto; margin-left:0px;">
	      <div id="content-padding" style="margin-left:0px;">
            <h1>Criminals</h1>
            <table border='1' cellspacing="0" cellpadding="10" style="color:black; font-style:normal;font-size:24px; font-family:'Browallia New';"> 
            <tr><th>Case No.</th><th>Name</th><th>Offense</th><th>Date Arrested</th>
            <th>Date of Conviction</th><th>Cell No.</th><th>Court</th><th>Years of Conviction</th><th>Inspector</th>
            <th>Age</th><th>Operation</th></tr>
            <?php
            $sql=mysql_query("SELECT * FROM criminals WHERE sta='locked'");
			while($er=mysql_fetch_assoc($sql)){
				$n=ucwords($er['name']);
				$p=$er['photo'];
				$dob=$er['dob'];
				$sto=ucwords($er['sto']);
				$nk=ucwords($er['nk']);
				$off=$er['offense'];
				$lga=ucwords($er['lga']);
				$age=$er['age'];
				$sta=$er['sta'];
				$dconv=$er['dconviction'];
				$darrest=$er['darrest'];
				$insp=ucwords($er['icg']);
				$court=$er['court'];
				$cell=$er['cell'];
				$real=$er['yrs'];
				$id=$er['id'];
				echo "<tr><td>$id</td><td><a href='face/$p'><img src='face/$p' width='25' height='25'></a>&nbsp;$n</td><td>$off</td>
				<td>$darrest</td><td>$dconv</td>
				<td>$cell</td><td>$court</td><td>$real</td>
				<td>$insp</td><td>$age</td><td><a href='ex.php?m=$id'>Release</a></td></tr>";
				}
			
			?>
            </table>
           
           
		  </div>
		</div>
	  <!-- end content --></div>
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
<?php
}else{
	header('location:index.php');
	}
?>