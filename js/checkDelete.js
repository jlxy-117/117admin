 function $(objId) { //objId为table的ID
            return document.getElementById(objId);
        }

        function del_tbl(tableId, ckeckName) { //tblN为table的ID
            var ck = document.getElementsByName(ckeckName); //CKN为checkbox的name
            var tab = $(tableId);
            var rowIndex;
            for (var i = 0; i < ck.length; i++) {
                if (ck[i].checked) {
                    rowIndex = ck[i].parentNode.parentNode.sectionRowIndex;
                    tab.deleteRow(rowIndex);
                    i = -1;
                }
            }
        }

        //全选触发的函数
        function checkAll(form) {
            //length-2是因为复选框中有一个全选，还有一个反选
            for (var i = 0; i < form.elements.length - 2; i++) {
                form.elements[i].checked = true;
            }
        }
        //反选触发的函数
        function checkReverse(form) {
            //length-2是因为复选框中有一个全选，还有一个反选
            for (var i = 0; i < form.elements.length - 2; i++) {
                form.elements[i].checked = (form.elements[i].checked == true) ? false : true; //三元运算
                //或者form.elements[i].checked == true ? form.elements[i].checked = false : form.elements[i].checked = true;
            }
        }