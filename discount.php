<?php
	header("Access-Control-Allow-Origin:*"); 
?>

<!DOCTYPE html>
<html>  
    <head>
    <title>折扣设置</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="back-stage management.">
    <link rel="stylesheet" href="css/main1.css">
    <link rel="stylesheet" href="css/discount.css">
	<script type="text/javascript" src="js/jquery.min.js" ></script>
	<script>
	function stuDiscount() {
					var discount = $("#stu_discount").val()
					$.post(
							"http://localhost:9092/discountStu",
							{	
								_method:"post",
								city_id:"025",
								discount:discount
							},
							function (data) {
								alert("修改成功");
                                window.location.reload();
							},
							"text")
            }	
			
	function oldDiscount() {
					var discount = $("#old_discount").val()
					$.post(
							"http://localhost:9092/discountElder",
							{	
								_method:"post",
								city_id:"025",
								discount:discount
							},
							function (data) {
								alert("修改成功");
                                window.location.reload();
							},
							"text")
            }
			
	function nolDiscount() {
					var discount = $("#nol_discount").val()
					$.post(
							"http://localhost:9092/discountUser",
							{	
								_method:"post",
								city_id:"025",
								discount:discount
							},
							function (data) {
								alert("修改成功");
                                window.location.reload();
							},
							"text")
            }				
	</script>
</head>

<body class="html">
    <div id="wrapper">
          
        <div id="maincontent">
         
         <!--表格外的框架-->
               
                <table id="table" >
                    <tr>
                        <td id ="user">学生</td>
                        <td id ="user">老人</td>
                        <td id ="user">普通用户</td>
                    </tr>
                   
                    <tr>
                        <td id="td2"> <div id="container">
<!--                       学生折扣设置-->
                <table id="list" style="  font-size:14px;width: 100%;" border="0">
                   <form name="myform" method="post">
                    <tr id="tr">
                        <td style="width:15%;"><input id = "search" type="button" name="submit" value="+" class="left" onclick="addRow();" /></td>  
                        <td style="width: 60%; font-weight: bold;">
                            折扣设置
                        </td>         
                        <td style=" font-weight: bold;"></td>
                    </tr>
                    <tr id="tr">
                        <td ></td>  
                        <td >
                            <div contenteditable="true"><input id="stu_discount" type="text" value="0.5"/></div>
                        </td>         
                        <td ><a href="#"  onclick='stuDiscount()'>确认</a></td>
                    </tr>
                  
                    </form>
                </table>
                            </div>
            </td>
<!--                       老人折扣设置-->
                        <td id="td2"><div id="container">
                           <table id="list2" style="  font-size:14px;width: 100%;" border="0">
                   <form name="myform" method="post">
                    <tr id="tr">
                        <td style="width:15%;"><input id = "search" type="button" name="submit" value="+" class="left" onclick="addRow2();" /></td>  
                        <td style="width: 60%; font-weight: bold;">
                            折扣设置
                        </td>         
                        <td style=" font-weight: bold;"></td>
                    </tr>
                    <tr id="tr">
                        <td ></td>  
                        <td >
                            <div contenteditable="true"><input id="old_discount" type="text" value="0.5"/></div>
                        </td>         
                        <td ><a href="#" onclick='oldDiscount()'>确认</a></td>
                    </tr>
                   
                    </form>
                </table>  
                        </div></td>
<!--                        普通用户-->
                        <td id="td2"><div id="container">
                             <table id="list3" style="  font-size:14px;width: 100%;" border="0">
                   <form name="myform" method="post">
                    <tr id="tr">
                        <td style="width:15%;"><input id = "search" type="button" name="submit" value="+" class="left" onclick="addRow3();" /></td>  
                        <td style="width: 60%; font-weight: bold;">
                            折扣设置
                        </td>         
                        <td style=" font-weight: bold;"></td>
                    </tr>
                    <tr id="tr">
                        <td ></td>  
                        <td >
                            <div contenteditable="true"><input id = "nol_discount" type="text" value="1.0"/></div>
                        </td>         
                        <td ><a href="#" onclick='nolDiscount()'>确认</a></td>
                    </tr>
                    </form>
                </table>  
                        </div></td>    
                    </tr>
                </table>
        </div>    
    </div>

</body>
</html>
