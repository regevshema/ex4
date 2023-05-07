<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
<h1>hello <?php echo $_GET["fname"]; ?></h1>
<?php 
$gender = $_GET["gender"];
$amount = $_GET["cc"];
$intensity = $_GET["int"];
switch ($amount) {
    case '0':
        echo "<h2>you dont drink any coffee!</h2>";
        break;
    case '1':
        echo "<h2>you are at the good range</h2>";
        break;
    case '2':
        echo "<h2>you are at the good range</h2>";
        break;
    case '3':
        if ($intensity=="3"){
            echo "<h2>you are at your daily max amount</h2>";
        }
        else {
            echo "<h2>you are at the good range</h2>";  
        }
        break;
    case '4':
        if ($intensity<3){
            echo "<h2>you are at your daily max amount</h2>";
        }
        else {
            echo "<h2>it's too much coffee!!</h2>"; 
        }
        break;
    case '5':
        echo "<h2>it's too much coffee!!</h2>"; 
        break;
    default:
        echo "<h2>Invalid amount of coffee entered.</h2>";
        break;
}
?>
</body>
</html>
