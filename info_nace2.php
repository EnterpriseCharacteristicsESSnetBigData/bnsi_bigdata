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
$sql="SELECT DISTINCT ".$GLOBALS['bg_nace2'].", count(".$GLOBALS['bg_nace2'].") as kid, SUM(".$GLOBALS['bg_employee'].") as zaeti FROM ".$GLOBALS['bg_table']." GROUP BY ".$GLOBALS['bg_nace2']."";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		$i1+=$row["kid"];
		$e1+=$row["estore"];
		$z1+=$row["zaeti"];
		$arrk[]=$row[$GLOBALS['bg_nace2']];
		$arr[$row[$GLOBALS['bg_nace2']]]["t"]["k"]=$row["kid"];
		$arr[$row[$GLOBALS['bg_nace2']]]["t"]["z"]=$row["zaeti"];
	}
}
//URL/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$i2=0;
	$z2=0;
$sql="SELECT DISTINCT ".$GLOBALS['bg_nace2'].", count(".$GLOBALS['bg_nace2'].") as kid, SUM(".$GLOBALS['bg_employee'].") as zaeti FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_url_final_stop']."<>'' GROUP BY ".$GLOBALS['bg_nace2']."";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		$i2+=$row["kid"];
		$e2+=$row["estore"];
		$z2+=$row["zaeti"];
		$arr[$row[$GLOBALS['bg_nace2']]]["u"]["k"]=$row["kid"];
		$arr[$row[$GLOBALS['bg_nace2']]]["u"]["e"]=$row["estore"];
		$arr[$row[$GLOBALS['bg_nace2']]]["u"]["z"]=$row["zaeti"];
	}
}
//E-store/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$e3=0;
	$z3=0;
$sql="SELECT DISTINCT ".$GLOBALS['bg_nace2'].", count(".$GLOBALS['bg_estore_final_stop'].") as estore, SUM(".$GLOBALS['bg_employee'].") as zaeti FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_estore_final_stop']."<>'' GROUP BY ".$GLOBALS['bg_nace2']."";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		$e3+=$row["estore"];
		$z3+=$row["zaeti"];
		$arr[$row[$GLOBALS['bg_nace2']]]["u"]["e"]=$row["estore"];
		$arr[$row[$GLOBALS['bg_nace2']]]["u"]["z3"]=$row["zaeti"];
	}
}
//Social Media/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$e4=0;
	$z4=0;
$sql="SELECT DISTINCT ".$GLOBALS['bg_nace2'].", count(".$GLOBALS['bg_nace2'].") as socialmedia, SUM(".$GLOBALS['bg_employee'].") as zaeti FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_facebook']."<>'' OR ".$GLOBALS['bg_twitter']."<>'' OR ".$GLOBALS['bg_linkedin']."<>'' OR ".$GLOBALS['bg_google']."<>'' OR ".$GLOBALS['bg_youtube']."<>'' OR ".$GLOBALS['bg_pinterest']."<>'' OR ".$GLOBALS['bg_instagram']."<>'' GROUP BY ".$GLOBALS['bg_nace2']."";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		$e4+=$row["socialmedia"];
		$z4+=$row["zaeti"];
		$arr[$row[$GLOBALS['bg_nace2']]]["u"]["s"]=$row["socialmedia"];
		$arr[$row[$GLOBALS['bg_nace2']]]["u"]["z4"]=$row["zaeti"];
	}
}
//Jobs Advertising/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$e5=0;
	$z5=0;
$sql="SELECT DISTINCT ".$GLOBALS['bg_nace2'].", count(".$GLOBALS['bg_nace2'].") as jobs, SUM(".$GLOBALS['bg_employee'].") as zaeti FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_jobs_final_stop']."<>'' GROUP BY ".$GLOBALS['bg_nace2']."";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
		$e5+=$row["jobs"];
		$z5+=$row["zaeti"];
		$arr[$row[$GLOBALS['bg_nace2']]]["u"]["j"]=$row["jobs"];
		$arr[$row[$GLOBALS['bg_nace2']]]["u"]["z5"]=$row["zaeti"];
	}
}

