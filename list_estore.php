<html>
<head>
<meta charset="UTF-8"> 
<style>
td div:nth-child(odd) {
    background: #E5ECEC;
}
p{
    word-wrap:break-word;
	max-width:500px;
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
div, td {
	margin-bottom:10px;
	padding: 3px;
	max-width:250px;
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

$ceik="";
if(isset($_POST["eik1"])){
	if(!empty($_POST["eik1"])){
		$ceik=strtolower(filter_input(INPUT_POST, 'eik1', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH));
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
$pestore_final="";
if(isset($_POST["estore_final"])){
	if(!empty($_POST["estore_final"])){
		$pestore_final=mb_strtolower(filter_input(INPUT_POST, 'estore_final', FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_LOW), "UTF-8");
	}else{
	}
}else{
}

include "conf.php";
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

if($ceik!==""){
	$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_datechecked_scrap']."=0, ".$GLOBALS['bg_estore']."='', ".$GLOBALS['bg_estorev2']."='', ".$GLOBALS['bg_estorev3']."='', ".$GLOBALS['bg_facebook']."='', ".$GLOBALS['bg_twitter']."='', ".$GLOBALS['bg_linkedin']."='', ".$GLOBALS['bg_google']."='', ".$GLOBALS['bg_youtube']."='', ".$GLOBALS['bg_pinterest']."='', ".$GLOBALS['bg_instagram']."='', ".$GLOBALS['bg_title']."='', ".$GLOBALS['bg_description']."='', ".$GLOBALS['bg_keywords']."='', ".$GLOBALS['bg_etitle']."='', ".$GLOBALS['bg_edescription']."='', ".$GLOBALS['bg_ekeywords']."='', ".$GLOBALS['bg_etitlev2']."='', ".$GLOBALS['bg_edescriptionv2']."='', ".$GLOBALS['bg_ekeywordsv2']."='', ".$GLOBALS['bg_etitlev3']."='', ".$GLOBALS['bg_edescriptionv3']."='', ".$GLOBALS['bg_ekeywordsv3']."='' WHERE ".$GLOBALS['bg_EIK']."='".$ceik."';";
	$result = mysql_query($sql);
	if($result){
		include_once "scrap.v3.php";
	}	
}
if($peik!==""){
	$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_estore_final']."='".$pestore_final."' WHERE ".$GLOBALS['bg_EIK']."='".$peik."';";
	echo $sql;
	$result = mysql_query($sql);
}

$sql="SELECT * FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_estore']."<>'' or ".$GLOBALS['bg_estorev2']."<>'' or ".$GLOBALS['bg_estorev3']."<>'' LIMIT ".($n).", ".($l)."";
$result = mysql_query($sql);
if($result){
	echo "<table width='100%'>";
		echo "<tr>";
		echo "<th>".$bg_navigation[7]."</th>";
		echo "<th>".$bg_navigation[8]."</th>";
		echo "<th>".$bg_navigation[9]."</th>";
		echo "<th>".$bg_navigation[14]."</th>";
		echo "<th>".$bg_navigation[10]."</th>";
		echo "<th>".$bg_navigation[11]."</th>";
		echo "<th>".$bg_navigation[12]."</th>";
		echo "<th>".$bg_navigation[13]."</th>";
		echo "</tr>";
	while ($row = mysql_fetch_assoc($result)) {
			if (strpos($row[$GLOBALS['bg_url_final_stop']], 'http') !== false) {
				$url=$row[$GLOBALS['bg_url_final_stop']];
			}else{
				$url="http://".$row[$GLOBALS['bg_url_final_stop']];				
			}
		$i++;
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row[$GLOBALS['bg_NAME']]."<br/>".$row[$GLOBALS['bg_EIK']]."<br/>".$row[$GLOBALS['bg_email']]."<br/><a href=\"http://".$row[$GLOBALS['bg_url']]."\" target=\"balnk\">".$row[$GLOBALS['bg_url']]."</a>";
		echo "<br/>".$row[$GLOBALS['bg_NACE']]."<br/>".$row[$GLOBALS['bg_OBL']]."<br/>".$row[$GLOBALS['bg_nuts']]."<br/>".$row[$GLOBALS['bg_ADR']]."<br/>".$row[$GLOBALS['bg_tel']]."<br/>".$row[$GLOBALS['bg_fax']]."<br/>".$row[$GLOBALS['bg_gsm']]."</td>";
		echo "<td><a href=\"".$url."\" target=\"blank\">".$url."</a>";
		echo urlpost($row[$GLOBALS['bg_EIK']]);
		echo "<br/>title: ".$row[$GLOBALS['bg_title']];
		echo "<br/>description: ".$row[$GLOBALS['bg_description']];
		echo "<br/>keywords: ".$row[$GLOBALS['bg_keywords']];
		echo "</td>";
		echo "<td>".estorepost_final($row[$GLOBALS['bg_EIK']],$row[$GLOBALS['bg_estore_final']])."<a href=\"".$row[$GLOBALS['bg_estore_final_stop']]."\" target=\"blank\">".$row[$GLOBALS['bg_estore_final_stop']]."</a></td>";
		echo "<td><a href=\"".$row[$GLOBALS['bg_estore']]."\" target=\"blank\">".$row[$GLOBALS['bg_estore']]."</a>".estorepost($row[$GLOBALS['bg_EIK']],$row[$GLOBALS['bg_estore']]);
		echo "<br/>title: ".$row[$GLOBALS['bg_etitle']];
		echo "<br/>description: ".$row[$GLOBALS['bg_edescription']];
		echo "<br/>keywords: ".$row[$GLOBALS['bg_ekeywords']];
		echo "</td>";
		echo "<td><a href=\"".$row[$GLOBALS['bg_estorev2']]."\" target=\"blank\">".$row[$GLOBALS['bg_estorev2']]."</a>".estorepost($row[$GLOBALS['bg_EIK']],$row[$GLOBALS['bg_estorev2']]);
		echo "<br/>title: ".$row[$GLOBALS['bg_etitlev2']];
		echo "<br/>description: ".$row[$GLOBALS['bg_edescriptionv2']];
		echo "<br/>keywords: ".$row[$GLOBALS['bg_ekeywordsv2']];
		echo "</td>";
		echo "<td><a href=\"".$row[$GLOBALS['bg_estorev3']]."\" target=\"blank\">".$row[$GLOBALS['bg_estorev3']]."</a>".estorepost($row[$GLOBALS['bg_EIK']],$row[$GLOBALS['bg_estorev3']]);
		echo "<br/>title: ".$row[$GLOBALS['bg_etitlev3']];
		echo "<br/>description: ".$row[$GLOBALS['bg_edescriptionv3']];
		echo "<br/>keywords: ".$row[$GLOBALS['bg_ekeywordsv3']];
		echo "</td>";
		echo "<td>";
		echo "facebook: <a href=\"".$row[$GLOBALS['bg_facebook']]."\">".$row[$GLOBALS['bg_facebook']]."</a></br>";
		echo "twitter: <a href=\"".$row[$GLOBALS['bg_twitter']]."\">".$row[$GLOBALS['bg_twitter']]."</a></br>";
		echo "linkedin: <a href=\"".$row[$GLOBALS['bg_linkedin']]."\">".$row[$GLOBALS['bg_linkedin']]."</a></br>";
		echo "google+: <a href=\"".$row[$GLOBALS['bg_google']]."\">".$row[$GLOBALS['bg_google']]."</a></br>";
		echo "youtube: <a href=\"".$row[$GLOBALS['bg_youtube']]."\">".$row[$GLOBALS['bg_youtube']]."</a></br>";
		echo "pinterest: <a href=\"".$row[$GLOBALS['bg_pinterest']]."\">".$row[$GLOBALS['bg_pinterest']]."</a></br>";
		echo "instagram: <a href=\"".$row[$GLOBALS['bg_instagram']]."\">".$row[$GLOBALS['bg_instagram']]."</a></br>";
		echo "</td>";
?>
<?php		
		echo "</tr>";
	}
	echo "</table>";
}


function urlpost($eik){
	global $bg_navigation;
	$r="";
	if($v!==""){
			$r="<form method=\"post\" action=\"".$_SERVER["REQUEST_URI"]."\">
  <input type=\"hidden\" name=\"eik1\" value=\"".$eik."\">
  <input type=\"submit\" value=\"".$bg_navigation[16]."\">
</form>";
	}
	return $r;
}

function estorepost($eik,$v){
	global $bg_navigation;
	$r="";
	if($v!==""){
			$r="<form method=\"post\" action=\"".$_SERVER["REQUEST_URI"]."\">
  <input type=\"hidden\" name=\"eik\" value=\"".$eik."\">
  <input type=\"hidden\" name=\"estore_final\" value=\"".$v."\">
  <input type=\"submit\" value=\"".$bg_navigation[17]."\">
</form>";
	}
	return $r;
}

function estorepost_final($eik,$v){
	global $bg_navigation;
	$r="";
//	if($v!==""){
			$r="<form method=\"post\" action=\"".$_SERVER["REQUEST_URI"]."\">
  <input type=\"hidden\" name=\"eik\" value=\"".$eik."\">
  <input type=\"text\" name=\"estore_final\" value=\"".$v."\" size=\"30\">
  <input type=\"submit\" value=\"".$bg_navigation[17]."\">
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