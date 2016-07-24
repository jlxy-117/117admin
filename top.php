<?php
	header("Access-Control-Allow-Origin:*"); 
?>
<html>
 <head>
  <title>top顶部页面</title>
 <meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="plugin/easyui/themes/default/easyui.css">   
	<link rel="stylesheet" type="text/css" href="plugin/easyui/themes/icon.css">   
	<script type="text/javascript" src="plugin/easyui/jquery.min.js"></script>   
	<script type="text/javascript" src="plugin/easyui/jquery.easyui.min.js"></script> 
 
  <style>
  	#logo {
    margin: 0 0 0 12px;
    padding: 0;
    border: 0;
    width: 200px;
    height: 70px;
    text-align: center;
    color: #ffffff;
    margin-left:4%;
    font: 45px Verdana, Arial, Helvetica, sans-serif;
    background-color: #9acf73;
}
.info{
            position:static;
    		width:260px;
    		float:right;
    		margin-top:30px;
    		font: 15px  sans-serif;
            color:#ffffff;
    	}
    	.info a{
    		font-size:15px;
    		color:#666;
    		text-decoration:none;
    		font-weight:bold;
    	}
    	.info a span{
    		display:inline-block;
    		width:60px;
    		height:26px;
    		line-height:26px;
    		background:url("img/shutdown.png") no-repeat;
    		padding-left:26px;
    	}
    	.info a:hover{
    		color:seagreen;
    	}
    	.time{
    		float:right;
    		width:200px;
           
    		margin-top:45px;
    		font-size:14px;
    		font-weight:bold;
    		color:#666;
    	}
  </style>
  
 </head>
 <body style="background: #9acf73;overflow: hidden;">
  <div class="info">
    		<span>管理界面</span>  <a href="javascript:;"><span>退出</span></a>
    	</div>
        <span id="logo">LOGO</span>
 </body>
</html>