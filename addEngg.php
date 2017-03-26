
<h3><center>Create Resume</center></h3>
<form action="process.php?action=addPer" method="post"  name="frmListUser" id="frmListUser">
  <table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
    <tr id="entryTableHeader">
      <td><center>:: Add Personal Details ::</center></td>
    </tr>
    <tr>
      <td class="contentArea"><div class="errorMessage" align="center"><?php //echo $errorMessage; ?></div>
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center">
              <td colspan="2"><div align="right"></div></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Name</td>
              <td class="content"><input name="Name" type="text" class="box" id="Name" size="30" maxlength="30"/></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Father's Name</td>
              <td class="content"><input name="FatherName" type="text" class="box" id="FatherName" size="30" maxlength="30"  /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Gender</td>
              <td class="content">Male<input name="Gender" type="radio" class="box" id="Male" value="Male" size="30" maxlength="30"  />Female<input name="Gender" type="radio" class="box" id="Female" value="Female" size="30" maxlength="30"  /></td>
            </tr>
			<tr class="entryTable">
              <td class="label">&nbsp;Nationality</td>
              <td class="content"><input name="Nationality" type="text" class="box" id="Nationality" size="30" maxlength="30"  /></td>
            </tr>
			<tr class="entryTable">
              <td class="label">&nbsp;Languages Known</td>
              <td class="content"><textarea name="Languages" class="box" id="Languages"  /></textarea></td>
            </tr>
			<tr class="entryTable">
              <td class="label">&nbsp;Hobbies</td>
              <td class="content"><textarea name="Hobbies" class="box" id="Hobbies" /></textarea></td>
            </tr>
			<tr class="entryTable">
              <td class="label">&nbsp;Date Of Birth (mm/dd/yy)</td>
              <td class="content"><input name="DateOfBirth" type="text" class="box" id="DateOfBirth"  size="30" maxlength="30"  /></td>
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
