<?php include "conf.php";?>
<meta http-equiv="Refresh" content="<?php echo $bg_refreshrate;?>">
<?php


$link = mysql_connect($bg_host, $bg_user, $bg_password)
    or die($bg_noconnection);
mysql_select_db($bg_database) or die($bg_nodatabase);

if($bg_erase){
$result = mysql_query("UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_datechecked_scrap']."=".time().";");
$result = mysql_query("UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_estore']."='', ".$GLOBALS['bg_estorev2']."='', ".$GLOBALS['bg_estorev3']."='', ".$GLOBALS['bg_facebook']."='', ".$GLOBALS['bg_twitter']."='', ".$GLOBALS['bg_linkedin']."='', ".$GLOBALS['bg_google']."='', ".$GLOBALS['bg_youtube']."='', ".$GLOBALS['bg_pinterest']."='', ".$GLOBALS['bg_instagram']."='';");
$result = mysql_query("UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_title']."='', ".$GLOBALS['bg_description']."='', ".$GLOBALS['bg_keywords']."='', ".$GLOBALS['bg_etitle']."='', ".$GLOBALS['bg_edescription']."='', ".$GLOBALS['bg_ekeywords']."='', ".$GLOBALS['bg_etitlev2']."='', ".$GLOBALS['bg_edescriptionv2']."='', ".$GLOBALS['bg_ekeywordsv2']."='', ".$GLOBALS['bg_etitlev3']."='', ".$GLOBALS['bg_edescriptionv3']."='', ".$GLOBALS['bg_ekeywordsv3']."='';");
}


$sql="SELECT * FROM ".$GLOBALS['bg_table']." WHERE ".$GLOBALS['bg_url_final_stop']."<>'' ORDER BY ".$GLOBALS['bg_datechecked_scrap']." LIMIT 1";
$result = mysql_query($sql);
if($result){
	while ($row = mysql_fetch_assoc($result)) {
			$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_datechecked_scrap']."=".time()." WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
			$result1 = mysql_query($sql);
			if (strpos($row[$GLOBALS['bg_url_final_stop']], 'http') !== false) {
				$url=$row[$GLOBALS['bg_url_final_stop']];
			}else{
				$url="http://".$row[$GLOBALS['bg_url_final_stop']];				
			}

			
		echo "<h2>start: ".'<a href="'.$url.'" target="blank">'.$url."</a>"." ".mb_detect_encoding($data, mb_detect_order("UTF-8,CP1251,ASCII"), true)." ".$row[$GLOBALS['bg_EIK']]."</h2>";				
		$url1 = pathinfo($url);
		print_r($url1);	
		if($url1['dirname']!="http:" and $url1['dirname']!="https:"){
			$url=$url1['dirname'];
		}
		echo $url;	

				$data=getpage($url);

			if (strpos($data, 'The requested URL could not be retrieved') === false) {
		echo "<h2>final: ".'<a href="'.$url.'" target="blank">'.$url."</a>"." ".mb_detect_encoding($data, mb_detect_order("UTF-8,CP1251,ASCII"), true)." ".$row[$GLOBALS['bg_EIK']]."</h2>";				

				$dom=getdom($data);
				$meta=getmeta($dom,$row);
				getsocialmedia($dom,$row,$url);
				getestore($dom,$row,$url,$meta);
				$nnn=0;
				getestorev2($dom,$row,$url,$meta,$nnn);
				getestorev3($dom,$row,$url,$meta,$nnn);
			}
	}
}
function getdom($data){
				$dom = new DOMDocument;
				if(mb_detect_encoding($data, mb_detect_order("UTF-8,CP1251,ASCII"), true)=="UTF-8"){
				$dom->loadHTML(mb_convert_encoding($data, 'HTML-ENTITIES', "UTF-8"));
				}else{
				$dom->loadHTML($data);					
				}
	return $dom;
}

function getpage($url){
	echo $url;
			$data = requestUrl($url, $GLOBALS['bg_proxy']);

			preg_match('/\<script(.*)document\.location\.href\=(.*)\;/msU',$data,$matches);

			if(count($matches)>0) {
				$ttt=explode("document.location.href=",$matches[0]);
				$ttt=$ttt[1];
				$ttt=str_replace("'","",$ttt);
				$ttt=str_replace('"','',$ttt);
				$ttt=str_replace(";","",$ttt);
				if (strpos($ttt, 'http') !== false) {
					$href=$ttt;
				}else{
					$href=$url.$ttt;				
				}
				$href=str_replace("//","/",$href);
				$url=str_replace(":/","://",$href);

				echo "<h2>redirect: ".'<a href="'.$url.'" target="blank">'.$url."</a>"." ".mb_detect_encoding($data, mb_detect_order("UTF-8,CP1251,ASCII"), true)." ".$row[$GLOBALS['bg_EIK']]."</h2>";				

				$url = pathinfo($url);
				$url=$url['dirname'];	

				$opts = array('http' => array('proxy' => 'tcp://'.$GLOBALS['bg_proxy'], 'request_fulluri' => true));
				$context = stream_context_create($opts);
				$data = file_get_contents($url, false, $context);
			}
	return $data;
}	

//1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111	
function getmeta($dom,$row){
	$t="";
	$k="";
	$d="";
	foreach ($dom->getElementsByTagName('title') as $node){
		$t=$node->nodeValue;
		echo "<h1>ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt".$t."</h1>";
	}
	foreach ($dom->getElementsByTagName('meta') as $node){
		if (strpos($node->getAttribute("name"), 'description') !== false) {
			$d=$node->getAttribute('content');
			echo "<h2>ddddddddddddddddddddddddddddddddddd".$d."</h2>";
		}
		if (strpos($node->getAttribute("name"), 'keywords') !== false) {
			$k=$node->getAttribute('content');
			echo "<h2>kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk".$k."</h2>";
		}
	}
	$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_title']."='".$t."', ".$GLOBALS['bg_description']."='".$d."', ".$GLOBALS['bg_keywords']."='".$k."' WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
	$result1 = mysql_query($sql);
	return $t." ".$d." ".$k;
}	

//22222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222
function getmetav2($dom,$row){
	$t="";
	$k="";
	$d="";
	foreach ($dom->getElementsByTagName('title') as $node){
		$t=$node->nodeValue;
		echo "<h1>ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt".$t."</h1>";
	}
	foreach ($dom->getElementsByTagName('meta') as $node){
		if (strpos($node->getAttribute("name"), 'description') !== false) {
			$d=$node->getAttribute('content');
			echo "<h2>ddddddddddddddddddddddddddddddddddd".$d."</h2>";
		}
		if (strpos($node->getAttribute("name"), 'keywords') !== false) {
			$k=$node->getAttribute('content');
			echo "<h2>kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk".$k."</h2>";
		}
	}
//	$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_title']."='".$t."', ".$GLOBALS['bg_description']."='".$d."', ".$GLOBALS['bg_keywords']."='".$k."' WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
//	$result1 = mysql_query($sql);
	return $t." ".$d." ".$k;
}	

//33333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333
function getmetav3($dom,$row){
	$t="";
	$k="";
	$d="";
	foreach ($dom->getElementsByTagName('title') as $node){
		$t=$node->nodeValue;
		echo "<h1>ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt".$t."</h1>";
	}
	foreach ($dom->getElementsByTagName('meta') as $node){
		if (strpos($node->getAttribute("name"), 'description') !== false) {
			$d=$node->getAttribute('content');
			echo "<h2>ddddddddddddddddddddddddddddddddddd".$d."</h2>";
		}
		if (strpos($node->getAttribute("name"), 'keywords') !== false) {
			$k=$node->getAttribute('content');
			echo "<h2>kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk".$k."</h2>";
		}
	}
//	$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_title']."='".$t."', ".$GLOBALS['bg_description']."='".$d."', ".$GLOBALS['bg_keywords']."='".$k."' WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
//	$result1 = mysql_query($sql);
	return $t." ".$d." ".$k;
}	

//1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111	
function getmetae($dom,$row){
	$t="";
	$k="";
	$d="";
	foreach ($dom->getElementsByTagName('title') as $node){
		$t=$node->nodeValue;
		echo "<h1>ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttteeeeeeeeeeeeee11111111111111111".$t."</h1>";
	}
	foreach ($dom->getElementsByTagName('meta') as $node){
		if (strpos($node->getAttribute("name"), 'description') !== false) {
			$d=$node->getAttribute('content');
			echo "<h2>dddddddddddddddddddddddddddddddddddeeeeeeeeeeeeee11111111111111111".$d."</h2>";
		}
		if (strpos($node->getAttribute("name"), 'keywords') !== false) {
			$k=$node->getAttribute('content');
			echo "<h2>kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkeeeeeeeeeeeeee11111111111111111".$k."</h2>";
		}
	}
	$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_etitle']."='".$t."', ".$GLOBALS['bg_edescription']."='".$d."', ".$GLOBALS['bg_ekeywords']."='".$k."' WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
	$result1 = mysql_query($sql);
}

//22222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222
function getmetaev2($dom,$row){
	$t="";
	$k="";
	$d="";
	foreach ($dom->getElementsByTagName('title') as $node){
		$t=$node->nodeValue;
		echo "<h1>ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttteeeeeeeeeeeeeeeee2222222222222222222222".$t."</h1>";
	}
	foreach ($dom->getElementsByTagName('meta') as $node){
		if (strpos($node->getAttribute("name"), 'description') !== false) {
			$d=$node->getAttribute('content');
			echo "<h2>dddddddddddddddddddddddddddddddddddeeeeeeeeeeeeeeeee2222222222222222222222".$d."</h2>";
		}
		if (strpos($node->getAttribute("name"), 'keywords') !== false) {
			$k=$node->getAttribute('content');
			echo "<h2>kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkeeeeeeeeeeeeeeeee2222222222222222222222".$k."</h2>";
		}
	}
	$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_etitlev2']."='".$t."', ".$GLOBALS['bg_edescriptionv2']."='".$d."', ".$GLOBALS['bg_ekeywordsv2']."='".$k."' WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
	$result1 = mysql_query($sql);
	echo $sql;
}

//33333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333
function getmetaev3($dom,$row){
	$t="";
	$k="";
	$d="";
	foreach ($dom->getElementsByTagName('title') as $node){
		$t=$node->nodeValue;
		echo "<h1>ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttteeeeeeeeeeeeeeeee2222222222222222222222".$t."</h1>";
	}
	foreach ($dom->getElementsByTagName('meta') as $node){
		if (strpos($node->getAttribute("name"), 'description') !== false) {
			$d=$node->getAttribute('content');
			echo "<h2>dddddddddddddddddddddddddddddddddddeeeeeeeeeeeeeeeee2222222222222222222222".$d."</h2>";
		}
		if (strpos($node->getAttribute("name"), 'keywords') !== false) {
			$k=$node->getAttribute('content');
			echo "<h2>kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkeeeeeeeeeeeeeeeee2222222222222222222222".$k."</h2>";
		}
	}
	$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_etitlev3']."='".$t."', ".$GLOBALS['bg_edescriptionv3']."='".$d."', ".$GLOBALS['bg_ekeywordsv3']."='".$k."' WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
	$result1 = mysql_query($sql);
	echo $sql;
}

//1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111	
function getestore($dom,$row,$url,$meta){
	global $estore1,$estore2,$estorel;
				$vs="";
				$i=0;
				while (($r = $dom->getElementsByTagName("script")) && $r->length) {
					$r->item(0)->parentNode->removeChild($r->item(0));
				}
				while (($r = $dom->getElementsByTagName("style")) && $r->length) {
					$r->item(0)->parentNode->removeChild($r->item(0));
				}
	echo mb_strtolower($dom->textContent, "UTF-8");				
				foreach($estore2 as $es){
					if(strpos(mb_strtolower($dom->textContent, "UTF-8"),mb_strtolower(trim($es), "UTF-8"))!==false){
	echo mb_strtolower(trim($es), "UTF-8");						
						$i++;
					}
				}
				foreach ($dom->getElementsByTagName('meta') as $node){
					if (strpos($node->getAttribute("name"), 'generator') !== false) {
						foreach($estorel as $es){
							if(strpos(mb_strtolower(trim($node->getAttribute('content')), "UTF-8"),mb_strtolower(trim($es), "UTF-8"))!==false and $i>0){
								$domain=parse_url($url, PHP_URL_SCHEME)."://".parse_url($url, PHP_URL_HOST);
	echo $domain."zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz";
								echo $str.': '.urldecode($url)."<br/>";
								$vs=urldecode($url);
								break 2;
							}	
						}	
					}
				}
				foreach($estore1 as $es){
					if(strpos(mb_strtolower(trim($meta), "UTF-8"),mb_strtolower(trim($es), "UTF-8"))!==false and $i>0){
						$domain=parse_url($url, PHP_URL_SCHEME)."://".parse_url($url, PHP_URL_HOST);
	echo $domain."zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz";
						echo $str.': '.urldecode($url)."<br/>";
						$vs=urldecode($url);
						break;
					}
				}
				if($i>2){
						$domain=parse_url($url, PHP_URL_SCHEME)."://".parse_url($url, PHP_URL_HOST);
	echo $domain."zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz".$i;
						echo $str.': '.urldecode($url)."<br/>";
						$vs=urldecode($url);					
				}
			if($vs==""){
				foreach ($dom->getElementsByTagName('a') as $node){
					if (strpos($node->getAttribute("href"), 'http') !== false) {
						$href=$node->getAttribute("href");
					}else{
						$href=$url.$node->getAttribute("href");				
					}
					$href=str_replace("//","/",$href);
					$href=str_replace(":/","://",$href);
					$str="";
					if(trim($node->nodeValue)==""){
						$str=$node->getAttribute("title");
					}else{
						$str=$node->nodeValue;
					}
					foreach($estore1 as $es){
						if(strpos(mb_strtolower(trim($str), "UTF-8"),mb_strtolower(trim($es), "UTF-8"))!==false){
							$domain=parse_url($href, PHP_URL_SCHEME)."://".parse_url($href, PHP_URL_HOST);
	echo $domain."zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz";
							echo $str.': '.urldecode($href)." - ".urldecode($url)."<br/>";
							if(parse_url($href, PHP_URL_SCHEME)."://".parse_url($href, PHP_URL_HOST)==parse_url($url, PHP_URL_SCHEME)."://".parse_url($url, PHP_URL_HOST)){
								$vs=urldecode($url);
							}else{
								$vs=urldecode($href);
							}
							break 2;
						}
					}
				}
			}
			if($vs!=""){
				$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_estore']."='".$vs."' WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
				$result1 = mysql_query($sql);
	echo $sql;
				$data=getpage($vs);

			if (strpos($data, 'The requested URL could not be retrieved') === false) {
	echo "<h2>final: ".'<a href="'.$vs.'" target="blank">'.$vs."</a>"." ".mb_detect_encoding($data, mb_detect_order("UTF-8,CP1251,ASCII"), true)." ".$row[$GLOBALS['bg_EIK']]."</h2>";				

			
				$dom=getdom($data);
				getmetae($dom,$row);
			}
			}
}

//22222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222
function getestorev2($dom,$row,$url,$meta,$nnn){
	for($n=0;$n<100;$n++){echo $nnn;}
	global $estore1,$estore2,$estorel;
				$vs="";
				$i=0;
				while (($r = $dom->getElementsByTagName("script")) && $r->length) {
					$r->item(0)->parentNode->removeChild($r->item(0));
				}
				while (($r = $dom->getElementsByTagName("style")) && $r->length) {
					$r->item(0)->parentNode->removeChild($r->item(0));
				}
	echo mb_strtolower($dom->textContent, "UTF-8");				
				foreach($estore2 as $es){
					if(strpos(mb_strtolower($dom->textContent, "UTF-8"),mb_strtolower(trim($es), "UTF-8"))!==false){
	echo mb_strtolower(trim($es), "UTF-8");						
						$i++;
					}
				}
				foreach ($dom->getElementsByTagName('meta') as $node){
					if (strpos($node->getAttribute("name"), 'generator') !== false) {
						foreach($estorel as $es){
							if(strpos(mb_strtolower(trim($node->getAttribute('content')), "UTF-8"),mb_strtolower(trim($es), "UTF-8"))!==false and $i>0){
								$domain=parse_url($url, PHP_URL_SCHEME)."://".parse_url($url, PHP_URL_HOST);
	echo $domain."zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz";
								echo $str.': '.urldecode($url)."<br/>";
								$vs=urldecode($url);
								break 2;
							}	
						}	
					}
				}
				foreach($estore1 as $es){
					if(strpos(mb_strtolower(trim($meta), "UTF-8"),mb_strtolower(trim($es), "UTF-8"))!==false and $i>0){
						$domain=parse_url($url, PHP_URL_SCHEME)."://".parse_url($url, PHP_URL_HOST);
	echo $domain."zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz";
						echo $str.': '.urldecode($url)."<br/>";
						$vs=urldecode($url);
						break;
					}
				}
				if($i>2){
						$domain=parse_url($url, PHP_URL_SCHEME)."://".parse_url($url, PHP_URL_HOST);
	echo $domain."zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz".$i;
						echo $str.': '.urldecode($url)."<br/>";
						$vs=urldecode($url);					
				}
	echo '/'.$vs.' - '.$i.'/';
	echo '/'.$vs.' - '.$i.'/';
			if($vs!=""){
				$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_estorev2']."='".$vs."' WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
				$result1 = mysql_query($sql);
				echo $sql;
				$data=getpage($vs);

				if (strpos($data, 'The requested URL could not be retrieved') === false) {
					echo "<h2>final: ".'<a href="'.$vs.'" target="blank">'.$vs."</a>"." ".mb_detect_encoding($data, mb_detect_order("UTF-8,CP1251,ASCII"), true)." ".$row[$GLOBALS['bg_EIK']]."</h2>111111111";				
					$dom=getdom($data);
					getmetaev2($dom,$row);
				}
			}elseif($vs=="" and $nnn==0){
				foreach ($dom->getElementsByTagName('a') as $node){
					if (strpos($node->getAttribute("href"), 'http') !== false) {
						$href=$node->getAttribute("href");
					}else{
						$href=$url.$node->getAttribute("href");				
					}
					$href=str_replace("//","/",$href);
					$href=str_replace(":/","://",$href);
					$str="";
					if(trim($node->nodeValue)==""){
						$str=$node->getAttribute("title");
					}else{
						$str=$node->nodeValue;
					}
					foreach($estore1 as $es){
						if(strpos(mb_strtolower(trim($str), "UTF-8"),mb_strtolower(trim($es), "UTF-8"))!==false){
							$domain=parse_url($href, PHP_URL_SCHEME)."://".parse_url($href, PHP_URL_HOST);
	echo $domain."zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz";
							echo $str.': '.urldecode($href)." - ".urldecode($url)."<br/>";
								$vs=urldecode($href);
								$nnn++;
								$data=getpage($vs);
								if (strpos($data, 'The requested URL could not be retrieved') === false) {
									echo "<h2>final: ".'<a href="'.$vs.'" target="blank">'.$vs."</a>"." ".mb_detect_encoding($data, mb_detect_order("UTF-8,CP1251,ASCII"), true)." ".$row[$GLOBALS['bg_EIK']]."------------</h2>";				
									$dom=getdom($data);
									$meta=getmetav2($dom,$row);
									echo $meta;
									getestorev2($dom,$row,$vs,$meta,$nnn);
								}						
							break 2;
						}
					}
				}
			}
}	

//33333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333
function getestorev3($dom,$row,$url,$meta,$nnn){
	for($n=0;$n<100;$n++){echo $nnn;}
	global $estore1,$estore2,$estore3,$estore4,$estorel;
				$vs="";
				$i=0;
				$j=0;
				while (($r = $dom->getElementsByTagName("script")) && $r->length) {
					$r->item(0)->parentNode->removeChild($r->item(0));
				}
				while (($r = $dom->getElementsByTagName("style")) && $r->length) {
					$r->item(0)->parentNode->removeChild($r->item(0));
				}
	echo mb_strtolower($dom->textContent, "UTF-8");				
				foreach($estore3 as $es){
					if(strpos(mb_strtolower($dom->textContent, "UTF-8"),mb_strtolower(trim($es), "UTF-8"))!==false){
	echo mb_strtolower(trim($es), "UTF-8");						
						$j++;
					}
				}
				foreach($estore4 as $es){
					if(strpos(mb_strtolower($dom->textContent, "UTF-8"),mb_strtolower(trim($es), "UTF-8"))!==false){
	echo mb_strtolower(trim($es), "UTF-8");						
						$i++;
					}
				}
				foreach ($dom->getElementsByTagName('meta') as $node){
					if (strpos($node->getAttribute("name"), 'generator') !== false) {
						foreach($estorel as $es){
							if(strpos(mb_strtolower(trim($node->getAttribute('content')), "UTF-8"),mb_strtolower(trim($es), "UTF-8"))!==false and ($i>0 or $j>0)){
								$domain=parse_url($url, PHP_URL_SCHEME)."://".parse_url($url, PHP_URL_HOST);
	echo $domain."zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz";
								echo $str.': '.urldecode($url)."<br/>";
								$vs=urldecode($url);
								break 2;
							}	
						}	
					}
				}
				foreach($estore1 as $es){
					if(strpos(mb_strtolower(trim($meta), "UTF-8"),mb_strtolower(trim($es), "UTF-8"))!==false and ($i>0 or $j>0)){
						$domain=parse_url($url, PHP_URL_SCHEME)."://".parse_url($url, PHP_URL_HOST);
	echo $domain."zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz";
						echo $str.': '.urldecode($url)."<br/>";
						$vs=urldecode($url);
						break;
					}
				}
				if($j>0 and $i>1){
						$domain=parse_url($url, PHP_URL_SCHEME)."://".parse_url($url, PHP_URL_HOST);
	echo $domain."zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz --".$i." -- ".$j." -- ";
						echo $str.': '.urldecode($url)."<br/>";
						$vs=urldecode($url);					
				}
	echo '/'.$vs.' - '.$i.'/';
	echo '/'.$vs.' - '.$i.'/';
			if($vs!=""){
				$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_estorev3']."='".$vs."' WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
				$result1 = mysql_query($sql);
				echo $sql;
				$data=getpage($vs);

				if (strpos($data, 'The requested URL could not be retrieved') === false) {
					echo "<h2>final: ".'<a href="'.$vs.'" target="blank">'.$vs."</a>"." ".mb_detect_encoding($data, mb_detect_order("UTF-8,CP1251,ASCII"), true)." ".$row[$GLOBALS['bg_EIK']]."</h2>111111111";				
					$dom=getdom($data);
					getmetaev3($dom,$row);
				}
			}elseif($vs=="" and $nnn==0){
				foreach ($dom->getElementsByTagName('a') as $node){
					if (strpos($node->getAttribute("href"), 'http') !== false) {
						$href=$node->getAttribute("href");
					}else{
						$href=$url.$node->getAttribute("href");				
					}
					$href=str_replace("//","/",$href);
					$href=str_replace(":/","://",$href);
					$str="";
					if(trim($node->nodeValue)==""){
						$str=$node->getAttribute("title");
					}else{
						$str=$node->nodeValue;
					}
					foreach($estore1 as $es){
						if(strpos(mb_strtolower(trim($str), "UTF-8"),mb_strtolower(trim($es), "UTF-8"))!==false){
							$domain=parse_url($href, PHP_URL_SCHEME)."://".parse_url($href, PHP_URL_HOST);
	echo $domain."zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz";
							echo $str.': '.urldecode($href)." - ".urldecode($url)."<br/>";
								$vs=urldecode($href);
								$nnn++;
								$data=getpage($vs);
								if (strpos($data, 'The requested URL could not be retrieved') === false) {
									echo "<h2>final: ".'<a href="'.$vs.'" target="blank">'.$vs."</a>"." ".mb_detect_encoding($data, mb_detect_order("UTF-8,CP1251,ASCII"), true)." ".$row[$GLOBALS['bg_EIK']]."------------</h2>";				
									$dom=getdom($data);
									$meta=getmetav3($dom,$row);
									echo $meta;
									getestorev3($dom,$row,$vs,$meta,$nnn);
								}						
							break 2;
						}
					}
				}
			}
}	
	
	
function getsocialmedia($dom,$row,$url){
			$vf="";
			$vt="";
			$vl="";
			$vg="";
			$vy="";
			$vp="";
			$vi="";
				foreach ($dom->getElementsByTagName('a') as $node){
					if (strpos($node->getAttribute("href"), 'http') !== false) {
						$href=$node->getAttribute("href");
					}else{
						$href=$url.$node->getAttribute("href");				
					}
					$href=str_replace("//","/",$href);
					$href=str_replace(":/","://",$href);
					if(stripos($node->getAttribute("href"), 'facebook.com/') !== false and stripos($node->getAttribute("href"), 'facebook.com/share') === false){
	echo "zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz";
						$vf=urldecode($href);
					}
					if(stripos($node->getAttribute("href"), 'twitter.com/') !== false and stripos($node->getAttribute("href"), 'twitter.com/share') === false){
	echo "zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz";
						$vt=urldecode($href);
					}
					if(stripos($node->getAttribute("href"), 'linkedin.com/') !== false){
	echo "zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz";
						$vl=urldecode($href);
					}
					if(stripos($node->getAttribute("href"), 'plus.google.com/') !== false){
	echo "zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz";
						$vg=urldecode($href);
					}
					if(stripos($node->getAttribute("href"), 'youtube.com/channel/') !== false or stripos($node->getAttribute("href"), 'youtube.com/user/') !== false){
	echo "zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz";
						$vy=urldecode($href);
					}
					if(stripos($node->getAttribute("href"), 'pinterest.com/') !== false){
	echo "zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz";
						$vp=urldecode($href);
					}
					if(stripos($node->getAttribute("href"), 'instagram.com/') !== false){
	echo "zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz";
						$vi=urldecode($href);
					}
					if(trim($node->nodeValue)==""){
						echo $node->getAttribute("title").': '.urldecode($href)."<br/>";
					}else{
						echo $node->nodeValue.': '.urldecode($href)."<br/>";
					}
				}	
			$sql="UPDATE ".$GLOBALS['bg_table']." SET ".$GLOBALS['bg_facebook']."='".$vf."', ".$GLOBALS['bg_twitter']."='".$vt."', ".$GLOBALS['bg_linkedin']."='".$vl."', ".$GLOBALS['bg_google']."='".$vg."', ".$GLOBALS['bg_youtube']."='".$vy."', ".$GLOBALS['bg_pinterest']."='".$vp."', ".$GLOBALS['bg_instagram']."='".$vi."' WHERE ".$GLOBALS['bg_EIK']."='".$row[$GLOBALS['bg_EIK']]."';";
	echo $sql;			
			$result1 = mysql_query($sql);
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