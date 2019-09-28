                   <?php
include ('DBConfig.php');

if(isset($_POST['submit']))
{
$data=$_POST;
//echo "<pre>";print_r($data);echo "</pre>";Array
if($_GET['id'])
{
  $b="update process1 set  premium='".$data['premium']."',standerd='".$data['standard']."' ,commer='".$data['commercial']."' , dimension='".$data['size']."' , type='".$data['type']."', design='".$data['design']."'  where id=".$_GET['id'];


$c= $obj_db->get_qresult($b);
}
header('Location: project3.php');
}



?>
<html>
<head>
<title></title>
</head>
<body>
<form action="" method="post">
<table align="center" cellpadding="0" cellspacing="0" border="1"/>
<tr>
<td>
EDIT DESIGHN
</td>
<td colspan="2">
<a href="project3.php">BACK</a>
</td>
</tr>
	<?php
	 $process="select * from process1 where id=".$_GET['id'];
	//exit;
	$process_exe=$obj_db->get_qresult($process);
	$proces_res=$obj_db->fetchRow($process);
	?>
<tr>
	<td>
	Enter Premium Quantity<input type="text" name="premium" value="<?php echo $proces_res['premium']?>"/>
	</td>
</tr>
<tr>
	<td>
	Enter standerd Quantity<input type="text" name="standard" value="<?php echo $proces_res['standerd']?>"/>
	</td>
</tr>
<tr>
	<td>
	Enter commercial Quantity <input type="text" name="commercial" value="<?php echo $proces_res['commer']?>"/>
	</td>

</tr>
<tr>
	
	<td colspan="2">Dimension
	<select name='size' id='demo'>
	<option value=""> Select</option>

	<?php
	//echo $proces_res['size_id'];
	
	
	$sea="select * from productsize";
	$sea_exe=$obj_db->get_qresult($sea);
	while($sea_res=$obj_db->fetchArray($sea_exe)){ 
	?>
	 <option value="<?php echo $sea_res['id']; ?>" <?php if($proces_res['dimension']==$sea_res['id']) echo 'selected'; ?>><?php echo $sea_res['dimension']; ?></option>

                        
							 

      	                   <?php }?>
	</select>
                                    
	</td>
</tr>
<tr>
	
	<td colspan="2">finishtype
	<select name='type'>
	<option value=""> Select</option>

	<?php
	//echo $proces_res['size_id'];
	
	
	$sea="select * from tilefinish";
	$sea_exe=$obj_db->get_qresult($sea);
	while($sea_res=$obj_db->fetchArray($sea_exe)){ 
	?>
	 <option value="<?php echo $sea_res['id']; ?>" <?php if($proces_res['type']==$sea_res['id']) echo 'selected'; ?>><?php echo $sea_res['type']; ?></option>

                        
							 

      	                   <?php }?>
	</select>
                                    
	</td>
</tr>

<tr>
	
	<td colspan="2">design
	<select name='design'>
	<option value=""> Select</option>

	<?php
	//echo $proces_res['size_id'];
	
	
	$sea="select * from productdesign";
	$sea_exe=$obj_db->get_qresult($sea);
	while($sea_res=$obj_db->fetchArray($sea_exe)){ 
	?>
	 <option value="<?php echo $sea_res['id']; ?>" <?php if($proces_res['design']==$sea_res['id']) echo 'selected'; ?>><?php echo $sea_res['design']; ?></option>

                        
							 

      	                   <?php }?>
	</select>
                                    
	</td>
</tr>




<tr>
			<td>
			<input type="submit" name="submit" value="submit" />
			 </td>
</tr>

</table>
</form>
</body>
</html>