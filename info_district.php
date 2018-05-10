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

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$arr=array();
$arrk=array();

//Total/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$arr=array();
$arrk=array();
	$i1=0;
	$z1=0;
$sql="SELECT DISTINCT ".$GLOBALS['bg_district'].", count(".$GLOBALS['bg_district'].") as kid, SUM(".$GLOBALS['bg_employee'].") as zaeti FROM ".$GLOBALS['bg_table']." GROUP BY ".$GLOBALS['bg_district']."";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		$i1+=$row["kid"];
		$e1+=$row["estore"];
		$z1+=$row["zaeti"];
		$arrk[]=$row[$GLOBALS['bg_district']];
		$arr[$row[$GLOBALS['bg_district']]]["t"]["k"]=$row["kid"];
		$arr[$row[$GLOBALS['bg_district']]]["t"]["z"]=$row["zaeti"];
	}
}
//URL/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$i2=0;
	$z2=0;
$sql="SELECT DISTINCT ".$GLOBALS['bg_district'].", count(".$GLOBALS['bg_district'].") as kid, SUM(".$GLOBALS['bg_employee'].") as zaeti FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_url_final_stop']."<>'' GROUP BY ".$GLOBALS['bg_district']."";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		$i2+=$row["kid"];
		$e2+=$row["estore"];
		$z2+=$row["zaeti"];
		$arr[$row[$GLOBALS['bg_district']]]["u"]["k"]=$row["kid"];
		$arr[$row[$GLOBALS['bg_district']]]["u"]["e"]=$row["estore"];
		$arr[$row[$GLOBALS['bg_district']]]["u"]["z"]=$row["zaeti"];
	}
}
//E-store/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$e3=0;
	$z3=0;
$sql="SELECT DISTINCT ".$GLOBALS['bg_district'].", count(".$GLOBALS['bg_estore_final_stop'].") as estore, SUM(".$GLOBALS['bg_employee'].") as zaeti FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_estore_final_stop']."<>'' GROUP BY ".$GLOBALS['bg_district']."";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		$e3+=$row["estore"];
		$z3+=$row["zaeti"];
		$arr[$row[$GLOBALS['bg_district']]]["u"]["e"]=$row["estore"];
		$arr[$row[$GLOBALS['bg_district']]]["u"]["z3"]=$row["zaeti"];
	}
}
//Social Media/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$e4=0;
	$z4=0;
$sql="SELECT DISTINCT ".$GLOBALS['bg_district'].", count(".$GLOBALS['bg_district'].") as socialmedia, SUM(".$GLOBALS['bg_employee'].") as zaeti FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_facebook']."<>'' OR ".$GLOBALS['bg_twitter']."<>'' OR ".$GLOBALS['bg_linkedin']."<>'' OR ".$GLOBALS['bg_google']."<>'' OR ".$GLOBALS['bg_youtube']."<>'' OR ".$GLOBALS['bg_pinterest']."<>'' OR ".$GLOBALS['bg_instagram']."<>'' GROUP BY ".$GLOBALS['bg_district']."";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		$e4+=$row["socialmedia"];
		$z4+=$row["zaeti"];
		$arr[$row[$GLOBALS['bg_district']]]["u"]["s"]=$row["socialmedia"];
		$arr[$row[$GLOBALS['bg_district']]]["u"]["z4"]=$row["zaeti"];
	}
}
//Jobs Advertising/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$e5=0;
	$z5=0;
$sql="SELECT DISTINCT ".$GLOBALS['bg_district'].", count(".$GLOBALS['bg_district'].") as jobs, SUM(".$GLOBALS['bg_employee'].") as zaeti FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_jobs_final_stop']."<>'' GROUP BY ".$GLOBALS['bg_district']."";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		$e5+=$row["jobs"];
		$z5+=$row["zaeti"];
		$arr[$row[$GLOBALS['bg_district']]]["u"]["j"]=$row["jobs"];
		$arr[$row[$GLOBALS['bg_district']]]["u"]["z5"]=$row["zaeti"];
	}
}

