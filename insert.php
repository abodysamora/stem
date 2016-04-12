<?php 
$HostName="localhost";
$db_name="samar";
$LoginName="root";
$LoginPassword="";


$con = mysql_connect($HostName,$LoginName,$LoginPassword);
mysql_query("set names 'utf8'");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db($db_name , $con);
if ( isset($_POST['s_name'])
 && isset($_POST['s_gender'])&& isset($_POST['s_password']) ) {
$sql = "INSERT INTO soso (soso_name,soso_gender,soso_password) 
VALUES ('$_POST[s_name]' ,'$_POST[s_gender]','$_POST[s_password]' )" ;
} else {
$sql = '';
}

mysql_query($sql,$con) ;

mysql_close($con);

?>