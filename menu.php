<!--<?php
	header( 'Access-Control-Allow-Origin:*' );
	require_once './function.php';
	
?>-->
<html>
 <head>
  <title>menu.html菜单页面</title>
 <meta charset="utf-8">
 
  <style>
  	#menu {
  		height: 50px;
	    width: 100%;
	    margin-bottom: 10px;
	    background-color:#528c3b;
	    text-align: center;
  	}
  	
  	.m1font {
    color: #ffffff;
    font: 25px sans-serif;

        

}
  </style>
 </head>
 
 <body style="background: #9acf73;overflow: hidden;">
       
	   <!-- 声明菜单项 target转向!!  -->
	   <a href="adUser.php" target="main"style="text-decoration: none;">
	   <div id="menu">
	   	<span class="m1font">
               <hr>
    			用户管理
	   	</span>
	   	
	   </div>  
	   </a>
	   
	  <a href="maintain.php"target="main"style="text-decoration:  none;">
	   <div id="menu">
	   	<span class="m1font">
	   		<hr>
	      	路线维护
	   	</span>
	   </div> 
	    </a>
	   
	   <a href="register.php"target="main"style="text-decoration: none;">
	   <div id="menu">
	   	<span class="m1font">
          <hr>
	      	优惠办理
	   	</span>
	   </div> 
	   </a>
	   <a href="discount.php"target="main"style="text-decoration: none;">
	   <div id="menu">
	   	<span class="m1font">
          <hr>
	      	折扣设置
	   	</span>
	   </div> 
	   </a>
 </body>
</html>