<html>
    <head>  
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />     
        <title>bank</title>      
        <link rel="stylesheet" type="text/css" href="styles.css" />
        <link rel="stylesheet" type="text/css" href="login/login_styles.css" />
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
			<?php include("login/content_login.php"); ?>
		</section>

	<!--================
		Футер сайта
	=================-->	
        <footer>
			<?php include("footer.php"); ?>
        </footer>
  
    </body>
</html>