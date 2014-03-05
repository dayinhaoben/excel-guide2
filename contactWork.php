
<?php
	$to="liyinyin07@gmail.com";
	$subject=$_POST['contactName']+$_POST['contactEmail'];
	$message=$_POST['contactContent'];
	$header="youraccount@yourserver.com";
	mail($to,$subject, $message,$header);
	

?>
