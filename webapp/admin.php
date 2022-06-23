<?php 
	if ($_SESSION['user']['valid'] == 'true') {
		if (!isset($action)) { $action = 1; }
		print '
		<div id="admin">
			<ul>				
			</ul>';
			# Admin Users
			if ($action == 1) { include("admin/users.php"); }
			
				
		print '
		</div>';
	}
	else {
		$_SESSION['message'] = '<p>Molim vas da se prijavite ili registrirate!</p>';
		header("Location: index.php?menu=6");
	}
?>