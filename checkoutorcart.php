<?php
	if(!isset($_SESSION['Admin']) || $_SESSION["Admin"] != 1) {
		echo "<br>"	;
		echo "<br>"	;
		echo "<div class='col-sm-6' style='text-align: center; margin: 0 auto'>";
		if(!isset($_SESSION['Admin']) || $_SESSION["Admin"] == 2) {
			echo "<button data-toggle='modal' data-target='#modalLogin' class='btn btn-primary' style='text-align: center;width: 150px;' type='button'>Add to cart</button>";
		} else {
			echo "<button data-toggle='modal' data-target='#modalCart' class='btn btn-primary' style='text-align: center;width: 150px;' type='button' onclick ='courseselection()'>Add to cart</button>";
		}
		echo "</div>";
								
		echo "<div class='col-sm-6' style='text-align: center; margin: 0 auto'>";
		if(!isset($_SESSION['Admin']) || $_SESSION["Admin"] == 2) {		
			echo "<button data-toggle='modal' data-target='#modalLogin' class='btn btn-primary' style='text-align: center;width: 150px;'type='button'>Checkout</button>";
		} else {
			echo "<button data-toggle='modal' data-target='#myModal' class='btn btn-primary' style='text-align: center;width: 150px;' type='button' onclick ='courseselection()'>Checkout</button>";
		}
		echo "</div>";
		echo "<br>"	;
	}
?>