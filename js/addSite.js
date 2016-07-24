function addRow(){
    var oTable = document.getElementById("list");
    var tBodies = oTable.tBodies;
    var tbody = tBodies[0];
    var tr = tbody.insertRow(tbody.rows.length);
    var td_1 = tr.insertCell(0);
    td_1.innerHTML = "<div contenteditable='true'></div>";
    var td_2 = tr.insertCell(1);
    td_2.innerHTML = "<div contenteditable='true'>编号</div>";
    var td_3 = tr.insertCell(2);
    td_3.innerHTML = "<div contenteditable='true'>站名</div>";
    var td_4 = tr.insertCell(3);
    td_4.innerHTML = "<div contenteditable='true'>下一站距离(km)</div>";
    var td_5 = tr.insertCell(4);
    td_5.innerHTML = "<div contenteditable='true'>首发正</div>";
    var td_6 = tr.insertCell(5);
    td_6.innerHTML = "<div contenteditable='true'>首发反</div>";
     var td_7 = tr.insertCell(6);
    td_7.innerHTML = "<div contenteditable='true'>末发正</div>";
    var td_8 = tr.insertCell(7);
    td_8.innerHTML = "<div contenteditable='true'>末发反</div>";
    var td_9 = tr.insertCell(8);
    td_9.innerHTML = "<div>删除</div>";
    }