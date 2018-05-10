<?php include "conf.php";?>
<?php

 class jabse_interface
 {
     var 
     //Public
       $jquery,//search query     
       $start=0,//start from result line No
       $start_numeric, //actual start line
       $perpage=50,//lines per page
       $rows, //total nuber of rows in result
       $cols, // number of columns in result
       $previous_page, //key for request for previous page
       $next_page, //key for request for next page
       $server_timestamp,
       $result=array(),
       $error_code=0, // Error codes: 1: $_GET[query] not set or too short
                     //              2: User key not found in database
                     //              3: Per hour limit exceeded
                     //              4: Charset not supported
                     //              5: Perpage value too high
                      //              6: Can not open url
     //Private
       $url="http://www.jabse.com/interface.php", //url of the jabse interface
       $charset='utf-8', //charset of the returned result. Supported values are windows-1251 and utf-8
       $siteid='0', // the id of your site, if you want to search only 1 site
       $serverkey=$GLOBALS['bg_jabse_apikey'], //the key you received at registration - should be sent with every query
       $retry_limit=1, // retries for opening the search url
       $handle, //file handle for the search url
       $EndOfControlMarker='#',
       $delimiter=',',
       $skip_bolding='false' //true to disable adding of <b></b> around found search words, false to enable
      ;
     
     //do not use constructor - may change some values before searching
     function jabse_search($jquery,$start)
     {
         $this->jquery=$jquery;
         $this->start=$start;

         //retry here    
         $this->send_search();
         
         if ($this->handle){
          $this->process_search();
         }else{
          $this->error_code=6;
		 }
		 return $this->result;
     }
     
     function process_search()
     {
       $contents = '';
       while (!feof($this->handle)) 
        {
         $contents .= fread($this->handle, 8192);
        }
       fclose($this->handle);
       $contents_array=explode("\n",$contents);    
       
       $status=explode(',',$contents_array[0]);    
       
       if ($status[0]=='0') //error
           $this->error_code=$status[1];
       else 
       {
            $this->rows=$status[2];
            $this->cols=$status[3];
            $this->previous_page=$status[6];
            $this->next_page=$status[7];
            $this->server_timestamp=$status[8];
            $this->start_numeric=$status[9];
            
            for ($cc=1;$cc<sizeof($contents_array)-1;$cc++)
            {
                //get control elements
                $markerpos=strpos($contents_array[$cc],$this->EndOfControlMarker);
                $control_arr=explode($this->delimiter,substr($contents_array[$cc],0,$markerpos));
                
               $this->result[$cc]['url']=substr($contents_array[$cc],$markerpos+1,$control_arr[0]);
               $this->result[$cc]['title']=substr($contents_array[$cc],$markerpos+1+$control_arr[0],$control_arr[1]);
               $this->result[$cc]['text']=substr($contents_array[$cc],$markerpos+1+$control_arr[0]+$control_arr[1],$control_arr[2]);
               $this->result[$cc]['docsizekb']=substr($contents_array[$cc],$markerpos+1+$control_arr[0]+$control_arr[1]+$control_arr[2],$control_arr[3]);
               $this->result[$cc]['datecreated']=substr($contents_array[$cc],$markerpos+1+$control_arr[0]+$control_arr[1]+$control_arr[2]+$control_arr[3],$control_arr[4]);
               $this->result[$cc]['datemodified']=substr($contents_array[$cc],$markerpos+1+$control_arr[0]+$control_arr[1]+$control_arr[2]+$control_arr[3]+$control_arr[4],$control_arr[5]);
               $this->result[$cc]['pagerating']=substr($contents_array[$cc],$markerpos+1+$control_arr[0]+$control_arr[1]+$control_arr[2]+$control_arr[3]+$control_arr[4]+$control_arr[5],$control_arr[6]);

            }//for
       }//else
       
       
     }//process_search()
     
     function send_search()
     {
         $url=$this->url."?jquery=".urlencode($this->jquery)."&start=".$this->start."&perpage=".$this->perpage."&charset=".$this->charset."&serverkey=".$this->serverkey."&siteid=".$this->siteid."&skip_bolding=".$this->skip_bolding;
         $retries=0;
echo "<br/>".$url;		 
         do 
         {

			$opts = array('http' => array('proxy' => 'tcp://'.$GLOBALS['bg_proxy'], 'request_fulluri' => true));
			$context = stream_context_create($opts);
          $this->handle=@fopen($url,"r",false,$context);

//          $this->handle=@fopen($url,"rb");
          $retries++;
         } while ((!$this->handle) && ($retries<$this->retry_limit));
         
     }//send search
     
     
 }//jabse_interface class ends
?> 