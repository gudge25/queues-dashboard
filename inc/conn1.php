<?php
define('SQL_HOST', 'localhost');
define('SQL_USER', 'root');
define('SQL_PASS', 'Aquachem1');
define('SQL_DB', 'smsdb');
$conn = mysqli_connect(SQL_HOST, SQL_USER, SQL_PASS)
        or die('Could not connect to the database;' . mysql_error());
mysqli_select_db($conn,SQL_DB )
        or die('Could not select database;' . mysql_error());

?>

//<?php
//Step2
//$query = "SELECT * FROM sms";
//mysqli_query($conn, $query) or die('Error querying database.');

//Step3
//$result = mysqli_query($conn, $query);
//$row = mysqli_fetch_array($result);

//while ($row = mysqli_fetch_array($result)) {
// echo $row['sms_text'] . ' ' . $row['sms_text'] . ': ' . $row['sms_text'] . ' ' . $row['sms_text'] .'<br />';
//}
//Step 4
//mysqli_close($db);
//?>

//</body>
//</html>