$str="";
echo "<table id=\"tabled\" border=1>";
	echo "<tr>";
	echo "<th rowspan=\"2\">".$bg_info[$bg_lang][1]."</th>";
	echo "<th colspan=\"2\">".$bg_info[$bg_lang][2]."</th>";
	echo "<th colspan=\"4\">".$bg_info[$bg_lang][3]."</th>";
	echo "<th colspan=\"4\">".$bg_info[$bg_lang][4]."</th>";
	echo "<th colspan=\"4\">".$bg_info[$bg_lang][5]."</th>";
	echo "<th colspan=\"4\">".$bg_info[$bg_lang][59]."</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>".$bg_info[$bg_lang][6]."</th>";
	echo "<th>".$bg_info[$bg_lang][7]."</th>";
	echo "<th>".$bg_info[$bg_lang][6]."</th>";
	echo "<th>".$bg_info[$bg_lang][7]."</th>";
	echo "<th>".$bg_info[$bg_lang][8]."</th>";
	echo "<th>".$bg_info[$bg_lang][9]."</th>";
	echo "<th>".$bg_info[$bg_lang][6]."</th>";
	echo "<th>".$bg_info[$bg_lang][7]."</th>";
	echo "<th>".$bg_info[$bg_lang][8]."</th>";
	echo "<th>".$bg_info[$bg_lang][9]."</th>";
	echo "<th>".$bg_info[$bg_lang][6]."</th>";
	echo "<th>".$bg_info[$bg_lang][7]."</th>";
	echo "<th>".$bg_info[$bg_lang][8]."</th>";
	echo "<th>".$bg_info[$bg_lang][9]."</th>";
	echo "<th>".$bg_info[$bg_lang][6]."</th>";
	echo "<th>".$bg_info[$bg_lang][7]."</th>";
	echo "<th>".$bg_info[$bg_lang][8]."</th>";
	echo "<th>".$bg_info[$bg_lang][9]."</th>";
	echo "</tr>";
	$str.='[["Districts","'.$bg_info[$bg_lang][10].'","'.$bg_info[$bg_lang][11].'","'.$bg_info[$bg_lang][12].'","'.$bg_info[$bg_lang][13].'","'.$bg_info[$bg_lang][14].'","'.$bg_info[$bg_lang][15].'","'.$bg_info[$bg_lang][16].'","'.$bg_info[$bg_lang][17].'","'.$bg_info[$bg_lang][18].'","'.$bg_info[$bg_lang][19].'","'.$bg_info[$bg_lang][20].'","'.$bg_info[$bg_lang][21].'","'.$bg_info[$bg_lang][22].'","'.$bg_info[$bg_lang][23].'","'.$bg_info[$bg_lang][60].'","'.$bg_info[$bg_lang][61].'","'.$bg_info[$bg_lang][62].'","'.$bg_info[$bg_lang][63].'"],';
