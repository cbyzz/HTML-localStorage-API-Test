<?

$connect = mysql_connect("localhost", "root", "baobab37") or die(mysql_error());
mysql_select_db("test") or die(mysql_error());

$insert_query = "delete from data where id > 0";


$result = mysql_query($insert_query, $connect) or die(mysql_error());


?>