<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Message</title>
</head>

<body>

<?php 

$firstName = $_POST["firstName"]; 
$lastName = $_POST["lastName"]; 
$phoneNumber = $_POST["phoneNumber"]; 
$address = $_POST["address"]; 
$message = "Sorry we don't recognize you";

$file = fopen("details.csv","r");


while(! feof($file))
{
	$array = fgetcsv($file);
	
	if($array[0] == $firstName and $array[1] == $lastName and $array[2] == $phoneNumber and $array[3] == $address)
	{
		$message = "Welcome to the site";	
		break;
	}
}

echo $message;

fclose($file);

?>

</body>
</html>