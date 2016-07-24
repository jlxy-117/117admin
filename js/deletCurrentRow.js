    function deleteCurrentRow(obj) {
            var tr = obj.parentNode.parentNode;
            var tbody = tr.parentNode;
            tbody.removeChild(tr);
            //只剩行首时删除表格  
//            if (tbody.rows.length == 1) {
//                tbody.parentNode.removeChild(tbody);
//            }
        }