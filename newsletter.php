<?php

include ('db.php');
$eid = $_GET['eid'];
$approval ="Allowed";
$napproval="Not Allowed";

$view="select * from contact where id = '$eid' ";
$re = mysqli_query($con,$view);
while ($row=mysqli_fetch_array($re))
{
	$id =$row['approval'];

}
