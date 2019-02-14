<?php
session_start();
include 'crime.php';
if(!empty($_SESSION['ver'])){
if(isset($_POST['sblog'])){
	
					$available_extensions=array('jpg','jpeg','png','gif','ico');
					$max_size=912000000;
					$name=$_FILES['ph']['name'];
					$size=$_FILES['ph']['size'];
					$tmp=$_FILES['ph']['tmp_name'];
					$ext=strtolower(pathinfo($name,PATHINFO_EXTENSION));
					if((in_array($ext,$available_extensions)) || ($size<=$max_size)){
						$path='face/';
						//$dblen=strlen($name);
					
						$sna=mktime().$name;
						
							
					}else{
						$a['0']='<body onload="ut()"></body>';
							}
					
					$available_au=array('wav','mp3',);
					$aumax_size=104857600;
					$auname=$_FILES['au']['name'];
					$ausize=$_FILES['au']['size'];
					$autmp=$_FILES['au']['tmp_name'];
					$auext=strtolower(pathinfo($auname,PATHINFO_EXTENSION));
					if((in_array($auext,$available_au)) || ($ausize<=$aumax_size)){
						$pathe='audio/';
						//$dblen=strlen($name);
					
						$ausa=mktime().$auname;
						
							
					}else{
						$a['0']='<body onload="utau()"></body>';
							}
	
	
	
	if(!empty($_POST['uname']) && !empty($ausa) && !empty($sna)){
		move_uploaded_file($tmp,$path.$sna);
		move_uploaded_file($autmp,$pathe.$ausa);
		$fname=$_POST['uname'];
		$dob=$_POST['dob'];
		$stoe=$_POST['sto'];
		$nk=$_POST['nk'];
		$offense=$_POST['offense'];
		$gname=$_POST['gname'];
		$lga=$_POST['lga'];
		$age=$_POST['age'];
		$arrest=date('d-M-Y, h:i a');
		$court=$_POST['court'];
		$conv=$_POST['conv'];
		$ins=$_POST['insp'];
		$cell=$_POST['cell'];
		
		$yr=$_POST['yr'];
		$sql=mysql_query("INSERT INTO criminals(name,photo,dob,sto,nk,offense,lga,age,pyrs,sta,dconviction,darrest,icg,court,cell,yrs) 
		VALUES('$fname','$sna','$dob','$stoe','$nk',
		'$offense','$lga','$age',' ','locked','$conv','$arrest','$ins','$court','$cell','$yr')");
		$id=mysql_insert_id($link);
		
		$rt=mysql_query("INSERT INTO voice(mid,img,voice) VALUES('$id','$sna','$ausa')");
		echo "<body onload='sea()'></body>";
		
		}else{
			echo "<body onload='sear()'></body>";
			}
	
	
	}
	
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
	    <div id="content" style="margin-left:120px;">
	      <div id="content-padding" style="margin-left:100px;">
            <h1>Enter Criminal Data</h1>
            
            <form enctype="multipart/form-data" action="register.php" method="post">
            	<div class="all"><label>Fullname</label><input style="margin-top:-20px;" type="text" name="uname" required></div>
                <div class="all"><label>Audio</label><input style="margin-top:-20px;" type="file" name="au" required></div>
                <div class="all"><label>Photo</label><input style="margin-top:-20px;" type="file" name="ph" required></div>
                <div class="all"><label>Date of Birth</label><input style="margin-top:-20px;" type="date" name="dob" required></div>
                <div class="all"><label>State of Origin</label><input style="margin-top:-20px;" type="text" name="sto" required></div>
                <div class="all"><label>Next of Kin</label><input style="margin-top:-20px;" type="text" name="nk" required></div>
                <div class="all"><label>Offense</label><select style="margin-top:-20px;" name="offense" required>
                <option value="MURDER">MURDER</option>
                <option value="SUICIDE">SUICIDE</option>
                <option value="BRIBERY">BRIBERY</option>
                <option value="RAPIST">RAPIST</option>
                <option value="ROBBERY">ROBBERY</option>
                </select>
                </div>
                
                <div class="all"><label>High Court</label><select style="margin-top:-20px;" name="court" required>
                <option value="High Court1">High Court1</option>
                <option value="High Court2">High Court2</option>
                <option value="High Court3">High Court3</option>
                <option value="High Court4">High Court4</option>
                <option value="High Court5">High Court5</option>
                </select>
                </div>
                
                
                <div class="all"><label>Guardian Name</label><input style="margin-top:-20px;" type="text" name="gname" required></div>
                <div class="all"><label>L.G.A</label><input style="margin-top:-20px;" type="text" name="lga" required></div>
                <div class="all"><label>Age</label><input style="margin-top:-20px;" type="number" name="age" required></div>
                 <div class="all"><label>Years of Conviction</label><input style="margin-top:-20px;" type="number" name="yr" required></div>
                 <div class="all"><label>Conviction Date</label><input style="margin-top:-20px;" type="date" name="conv" required></div>
                  
                 <div class="all"><label>Inspector</label><input style="margin-top:-20px;" type="text" name="insp" required></div>
                 <div class="all"><label>Cell No.</label><input style="margin-top:-20px;" type="number" name="cell" required></div>
                <div class="all"><input type="submit" name="sblog" value="Add"></div>
            </form>
           
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