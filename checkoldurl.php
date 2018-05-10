<?php include "conf.php";?>
<meta http-equiv="Refresh" content="<?php echo $bg_refreshrate;?>">
<?php

$link = mysql_connect($bg_host, $bg_user, $bg_password)
    or die($bg_noconnection);
mysql_select_db($bg_database) or die($bg_nodatabase);

get_url_old();

function get_url_old(){
	global $url;
	$sql="SELECT * FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_url_old']."<>'' ORDER BY ".$GLOBALS['bg_dc_url_old']." LIMIT ".$GLOBALS['bg_url_limit']."";
	$result = mysql_query($sql);
	if($result){
		while ($row = mysql_fetch_assoc($result)) {
			$url=$row[$GLOBALS['bg_url_old']];
echo "<br/>".$row[$GLOBALS['bg_EIK']]." --- ".$url." ----- ";
			$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_dc_url_old']."=".time()." WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
			$result1 = mysql_query($sql);			
			if(empty($url)){
				echo $sql;
			}else{	
				$data = requestUrl($url, $GLOBALS['bg_proxy']);
				if($data==false){echo "wwwwwwwwwwwwwwww";
					if(strpos($url, '://www.') !== false){
						$url=str_replace('://www.','://',$url);
						$data = requestUrl($url, $GLOBALS['bg_proxy']);
					}else{
						$url=str_replace('://','://www.',$url);
						$data = requestUrl($url, $GLOBALS['bg_proxy']);
					}
				}
				if(empty($data)){
				}else{
					if(strpos($data, 'The requested URL could not be retrieved') !== false){
						$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_dc_url_old']."=".time()." WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
						echo $sql;
					}else{
						$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_url_final']."='".$url."', ".$GLOBALS['bg_dc_url_old']."=".time()." WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
						echo $sql;
					}
				}
			}
			$result1 = mysql_query($sql);			
		}
	}
}

function requestUrl($url, $proxy = NULL) {
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	if ($proxy != NULL) {
		curl_setopt($curl, CURLOPT_PROXY, $proxy);
	}
	curl_setopt($curl, CURLOPT_HEADER, FALSE); // no headers in the output
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT ,5); 
	curl_setopt($curl, CURLOPT_TIMEOUT, 10); //timeout in seconds
	$contents = curl_exec($curl);
	$info = curl_getinfo($curl);
	echo " ".$info['url']." ";
	$GLOBALS['url']=str_replace('HTTP','http',$info['url']);
	curl_close($curl);
	return $contents;
}

mysql_close($link);

?>