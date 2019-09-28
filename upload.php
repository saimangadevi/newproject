<?php
include('DBConfig.php');
if(isset($_POST['uploadimage']))
{
$data=$_POST;
 //echo '<pre>'; print_r($_FILES); echo '</pre>';
$file_name=$_FILES['filetoupload']['name'];
$file_size=$_FILES['filetoupload']['size'];
$file_tmp1=$_FILES['filetoupload']['tmp_name'];
$file_type=$_FILES['filetoupload']['type'];
$file_ext=strtolower(end(explode('.',$_FILES['filetoupload']['name'])));
$expensions=array("jpeg","jpg","png");
 if(in_array($file_ext,$expensions)=== false){
         $error["filetoupload"]="extension not allowed, please choose a JPEG or PNG file.";
		 
		 }
		 
		 // Validate file input to check if is not empty
   if (! file_exists($_FILES["filetoupload"]["tmp_name"])) {
       $response = array(
           "type" => "error",
           "message" => "Choose image file to upload."
       );
   }    
   
      else if (($_FILES["filetoupload"]["size"] > 2000000)) {
       $response = array(
           "type" => "error",
           "message" => "Image size exceeds 2MB"
       );
   }  

		 
		 $a="images/".$file_name;
		 move_uploaded_file($file_tmp1,$a);
		 $file_tmp1;
		echo $insert="insert into upload set image='".$a."'";
		//exit;
		 $b=$obj_db->get_qresult($insert);
		// }
}
?>

<html>
<head>
<title>fileupload </title>
</head>
<body>
<form action="upload.php" method="post" enctype="
multipart/form-data">
select image to upload
<input type="file" name="filetoupload" id="filetoupload" />
<input type="submit" name="uploadimage" value="uploadimage" />
</form>
</body>
</html>
