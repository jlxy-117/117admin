<?php
	header( 'Access-Control-Allow-Origin:*' );
	require_once './function.php';
	$res = do_get_request("http://localhost:9091/CheckAdminLogin");
?>

<html>

 <head>
  <title>后台管理</title>
<meta charset="utf-8">
 </head>
	  <!-- 第一次上下划分! -->
	  <frameset rows="70px,*"border=7 bordercolor=#f5f5f9>
	      <frame name="top" src="top.php" noresize scrolling="none">

	     <!-- 第二次划分! -->
		 <frameset cols="18%,*"border=12>
		  <frame name="menu" src="menu.php" noresize scrolling="none">
		  <frame name="main" src="main.php">
	     </frameset>

	  </frameset>

</html>