foreach($arrk as $k){
	echo "<tr>";
	echo "<td>".$bg_dis[$bg_lang][$k]."</td>";
	echo "<td>".$arr[$k]["t"]["k"]."</td>";
	echo "<td>".$arr[$k]["t"]["z"]."</td>";
	echo "<td>".$arr[$k]["u"]["k"]."</td>";
	echo "<td>".$arr[$k]["u"]["z"]."</td>";
	echo "<td>".round(($arr[$k]["u"]["k"]/$arr[$k]["t"]["k"])*100,1)."</td>";
	echo "<td>".round(($arr[$k]["u"]["z"]/$arr[$k]["t"]["z"])*100,1)."</td>";
	echo "<td>".$arr[$k]["u"]["e"]."</td>";
	echo "<td>".$arr[$k]["u"]["z3"]."</td>";
	echo "<td>".round(($arr[$k]["u"]["e"]/$arr[$k]["t"]["k"])*100,1)."</td>";
	echo "<td>".round(($arr[$k]["u"]["z3"]/$arr[$k]["t"]["z"])*100,1)."</td>";
	echo "<td>".$arr[$k]["u"]["s"]."</td>";
	echo "<td>".$arr[$k]["u"]["z4"]."</td>";
	echo "<td>".round(($arr[$k]["u"]["s"]/$arr[$k]["t"]["k"])*100,1)."</td>";
	echo "<td>".round(($arr[$k]["u"]["z4"]/$arr[$k]["t"]["z"])*100,1)."</td>";
	echo "<td>".$arr[$k]["u"]["j"]."</td>";
	echo "<td>".$arr[$k]["u"]["z5"]."</td>";
	echo "<td>".round(($arr[$k]["u"]["j"]/$arr[$k]["t"]["k"])*100,1)."</td>";
	echo "<td>".round(($arr[$k]["u"]["z5"]/$arr[$k]["t"]["z"])*100,1)."</td>";
	echo "</tr>";
	$str.='[{\'v\':\''.$bg_disl[$k].'\',\'f\':\''.$bg_dis[$bg_lang][$k].'\'},'.$arr[$k]["t"]["k"].','.$arr[$k]["t"]["z"].','.$arr[$k]["u"]["k"].','.$arr[$k]["u"]["z"].','.round(($arr[$k]["u"]["k"]/$arr[$k]["t"]["k"])*100,1).','.round(($arr[$k]["u"]["z"]/$arr[$k]["t"]["z"])*100,1).','.$arr[$k]["u"]["e"].','.$arr[$k]["u"]["z3"].','.round(($arr[$k]["u"]["e"]/$arr[$k]["t"]["k"])*100,1).','.round(($arr[$k]["u"]["z3"]/$arr[$k]["t"]["z"])*100,1).','.$arr[$k]["u"]["s"].','.$arr[$k]["u"]["z4"].','.round(($arr[$k]["u"]["s"]/$arr[$k]["t"]["k"])*100,1).','.round(($arr[$k]["u"]["z4"]/$arr[$k]["t"]["z"])*100,1).','.$arr[$k]["u"]["j"].','.$arr[$k]["u"]["z5"].','.round(($arr[$k]["u"]["j"]/$arr[$k]["t"]["k"])*100,1).','.round(($arr[$k]["u"]["z5"]/$arr[$k]["t"]["z"])*100,1).',],';
}
echo "<td>".$bg_info[$bg_lang][2]."</td><td>".$i1."</td><td>".$z1."</td><td>".$i2."</td><td>".$z2."</td><td>".round($i2/$i1*100,1)."</td><td>".round($z2/$z1*100,1)."</td><td>".$e3."</td><td>".$z3."</td><td>".round($e3/$i1*100,1)."</td><td>".round($z3/$z1*100,1)."</td><td>".$e4."</td><td>".$z4."</td><td>".round($e4/$i1*100,1)."</td><td>".round($z4/$z1*100,1)."</td><td>".$e5."</td><td>".$z5."</td><td>".round($e5/$i1*100,1)."</td><td>".round($z5/$z1*100,1)."</td>";
echo "</table>";
$str.="]";
$str=str_replace(",]","]",$str);

?>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable(<?php echo $str; ?>);
		var str="";
	  for(i=1;i<document.getElementById('tabled').rows[1].cells.length+1;i++){
		  str+='<p><h3>'+data.getColumnLabel(i)+'</h3><div id="columnchart_values'+i+'" style="width: 1000px; height: 600px;"></div></p>';
	  }
	  document.getElementById('columnchart_values0').innerHTML = str;
	  
      var options = {
        region:'BG',
        resolution:'provinces',
		backgroundColor: '#F3F8FB',
		datalessRegionColor :'#F5F5F5',
		colors: ['#EEE7D8', '#580004']
	  };
	  var view=new Array();
	  var chart=new Array();
	  for(i=1;i<document.getElementById('tabled').rows[1].cells.length+1;i++){
      view[i] = new google.visualization.DataView(data);
      view[i].setColumns([0,i]);
      chart[i] = new google.visualization.GeoChart(document.getElementById("columnchart_values"+i));
      chart[i].draw(view[i], options);
	  }


	}

  </script>
  
<div id="columnchart_values0" style="width: 1000px; height: 600px;"></div>

<?php
mysql_close($link);
?>

