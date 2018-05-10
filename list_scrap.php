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

if($peik!==""){
	$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_datechecked_scrap']."=0, ".$GLOBALS['bg_estore']."='', ".$GLOBALS['bg_estorev2']."='', ".$GLOBALS['bg_estorev3']."='', ".$GLOBALS['bg_facebook']."='', ".$GLOBALS['bg_twitter']."='', ".$GLOBALS['bg_linkedin']."='', ".$GLOBALS['bg_google']."='', ".$GLOBALS['bg_youtube']."='', ".$GLOBALS['bg_pinterest']."='', ".$GLOBALS['bg_instagram']."='', ".$GLOBALS['bg_title']."='', ".$GLOBALS['bg_description']."='', ".$GLOBALS['bg_keywords']."='', ".$GLOBALS['bg_etitle']."='', ".$GLOBALS['bg_edescription']."='', ".$GLOBALS['bg_ekeywords']."='', ".$GLOBALS['bg_etitlev2']."='', ".$GLOBALS['bg_edescriptionv2']."='', ".$GLOBALS['bg_ekeywordsv2']."='', ".$GLOBALS['bg_etitlev3']."='', ".$GLOBALS['bg_edescriptionv3']."='', ".$GLOBALS['bg_ekeywordsv3']."='' WHERE ".$GLOBALS['bg_EIK']."='".$peik."';";
	$result = mysql_query($sql);
	if($result){
		include_once "scrap.v3.php";
	}	
}

$sql="SELECT * FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_url_final']."<>'' LIMIT ".($n).", ".($l)."";
$result = mysql_query($sql);
if($result){
	echo "<table width='100%'>";
		echo "<tr>";
		echo "<th>".$bg_navigation[7]."</th>";
		echo "<th>".$bg_navigation[8]."</th>";
		echo "<th>".$bg_navigation[9]."</th>";
		echo "<th>".$bg_navigation[10]."</th>";
		echo "<th>".$bg_navigation[11]."</th>";
		echo "<th>".$bg_navigation[12]."</th>";
		echo "<th>".$bg_navigation[13]."</th>";
		echo "</tr>";
	while ($row = mysql_fetch_assoc($result)) {
		$i++;
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row["NAME"]."<br/>".$row["EIK"]."<br/>".$row["e_mail"]."<br/><a href=\"http://".$row["Web"]."\" target=\"blank\">".$row["Web"]."</a>";
		echo "<br/>".$row["KID4_08"]."<br/>".$row["OBL"]."</td>";
		echo "<td><a href=\"".$row[$GLOBALS['bg_url_final']]."\" target=\"blank\">".$row[$GLOBALS['bg_url_final']]."</a>";
		echo urlpost($row["EIK"]);
		echo "<br/>title: ".$row["title"];
		echo "<br/>description: ".$row["description"];
		echo "<br/>keywords: ".$row["keywords"];
		echo "</td>";
		echo "<td><a href=\"".$row["estore"]."\" target=\"blank\">".$row["estore"]."</a>";
		echo "<br/>title: ".$row["etitle"];
		echo "<br/>description: ".$row["edescription"];
		echo "<br/>keywords: ".$row["ekeywords"];
		echo "</td>";
		echo "<td><a href=\"".$row["estorev2"]."\" target=\"blank\">".$row["estorev2"]."</a>";
		echo "<br/>title: ".$row["etitlev2"];
		echo "<br/>description: ".$row["edescriptionv2"];
		echo "<br/>keywords: ".$row["ekeywordsv2"];
		echo "</td>";
		echo "<td><a href=\"".$row["estorev3"]."\" target=\"blank\">".$row["estorev3"]."</a>";
		echo "<br/>title: ".$row["etitlev3"];
		echo "<br/>description: ".$row["edescriptionv3"];
		echo "<br/>keywords: ".$row["ekeywordsv3"];
		echo "</td>";
		echo "<td>";
		echo "facebook: <a href=\"".$row["facebook"]."\">".$row["facebook"]."</a></br>";
		echo "twitter: <a href=\"".$row["twitter"]."\">".$row["twitter"]."</a></br>";
		echo "linkedin: <a href=\"".$row["linkedin"]."\">".$row["linkedin"]."</a></br>";
		echo "google+: <a href=\"".$row["google"]."\">".$row["google"]."</a></br>";
		echo "youtube: <a href=\"".$row["youtube"]."\">".$row["youtube"]."</a></br>";
		echo "pinterest: <a href=\"".$row["pinterest"]."\">".$row["pinterest"]."</a></br>";
		echo "instagram: <a href=\"".$row["instagram"]."\">".$row["instagram"]."</a></br>";
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
  <input type=\"hidden\" name=\"eik\" value=\"".$eik."\">
  <input type=\"submit\" value=\"".$bg_navigation[16]."\">
</form>";
	}
	return $r;
}



mysql_close($link);
?>
<br/>
<a href="<?php echo $_SERVER['PHP_SELF']."?n=".($n-$l)."&l=".$l;?>"><?php echo $bg_navigation[5];?></a>
<a href="<?php echo $_SERVER['PHP_SELF']."?n=".($n+$l)."&l=".$l;?>"><?php echo $bg_navigation[6];?></a>
</body>
</html>