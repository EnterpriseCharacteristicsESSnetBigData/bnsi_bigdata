<?php include "conf.php";?>
<meta http-equiv="Refresh" content="<?php echo $bg_refreshrate;?>">
<?php

$link = mysql_connect($bg_host, $bg_user, $bg_password)
    or die($bg_noconnection);
mysql_select_db($bg_database) or die($bg_nodatabase);

if($bg_erase_google){
$result = mysql_query("UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_url_google_maybe']."='', ".$GLOBALS['bg_dc_google']."=".time().";");
}

	$sql="SELECT * FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_url_google_maybe']."='' ORDER BY ".$GLOBALS['bg_dc_google']." LIMIT 1";
	$result = mysql_query($sql);
	if($result){
		while ($row = mysql_fetch_assoc($result)) {
			$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_dc_google']."=".time()." WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
			$result1 = mysql_query($sql);
echo "<br/>".$row[$GLOBALS['bg_EIK']]."<br/>".trim($row[$GLOBALS['bg_NAME']])."<br/>";			
			$json=str_replace("'","''",send_search(trim($row[$GLOBALS['bg_NAME']]),2));
echo mb_detect_encoding($json, mb_detect_order(), true);			
//			$json=iconv(mb_detect_encoding($json, mb_detect_order(), true), "UTF-8", $json);
			$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_url_google_maybe']."='".$json."', ".$GLOBALS['bg_dc_google']."=".time()." WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
			$result1 = mysql_query($sql,$link);			
echo mysql_errno($link) . ": " . mysql_error($link) . "\n";
echo $sql;
			}
	}

mysql_close($link);


     function send_search($q,$r)
     {
         $url="https://www.googleapis.com/customsearch/v1?key=".$GLOBALS['bg_google_apikey']."&q=".urlencode($q)."";
         $retries=0;
		 $handle="";
echo "<br/>".$url;		 
         do 
         {

			$opts = array('http' => array('proxy' => 'tcp://'.$GLOBALS['bg_proxy'], 'request_fulluri' => true));
			$context = stream_context_create($opts);
//          $handle=fopen($url,"r",false,$context);

          $handle=file_get_contents($url,false,$context);

//          $this->handle=@fopen($url,"rb");
          $retries++;
        } while ((!$handle) && ($retries<$r));
			return $handle;
     }//send search
	 

?>
