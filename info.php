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


$sql="SELECT count(".$GLOBALS['bg_EIK'].") as EIK FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_EIK']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/>".$bg_info[$bg_lang][33].$row["EIK"];
	}
}
$sql="SELECT SUM(".$GLOBALS['bg_oborot'].") as oborot FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_EIK']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/>".$bg_info[$bg_lang][34].$row["oborot"];
	}
}
$sql="SELECT SUM(".$GLOBALS['bg_employee'].") as zaeti FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_EIK']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/>".$bg_info[$bg_lang][35].$row["zaeti"];
	}
}
$sql="SELECT count(".$GLOBALS['bg_email'].") as e_mail FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_email']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/>".$bg_info[$bg_lang][36].$row["e_mail"];
	}
}
$sql="SELECT count(".$GLOBALS['bg_url'].") as Web FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_url']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/>".$bg_info[$bg_lang][37].$row["Web"];
	}
}
$sql="SELECT count(".$GLOBALS['bg_url_from_url'].") as url FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_url_from_url']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/>".$bg_info[$bg_lang][38].$row["url"];
	}
}
$sql="SELECT count(".$GLOBALS['bg_url_from_email'].") as url FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_url_from_email']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/>".$bg_info[$bg_lang][39].$row["url"];
	}
}
$sql="SELECT count(".$GLOBALS['bg_url_jabse_maybe_json'].") as url_jabse FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_url_jabse_maybe_json']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/>".$bg_info[$bg_lang][40].$row["url_jabse"];
	}
}
$sql="SELECT count(".$GLOBALS['bg_url_jabse_lat_maybe_json'].") as url_jabse_lat FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_url_jabse_lat_maybe_json']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/>".$bg_info[$bg_lang][41].$row["url_jabse_lat"];
	}
}

$sql="SELECT count(".$GLOBALS['bg_url_google_maybe'].") as url_google_meybe FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_url_google_maybe']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/>".$bg_info[$bg_lang][42].$row["url_google_meybe"];
	}
}

	$bing=0;
	$files = scandir("./UrlSearcher_results/txtFiles");
	foreach ($files as $file) {
		if (in_array($file, array(".",".."))) continue;
		$bing++;
	}
if($bing>0){
		echo "<br/>".$bg_info[$bg_lang][43].$bing;
}

$sql="SELECT count(".$GLOBALS['bg_url_old'].") as url_old FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_url_old']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/>".$bg_info[$bg_lang][44].$row["url_old"];
	}
}
$sql="SELECT count(".$GLOBALS['bg_url_final'].") as url_final FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_url_final']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<!--<p><b>".$bg_info[$bg_lang][46].$bg_info[$bg_lang][45].$row["url_final"]."</b></p>-->";
	}
}

$sql="SELECT count(".$GLOBALS['bg_url_final_stop'].") as url_final_stop FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_url_final_stop']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/><b>".$bg_info[$bg_lang][45].$row["url_final_stop"]."</b><br/>";
	}
}


$sql="SELECT count(".$GLOBALS['bg_estore'].") as estore FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_estore']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/>".$bg_info[$bg_lang][49]." 1: ".$row["estore"];
	}
}
$sql="SELECT count(".$GLOBALS['bg_estorev2'].") as estore FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_estorev2']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/>".$bg_info[$bg_lang][49]." 2: ".$row["estore"];
	}
}
$sql="SELECT count(".$GLOBALS['bg_estorev3'].") as estore FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_estorev3']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/>".$bg_info[$bg_lang][49]." 3: ".$row["estore"];
	}
}
$estore=0;
$sql="SELECT count(".$GLOBALS['bg_estore_final_stop'].") as estore FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_estore_final_stop']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/><b>".$bg_info[$bg_lang][47].$row["estore"]."</b>";
		$estore=$row["estore"];
	}
}
$sql="SELECT count(".$GLOBALS['bg_estore_final'].") as estore FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_estore_final']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<!--<b>".$bg_info[$bg_lang][46].$bg_info[$bg_lang][47].$row["estore"]."</b><br/>-->";
	}
}
$sql="SELECT count(".$GLOBALS['bg_estore_lost'].") as estore FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_estore_lost']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/>".$bg_info[$bg_lang][48].$row["estore"];
		echo "<br/><b>".$bg_info[$bg_lang][51].$estore."+".$row["estore"]."*10~=".($row["estore"]*10+$estore)."</b>";
	}
}


echo "<p><table border=\"1\">";
echo "<caption>".$bg_info[$bg_lang][50]."</caption>";
echo "<tr>";
echo "<th>".$bg_info[$bg_lang][52]."</th>";
echo "<th>Facebook</th>";
echo "<th>Twitter</th>";
echo "<th>Google Plus</th>";
echo "<th>Linkedin</th>";
echo "<th>Youtube</th>";
echo "<th>Instagram</th>";
echo "<th>Pinterest</th>";
echo "</tr>";
echo "<tr>";
echo "<th>".$bg_info[$bg_lang][53]."</th>";

