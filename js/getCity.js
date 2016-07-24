//定义了城市的二维数组，里面的顺序跟省份的顺序是相同的。通过selectedIndex获得省份的下标值来得到相应的城市数组
   var city=[
     ["南京","苏州","南通","常州"],
     ["北京","天津","上海","重庆"],
     ["福州","福安","龙岩","南平"],
     ["广州","潮阳","潮州","澄海"],
     ["兰州","白银","定西","敦煌"]
    ];
    function getCity(){
        //获得省份下拉框的对象
         var sltProvince=document.form2.province;
       //获得城市下拉框的对象
        var sltCity=document.form2.city;
       
        //得到对应省份的城市数组
        var provinceCity=city[sltProvince.selectedIndex - 1];

        //清空城市下拉框，仅留提示选项
//         sltCity.length=1;

         //将城市数组中的值填充到城市下拉框中
         for(var i=0;i<provinceCity.length;i++){
             sltCity[i+1]=new Option(provinceCity[i],provinceCity[i]);
         }
     }