
<h3><center>Create Resume</center></h3>
<form action="process.php?action=addCust" method="post"  name="frmListUser" id="frmListUser">
  <table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
    <tr id="entryTableHeader">
      <td><center>:: Add educational Details ::</center></td>
    </tr>
    <tr>
      <td class="contentArea"><div class="errorMessage" align="center"><?php //echo $errorMessage; ?></div>
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center">
              <td colspan="2"><div align="right"></div></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;College</td>
              <td class="content"><input name="College" type="text" class="box" id="College" size="30" maxlength="20"  value="<?php echo $ccollege; ?>"/></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Degree</td>
              <td class="content"><input name="Degree" type="text" class="box" id="Degree" value="<?php echo $cdegree; ?>" size="30" maxlength="20"  /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Subject</td>
              <td class="content"><input name="Subject" type="text" class="box" id="Subject" value="<?php echo $csubject; ?>" size="30" maxlength="20"  /></td>
            </tr>
			<tr class="entryTable">
              <td class="label">&nbsp;Year</td>
              <td class="content"><input name="Years" type="text" class="box" id="Years" value="<?php echo $cyears; ?>" size="30" maxlength="20"  /></td>
            </tr>
			<tr class="entryTable">
              <td class="label">&nbsp;University</td>
              <td class="content"><input name="University" type="text" class="box" id="University" value="<?php echo $cuniversity; ?>" size="30" maxlength="20"  /></td>
            </tr>
			<tr class="entryTable">
              <td class="label">&nbsp;Obtained Marks</td>
              <td class="content"><input name="ObtainedMarks" type="text" class="box" id="ObtainedMarks" value="<?php echo $cobtainedMarks; ?>" size="30" maxlength="20"  /></td>
            </tr>
			<tr class="entryTable">
              <td class="label">&nbsp;Total Marks</td>
              <td class="content"><input name="TotalMarks" type="text" class="box" id="TotalMarks" value="<?php echo $ctotalMarks; ?>" size="30" maxlength="20"  /></td>
            </tr>
            <tr>
              <td width="200">&nbsp;</td>
              <td width="372">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
			  
              <td><input name="btnLogin" type="submit" id="btnLogin"  value=" ADD "></td>
            </tr>
			
          
        </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
