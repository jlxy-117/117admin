<?php
	header('Access-Control-Allow-Origin:*'); 
	require_once './function.php';

?>

<html>
<head>
<title>欢迎登陆</title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="css/structure.css" >

	<script type="text/javascript" src="js/jquery.min.js" ></script>
	


</head>
<body>

	<div id="login">
		<h2>欢迎登陆</h2>
		<form id="login_form" method="post">
			<fieldset>
				<p><label for="usename">用户名</label></p>
				<p><input type="text" id="username" name="username" onBlur="if(this.value=='')$('#error').html('请输入用户名')" onFocus="this.value='';$('#error').html('')"/></p>
				<p><label for="password">密码</label></p>
				<p><input type="password" id="password" name="password" onBlur="if(this.value=='')$('#error').html('请输入密码');" onFocus="this.value=''"/></p>
				<p><input id="sub_btn" type="button"  value="登陆" /><label id="error"></label></p>
			</fieldset>
		</form>
	</div>
<script type="text/javascript">
		$(function(){
			$("#username")[0].focus();
			$("#sub_btn").click(function(){
				var username = $("#username").val();
				var password = $("#password").val();
				if (""==(username)||""==(password)) {
					return false;
				} else {
					$.post(
							"http://localhost:9091/Adminlogin",
							{	
								_method:"get",
								id:username,
								password:password
							},
							function (data) {
                                if(String(data)=="fail")
									alert("用户名或密码错误");
								else
									window.location.href = "http://localhost:8088/Admin/home.php";
							},
							"text");
				}
				return true;
			});
		});
	</script>
</body>	
</html>