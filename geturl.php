<?php include "conf.php";?>
<meta http-equiv="Refresh" content="<?php echo $bg_refreshrate;?>">
<?php

$link = mysql_connect($bg_host, $bg_user, $bg_password)
    or die($bg_noconnection);
mysql_select_db($bg_database) or die($bg_nodatabase);


if($bg_erase_from_url){
$result = mysql_query("UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_url_from_url']."='', ".$GLOBALS['bg_dc_from_url']."=".time().";");
}
if($bg_erase_from_email){
$result = mysql_query("UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_url_from_email']."='', ".$GLOBALS['bg_dc_from_email']."=".time().";");
}

get_from_url();

function get_from_url(){
	global $url;
	$sql="SELECT * FROM ".$GLOBALS['bg_table']." ORDER BY ".$GLOBALS['bg_dc_from_url']." LIMIT ".$GLOBALS['bg_url_limit']."";
	$result = mysql_query($sql);
	if($result){
		while ($row = mysql_fetch_assoc($result)) {
echo "<br/>".$row[$GLOBALS['bg_EIK']]." --- ";
			$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_dc_from_url']."=".time()." WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
			$result1 = mysql_query($sql);			
					$sql=get_from_email($row);
					$result1 = mysql_query($sql);			
			$url=$row[$GLOBALS['bg_url']];
			if(empty($url)){
			}else{	
				$data = requestUrl($url, $GLOBALS['bg_proxy']);
				if($data==false){echo $url." wwwwwwwwwwwwwwww ";
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
						$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_dc_from_url']."=".time()." WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
						echo $sql;
					}else{
						$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_url_from_url']."='".$url."', ".$GLOBALS['bg_dc_from_url']."=".time()." WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
						echo $sql;
					}
				}
			}
			$result1 = mysql_query($sql);			
		}
	}
}

function get_from_email($row){
	global $url;
	$url = explode("@", $row[$GLOBALS['bg_email']]);
	$url=strtolower($url[1]);
echo $url." ----- ";	
	$notgood = $GLOBALS['bg_notgood_email'];
	if(in_array($url,$notgood)){
							$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_dc_from_email']."=".time()." WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
							echo $sql;
	}else{	
		if($url!=''){
				$data = requestUrl($url, $GLOBALS['bg_proxy']);
				if($data==false){echo $url." eeeeeeeeeeeeeeeee ";
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
							$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_dc_from_email']."=".time()." WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
							echo $sql;
				}else{
					$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_url_from_email']."='".$url."', ".$GLOBALS['bg_dc_from_email']."=".time()." WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
					echo $sql;
				}
			}
		}
	}
	return $sql;
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