<?php

	/*_______________________________________________________________________________________________________________________________________
	*
	insert function start here
	**/
function insert_action($table,$columns,$request,$requestNames,$testing,$conn){

	$requestCount=count($requestNames);########################################/* form field count here */
	for($rc=0;$rc<$requestCount;$rc++){

		if($request[$requestNames[$rc]]!=""){
			$requestVals[]=$request[$requestNames[$rc]]; ######################/* Request array have values here
		}else{
			$requestVals[]=$requestNames[$rc];			 ######################/* Custom variables values here
		}
	}
		$final_columns=implode(',',$columns);
		$final_requests=implode("','",$requestVals);

		############### testing output section ################
		if($testing){

		/*
		#	function parameter checking start
		*/
			echo "form field count  : ".$requestCount.'<br>';

			if(count($columns)!=count($requestNames)){
				echo "<p style='color:red'>Your table columns count :".count($columns).'</p>';
				echo "<p style='color:red'>Your insert values count :".count($requestNames).'</p>';
			}else{
				echo "<p style='color:green'>table columns count && Your insert values count are same. Both count :".count($columns).'</p>';
			}

			$html_table='<style>td{border: 1px solid green;}</style>
			<table><tr><td>Table columns</td><td>Form data</td></tr>';

			for($i=0;$i<count($columns);$i++){
				$html_table.='<tr><td>'.$columns[$i].'</td><td>'.$requestVals[$i].'</td></tr>';
			}

			$html_table.='</table>';
			echo $html_table;
			/*
			#	function parameter checking close
			*/

			/*
			#	table  existing checking start
			*/

			if(empty($table)){
			echo "<p style='color:red'>your table variable empty.Go to check table variable.</p>";
			}else{
				echo "<p style='color:green'>Table variable had name</p>";
				if(mysqli_num_rows(mysqli_query($conn,"SHOW TABLES LIKE '$table'"))==1){
					echo "<p style='color:green'>Your database had '$table' table.</p>";
				}else{
					echo "<p style='color:red'>Your database don't have '$table' table.</p>";
				}
			}
			/*
			#	table  existing checking close
			*/


			/*
			#	table coulmns existing checking start
			*/
			$columnsCount=count($columns);
			for($a=0;$a<$columnsCount;$a++){

				$exist_columns=mysqli_query($conn,"SHOW COLUMNS FROM $table LIKE '$columns[$a]'");
				#var_dump(mysql_fetch_array($exist_columns));
				$exist_columns_count=mysqli_num_rows($exist_columns);
				#echo "SHOW COLUMNS FROM $table LIKE '$columns[$a]'<br>";
				if($exist_columns_count==0){
					echo "<p style='color:red'>Your table don't have '$columns[$a]' column.</p>";
				}else{
					#echo "COLUMNS ARE EXIST<br>";
				}
			}
			/*
			#	table coulmns existing checking close
			*/

			/*
			#	testing final output section start
			*/
			echo "Your output final insert query below here<br>";
			echo "<p style='color:red'>insert into $table ($final_columns) values('$final_requests')</p>";
			echo "<p style='color:green'>Now no insert query is executed.If everything is ok,Assgin testing variable false value and insert query is executed.</p>";
			return;
			/*
			#	testing final output section close
			*/
		}else{
			$insertOUTPUT=mysqli_query($conn,"insert into $table ($final_columns) values('$final_requests')") or die("insert failed");
			return $insertOUTPUT;
		}
		############### testing output section ################

	}
	/*
	*________________________________________________________________________________________________________________________________________
	insert function close here
	**/
	/*
	*________________________________________________________________________________________________________________________________________
	update function start here
	**/
	function update_action($table,$columns,$request,$requestNames,$condition,$testing){
		$requestCount=count($requestNames);########################################/* form field count here */
		for($rc=0;$rc<$requestCount;$rc++){

			if($request[$requestNames[$rc]]!=""){
				$requestVals[]=$request[$requestNames[$rc]]; ######################/* Request array have values here
			}else{
				$requestVals[]=$requestNames[$rc];			 ######################/* Custom variables values here
			}
			$query_data[]=$columns[$rc]."='".$requestVals[$rc];
		}
		$query_data=implode(',',$query_data);
		$query_data=str_replace(",","',",$query_data);
		$query_data=$query_data."'";
		############### testing output section ################
		if($testing){

		/*
		#	function parameter checking start
		*/
			echo "form field count  : ".$requestCount.'<br>';

			if(count($columns)!=count($requestNames)){
				echo "<p style='color:red'>Your table columns count :".count($columns).'</p>';
				echo "<p style='color:red'>Your insert values count :".count($requestNames).'</p>';
			}else{
				echo "<p style='color:green'>table columns count && Your insert values count are same. Both count :".count($columns).'</p>';
			}

			$html_table='<style>td{border: 1px solid green;}</style>
			<table><tr><td>Table columns</td><td>Form data</td></tr>';

			for($i=0;$i<count($columns);$i++){
				$html_table.='<tr><td>'.$columns[$i].'</td><td>'.$requestVals[$i].'</td></tr>';
			}

			$html_table.='</table>';
			echo $html_table;
			/*
			#	function parameter checking close
			*/

			/*
			#	table  existing checking start
			*/

			if(empty($table)){
			echo "<p style='color:red'>your table variable empty.Go to check table variable.</p>";
			}else{
				echo "<p style='color:green'>Table variable had name</p>";
				if(mysql_num_rows(mysql_query("SHOW TABLES LIKE '$table'"))==1){
					echo "<p style='color:green'>Your database had '$table' table.</p>";
				}else{
					echo "<p style='color:red'>Your database don't have '$table' table.</p>";
				}
			}
			/*
			#	table  existing checking close
			*/


			/*
			#	table coulmns existing checking start
			*/
			$columnsCount=count($columns);
			for($a=0;$a<$columnsCount;$a++){

				$exist_columns=mysql_query("SHOW COLUMNS FROM $table LIKE '$columns[$a]'");
				#var_dump(mysql_fetch_array($exist_columns));
				$exist_columns_count=mysql_num_rows($exist_columns);
				#echo "SHOW COLUMNS FROM $table LIKE '$columns[$a]'<br>";
				if($exist_columns_count==0){
					echo "<p style='color:red'>Your table don't have '$columns[$a]' column.</p>";
				}else{
					#echo "COLUMNS ARE EXIST<br>";
				}
			}
			/*
			#	table coulmns existing checking close
			*/

			/*
			#	testing final output section start
			*/
			echo "Your output final insert query below here<br>";
			if($condition!=''){
				echo "<p style='color:red'>update $table set $query_data where $condition</p>";
			}else{
				echo "<p style='color:red'>update $table set $query_data</p>";
			}

			echo "<p style='color:green'>Now no insert query is executed.If everything is ok,Assgin testing variable false value and insert query is executed.</p>";
			return;
			/*
			#	testing final output section close
			*/
		}else{
			if($condition!=''){
				$updateOUTPUT=mysql_query("update $table set $query_data where $condition") or die("insert failed");
				return $updateOUTPUT;
			}else{
				$updateOUTPUT=mysql_query("update $table set $query_data") or die("insert failed");
				return $updateOUTPUT;
			}
		}
		############### testing output section ################
		return $updateOUTPUT;
	}
	/*
	*________________________________________________________________________________________________________________________________________
	update function close here
	**/
	/*
	*________________________________________________________________________________________________________________________________________
	select function start here
	**/
	function select_action($table,$set_columns,$condition,$testing){
		if($testing){
			if(empty($table)){
				echo "<p style='color:red'>your table variable empty.Go to check table variable.</p>";
				}else{
					echo "<p style='color:green'>Table variable had name</p>";
					if(mysql_num_rows(mysql_query("SHOW TABLES LIKE '$table'"))==1){
						echo "<p style='color:green'>Your database had '$table' table.</p>";
					}else{
						echo "<p style='color:red'>Your database don't have '$table' table.</p>";
					}
				}
				/*
				#	table  existing checking close
				*/
			/*
				#	table coulmns existing checking start
				*/
				$columns=explode(',',$set_columns);
				$columnsCount=count($columns);
				for($a=0;$a<$columnsCount;$a++){

					$exist_columns=mysql_query("SHOW COLUMNS FROM $table LIKE '$columns[$a]'");
					#var_dump(mysql_fetch_array($exist_columns));
					$exist_columns_count=mysql_num_rows($exist_columns);
					#echo "SHOW COLUMNS FROM $table LIKE '$columns[$a]'<br>";
					if($exist_columns_count==0){
						echo "<p style='color:red'>Your table don't have '$columns[$a]' column.</p>";
					}else{
						#echo "COLUMNS ARE EXIST<br>";
					}
				}
				/*
				#	table coulmns existing checking close
				<p style="color:green">
				*/
				echo 'select '.$set_columns.' from '.$table.$condition;
		}else{
			$selectQUERY=mysql_query("select $set_columns from $table $condition");
			return $selectQUERY;
		}

	}
	/*
	*________________________________________________________________________________________________________________________________________
	select function close here
	**/
	/*
	*________________________________________________________________________________________________________________________________________
	Upload file function close here
	**/
	function upload_action($input_name,$file_location,$custom_name,$allowed_extension){
	/* Variables initilazilation start here */
	$file=$_FILES[$input_name];
	
	$file_name=$file['name'];
	$file_tmpname=$file['tmp_name'];
	$file_size=$file['size'];
	
	$extensionArr=explode('.',$file_name);
	$extension=end($extensionArr);
	if($file_name==''){
		return $custom_name;
	}else{
		$custom_name_ext=explode('.',$custom_name);
		$custom_name=$custom_name_ext[0];
	}
	/* Variables initilazilation close here */
		if(!is_dir($file_location)){
			mkdir($file_location, 0777, true);
			chmod($file_location, 0777);
		}

		
		$file_type=strtolower($extension);
		if(!in_array($file_type,$allowed_extension)){
			$msg='file extension is not allowed.Upload correct file format.';
			return $msg;
		}

		if($custom_name==''){
			if($extensionArr[0]==''){
				$extensionArr[0]=='wrong-file';
			}
			$custom_name=$extensionArr[0];
		}
		$final_name=$custom_name.'.'.$file_type;
		$final_name=strtolower($final_name);
		$uploaded_status=move_uploaded_file($file_tmpname,$file_location.$final_name);
			if($uploaded_status){
				//return $final_name;
			}else{
				$msg='<p style="color:red">'.$final_name.' is uploaded Un successfully.</p>';
				$final_name='file-not-upload';
				//return $msg;
			}
			return $final_name;

	}
	/*
	*________________________________________________________________________________________________________________________________________
	Upload file function close here
	**/

	/*
	*Get uploaded file name from input type='file' field / Function open here
	*/
	function getImageName($fieldName){
			if($fieldName['name']!=''){
				$fileName=rand(10,10000).'-'.$fieldName['name'];
			}else{
				$fileName='';
			}
			return $fileName;
		}
	/*
	*Get uploaded file name from input type='file' field / Function close here
	*/

	/*
	*	Slug creation function open here
	*/
		function getSlug($name){
			$slug=str_replace(' ','-',$name);
			$formatted=str_replace('_','-',$slug);
			return strtolower($formatted);
		}
	/*
	*	Slug creation function close here
	*/

	/*
	*	get all brand open here
	*/
	function getBrandAll(){
		global $conn;
		$sql="select * from tbl_brand where brand_status='Y'";
		$query=mysqli_query($conn,$sql);
		return $query;
	}
	/*
	*	get all brand close here
	*/

	/*
	*	get all category open here
	*/
	function getCategoryAll($parID){
		global $conn;
		$sql="select * from tbl_category where cat_status='Y' and cat_par_id='$parID'";
		$query=mysqli_query($conn,$sql);
		return $query;
	}
	/*
	*	get all category close here
	*/
	
	
  /*
  *	store files from cms content
  */
  function fileUploadViaHtml($html,$baseUrl,$folderPath,$type='store'){
  	/** Part one open **/
  	preg_match_all('/<img[^>]+>/i',$html, $imgTags); 
	    for ($i = 0; $i < count($imgTags[0]); $i++) {
	      $srcArray=explode('\"', $imgTags[0][$i]);
	      $origImageSrc[] = $srcArray[1];
	    }
	/** Part one close **/

	/** Part two open **/
	$srcArr=$origImageSrc;

	/** Force folder creation for folder is not exists **/
	if(!is_dir($folderPath)){
			mkdir($folderPath, 0777, true);
			chmod($folderPath, 0777);
		}

	    $filePath=array();
	    for ($i=0; $i <count($srcArr) ; $i++) { 
	      $src=$srcArr[$i];
	      $fileNameArr=explode('/', $src);
	      $fileName=end($fileNameArr);
	      $filePath[]=$folderPath.$fileName;	/** for return process.Use on src replace on given content **/
	      file_put_contents($folderPath.$fileName, file_get_contents($src));
	    }
	    /*return $filePath;*/
	    /** Part two close **/

	    /** Part three open **/
	    $relativePathArr=$filePath;
	    $fullUrl=array();
      for ($i=0; $i <count($relativePathArr); $i++) { 
          $fullUrl[]=$baseUrl.'/'.$relativePathArr[$i];
        }

        if($type=='view'){
          $content=stripcslashes(str_replace($srcArr, $fullUrl, $html));
        }else{
          $content=str_replace($srcArr, $fullUrl, $html);
        }
        /** Part three close **/
      	return $content;
	}
  /*
  *	store files from cms content
  */

?>
