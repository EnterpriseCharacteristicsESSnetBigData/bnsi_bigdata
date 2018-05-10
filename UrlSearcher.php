<?php include "conf.php";?>
<meta http-equiv="Refresh" content="<?php echo $bg_refreshrate;?>">
<?php

$link = mysql_connect($bg_host, $bg_user, $bg_password)
    or die($bg_noconnection);
mysql_select_db($bg_database) or die($bg_nodatabase);

if($bg_erase_bing){
$result = mysql_query("UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_dc_bing']."=".time().";");
}

	$sql="SELECT * FROM ".$GLOBALS['bg_table']." ORDER BY ".$GLOBALS['bg_dc_bing']." LIMIT ".$GLOBALS['bg_url_limit']."";
	$result = mysql_query($sql);
	if($result){
		$n="";
		$e="";
		while ($row = mysql_fetch_assoc($result)) {
echo "<br/>".$row[$GLOBALS['bg_EIK']]." --- ".mb_detect_encoding($row[$GLOBALS['bg_NAME']], mb_detect_order("UTF-8,CP1251,ASCII"), true)." >>> ".mb_convert_encoding($row[$GLOBALS['bg_NAME']],"cp1251","UTF-8")."<br/>";
			$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_dc_bing']."=".time()." WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
			$result1 = mysql_query($sql);
			$n.=mb_convert_encoding($row[$GLOBALS['bg_NAME']],"cp1251","UTF-8")."\r\n";
			$e.=$row[$GLOBALS['bg_EIK']]."\r\n";
		}
		deletefiles();
		file_put_contents($GLOBALS['bg_bing_UrlSearcher_results']."firmNamesCourse.txt", $n);
		file_put_contents($GLOBALS['bg_bing_UrlSearcher_results']."firmIdsCourse.txt", $e);
		exec("cd ".$GLOBALS['bg_bing_UrlSearcher_results']." && java -jar ".$GLOBALS['bg_bing_UrlSearcher_results']."UrlSearcher.jar urlSearcherConf.properties");
	}

mysql_close($link);

function movefiles(){
	$files = scandir($GLOBALS['bg_bing_UrlSearcher_results']."seed");
	// Identify directories
	$source = $GLOBALS['bg_bing_UrlSearcher_results']."seed/";
	$destination = $GLOBALS['bg_bing_UrlSearcher_results']."seeds/";
	// Cycle through all source files
	foreach ($files as $file) {
		if (in_array($file, array(".",".."))) continue;
		// If we copied this successfully, mark it for deletion
		if (copy($source.$file, $destination.$file)) {
			$delete[] = $source.$file;
		}
	}
	// Delete all successfully-copied files
	foreach ($delete as $file) {
		unlink($file);
	}
}
function deletefiles(){
	$files = scandir($GLOBALS['bg_bing_UrlSearcher_results']."seed");
	// Identify directories
	$source = $GLOBALS['bg_bing_UrlSearcher_results']."seed/";
	// Cycle through all source files
	foreach ($files as $file) {
		if (in_array($file, array(".",".."))) continue;
			$delete[] = $source.$file;
	}
	// Delete all successfully-copied files
	foreach ($delete as $file) {
		unlink($file);
	}
}
?>