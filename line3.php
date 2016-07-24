<?php
header( 'Access-Control-Allow-Origin:*' );
require_once './function.php';

// 获取信息信息列表
$json = do_get_request("http://localhost:9092/stations?city=025&line=03");
$list = json_decode($json, true);
?>


<!DOCTYPE html>
<html>

<head>
    <title>一号线</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="back-stage management.">
    <link rel="stylesheet" href="css/main1.css">
    <link rel="stylesheet" href="css/maintain.css">

</head>

<body class="html">
    <div id="wrapper">
        <div id="maincontent">
            <!--            选择城市，添加路线等-->
            <table style="  font-size:17px; text-align:right;width: 100%;" border="0">

                <tr>
                    <td id="td1" style="width:35%;">

                    </td>
                    <!--              选择城市额二级联动-->
                    <td id="td1" style="width: 30%;">
                        <FORM METHOD=POST ACTION="" name="form2">
                            <SELECT id="select" NAME="province" onChange="getCity()">
             <OPTION VALUE="0">江苏</OPTION>
         </SELECT>
                            <SELECT id="select" NAME="city">
             <OPTION VALUE="0">南京&nbsp;&nbsp;</OPTION>
         </SELECT>
                        </FORM>
                    </td>
                    <!--                        返回-->
                    <td style="width: 10%;">
                        <a href="maintain.php">
                            <input id="search" type="button" name="btn1" value="返回">
                        </a>
                    </td>
                </tr>
            </table>
            <!--               表格数据部分-->
            <form name="myform" method="post">
                <table id="list" style=" text-align:center; font-size:14px;width: 100%;" border="0">
					<thead>
                    <tr bgColor=#f3ffd7>
                        <td style="width: 12%;">编号</td>
                        <td style="width: 20%;">站名</td>
                        <td style="width:12%;">首发时间正</td>
                        <td style="width:12%;">首发时间反</td>
                        <td style="width:12%;">末发时间正</td>
                        <td style="width:12%;">末发时间反</td>
                    </tr>
					</thead>
					<tbody>
						<?php
                            foreach ($list as $item) {
                                echo ' <tr>
                                <td>' . $item['id'] . '</td>
                                <td>' . $item['station_name'] . '</td>
                                <td>' . $item['station_begin'] . '</td>
                                <td>' . $item['station_last'] . '</td>
								<td>' . $item['reverse_station_begin'] . '</td>
								<td>' . $item['reverse_station_last'] . '</td>
                            </tr>';
                            }
                            ?>
                    </tbody>
                </table>
                <div syle="position:fixed;">

                </div>
            </form>
        </div>
        <div>
        </div>
    </div>
</body>

</html>
