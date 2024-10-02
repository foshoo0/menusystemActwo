<?php  

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_GET['sbmt'])) {
	$burger = 50;
	$fries = 75;
	$steak = 150;

	
  	$order = $_GET['order']; 
	$quantity = $_GET['quantity']; 
	$money = $_GET['cash']; 

	
	switch ($order) {
		case 'Burger':
			$item_price = $burger;
			break;
		case 'Fries':
			$item_price = $fries;
			break;
		case 'Steak':
			$item_price = $steak;
			break;
		default:
			$item_price = 0;
			break;
	}

	// total price
	$total_price = $item_price * $quantity;

	// change
	$change = $money - $total_price;

	// current date and time
	$current_date = date("m/d/Y h:i:s a");

	// Display the receipt
	echo "<div style='text-align:center; font-family: Arial;'>";
	echo "<h1>RECEIPT</h1>";
	echo "<h2>Total Price: " . $total_price . " PHP</h2>";
	echo "<h2>You Paid: " . $money . " PHP</h2>";

	if ($change >= 0) {
		echo "<h2>CHANGE: " . $change . " PHP</h2>";
		echo "<h3>Thank you for your order!</h3>";
	} else {
		echo "<h2>INSUFFICIENT CASH</h2>";
		echo "<h2>You need " . abs($change) . " PHP more to complete the order.</h2>";
	}

	// Display date and time
	echo "<p style='font-size:18px;'>" . $current_date . "</p>";
	echo "</div>";

    echo '<pre>';
    print_r($_GET);
    echo '</pre>';
}
?>
