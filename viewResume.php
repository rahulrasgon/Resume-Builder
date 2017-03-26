<?php

require_once './library/config.php';
require_once './library/functions.php';


	$cid = (int)$_SESSION['user_id'];
	$sql = "SELECT * 
			FROM tbl_personal
			WHERE cid = $cid" ;
	$result = dbQuery($sql);
	while($rowval = mysql_fetch_array($result))
 {
$name= $rowval['pname'];
$fathername= $rowval['pfname'];
$gender= $rowval['pgender'];
$nation= $rowval['pnation'];
$language= $rowval['plang'];
$hobby= $rowval['phobby'];
$doh= $rowval['pdoh'];
}
?>	

<table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
    <tr id="entryTableHeader">
      <td><center>:: Personal Details ::</center></td>
    </tr>
    <tr>
      <td class="contentArea"><div class="errorMessage" align="center"><?php //echo $errorMessage; ?></div>
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center">
              <td colspan="2"><div align="right"></div></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Name</td>
              <td class="content"><input name="Name" type="text" class="box" id="Name" size="30" maxlength="30" value="<?php echo $name; ?>"/></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Father's Name</td>
              <td class="content"><input name="FatherName" type="text" class="box" id="FatherName" size="30" maxlength="30" value="<?php echo $fathername; ?>" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Gender</td>
              <td class="content"><input name="Gender" type="text" class="box" id="Male" value="Male" size="30" maxlength="30" value="<?php echo $gender; ?>" /></td>
            </tr>
			<tr class="entryTable">
              <td class="label">&nbsp;Nationality</td>
              <td class="content"><input name="Nationality" type="text" class="box" id="Nationality" size="30" maxlength="30" value="<?php echo $nation; ?>" /></td>
            </tr>
			<tr class="entryTable">
              <td class="label">&nbsp;Languages Known</td>
              <td class="content"><input name="Languages" class="box" id="Languages" value="<?php echo $language; ?>" /></td>
            </tr>
			<tr class="entryTable">
              <td class="label">&nbsp;Hobbies</td>
              <td class="content"><input name="Hobbies" class="box" id="Hobbies" value="<?php echo $hobby; ?>" /></td>
            </tr>
			<tr class="entryTable">
              <td class="label">&nbsp;Date Of Birth (mm/dd/yy)</td>
              <td class="content"><input name="DateOfBirth" type="text" class="box" id="DateOfBirth"  size="30" maxlength="30" value="<?php echo $doh; ?>" /></td>
            </tr>
            <tr>
              <td width="200">&nbsp;</td>
              <td width="372">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
			  
              
            </tr>
			
          
        </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  <?php




	$cid = (int)$_SESSION['user_id'];
	$sql = "SELECT * 
			FROM tbl_educational
			WHERE cid = $cid" ;
	$result = dbQuery($sql);
	while($rowval = mysql_fetch_array($result))
 {
$college= $rowval['ccollege'];
$degree= $rowval['cdegree'];
$subject= $rowval['csubject'];
$years= $rowval['cyears'];
$university= $rowval['cuniversity'];
$obtainm= $rowval['cobtainedMarks'];
$totalm= $rowval['ctotalMarks'];
}
?>	
  <table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
    <tr id="entryTableHeader">
      <td><center>:: Educational Details ::</center></td>
    </tr>
    <tr>
      <td class="contentArea"><div class="errorMessage" align="center"><?php //echo $errorMessage; ?></div>
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center">
              <td colspan="2"><div align="right"></div></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;College</td>
              <td class="content"><input name="College" type="text" class="box" id="College" size="30" maxlength="20"  value="<?php echo $college; ?>"/></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Degree</td>
              <td class="content"><input name="Degree" type="text" class="box" id="Degree" value="<?php echo $degree; ?>" size="30" maxlength="20"  /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Subject</td>
              <td class="content"><input name="Subject" type="text" class="box" id="Subject" value="<?php echo $subject; ?>" size="30" maxlength="20"  /></td>
            </tr>
			<tr class="entryTable">
              <td class="label">&nbsp;Year</td>
              <td class="content"><input name="Years" type="text" class="box" id="Years" value="<?php echo $years; ?>" size="30" maxlength="20"  /></td>
            </tr>
			<tr class="entryTable">
              <td class="label">&nbsp;University</td>
              <td class="content"><input name="University" type="text" class="box" id="University" value="<?php echo $university; ?>" size="30" maxlength="20"  /></td>
            </tr>
			<tr class="entryTable">
              <td class="label">&nbsp;Obtained Marks</td>
              <td class="content"><input name="ObtainedMarks" type="text" class="box" id="ObtainedMarks" value="<?php echo $obtainm; ?>" size="30" maxlength="20"  /></td>
            </tr>
			<tr class="entryTable">
              <td class="label">&nbsp;Total Marks</td>
              <td class="content"><input name="TotalMarks" type="text" class="box" id="TotalMarks" value="<?php echo $totalm; ?>" size="30" maxlength="20"  /></td>
            </tr>
            <tr>
              <td width="200">&nbsp;</td>
              <td width="372">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
			  
             
            </tr>
			
          
        </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  <?php




	$cid = (int)$_SESSION['user_id'];
	$sql = "SELECT * 
			FROM experi
			WHERE cid = $cid" ;
	$result = dbQuery($sql);
	while($rowval = mysql_fetch_array($result))
 {
$experie= $rowval['experidetails'];

}
?>	
  <table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
    <tr id="entryTableHeader">
      <td><center>:: Experiment Details ::</center></td>
    </tr>
    <tr>
      <td class="contentArea"><div class="errorMessage" align="center"><?php //echo $errorMessage; ?></div>
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center">
              <td colspan="2"><div align="right"></div></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Experience Details</td>
              <td class="content"><input name="ExperienceDetails" class="box" id="ExperienceDetails" value="<?php echo $experie; ?>" /></td>
            </tr>
			
            <tr>
              <td width="200">&nbsp;</td>
              <td width="372">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
			  
              
            </tr>
			
          
        </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  <?php




	$cid = (int)$_SESSION['user_id'];
	$sql = "SELECT * 
			FROM parti
			WHERE cid = $cid" ;
	$result = dbQuery($sql);
	while($rowval = mysql_fetch_array($result))
 {
$partici= $rowval['parti'];

}
?>	
  <table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
    <tr id="entryTableHeader">
      <td><center>:: Participation Details ::</center></td>
    </tr>
    <tr>
      <td class="contentArea"><div class="errorMessage" align="center"><?php //echo $errorMessage; ?></div>
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center">
              <td colspan="2"><div align="right"></div></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Participation Details</td>
              <td class="content"><input name="ParticipationDetails" class="box" id="participationDetails" value="<?php echo $partici; ?>" /></td>
            </tr>
			
            <tr>
              <td width="200">&nbsp;</td>
              <td width="372">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
			  
              
            </tr>
			
          
        </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  <?php




	$cid = (int)$_SESSION['user_id'];
	$sql = "SELECT * 
			FROM achiev
			WHERE cid = $cid" ;
	$result = dbQuery($sql);
	while($rowval = mysql_fetch_array($result))
 {
$achieve= $rowval['achiev'];

}
?>	
  <table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
    <tr id="entryTableHeader">
      <td><center>:: Achievements Details ::</center></td>
    </tr>
    <tr>
      <td class="contentArea"><div class="errorMessage" align="center"><?php //echo $errorMessage; ?></div>
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center">
              <td colspan="2"><div align="right"></div></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Achievement Details</td>
              <td class="content"><input name="ExperienceDetails" class="box" id="ExperienceDetails" value="<?php echo $achieve; ?>" /></td>
            </tr>
			
            <tr>
              <td width="200">&nbsp;</td>
              <td width="372">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
			  
              
            </tr>
			
          
        </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  <?php




	$cid = (int)$_SESSION['user_id'];
	$sql = "SELECT * 
			FROM proj
			WHERE cid = $cid" ;
	$result = dbQuery($sql);
	while($rowval = mysql_fetch_array($result))
 {
$project= $rowval['proj'];

}
?>	
  <table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
    <tr id="entryTableHeader">
      <td><center>:: Project Details ::</center></td>
    </tr>
    <tr>
      <td class="contentArea"><div class="errorMessage" align="center"><?php //echo $errorMessage; ?></div>
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center">
              <td colspan="2"><div align="right"></div></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Project Details</td>
              <td class="content"><input name="Project" class="box" id="Project" value="<?php echo $project; ?>" /></td>
            </tr>
			
            <tr>
              <td width="200">&nbsp;</td>
              <td width="372">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
			  
              
            </tr>
			
          
        </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  <center><button onclick="myFunction()"><b>Print Resume</b></button></center>

<script>
function myFunction() {
    window.print();
}
</script>
  <center><a href="welcome.html">Home</a></center>