<!DOCTYPE html>
<html>
    <head>  
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />     
        <title>bank</title>      
        <link rel="stylesheet" type="text/css" href="styles.css" />
		<link rel="stylesheet" type="text/css" href="contentstyles.css" />
        <link rel="stylesheet" type="text/css" href="menu.css" />             
    </head>
    
    <body> 	
	
	<!--===============
		Шапка сайта
	================-->
        <header>
			<?php include("header.php"); ?>
			<?php include("online_banking/header_tab.php"); ?>
        </header>
		
	<!--=========================
		Контент страницы
	==========================-->	
        <section id="page">
			<?php include("online_banking/content_online_banking.php"); ?>
		</section>

	<!--================
		Футер сайта
	=================-->	
        <footer>
			<?php include("footer.php"); ?>
        </footer>
  
    </body>
</html>