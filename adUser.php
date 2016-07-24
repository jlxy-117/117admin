
<!DOCTYPE html>
<html>    
<head>
    <title>用户管理</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="back-stage management.">
    <link rel="stylesheet" href="css/main1.css">
    <link rel="stylesheet" href="css/maintain.css">
	<link type="text/css" rel="stylesheet" href="http://cdn.staticfile.org/twitter-bootstrap/3.1.1/css/bootstrap.min.css"/>
	<script type="text/javascript" src="plugin/easyui/jquery.min.js"></script>
    <!--删除一行-->
    </script>
	<script type="text/javascript" src="js/deleteUser.js">
	</script>
    <!--保存修改后数据-->
    <!--    分页-->
	
</head>
<body class="html" style="overflow: hidden;">
    <div id="wrapper">
        <div id="maincontent">

            <!--               表格数据部分-->
            <form name="myform" method="post">
                <table id="list" style=" text-align:center; font-size:14px;width: 100%;" border="0">
				<thead>
                    <tr bgColor=#f3ffd7>
                        <td style="width: 8%;">ID</td>
                        <td style="width: 11%;">昵称</td>
                        <td style="width: 25%;">手机号</td>
                        <td style="width: 15%;">注册时间</td>
                        <td style="width: 10%;">余额(元)</td>
                        <td style="width: 15%;">身份</td>
                        <td>删除</td>
                    </tr>
				</thead>	
				<tbody id="getUserInfo">
				</tbody>
                    
                </table>
	
                <div syle="position:fixed;">
                    <table style="  font-size:17px; text-align:left;width:100%;" border="0">
						<ul class="pagination" id="pagination2"></ul>
                    </table>
                </div>
            </form>
        </div>
        <div>
        </div>
    </div>
	
<script type="text/javascript" src="js/jqPaginator.js"></script>
<script type="text/javascript">
    $.jqPaginator('#pagination2', {
        totalPages: 1,
        visiblePages: 10,
        currentPage: 1,
        onPageChange: function (num, type) {
			$('#getUserInfo').html("<tr></tr>");
			$.post(
				"http://localhost:9091/users/"+num,
				{
					_method:"get",
					page:num
				},
				function(userInfo)
				{
					var json = jQuery.parseJSON(userInfo);
					$.each(json, function(i, item) {
						
						var type = "普通";
						if(Boolean(item.is_oldman)==1||Boolean(item.is_free) ==1)
							type = "老人";
						if(Boolean(item.is_student)==1)
							type = "学生";
						var id = item.id;
						var userName = item.user_name;
						var phoneNumber = item.phone_number;
						var registerDate = item.registered_date;
						var cash = item.cash;
						$('#getUserInfo').append('<tr><td>' + id+'</td>'+
									  '<td>'+userName+'</td>'+
									  '<td>'+phoneNumber+'</td>'+
									  '<td>'+registerDate+'</td>'+
									  '<td>'+cash+'</td>'+
									  '<td>'+type+'</td>'+
									  '<td><a href="#" style="color:red" onclick="user_remove('+phoneNumber+')">删除</a></td></tr>');
					});
				},
				"text"
				);
            $('#p2').html(type + '：' + num);
        }
    });
	$(document).ready(function(){
		$.post(
			"http://localhost:9091/totalPages",
			{
				_method:"get"
			},
			function(data)
			{
				$('#pagination2').jqPaginator('option', {
					totalPages:parseInt(data)
				});
			},
			"text"
		);
	});
	
</script>
</body>


</html>
