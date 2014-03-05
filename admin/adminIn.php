<?php
 	
 	require_once '../template/adminHeader.php';
 	require_once '../template/adminLeft.php';
?>		
		<div id="adminRight">
				<!--compose view-->
				<div id="list1">
				<form action="adminInComposeWork.php" method="post">
					<h1>Write your new articles here!</h1><br>
					<span>Title :</span><input type="text" name="title" size="100" /><br><br>
					<span>Author:</span><input type="text" name="author" size="98" /><br><br>
					<span>Catalog:</span><select name="catalog">
						<option value="beginner">Beginner</option>
						<option value="advance">Advance</option>
					</select><br><br>
					<span>Time of article:</span><input type="text" name="time" id="time" size="20"/><br><br>
					<span>Content:</span><br>
						<textarea name="content" id="content" style="width=100%"></textarea>
						<script type="text/javascript">
							CKEDITOR.replace('content');
						</script>
						<br><br>
					<input type="submit" name="submit" />
				</form>
				</div>

				<!--article List view-->
				<div id="list2" style="display:none">
					<h1>Articles</h1>
					<div class="line">
						<input type="button" value="Delete" />
						<input type="button" value="Delete All" />
						<input type="button" value="Add" />
						<input type="text" value="search" />
					</div>

					<div id="table">
						<table border="1" cellpadding="6" >
							<tr><th>Choose</th><th>Article Id</th><th>Article Title</th><th>Article Author</th><th>Article Time</th><th>Article Comments</th><th>Article Catalog</th></tr>
							<tr>
							<!--Get the articles information and show in tables-->
							<?php
								require_once '../class/MysqlHelper.class.php';
								$mysqlHelper = new MysqlHelper;

								$sql="select article_id, article_title, article_author, article_time, article_total_comments, article_catalog from articles";
								$res= $mysqlHelper->execute_dql($sql);

								while($row=mysql_fetch_assoc($res)) {
									echo "<td><input type='checkbox'/>";
									foreach ($row as $key => $val) {
										echo "</td><td>$val</td>";
									}	
								echo "</tr>";								
								}
								mysql_free_result($res);
							?>
						</table>
					</div>

					<div class="line">
						<input type="button" value="Delete" />
						<input type="button" value="Delete All" />
						<input type="button" value="Add" />
						<input type="text" value="search" />
					
					</div>
				</div>
				
				
				
			
		
		</div>
		
	</body>
</html>