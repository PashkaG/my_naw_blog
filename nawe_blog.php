<?php

include("connect.php");

?>


<!DOCTYPE <html>
<html> 
<head> 
<title> My  new blog</title>
	<meta http-equiv="Content-Type" content="text/html" charset ="utf-8">
	  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class ="wrapper">  
	<div  class ="header">   <!-- Шляпа сайту "class header " --> 
		<img id ="logo" src = "welcome_to_my_blog.png" />
		<img id ="logo2" src ="___20150921_1432456446.jpg"/>
    </div>
    <div class ="content"> <!--Центральний блок - -->
   		
   			<div class="left">
      			
      		<?php
      			
      			$result = mysql_query( "SELECT * FROM  public") or die (mysql_error());
      			$public = mysql_fetch_array($result);
      				
      				do{
      					printf('

   							<div class ="article">
   							<img src ="EeWaMp3kpVM.jpg"  />
   							<a class ="title" href = "#">
   							<h3> %s </h3></a>
   							<p><em> %s <a href ="expand.php?id = "%s" >Розвернуть</a></em></p>
   							
   							<div style ="clear:both;"></div>
   							</div>

   						', $public["title"],$public["summary"],$public["id"]);
      				}

      				while($public = mysqli_fetch_array($result));     
      		
      		?>
      		
      		
          </div>
   	</div>
   	
   		
   		<div class="right">
			<div class = "right_menu">
   				<a href="#">Меню</a>
   				<a href="#">Контакти</a>
   				<a href="#">Галерея</a>
   				<a href="#">Архів</a>
   				<a href="#">Відео</a>
   				<a href="#">Про себе</a>
			</div> 		
		</div>

		<div style ="clear:both;"></div>
	
    <div class= "footer" />
    	My blog (с) 2016 NIGA !!
    </div> <!--Нижній блок --> 
 
 </body>
</html>
