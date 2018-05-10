<?php include "conf.php";?>
<meta http-equiv="Refresh" content="<?php echo $bg_refreshrate;?>">
<?php

$link = mysql_connect($bg_host, $bg_user, $bg_password)
    or die($bg_noconnection);
mysql_select_db($bg_database) or die($bg_nodatabase);

if($bg_erase_socialmediapresence){
$result = mysql_query("UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_dc_socialmediapresence']."=".time().";");
}

//	$sql="SELECT * FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_url_final']."<>'' ORDER BY ".$GLOBALS['bg_dc_socialmediapresence']." LIMIT ".$GLOBALS['bg_url_limit']."";
	$sql="SELECT * FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_url_final']."<>'' ORDER BY ".$GLOBALS['bg_dc_socialmediapresence']." LIMIT 1";
	$result = mysql_query($sql);
	if($result){
		$n="";
		$e="";
		while ($row = mysql_fetch_assoc($result)) {
echo "<br/>".$row[$GLOBALS['bg_EIK']]." ... ".$row[$GLOBALS['bg_url_final']]." --- ".mb_detect_encoding($row[$GLOBALS['bg_NAME']], mb_detect_order("UTF-8,CP1251,ASCII"), true)." >>> ".mb_convert_encoding($row[$GLOBALS['bg_NAME']],"cp1251","UTF-8")."<br/>";
			$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_dc_socialmediapresence']."=".time()." WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
			$result1 = mysql_query($sql);
			$n.=mb_convert_encoding($row[$GLOBALS['bg_NAME']],"cp1251","UTF-8")."\r\n";
			$e.=$row[$GLOBALS['bg_url_final']]."\r\n";
		}
		file_put_contents($GLOBALS['bg_socialmediapresence']."url.txt", $e);
		exec("cd ".$GLOBALS['bg_socialmediapresence']." && py ".$GLOBALS['bg_socialmediapresence']."WP2_SocialMediaPresence_Dev.py");
	}

mysql_close($link);

?>