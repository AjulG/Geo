<!DOCTYPE html> 
<html>
    <head>  
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />     
        <title>bank</title>      
        <link rel="stylesheet" type="text/css" href="styles.css" />
        <link rel="stylesheet" type="text/css" href="style_index.css" />
        <link rel="stylesheet" type="text/css" href="menu.css" />             
    </head>
    
    <body> 	
	
	<!--===============
		Шапка сайта
	================-->
        <header>
			<?php include("header.php"); ?>
			<?php include("header_tab.php"); ?>
        </header>
		
	<!--=========================
		Контент страницы
	==========================-->	
        <section id="page">
			<?php include("content_index.php"); ?>
		</section>

	<!--================
		Футер сайта
	=================-->	
        <footer>
			<?php include("footer.php"); ?>
        </footer>
  
    </body>
</html>
