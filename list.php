<?php include "conf.php";?>
<html>
<head>
<meta charset="UTF-8"> 
<style>
table{
	 width: 100%;
}
td div:nth-child(odd) {
    background: #E5ECEC;
}
p{
    word-wrap:break-word;
}
table, th, td {
   border: 1px solid black;
}
table td {
	vertical-align:top;
}
form{
	margin-bottom:0px;
}
br{
	line-height: 5px;
}
div {
	margin-bottom:10px;
	padding: 3px;
}
td {
	margin-bottom:10px;
	padding: 3px;
	max-width:10px;
}
.row-1{
	width: 4%;
}
.row-2{
	width: 12%;
}
.row-3{
	width: 12%;
	min-width:210px;
}
.row-4{
	width: 10%;
}
.row-5{
	width: 20%;
}
.row-6{
	width: 20%;
}
.row-7{
	width: 20%;
}
</style>
</head>
<body>
<?php

$n=0;
$l=100;
$i=0;

if(isset($_GET["n"])){
	if(!empty($_GET["n"])){
		$n=strtoupper(filter_input(INPUT_GET, 'n', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH));
		$i=$n;
	}else{
	}
}else{
}
if(isset($_GET["l"])){
	if(!empty($_GET["l"])){
		$l=strtoupper(filter_input(INPUT_GET, 'l', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH));
	}else{
	}
}else{
}

$peik="";
if(isset($_POST["eik"])){
	if(!empty($_POST["eik"])){
		$peik=strtolower(filter_input(INPUT_POST, 'eik', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH));
	}else{
	}
}else{
}
$purl_final="";
if(isset($_POST["url_final"])){
	if(!empty($_POST["url_final"])){
		$purl_final=strtolower(filter_input(INPUT_POST, 'url_final', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH));
	}else{
	}
}else{
}

?>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <input type="submit" value="<?php echo $bg_navigation[1];?>">
	<label><?php echo $bg_navigation[2];?></label>
  <input type="text" name="n" size="6" value="<?php echo $n;?>">
	<label><?php echo $bg_navigation[3];?></label>
  <input type="text" name="l" size="6" value="<?php echo $l;?>">
	<label><?php echo $bg_navigation[4];?></label>
</form>
<br/>
<a href="<?php echo $_SERVER['PHP_SELF']."?n=".($n-$l)."&l=".$l;?>"><?php echo $bg_navigation[5];?></a>
<a href="<?php echo $_SERVER['PHP_SELF']."?n=".($n+$l)."&l=".$l;?>"><?php echo $bg_navigation[6];?></a>
<br/>
<br/>
<?php

$link = mysql_connect($bg_host, $bg_user, $bg_password)
    or die($bg_noconnection);
mysql_select_db($bg_database) or die($bg_nodatabase);

if($peik!==""){
	$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_url_final']."='".$purl_final."' WHERE ".$GLOBALS['bg_EIK']."='".$peik."';";
	$result = mysql_query($sql);
}

