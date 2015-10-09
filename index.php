<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dropdown Ajex</title>
        <script src="js/jquery-1.11.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
                
        <script type="text/javascript">
         $(document).ready(function(){
		$('#class').change(function(){
			
			$.ajax({
					type: "POST",
					url : "dropdownajex.php",
					data : "class_id="+$('#class').val()+"&val=1",
					success : function(data){
						//alert(data);
							$('#section').html(data);
					}
				});
		});
		
		
});   
         </script>
         <?php
         require_once './include/db.php';
         ?>
    </head>
    <body>
        <form id="bootstrapSelectForm" method="post" class="form-horizontal">
    <div class="form-group">
        <label class="col-xs-3 control-label">Class</label>
        <div class="col-xs-5 selectContainer">
            <select name="colors" class="form-control" id="class" >
                <option value="">Select</option>
                <?php
                     foreach ($db->class() as $class) {
                ?>
                <option  value="<?php echo $class['id']; ?>"><?php echo $class['name'] ?></option>
                     <?php }?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Section</label>
        <div class="col-xs-5 selectContainer">
            <select name="language" class="form-control" id="section">
                <option value=""></option>
                
            </select>
        </div>
    </div>

   </form>
    </body>
</html>
