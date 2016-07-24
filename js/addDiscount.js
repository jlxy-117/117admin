function addRow(){
    var oTable = document.getElementById("list");
    var tBodies = oTable.tBodies;
    var tbody = tBodies[0];
    var tr = tbody.insertRow(tbody.rows.length);
    var td_1 = tr.insertCell(0);
    td_1.innerHTML ="";
    var td_2 = tr.insertCell(1);
    td_2.innerHTML = "<div contenteditable='true'>折&nbsp;&nbsp;&nbsp;&nbsp;扣</div>";
    var td_3 = tr.insertCell(2);
    td_3.innerHTML = "<div contenteditable='true'>删除</div>";

    }
function addRow2(){
    var oTable = document.getElementById("list2");
    var tBodies = oTable.tBodies;
    var tbody = tBodies[0];
    var tr = tbody.insertRow(tbody.rows.length);
    var td_1 = tr.insertCell(0);
    td_1.innerHTML ="";
    var td_2 = tr.insertCell(1);
    td_2.innerHTML = "<div contenteditable='true'>折&nbsp;&nbsp;&nbsp;&nbsp;扣</div>";
    var td_3 = tr.insertCell(2);
    td_3.innerHTML = "<div contenteditable='true'>删除</div>";

    }
function addRow3(){
    var oTable = document.getElementById("list3");
    var tBodies = oTable.tBodies;
    var tbody = tBodies[0];
    var tr = tbody.insertRow(tbody.rows.length);
    var td_1 = tr.insertCell(0);
    td_1.innerHTML ="";
    var td_2 = tr.insertCell(1);
    td_2.innerHTML = "<div contenteditable='true'>折&nbsp;&nbsp;&nbsp;&nbsp;扣</div>";
    var td_3 = tr.insertCell(2);
    td_3.innerHTML = "<div contenteditable='true'>删除</div>";

    }