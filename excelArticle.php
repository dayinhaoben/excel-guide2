<?php
	require_once 'template/header.php';
	require_once 'template/floatContact.php';
	require_once './class/MysqlHelper.class.php';
				$mysqlHelper = new MysqlHelper;
?>
	
			
			<!--Main part in the middle-->
<div class="inner_content">

	<div class="infoLeft2">
		<br><span>For beginners</span>										
		<ul>				
			<?php
				$sql="select article_id, article_title from articles where article_catalog='beginner' order by article_id DESC";
				$res= $mysqlHelper->execute_dql($sql);

				while($row=mysql_fetch_array($res)) {
					echo "<li><a href='excelArticle.php?id=".$row['article_id']."' >".$row["article_title"]."</a></li>";								
				}
				mysql_free_result($res);
			?>								
		</ul>				
		<span>For advanced</span>
		<ul>				
			<?php
				$sql="select article_id, article_title from articles where article_catalog='advance' order by article_id DESC";
				$res= $mysqlHelper->execute_dql($sql);

				while($row=mysql_fetch_array($res)) {
					echo "<li><a href='excelArticle.php?id=".$row['article_id']."' >".$row["article_title"]."</a></li>";								
				}
				mysql_free_result($res);
			?>					
		</ul>
	</div>

				
	<div class="infoRight2">
		<?php
			
			//From click the list get the articles show up
			$id = isset($_GET['id']) ? $_GET['id']: 2 ;
			//put a default id here otherwise system will have undefine id if you dont click link

			$sql = "select article_title, article_author, article_time, article_content from articles where article_id=$id";
			$res= $mysqlHelper->execute_dql($sql);

			while($row=mysql_fetch_array($res)) {
				echo "<span>".$row["article_title"]."</span><br><br>";	
				echo "<span style='color:#DF8360;font-size:16px;'>".$row["article_author"]."</span><br>";
				echo "<span style='color:#DF8360;font-size:16px;'>".$row["article_time"]."</span>";
				echo "<p>".$row["article_content"]."</p>";							
			}
			//Show article finished
			mysql_free_result($res);
			
			echo "<p>*******************************************************************</p>";
			//Show out the comment

			$sql="select * from comments where article_id='".$id."' order by comment_time";
			$res=$mysqlHelper->execute_dql($sql);
			while($row=mysql_fetch_array($res)) {
				echo "<table>";
				echo "<tr><th>Co Name:</th><td>".$row["comment_name"]."</td></tr>";
				echo "<tr><th>Comment:</th><td>".$row["comment_content"]."</td></tr>";
				echo "</table>";
				echo "<hr>";
			}
			mysql_free_result($res);
			//Show coment finised
		?>
		
		<h3>Comment:</h3><br/>
		<form action="commentWork.php" method="post">
			<?php
				echo "<input type='hidden' name='article_id' value='".$id."'>";
			?>

			
			Name:<input type="text" name="name" /><br>
			E-mail:<input type="text" name="email" /><br>

			Content:<br><textarea name="content" rows="10" cols="40"></textarea><br/>
			<input type="submit" value="Send"/ >
		</form>				
	</div>

			<!--Footer part-->
			
</div>
	</body>
</html>