$str="";
echo "<table border=1>";
	echo "<tr>";
	echo "<th colspan=\"2\">".$bg_info[$bg_lang][24]."</th>";
	echo "<th colspan=\"2\">".$bg_info[$bg_lang][2]."</th>";
	echo "<th colspan=\"4\">".$bg_info[$bg_lang][3]."</th>";
	echo "<th colspan=\"4\">".$bg_info[$bg_lang][4]."</th>";
	echo "<th colspan=\"4\">".$bg_info[$bg_lang][5]."</th>";
	echo "<th colspan=\"4\">".$bg_info[$bg_lang][59]."</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>".$bg_info[$bg_lang][31]."</th>";
	echo "<th>".$bg_info[$bg_lang][32]."</th>";
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
	$str.='[["Economic activity","'.$bg_info[$bg_lang][10].'","'.$bg_info[$bg_lang][11].'","'.$bg_info[$bg_lang][12].'","'.$bg_info[$bg_lang][13].'","'.$bg_info[$bg_lang][14].'","'.$bg_info[$bg_lang][15].'","'.$bg_info[$bg_lang][16].'","'.$bg_info[$bg_lang][17].'","'.$bg_info[$bg_lang][18].'","'.$bg_info[$bg_lang][19].'","'.$bg_info[$bg_lang][20].'","'.$bg_info[$bg_lang][21].'","'.$bg_info[$bg_lang][22].'","'.$bg_info[$bg_lang][23].'","'.$bg_info[$bg_lang][60].'","'.$bg_info[$bg_lang][61].'","'.$bg_info[$bg_lang][62].'","'.$bg_info[$bg_lang][63].'"],';
