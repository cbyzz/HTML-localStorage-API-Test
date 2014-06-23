<?

/*
$connect = mysql_connect("localhost", "root", "baobab37") or die(mysql_error());
mysql_select_db("test") or die(mysql_error());

$text = $_GET[value];

$now = new DateTime('NOW');

echo $now->format(DateTime::ISO8601);

$time = $now->format(DateTime::ISO8601);

echo $time;

$insert_query = "insert into data set time='$time', value='$text'";


$result = mysql_query($insert_query, $connect) or die(mysql_error());


*/

$connect = mysql_connect("localhost", "root", "baobab37") or die(mysql_error());
mysql_select_db("test") or die(mysql_error());


$query = "select time, value from data order by id ";
$result = mysql_query($query, $connect) or die(mysql_error());

$array = array();
while($rows = mysql_fetch_array($result)) {
/*
	$arr = array();
 	$arr[time]	= $rows[time];
 	$arr[value]	= $rows[value]; 	
 	$array[] = $arr;
*/
 	$array[] = array (
 		"time"=>$rows[time],
 		"value"=>$rows[value]
 	);
}

$json_result = json_encode($array);
	        echo $json_result;

?>