$sql="SELECT * FROM ".$GLOBALS['bg_table']." LIMIT ".($n).", ".($l)."";
$result = mysql_query($sql);
if($result){
	echo "<table>";
		echo "<tr>";
		echo "<th class=\"row-1\">".$bg_navigation[7]."</th>";
		echo "<th class=\"row-2\">".$bg_navigation[8]."</th>";
		echo "<th class=\"row-3\">".$bg_navigation[9]."</th>";
		echo "<th class=\"row-4\">".$bg_navigation[18]."</th>";
		echo "<th class=\"row-6\">".$bg_navigation[20]."</th>";
		echo "<th class=\"row-7\">".$bg_navigation[21]."</th>";
		echo "<th class=\"row-5\">".$bg_navigation[19]."</th>";
		echo "</tr>";
	while ($row = mysql_fetch_assoc($result)) {
		$i++;
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row[$GLOBALS['bg_NAME']]."<br/>".$row[$GLOBALS['bg_EIK']]."<br/>".$row[$GLOBALS['bg_email']]."<br/><a href=\"http://".$row[$GLOBALS['bg_url']]."\" target=\"balnk\">".$row[$GLOBALS['bg_url']]."</a>";
		echo "<br/>".$row[$GLOBALS['bg_NACE']]."<br/>".$row[$GLOBALS['bg_OBL']]."<br/>".$row[$GLOBALS['bg_nuts']]."<br/>".$row[$GLOBALS['bg_ADR']]."<br/>".$row[$GLOBALS['bg_tel']]."<br/>".$row[$GLOBALS['bg_fax']]."<br/>".$row[$GLOBALS['bg_gsm']]."</td>";
		echo "<td>".$row[$GLOBALS['bg_url_final_stop']]."<br/>";
		echo "".urlpost_final($row[$GLOBALS['bg_EIK']],$row[$GLOBALS['bg_url_final']])."</td>";
		echo "<td>";
		if($row[$GLOBALS['bg_url_from_url']]!=""){
		if(strrpos($row[$GLOBALS['bg_url_from_url']],"http")===false){
		echo "<a href=\"http://".$row[$GLOBALS['bg_url_from_url']]."\" target=\"balnk\">".$row[$GLOBALS['bg_url_from_url']]."</a>".urlpost($row[$GLOBALS['bg_EIK']],"http://".$row[$GLOBALS['bg_url_from_url']])."";			
		}else{
		echo "<a href=\"".$row[$GLOBALS['bg_url_from_url']]."\" target=\"balnk\">".$row[$GLOBALS['bg_url_from_url']]."</a>".urlpost($row[$GLOBALS['bg_EIK']],$row[$GLOBALS['bg_url_from_url']])."";
		}
		}
		if($row[$GLOBALS['bg_url_from_email']]!=""){
		if(strrpos($row[$GLOBALS['bg_url_from_email']],"http")===false){
		echo "<br/><a href=\"http://".$row[$GLOBALS['bg_url_from_email']]."\" target=\"balnk\">".$row[$GLOBALS['bg_url_from_email']]."</a>".urlpost($row[$GLOBALS['bg_EIK']],"http://".$row[$GLOBALS['bg_url_from_email']])."";
		}else{
		echo "<br/><a href=\"".$row[$GLOBALS['bg_url_from_email']]."\" target=\"balnk\">".$row[$GLOBALS['bg_url_from_email']]."</a>".urlpost($row[$GLOBALS['bg_EIK']],$row[$GLOBALS['bg_url_from_email']])."";
		}
		}
		if($row[$GLOBALS['bg_url_old']]!=""){
		if(strrpos($row[$GLOBALS['bg_url_old']],"http")===false){
		echo "<br/><a href=\"http://".$row[$GLOBALS['bg_url_old']]."\" target=\"balnk\">".$row[$GLOBALS['bg_url_old']]."</a>".urlpost($row[$GLOBALS['bg_EIK']],"http://".$row[$GLOBALS['bg_url_old']])."";
		}else{
		echo "<br/><a href=\"".$row[$GLOBALS['bg_url_old']]."\" target=\"balnk\">".$row[$GLOBALS['bg_url_old']]."</a>".urlpost($row[$GLOBALS['bg_EIK']],$row[$GLOBALS['bg_url_old']])."";
		}
		}
		echo "</td>";
		echo "<td>".google_json($row[$GLOBALS['bg_url_google_maybe']],$row[$GLOBALS['bg_EIK']])."</td>";
		echo "<td>".bing($row[$GLOBALS['bg_EIK']])."</td>";
		echo "<td>".jabse_json($row[$GLOBALS['bg_url_jabse_maybe_json']],$row[$GLOBALS['bg_EIK']])."";
		echo "<br/>".jabse_json($row[$GLOBALS['bg_url_jabse_lat_maybe_json']],$row[$GLOBALS['bg_EIK']])."</td>";
?>
<?php		
		echo "</tr>";
	}
	echo "</table>";
}