foreach($arrk as $k){
	echo "<tr>";
	echo "<td>".$bg_nace[$bg_lang][$k]."</td>";
	echo "<td>".$k."</td>";
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
	$str.='[{\'v\':\''.$k.'\',\'f\':\''.$k.' - '.$bg_nace[$bg_lang][$k].'\'},'.$arr[$k]["t"]["k"].','.$arr[$k]["t"]["z"].','.$arr[$k]["u"]["k"].','.$arr[$k]["u"]["z"].','.round(($arr[$k]["u"]["k"]/$arr[$k]["t"]["k"])*100,1).','.round(($arr[$k]["u"]["z"]/$arr[$k]["t"]["z"])*100,1).','.$arr[$k]["u"]["e"].','.$arr[$k]["u"]["z3"].','.round(($arr[$k]["u"]["e"]/$arr[$k]["t"]["k"])*100,1).','.round(($arr[$k]["u"]["z3"]/$arr[$k]["t"]["z"])*100,1).','.$arr[$k]["u"]["s"].','.$arr[$k]["u"]["z4"].','.round(($arr[$k]["u"]["s"]/$arr[$k]["t"]["k"])*100,1).','.round(($arr[$k]["u"]["z4"]/$arr[$k]["t"]["z"])*100,1).','.$arr[$k]["u"]["j"].','.$arr[$k]["u"]["z5"].','.round(($arr[$k]["u"]["j"]/$arr[$k]["t"]["k"])*100,1).','.round(($arr[$k]["u"]["z5"]/$arr[$k]["t"]["z"])*100,1).',],';
}
echo "<td colspan=\"2\">".$bg_info[$bg_lang][2]."</td><td>".$i1."</td><td>".$z1."</td><td>".$i2."</td><td>".$z2."</td><td>".round($i2/$i1*100,1)."</td><td>".round($z2/$z1*100,1)."</td><td>".$e3."</td><td>".$z3."</td><td>".round($e3/$i1*100,1)."</td><td>".round($z3/$z1*100,1)."</td><td>".$e4."</td><td>".$z4."</td><td>".round($e4/$i1*100,1)."</td><td>".round($z4/$z1*100,1)."</td><td>".$e5."</td><td>".$z5."</td><td>".round($e5/$i1*100,1)."</td><td>".round($z5/$z1*100,1)."</td>";
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

      var view = new google.visualization.DataView(data);
      view.setColumns([0,1,					 
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },3,
                       { calc: "stringify",
                         sourceColumn: 3,
                         type: "string",
                         role: "annotation" },7,
                       { calc: "stringify",
                         sourceColumn: 7,
                         type: "string",
                         role: "annotation" },11,
                       { calc: "stringify",
                         sourceColumn: 11,
                         type: "string",
                         role: "annotation" },15,
                       { calc: "stringify",
                         sourceColumn: 15,
                         type: "string",
                         role: "annotation" }					 
						 ]);
      view.setColumns([0,1,3,7,11,15]);

      var options = {
        title: "<?php echo $bg_info[$bg_lang][25];?>",
		hAxis: {title: '<?php echo $bg_info[$bg_lang][24];?>'},
		vAxis: {title: '<?php echo $bg_info[$bg_lang][29];?>'},
        width: 1000,
        height: 600,
        bar: {groupWidth: "80%"},
        legend: { position: "bottom" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values0"));
      chart.draw(view, options);

	        var view = new google.visualization.DataView(data);
      view.setColumns([0,2,					 
                       { calc: "stringify",
                         sourceColumn: 2,
                         type: "string",
                         role: "annotation" },4,
                       { calc: "stringify",
                         sourceColumn: 4,
                         type: "string",
                         role: "annotation" },8,
                       { calc: "stringify",
                         sourceColumn: 8,
                         type: "string",
                         role: "annotation" },12,
                       { calc: "stringify",
                         sourceColumn: 12,
                         type: "string",
                         role: "annotation" },16,
                       { calc: "stringify",
                         sourceColumn: 16,
                         type: "string",
                         role: "annotation" }					 
						 ]);
      view.setColumns([0,2,4,8,12,16]);

      var options = {
        title: "<?php echo $bg_info[$bg_lang][26];?>",
		hAxis: {title: '<?php echo $bg_info[$bg_lang][24];?>'},
		vAxis: {title: '<?php echo $bg_info[$bg_lang][29];?>'},
        width: 1000,
        height: 600,
        bar: {groupWidth: "80%"},
        legend: { position: "bottom" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values1"));
      chart.draw(view, options);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 5,
                       { calc: "stringify",
                         sourceColumn: 5,
                         type: "string",
                         role: "annotation" },9,
                       { calc: "stringify",
                         sourceColumn: 9,
                         type: "string",
                         role: "annotation" },13,
                       { calc: "stringify",
                         sourceColumn: 13,
                         type: "string",
                         role: "annotation" },17,
                       { calc: "stringify",
                         sourceColumn: 17,
                         type: "string",
                         role: "annotation" }					 
						 ]);
      view.setColumns([0,5,9,13,17]);

      var options = {
        title: "<?php echo $bg_info[$bg_lang][27];?>",
		hAxis: {title: '<?php echo $bg_info[$bg_lang][24];?>'},
		vAxis: {title: '<?php echo $bg_info[$bg_lang][30];?>'},
        width: 1000,
        height: 400,
        bar: {groupWidth: "80%"},
        legend: { position: "bottom" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values2"));
      chart.draw(view, options);

	  
	  var view = new google.visualization.DataView(data);
      view.setColumns([0, 6,
                       { calc: "stringify",
                         sourceColumn: 6,
                         type: "string",
                         role: "annotation" },10,
                       { calc: "stringify",
                         sourceColumn: 10,
                         type: "string",
                         role: "annotation" },14,
                       { calc: "stringify",
                         sourceColumn: 14,
                         type: "string",
                         role: "annotation" },18,
                       { calc: "stringify",
                         sourceColumn: 18,
                         type: "string",
                         role: "annotation" }					 
						 ]);
      view.setColumns([0,6,10,14,18]);

      var options = {
        title: "<?php echo $bg_info[$bg_lang][28];?>",
		hAxis: {title: '<?php echo $bg_info[$bg_lang][24];?>'},
		vAxis: {title: '<?php echo $bg_info[$bg_lang][30];?>'},
        width: 1000,
        height: 400,
        bar: {groupWidth: "80%"},
        legend: { position: "bottom" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values3"));
      chart.draw(view, options);

	  
	}
  </script>
<div id="columnchart_values0" style="width: 1000px; height: 600px;"></div>
<div id="columnchart_values1" style="width: 1000px; height: 600px;"></div>
<div id="columnchart_values2" style="width: 1000px; height: 400px;"></div>
<div id="columnchart_values3" style="width: 1000px; height: 400px;"></div>



<?php
mysql_close($link);
?>