<?php include "conf.php";?>
<meta http-equiv="Refresh" content="<?php echo $bg_refreshrate;?>">
Моля, поставете линк към <a href="http://www.jabse.com" class="tip">http://www.jabse.com</a> на вашия сайт или в програмата, където използвате интерфейса.<br>
<?php

$cyr=array("а","б","в","г","д","е","ж","з","и","й","к","л","м","н","о","п","р","с","т","у","ф","х","ц","ч","ш","щ","ъ","ь","ю","я");
$lat=array("a","b","v","g","d","e","zh","z","i","j","k","l","m","n","o","p","r","s","t","u","f","h","c","ch","sh","sht","j","ju","ja");

$link = mysql_connect($bg_host, $bg_user, $bg_password)
    or die($bg_noconnection);
mysql_select_db($bg_database) or die($bg_nodatabase);

if($bg_erase_jabse){
$result = mysql_query("UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_url_jabse_maybe_json']."='', ".$GLOBALS['bg_url_jabse_lat_maybe_json']."='', ".$GLOBALS['bg_dc_jabse']."=".time().";");
}

	$sql="SELECT * FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_url_jabse_maybe_json']."='' OR ".$GLOBALS['bg_url_jabse_lat_maybe_json']."='' ORDER BY ".$GLOBALS['bg_dc_jabse']." LIMIT 1";
	$result = mysql_query($sql);
	if($result){
		while ($row = mysql_fetch_assoc($result)) {
			$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_dc_jabse']."=".time()." WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
			$result1 = mysql_query($sql);			

echo "<br/>".$row[$GLOBALS['bg_EIK']]."<br/>".trim($row[$GLOBALS['bg_NAME']])."<br/>";

include_once "jabse_interface.php";
$js=new jabse_interface;

$jquery=trim($row[$GLOBALS['bg_NAME']]);
$start=0;

echo "<br/>".$jquery;

$str="";
$strm="";
$ja="";
foreach($js->jabse_search($jquery,$start) as $a){
	
if (preg_match("/(\/\/.+\.\w+\/$|\/\/.+\.\w+\/.+bg\/$)/i", $a["url"])) {
	echo "<li>";
    echo "A match was found.<br/>";
	echo "url: ".$a["url"]."<br/>";
	echo "title: ".$a["title"]."<br/>";
	echo "text: ".$a["text"]."<br/>";
	echo "</li>";
		if($strm==""){
			$strm.=$a["url"];
		}else{	
			$strm.=",".$a["url"];
		}
$ja.="<maybe><url>".$a["url"]."</url><title>".$a["title"]."</title><text>".$a["text"]."</text></maybe>";	
	
	$pos = stripos(mb_strtolower(utf8($a["title"]), 'UTF-8'), mb_strtolower(utf8($jquery), 'UTF-8'));
	$pos1 = stripos(mb_strtolower(utf8($a["text"]), 'UTF-8'), mb_strtolower(utf8($jquery), 'UTF-8'));
	if($pos !== false or $pos1 !== false){
	echo "<li>";
	echo "url: ".$a["url"]."<br/>";
	echo "title: ".$a["title"]."<br/>";
	echo "text: ".$a["text"]."<br/>";
	echo "docsizekb: ".$a["docsizekb"]."<br/>";
	echo "datecreated: ".$a["datecreated"]."<br/>";
	echo "datemodified: ".$a["datemodified"]."<br/>";
	echo "pagerating: ".$a["pagerating"]."<br/>";
	echo "</li><br/>";
		if($str==""){
			$str.=$a["url"];
		}else{	
			$str.=",".$a["url"];
		}
	}
}

}



							$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_url_jabse_maybe_json']."='".str_replace("'",'"',$ja)."', ".$GLOBALS['bg_dc_jabse']."=".time()." WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
							echo "<br/>".$sql;
			$result1 = mysql_query($sql);			


$jquery=str_replace($cyr, $lat, mb_strtolower(utf8($jquery), 'UTF-8'));
echo "<br/><br/><br/>".$jquery;

$str="";
$strm="";
$ja="";
foreach($js->jabse_search($jquery,$start) as $a){
	
if (preg_match("/(\/\/.+\.\w+\/$|\/\/.+\.\w+\/.+bg\/$)/i", $a["url"])) {
	echo "<li>";
    echo "A match was found.<br/>";
	echo "url: ".$a["url"]."<br/>";
	echo "title: ".$a["title"]."<br/>";
	echo "text: ".$a["text"]."<br/>";
	echo "</li>";
		if($strm==""){
			$strm.=$a["url"];
		}else{	
			$strm.=",".$a["url"];
		}
$ja.="<maybe><url>".$a["url"]."</url><title>".$a["title"]."</title><text>".$a["text"]."</text></maybe>";	
	
	$pos = stripos(mb_strtolower(utf8($a["title"]), 'UTF-8'), mb_strtolower(utf8($jquery), 'UTF-8'));
	$pos1 = stripos(mb_strtolower(utf8($a["text"]), 'UTF-8'), mb_strtolower(utf8($jquery), 'UTF-8'));
	if($pos !== false or $pos1 !== false){
	echo "<li>";
	echo "url: ".$a["url"]."<br/>";
	echo "title: ".$a["title"]."<br/>";
	echo "text: ".$a["text"]."<br/>";
	echo "docsizekb: ".$a["docsizekb"]."<br/>";
	echo "datecreated: ".$a["datecreated"]."<br/>";
	echo "datemodified: ".$a["datemodified"]."<br/>";
	echo "pagerating: ".$a["pagerating"]."<br/>";
	echo "</li><br/>";
	
		if($str==""){
			$str.=$a["url"];
		}else{	
			$str.=",".$a["url"];
		}
	}
}

}




							$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_url_jabse_lat_maybe_json']."='".str_replace("'",'"',$ja)."', ".$GLOBALS['bg_dc_jabse']."=".time()." WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
							echo "<br/>".$sql;
			$result1 = mysql_query($sql);		

		}
	}	

mysql_close($link);



function utf8($utf8){   
if(mb_detect_encoding($string,'UTF-8',true) =='UTF-8'){
}else{ 
$utf8=iconv("windows-1256","utf-8",$utf8);
}
return $utf8;
  }
?>