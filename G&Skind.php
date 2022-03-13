<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gifts & Smiles | Donate | Kind</title>
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
	
	<?php "Thank you ". $_POST["fname"]. " " . $_POST["lname"]." for the initiative.<br>"; ?>
	<?php echo "Date : " .date("l jS \of F Y h:i:s A") . "<br>"; ?>
	<?php "The goods you would like to donate : " . $_POST["goods"]. "<br>" ;?>
	<?php "Location : ". $_POST["center"]. "<br>"; ?>
	<?php "A confirmation mail is sent to ".$_POST["email"]."<br>" ?>
</body>
</html>