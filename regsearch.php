<?php 
include("DBConfig.php");
if(isset($_POST['submit']))
{
$data=$_POST['name'];
//echo $data;
 $a="SELECT `id`, `firstname`, `lastname`, `fathername`, `mothername`, `age`, `gender`, `state`, `district`, `phonenumber`, `adharnumber`, `email`, `ph`, `mat`, `bg`, `community`, `address`, `pincode`, `dob` FROM `registration` WHERE firstname='".$data."' " ;
//exit;
$b=$obj_db->get_qresult($a); 
$c=$obj_db->fetchRow($a);
echo $c['age'];
echo $c['state'];
echo $c['email'];
//echo $c['lastname'];

} 
?>

<html>
<head>
<title></title>
</head>


<body>
<form method="post">
<?php /*?><div>
<select>
<option>select</option>
<option value="male">male</option>
<option value="female">Female</option>
</select>
</div><?php */?>
<div>
<input type="text" name="name" id="demo">
</div>
<div>
<input type="submit" value="submit" name="submit">
</div>

</form>

</body>
</html>
