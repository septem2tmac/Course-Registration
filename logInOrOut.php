<div class="pull-right" id = "students">
<?php
session_start();
if (!isset($_SESSION['name']) || $_SESSION['name'] == '') {
	echo "<a data-toggle='modal' data-target='#modalLogin'  href='#' class='btn btn-primary post-ad-btn'>Login</a> | 
		  <a href='register.php'>Signup</a>";
} else {
	echo "<strong>" .$_SESSION["name"]. "</strong> |";
	if($_SESSION["Admin"] == 1) {
		echo "<a href='administrator.php' class='btn btn-warning post-ad-btn'>Operate</a> |";
	} else {
		echo "<a href='cart.php' class='btn btn-primary post-ad-btn'>Cart</a> |";
	}
	echo "<a href=# onclick ='logout()'>Log out</a>";
}
?>
</div>	