function jabse_split($str,$eik){
	$r="";
	$arr=split(",",$str);
	foreach($arr as $v){
		if($v!==""){
		$r.="<div><a href=\"".$v."\" target=\"balnk\">".$v."</a>";
		$r.=urlpost($eik,$v); 
		$r.="</div>";
		}
	}
	return $r;
}
function jabse_json($str,$eik){
	$r="";
	$str=str_replace("<maybe>","<div>",$str);
	$str=str_replace("</maybe>","</div>",$str);
	$str=str_replace("<title>","<br/>",$str);
	$str=str_replace("</title>","",$str);
	$str=str_replace("<text>","<br/>",$str);
	$str=str_replace("</text>","",$str);
	preg_match_all("/\<url\>\S+\<\/url\>/i", $str, $matches);
	foreach($matches as $m1){
	foreach($m1 as $m){
	$url=str_replace("<url>","",$m);
	$url=str_replace("</url>","",$url);
		$r=urlpost($eik,$url); 
	$str=str_replace($m,"<a href=\"".$url."\" target=\"blank\">".$url."</a>".$r,$str);
	}
	}

	
	return $str;
}

function google_json($str,$eik){
	$r="";
	$str=explode('"items": [',$str);
	$str=explode('"title": "',$str[1]);

	for($i=1;$i<sizeof($str)+1;$i++){
		$r.="<div>";
		$t=explode('",',$str[$i]);
		$t=$t[0];
		$l=explode('"link": "',$str[$i]);
		$l=explode('"',$l[1]);
		$r.="<a href=\"".$l[0]."\" target=\"blank\">".$l[0]."</a>";
		$r.=urlpost($eik,$l[0]); 
		$r.="<br/>".$t;
		$s=explode('"snippet": "',$str[$i]);
		$s=explode('"',$s[1]);
		$r.="<br/>".$s[0];
		$r.="</div>";
	}

	return $r;
}

function bing($eik){
	$myfile = fopen($GLOBALS['bg_bing_UrlSearcher_results_txt'].$eik.".txt", "r") or die("Unable to open file!");
	$str=fread($myfile,filesize($GLOBALS['bg_bing_UrlSearcher_results_txt'].$eik.".txt"));
	fclose($myfile);
	$str=mb_convert_encoding($str, "utf-8", "windows-1251");
	preg_match_all("/http\S+/i", $str, $matches);
	$str=str_replace("\r\n","<br/>",$str);
	foreach($matches as $m1){
	foreach($m1 as $m){
	$url=str_replace("<url>","",$m);
	$url=str_replace("</url>","",$url);
		$r=urlpost($eik,$url); 
	$str=str_replace($m,"<a href=\"".$url."\" target=\"blank\">".$url."</a>".$r,$str);
	}
	}
	return $str;
}

function urlpost($eik,$v){
	$r="";
	if($v!==""){
			$r="<form method=\"post\" action=\"".$_SERVER["REQUEST_URI"]."\">
  <input type=\"hidden\" name=\"eik\" value=\"".$eik."\">
  <input type=\"hidden\" name=\"url_final\" value=\"".$v."\">
  <input type=\"submit\" value=\"".$GLOBALS['bg_navigation'][17]."\">
</form>";
	}
	return $r;
}

function urlpost_final($eik,$v){
	$r="";
//	if($v!==""){
			$r="<form method=\"post\" action=\"".$_SERVER["REQUEST_URI"]."\">
  <input type=\"hidden\" name=\"eik\" value=\"".$eik."\">
  <input type=\"text\" name=\"url_final\" value=\"".$v."\" size=\"30\">
  <input type=\"submit\" value=\"".$GLOBALS['bg_navigation'][17]."\">
</form>";
//	}
	return $r;
}

mysql_close($link);
?>
<br/>
<a href="<?php echo $_SERVER['PHP_SELF']."?n=".($n-$l)."&l=".$l;?>"><?php echo $bg_navigation[5];?></a>
<a href="<?php echo $_SERVER['PHP_SELF']."?n=".($n+$l)."&l=".$l;?>"><?php echo $bg_navigation[6];?></a>
</body>
</html>