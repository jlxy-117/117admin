<?php
require_once './function.php';
	header( 'Access-Control-Allow-Origin:*' );

// 获取信息信息列表
$json = do_get_request("http://localhost:9092/cityLines");
$list = json_decode($json, true);
?>


<!DOCTYPE html>
<html>
<head>
    <title>路线维护</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="back-stage management.">
    <link rel="stylesheet" href="css/main1.css">
    <link rel="stylesheet" href="css/maintain.css">
	<script type="text/javascript" src="plugin/easyui/jquery.min.js"></script>   
    <script type="text/javascript" src="js/getCity.js"></script><!--确定城市-->
	
</head>

<body class="html">
    <div id="wrapper">    
        <div id="maincontent">
<!--            选择城市，添加路线等-->         
            <table style="  font-size:17px; text-align:right;width:100%;" border="0">
   
                    <tr>
                        <td id="td1"style="width: 40%;"></td>
    <!--              选择城市额二级联动-->
                        <td id="td1"style="width: 35%;"><FORM METHOD=POST ACTION="" name="form2">
        <SELECT  id = "select"NAME="province" onChange="getCity()">
             <OPTION VALUE="0">江苏</OPTION>
         </SELECT>
         <SELECT id = "select" NAME="city">
             <OPTION VALUE="0">南京&nbsp;&nbsp;</OPTION>
         </SELECT>
     </FORM>
                        </td>

                    </tr> 
               </table>
<!--               表格数据部分-->
            <table  id = "oTable"style=" text-align:center; font-size:14px;width: 100%;" border="0">
                    <thead>
                     <tr bgColor=#f3ffd7>
                         <td style="width: 10%;">路线编号</td>
                         <td style="width: 10%;">路线名</td>
                         <td style="width: 8%;">全程(km)</td>
                         <td style="width: 27%;">途经</td>
                         <td style="width: 8%;">站点数</td>
                         <td>编辑站点</td>
                     </tr>
                </thead>
                     <tbody>
                     <?php
						$line_no = 0;
                            foreach ($list as $item) {
								$line_no++;
                                echo ' <tr>
                                <td>' . $item['id'] . '</td>
                                <td>' . $item['line_name'] . '</td>
                                <td>' . $item['distance'] . '</td>
                                <td>' . $item['start_to_end'] . '</td>
								<td>' . $item['station_number'] . '</td>
                                <td>
									 <a href="#" style="color:red" onclick="station_edit(' . $line_no. ')">查看</a>
                                </td>
                            </tr>';
                            }
                      ?>
                </tbody>   
                   </table>   
				   
				   
			<script>
            function station_edit(no) {
					window.location.href = "line"+no+".php";
            }
			</script>
        </div>        
    </div>
</body>
</html>
