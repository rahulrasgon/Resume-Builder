<?php
if($_SESSION['user_type'] == 'customer'){
?>
<div id="ddblueblockmenu">
	  <div class="menutitle">Customer Menu</div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome,&nbsp;<? echo ucwords($_SESSION['user_name']); ?></a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=customer&view=perdetails">PersonalDetails</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=customer&view=custdetails">EducationalDetails</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=customer&view=experi">ExperienceDetails</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=customer&view=parti">ParticipationDetails</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=customer&view=achiev">Other_Achievement</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=customer&view=proj">Project</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>viewResume.php">View Resume</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>logout.php">Logout</a></li>
			
		  </ul>
	  <div class="menutitle">&nbsp;</div>	  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php 
}else if($_SESSION['user_type'] == 'admin'){
?>
<div id="ddblueblockmenu">
	  <div class="menutitle">Admin Menu</div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome,&nbsp;<? echo ucwords($_SESSION['user_name']); ?></a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=compDetails">Assign Complains</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=vDetails">View Resume</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=compCloseDetails">Search Resume</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=enggDetails">Engineer Details</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=custDetails">Customer Details</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=reports">Reports</a></li>
			<li><a href="<?php echo $self; ?>?logOut">Logout</a></li>
		  </ul>
	  <div class="menutitle">&nbsp;</div>	  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php 
}
?>