$sql="SELECT count(".$GLOBALS['bg_facebook'].") as facebook FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_facebook']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<td>".$row["facebook"]."</td>";
	}
}
$sql="SELECT count(".$GLOBALS['bg_twitter'].") as twitter FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_twitter']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<td>".$row["twitter"]."</td>";
	}
}
$sql="SELECT count(".$GLOBALS['bg_google'].") as google FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_google']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<td>".$row["google"]."</td>";
	}
}
$sql="SELECT count(".$GLOBALS['bg_linkedin'].") as linkedin FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_linkedin']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<td>".$row["linkedin"]."</td>";
	}
}
$sql="SELECT count(".$GLOBALS['bg_youtube'].") as youtube FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_youtube']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<td>".$row["youtube"]."</td>";
	}
}
$sql="SELECT count(".$GLOBALS['bg_instagram'].") as instagram FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_instagram']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<td>".$row["instagram"]."</td>";
	}
}
$sql="SELECT count(".$GLOBALS['bg_pinterest'].") as pinterest FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_pinterest']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<td>".$row["pinterest"]."</td>";
	}
}

echo "</tr>";

//Polish software
echo "<tr>";
echo "<th>".$bg_info[$bg_lang][54]."</th>";

$sql="SELECT count(DISTINCT ".$GLOBALS['pl_EIK'].") as facebook FROM ".$GLOBALS['pl_social_media']." WHERE ".$GLOBALS['pl_facebook']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<td>".$row["facebook"]."</td>";
	}
}
$sql="SELECT count(DISTINCT ".$GLOBALS['pl_EIK'].") as twitter FROM ".$GLOBALS['pl_social_media']." WHERE ".$GLOBALS['pl_twitter']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<td>".$row["twitter"]."</td>";
	}
}
$sql="SELECT count(DISTINCT ".$GLOBALS['pl_EIK'].") as google FROM ".$GLOBALS['pl_social_media']." WHERE ".$GLOBALS['pl_google']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<td>".$row["google"]."</td>";
	}
}
$sql="SELECT count(DISTINCT ".$GLOBALS['pl_EIK'].") as linkedin FROM ".$GLOBALS['pl_social_media']." WHERE ".$GLOBALS['pl_linkedin']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<td>".$row["linkedin"]."</td>";
	}
}
$sql="SELECT count(DISTINCT ".$GLOBALS['pl_EIK'].") as youtube FROM ".$GLOBALS['pl_social_media']." WHERE ".$GLOBALS['pl_youtube']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<td>".$row["youtube"]."</td>";
	}
}
$sql="SELECT count(DISTINCT ".$GLOBALS['pl_EIK'].") as instagram FROM ".$GLOBALS['pl_social_media']." WHERE ".$GLOBALS['pl_instagram']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<td>".$row["instagram"]."</td>";
	}
}

echo "<td>-</td></tr>";
echo "</table></p>";


$sql="SELECT count(".$GLOBALS['bg_jobs'].") as jobs FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_jobs']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "".$bg_info[$bg_lang][55]." 1: ".$row["jobs"];
	}
}
$sql="SELECT count(".$GLOBALS['bg_jobsv2'].") as jobs FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_jobsv2']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/>".$bg_info[$bg_lang][55]." 2: ".$row["jobs"];
	}
}
$sql="SELECT count(".$GLOBALS['bg_jobsv3'].") as jobs FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_jobsv3']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/>".$bg_info[$bg_lang][55]." 3: ".$row["jobs"];
	}
}
$estore=0;
$sql="SELECT count(".$GLOBALS['bg_jobs_final_stop'].") as estore FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_jobs_final_stop']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/><b>".$bg_info[$bg_lang][56].$row["estore"]."</b>";
		$estore=$row["estore"];
	}
}
$sql="SELECT count(".$GLOBALS['bg_jobs_final'].") as estore FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_jobs_final']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<!--<br/><b>".$bg_info[$bg_lang][46].$bg_info[$bg_lang][56].$row["estore"]."</b>-->";
	}
}
$sql="SELECT count(".$GLOBALS['bg_jobs_lost'].") as estore FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_jobs_lost']."<>''";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		echo "<br/>".$bg_info[$bg_lang][57].$row["estore"];
		echo "<br/><b>".$bg_info[$bg_lang][58].$estore."+".$row["estore"]."*10~=".($row["estore"]*10+$estore)."</b>";
	}
}

mysql_close($link);
?>

<p>
<a href="info_rates.php?l=<?php echo $bg_lang;?>"><?php echo $bg_info[$bg_lang][76];?></a>
<br/>
<a href="info_district.php?l=<?php echo $bg_lang;?>"><?php echo $bg_info[$bg_lang][1];?></a>
<br/>
<a href="info_nace1.php?l=<?php echo $bg_lang;?>"><?php echo $bg_info[$bg_lang][24];?> - 1</a>
<br/>
<a href="info_nace2.php?l=<?php echo $bg_lang;?>"><?php echo $bg_info[$bg_lang][24];?> - 2</a>
<br/>
<a href="info_nace3.php?l=<?php echo $bg_lang;?>"><?php echo $bg_info[$bg_lang][24];?> - 3</a>
<br/>
<a href="info_nace4.php?l=<?php echo $bg_lang;?>"><?php echo $bg_info[$bg_lang][24];?> - 4</a>
<br/>
<a href="info.php?l=<?php if($bg_lang!="bg"){echo "bg";}else{echo "en";}?>">Български/English</a>
</p>
