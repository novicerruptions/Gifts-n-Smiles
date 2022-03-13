<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gifts & Smiles | Donate | Cash</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 15px 30px;
            font-size: 17px;
            padding: 8px;
            text-align: center;
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <?php "Thank you ". $_POST["fname"]. $_POST["lname"] . " for the payment.<br>"; ?>
	    <p>Your payment has been received.</p>
	    <?php echo "Date : " .date("l jS \of F Y h:i:s A") . "<br>"; ?>
	<?php echo "Total : INR " . $_POST["amt"];?>
	<br>
	<?php echo "Payment Method : " . $_POST["cardtype"]. "<br>"  ?>
	<?php "A confirmation mail has been sent to " . $_POST["email"]."<br>"; ?>
</body>
</html>