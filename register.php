<!--<?php
	header( 'Access-Control-Allow-Origin:*' );
	require_once './function.php';
	
?>-->
<!DOCTYPE html>
<html>
    <head>
    <title>优惠办理</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="back-stage management.">
    <link rel="stylesheet" href="css/main1.css">
    <link rel="stylesheet" href="css/register.css">
	<script type="text/javascript" src="js/jquery.min.js" ></script>
	<script>
	$(function(){
			$("#sub_btn").click(function(){
				var type = $("input[name='type']:checked").val(); 
				var phone = $("#phone").val();
				var password = $("#password").val();
				var repassword = $("#rePassword").val();
				var cash = $("#recharge").val();
				var name = $("#name").val();
				if(""==phone){
					alert("手机号不能为空");
					return;
				}
				else if(phone.length>11)
				{
					alert("请输入正确的手机号");
					return;
				}
				else if(""==password){
					alert("密码不能为空");
					return;
				}
				else if(""==name){
					alert("名称不能为空");
					return;
				}
				else if(password != repassword){
					alert("确认密码与密码不符")
					return;
				}
					$.post(
							"http://localhost:9092/addSpUser",
							{	
								_method:"post",
								phone:phone,
								password:password,
								name:name,
								type:type,
								cash:cash
							},
							function (data) {
                                if(String(data)=="Existed")
									alert("用户名已存在");
								else{
									alert("注册成功");
									window.location.href="http://localhost:8088/Admin/register.php"
								}
							},
							"text");
					
			});
		});
	</script>
</head>

<body class="html">
    <div id="wrapper">

        <div id="maincontent">
        
            <!--表格外的框架-->
            <table style=" text-align:left; font-size:17px;width:100%; text-align:right;" border="0">
                <br>
                <tr>
                    <td id="td1">手机号</td>
                    <td id="td2"><input class="input" id="phone" type="text" /></td>
					<td id="td3"></td>
                </tr>
                <tr>
                    <td id="td1">身份证号</td>
                    <td id="td2"><input class="input" name="ID" type="text" /></td>
                    <td id="td3"></td>
                </tr>
                <tr>
                    <td id="td1">密码</td>
                    <td id="td2"><input class="input" id="password" type="text" /></td>
                    <td id="td3"></td>
                </tr>
				<tr>
                    <td id="td1">确认密码</td>
                    <td id="td2"><input class="input" id="rePassword" type="text" />
                    </td>
                </tr>
				<tr>
                    <td id="td1">名称</td>
                    <td id="td2"><input class="input" id="name" type="text" />
                    </td>
                </tr>
                <tr>
                    <td id="td1">充值</td>
                    <td id="td2"><input class="input"  value="0" id="recharge" type="text" />
                    </td>
                </tr>
				<tr>
					<td id="td1">类型</td>
					<td id="td2">
						<input type="radio" name="type" value="student" checked>学生
						<input type="radio" name="type" value="old">老人
						<input type="radio" name="type" value="free">免票
					</td>
				</tr>
                <tr>
                    <td id="td1"></td>
                    <td id="td2" style="text-align:center;"><input class="zhuce" type="button" id="sub_btn" value="注 册" class="left" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                </tr>
            </table>
        </div>
    </div>

</body>
</html>
