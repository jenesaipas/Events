<!DOCTYPE html>
<!--	Author: Susan Nagy
		Date:	10/21/14
		File:	events.php
		Purpose: Chapter 10 Exercise
-->

<html>
<head>
	<title>Events List</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
<h1>LIST OF EVENTS</h1>
<?php
$ticketFile = fopen ("events.txt", "r");
/* Added the above line to read events.txt, used the while loop to read $ticketFile line by line and print every other line with the specified size. */
while ( !feof($ticketFile) )
{
print("<h2>".fgets($ticketFile)."</h2>");
print("<h1>".fgets($ticketFile)."</h1>");
}
fclose ($ticketFile);

/* Source: http://eventchimp.co/minneapolis/concerts */

?>

</body>
</html>
