
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
        <h1>MENU</h1>
        <table border="1">
        <tr>
            <th>Order</th>
            <th>Amount</th>
        </tr>
        <tr>
            <td>Burger</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Fries</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Steak</td>
            <td>150</td>
        </tr>
    </table>

    <form method="GET" action="handleform2.php">
        <label for="order">Select an order</label>
        <select name="order" id="order">
            <option value="Burger">Burger</option>
            <option value="Fries">Fries</option>
            <option value="Steak">Steak</option>
        </select>
        <br><br>

        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" id="quantity" value="1">
        <br><br>

        <label for="cash">Cash</label>
        <input type="number" name="cash" id="cash" value="0">
        <br><br>

        <input type="submit" name="sbmt" value="Submit">
      </form>
      
</body>
</html>