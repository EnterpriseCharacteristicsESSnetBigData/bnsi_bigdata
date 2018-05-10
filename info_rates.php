<?php include "conf.php";?>
<meta charset="UTF-8"> 

<?php

$link = mysql_connect($bg_host, $bg_user, $bg_password)
    or die($bg_noconnection);
mysql_select_db($bg_database) or die($bg_nodatabase);

if(isset($_GET["l"])){
	if(!empty($_GET["l"])){
		$bg_lang=strtolower(strtoupper(filter_input(INPUT_GET, 'l', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH)));
	}else{
	}
}else{
}

$total=0;
$sql="SELECT count(".$GLOBALS['bg_EIK'].") as EIK FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_EIK']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		$total=$row["EIK"];
	}
}
$url=0;
$sql="SELECT count(".$GLOBALS['bg_url_final_stop'].") as url_final_stop FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_url_final_stop']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		$url=$row["url_final_stop"];
		echo "<br/>".$bg_info[$bg_lang][64].": ".round($row["url_final_stop"]/$total*100,1)." %<br/>";
	}
}


$estore=0;
$sql="SELECT count(".$GLOBALS['bg_estore_final_stop'].") as estore FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_estore_final_stop']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		$estore=$row["estore"];
	}
}
$sql="SELECT count(".$GLOBALS['bg_estore_lost'].") as estore FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_estore_lost']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/>".$bg_info[$bg_lang][65];
		echo "<ul>";
		echo "<li>".$bg_info[$bg_lang][69];
		echo "<br/>".$bg_info[$bg_lang][77].": ".round($estore/$total*100,1)."  %"." (".round($estore/$url*100,1)." %)";
		echo "<br/>".$bg_info[$bg_lang][78].": ".round(($row["estore"]*10+$estore)/$total*100,1)."  %"." (".round(($row["estore"]*10+$estore)/$url*100,1)." %)";
		echo "</li>";
		echo "<li>".$bg_info[$bg_lang][70];
		echo "</li>";
		echo "</ul>";
	}
}

$jobs=0;
$sql="SELECT count(".$GLOBALS['bg_jobs_final_stop'].") as jobs FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_jobs_final_stop']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		$jobs=$row["jobs"];
	}
}
$sql="SELECT count(".$GLOBALS['bg_jobs_lost'].") as jobs FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_jobs_lost']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/>".$bg_info[$bg_lang][66];
		echo "<ul>";
		echo "<li>".$bg_info[$bg_lang][69];
		echo "<br/>".$bg_info[$bg_lang][77].": ".round($jobs/$total*100,1)."  %"." (".round($jobs/$url*100,1)." %)";
		echo "<br/>".$bg_info[$bg_lang][78].": ".round(($row["jobs"]*10+$jobs)/$total*100,1)."  %"." (".round(($row["jobs"]*10+$jobs)/$url*100,1)." %)";
		echo "</li>";
		echo "<li>".$bg_info[$bg_lang][70];
		echo "</li>";
		echo "</ul>";
	}
}

$social=0;
$sql="SELECT count(".$GLOBALS['bg_EIK'].") as social FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_facebook']."<>'' or ".$GLOBALS['bg_twitter']."<>'' or ".$GLOBALS['bg_google']."<>'' or ".$GLOBALS['bg_linkedin']."<>'' or ".$GLOBALS['bg_youtube']."<>'' or ".$GLOBALS['bg_instagram']."<>'' or ".$GLOBALS['bg_pinterest']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		$social=$row["social"];
	}
}
$socialp=0;
$sql="SELECT count(distinct ".$GLOBALS['pl_EIK'].") as socialp FROM ".$GLOBALS['pl_social_media']." WHERE ".$GLOBALS['pl_facebook']."<>'' or ".$GLOBALS['pl_twitter']."<>'' or ".$GLOBALS['pl_google']."<>'' or ".$GLOBALS['pl_linkedin']."<>'' or ".$GLOBALS['pl_youtube']."<>'' or ".$GLOBALS['pl_instagram']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		$socialp=$row["socialp"];
	}
}
		echo "<br/>".$bg_info[$bg_lang][67];
		echo "<ul>";
		echo "<li>".$bg_info[$bg_lang][69];
		echo "<br/>".$bg_info[$bg_lang][53].": ".round($social/$total*100,1)."  %"." (".round($social/$url*100,1)." %)";
		echo "<br/>".$bg_info[$bg_lang][54].": ".round($socialp/$total*100,1)."  %"." (".round($socialp/$url*100,1)." %)";
		echo "</li>";
		echo "<li>".$bg_info[$bg_lang][70];
		echo "</li>";
		echo "</ul>";

		echo "<br/>".$bg_info[$bg_lang][68];

		echo "<br/><br/>".$bg_info[$bg_lang][79];
		echo "<ul>";
		echo "<li>".$bg_info[$bg_lang][69];
		echo "<br/>".$bg_info[$bg_lang][71].": ".round($sm["recruitment"]/$sm["total"]*100,1)."  %";
		echo "<br/>".$bg_info[$bg_lang][72].": ".round($sm["enterprise image"]/$sm["total"]*100,1)."  %";
		echo "<br/>".$bg_info[$bg_lang][73].": ".round($sm["commercials"]/$sm["total"]*100,1)."  %";
		echo "<br/>".$bg_info[$bg_lang][74].": ".round($sm["marketing"]/$sm["total"]*100,1)."  %";
		echo "<br/>".$bg_info[$bg_lang][75].": ".round($sm["others"]/$sm["total"]*100,1)."  %";
		echo "</li>";
		echo "<li>".$bg_info[$bg_lang][70];
		echo "</li>";
		echo "</ul>";

		
mysql_close($link);
?>

