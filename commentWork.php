<!--make comment function work-->
<?php

	require_once './class/MysqlHelper.class.php';
	$mysqlHelper= new MysqlHelper;

	$article_id=$_POST['article_id'];//get article id from link a .
	$name=$_POST['name'];
	$email=$_POST['email'];
	$content=$_POST['content'];
	$content=str_replace("\n", "",str_replace(" ","&nbsp", $content));

	$sql="insert into comments (article_id, comment_name, comment_email, comment_content, comment_time) value ('$article_id','$name','$email','$content',now())";
	$b_res=$mysqlHelper->execute_dml($sql);

	if($b_res==0) {
echo "Comment unsuccess!";
	} else if ($b_res==1) {
echo "Congratulations! You have comment success!";
	} else if ($b_res==2) {
echo "It has already in comments";
	}
?>