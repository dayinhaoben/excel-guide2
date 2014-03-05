<?php
	require_once 'template/header.php';
	require_once 'template/floatContact.php';
	require_once './class/MysqlHelper.class.php';
		$mysqlHelper = new MysqlHelper;
?>
	
			
	<!--Main parts in the middle-->
	<!--WhatWeDo start-->
	<div class="inner_content">	
	 	<br><span>What We Do</span><br>
	</div>

	<div class="inner_content">	
					
			<p>When searching online for what should be rather easy excel questions you often encounter answers that requires programming using macros. Many of these questions can be solved with help of combining regular formulas in excel. That is what this page is about, showing how to solve problems in excel, without the need for macros. We keep it simple.</p> 

			<p>Regardless if you are a excel pro or just opened excel for the first time, you will find useful articles on this site. </p>

			<p>For the beginner we show how to navigate around the worksheet, some smart tips on how to work faster and general information on some of the basic tools excel offers to make your day easier.</p>
		

	
			<p>For the more advance users we will show ways to use formulas and tools in analytical in a different way, how to work around the need for macros etc.</p>

			<p>We are always working on improving the site and write more tips, so if you have any questions or suggestions feel free to drop us a comment or email us.</p>

			<p>That said, are you ready to start?
				Either click on the banner or one of the links to the left to get started.
			</p>	
	</div>					
	<!--WhatWeDo finished-->
			
	<!--Recent Post  start-->
	<!--Line to seperate each part-->
	<hr>
	<div class="inner_content">	
	 	<br><span>Recent Post - Basic Lever</span><br>
		<div class="inner_content_height">
					
			<?php
				$sql="select article_id, article_title,article_content from articles where article_catalog='beginner' order by article_id DESC limit 1";
				$res= $mysqlHelper->execute_dql($sql);

				while($row=mysql_fetch_array($res)) {
					echo "<br><a href='excelArticle.php?id=".$row['article_id']."' >".$row["article_title"]."</a><br>";	
					echo "<p >".$row["article_content"]."</p><br>";						
				}
				mysql_free_result($res);
			?>											
		</div>
		
	</div>				
	<hr>
	<div class="inner_content">	
	 	<br><span>Recent Post - Advanced Lever</span><br>
	 	<div class="inner_content_height">
					
			<?php
				$sql="select article_id, article_title,article_content from articles where article_catalog='advance' order by article_id DESC limit 1";
				$res= $mysqlHelper->execute_dql($sql);

				while($row=mysql_fetch_array($res)) {
					echo "<br><a href='excelArticle.php?id=".$row['article_id']."' >".$row["article_title"]."</a><br>";	
					echo "<p >".$row["article_content"]."</p><br>";							
				}
				mysql_free_result($res);
			?>								
		</div>
	</div>				
	<!--Recen Post finished-->

	<!--about us start-->
	<!--Line to seperate each part-->
	<hr>
	<div class="inner_content">	
	 	<br><span>About Us</span><br>
	</div>
	<!--Perra-->
	<div class="inner_content">				
		<div class="infoLeft2">	
			<br><a href="#">Per-Erik Strömblad</a><br>
			<a href="#"><img src="images/perra.jpg"></a>
		</div>

		<div class="infoRight2">
			<p>Microsoft Excel är ett kalkylprogram från Microsoft Corporation som ingår i programsviten Microsoft Office.

Microsoft lanserade först kalkylprogrammet Multiplan 1982. Detta blev framgångsrikt på CP/M-system, men på MS DOS-system var konkurrentprogramvaran Lotus 1-2-3 starkare. När Microsoft utvecklade Excel var målet, enligt Doug Klunder, att programmet skulle göra allting 1-2-3 gör och göra det bättre.

			</p>
		</div>
	</div>	
	
	<!--Yin-->
	<div class="inner_content">				
		<div class="infoLeft2">
			<br><a href="#">Yinyin Li</a><br>	
			<a href="#"><img src="images/yin.jpg"></a>
		</div>

		<div class="infoRight2">
			<p>Microsoft Excel är ett kalkylprogram från Microsoft Corporation som ingår i programsviten Microsoft Office.

Microsoft lanserade först kalkylprogrammet Multiplan 1982. Detta blev framgångsrikt på CP/M-system, men på MS DOS-system var konkurrentprogramvaran Lotus 1-2-3 starkare. När Microsoft utvecklade Excel var målet, enligt Doug Klunder, att programmet skulle göra allting 1-2-3 gör och göra det bättre.

			</p>
		</div>
	</div>		

	<!--Tor-->
	<div class="inner_content">				
		<div class="infoLeft2">
			<br><a href="#">Tor San Frommelin</a><br>	
			<a href="#"><img src="images/tor.jpg"></a>
		</div>

		<div class="infoRight2">
			<p>Microsoft Excel är ett kalkylprogram från Microsoft Corporation som ingår i programsviten Microsoft Office.

Microsoft lanserade först kalkylprogrammet Multiplan 1982. Detta blev framgångsrikt på CP/M-system, men på MS DOS-system var konkurrentprogramvaran Lotus 1-2-3 starkare. När Microsoft utvecklade Excel var målet, enligt Doug Klunder, att programmet skulle göra allting 1-2-3 gör och göra det bättre.

			</p>
		</div>
	</div>		
	
	<!--Alina-->
	<div class="inner_content">				
		<div class="infoLeft2">
			<br><a href="#">Alina Marinescu</a><br>	
			<a href="#"><img src="images/Alina.jpg"></a>
		</div>

		<div class="infoRight2">
			<p>Microsoft Excel är ett kalkylprogram från Microsoft Corporation som ingår i programsviten Microsoft Office.

Microsoft lanserade först kalkylprogrammet Multiplan 1982. Detta blev framgångsrikt på CP/M-system, men på MS DOS-system var konkurrentprogramvaran Lotus 1-2-3 starkare. När Microsoft utvecklade Excel var målet, enligt Doug Klunder, att programmet skulle göra allting 1-2-3 gör och göra det bättre.

			</p>
		</div>
	</div>						
	<!--about us finished-->

	</body>
</html>

