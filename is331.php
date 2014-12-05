<style> table, tr, th, td {border-collapse: collapse; border: 1px blue solid;} th, tr, td {text-align: left; padding: 6px;} </style><br>
<style>
	h1, h3, td{text-align:center; italic; color:orange; font-family:Courier;}
	th{text-align:center; color: black;}
</style>

<h1>Team Hearthstone</h1><h3>IS331-Final Project</h3>
<?php
include("account.php");
($dbh=mysql_connect ($hostname, $username, $password)) or die ("Unable to connect to MySQL database");
mysql_select_db($project);

//echo "<br> $s <br>";
$t = mysql_query ($s);
mysql_query($s);

$s = "select * from BattleNet";
//echo "<br> $s <br><br>";	
$t = mysql_query ($s);
echo "<table>";
echo "<th> ParentURL </th><th> ChildURL </th>";
while ($row = mysql_fetch_array($t))
{
	$ParentURL=$row["ParentURL"]; $ChildURL=$row["ChildURL"];
	echo "<tr>";
	echo "<td> <a href=$ParentURL>$ParentURL</a> </td><td> <a href=$ChildURL>$ChildURL</a> </td>";
	echo "</tr>";
}
echo "</table>";
?>
