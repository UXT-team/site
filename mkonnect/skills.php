<?php

if( $_POST ){
	
	$skills = $_POST['txt_skills'];
	

	?>
    
    <table class="table table-striped" border="0">
    
    <tr>
    <td colspan="2">
    	<div class="alert alert-info">
    		<strong>View Changes Made</strong> & Click the button below to Save Changes <span class="glyphicon glyphicon-hand-down"></span> <span class="glyphicon glyphicon-hand-down"></span>
    	</div>
    </td>
    </tr>
    
    <tr>
    <td>Skills</td>
    <form action="" method="POST">
    <td><?php echo $skills ?></td>
    </tr>
    </form>
   
    <tr>
        <td>Save Changes</td>
        <td><button class="btn btn-success">Save Changes</button></td>
    </tr>
   
    
    </table>
    <?php
	
}