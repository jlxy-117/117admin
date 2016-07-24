 function savefile(SaveFileName, data) {
            var newWin = window.open("", "DownLoad", "");
            newWin.document.write(data)
            newWin.document.execCommand('Saveas', true, SaveFileName);
            newWin.window.close();
        }