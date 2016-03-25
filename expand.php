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
      			
            if (!isset($_GET["id"])){
              $id = 1;
            }
            else {
              $id = $_GET["id"];
            }

      			$result = mysql_query( "SELECT * FROM  public WHERE id = $id") or die (mysql_error());
      			$public = mysql_fetch_array($result);
      				
      				do{
      					printf('
                     
                     <div>
                        <h1>%s</h1>
                        <p>%s</p>
                     </div>

                  ',$public["title"],$public["main"]); 
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
