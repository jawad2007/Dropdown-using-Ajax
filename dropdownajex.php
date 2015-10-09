<?php
require_once './include/db.php';
 

        $class_id = filter_input(INPUT_POST, 'class_id');
  
	$sections = $db->section()->where('class_id', $class_id);
	
	$option="";
    $option .= "<option >Select</option>";
	
    foreach ($sections as $section)
	{
		$option .= "<option value='".$section['id']."'>".$section['name']."</option>";
	}
       echo $option;
      
?>