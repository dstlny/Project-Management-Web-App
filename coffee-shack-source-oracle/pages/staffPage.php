<?php
	require_once '../pages/header.php';

	if(!isset($_SESSION['adminLoggedIn'])) {
	    echo '<center><p style="color: red; font-size: 20px" class="loading">UNAUTHORIZED USER DETECTED<span>.</span><span>.</span><span>.</span></p></center>';
	    echo "<meta http-equiv='Refresh' content='2; URL=../pages/menu.php'>";
	} else {

		$answer = $obj->checkOrders();
		
		if(isset($_SESSION['adminLoggedIn']) && $answer == true){
			echo '<meta http-equiv="Refresh" content="15">';
			$obj->printCustomerOrders();
		} elseif(isset($_SESSION['adminLoggedIn']) && $answer == false){
			echo '<center><p style="font-size: 20px" class="loading">Currently no orders to process<span>.</span><span>.</span><span>.</span></p></center>';
			echo '<meta http-equiv="Refresh" content="15">';
		}

	}

	require_once '../pages/footer.php';
?>
