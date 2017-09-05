<?php

$con = mysql_connect('Localhost','root','');
mysql_select_db('scholarship');

// $con = mysql_connect('Localhost','u644997102_test1','test12');
// mysql_select_db('u644997102_test1');

function executeQuery($query)
{
		$temp = mysql_query($query);
			if(!$temp)
			{
				die("Error ".mysql_error());
			}
			else
			{
				return $temp;
			}
}



