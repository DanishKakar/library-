
{{-- script for export table   --}}
<script>
    function printData()
    {
        // var el_down = document.getElementById("printTable"); 
            $('#cap').attr('hidden', false);
            var tble = document.getElementById('printTable');
            var row = tble.rows; // Getting the rows 
            var htmlToPrint = '' +
                '<style type="text/css">' +
                    'table td {' +
                'border:1px solid #dddddd;' +
                'padding:8px;' +
                '}' +

                'table  {' +
                'border-collapse: collapse;' +
                'width: 100%;' +
                '}' +
                '</style>';
  
            for (var i = 0; i < row[0].cells.length; i++) { 
  
                // Getting the text of columnName 
                var str = row[0].cells[i].innerHTML; 
  
                // If 'Geek_id' matches with the columnName  
                if (str.search("Action") != -1) {  
                    for (var j = 0; j < row.length; j++) { 
  
                        // Deleting the ith cell of each row 
                        row[j].deleteCell(i); 
                    } 
                } 
            }
        var divToPrint = tble;
        // var divToPrint = document.getElementById("printTable");
        htmlToPrint += divToPrint.outerHTML;
        newWin= window.open("");
        newWin.document.write(htmlToPrint);
        newWin.print();
        newWin.close();
        $('#cap').attr('hidden', true);
    }

    ///  Export data to xlsx    ///
    function ExportToExcel(type, fn, dl) {
        // code for removing the last column
        var tble = document.getElementById('printTable');
            var row = tble.rows; // Getting the rows 
            for (var i = 0; i < row[0].cells.length; i++) { 
  
                // Getting the text of columnName 
                var str = row[0].cells[i].innerHTML; 
  
                // If 'Geek_id' matches with the columnName  
                if (str.search("Action") != -1) {  
                    for (var j = 0; j < row.length; j++) { 
  
                        // Deleting the ith cell of each row 
                        row[j].deleteCell(i); 
                    } 
                } 
            }
            // code for converting data to excel ....
       var elt = tble;
       var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
       return dl ?
         XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }):
         XLSX.writeFile(wb, fn || ('Books.' + (type || 'xlsx')));
    }

    ///  Export data to pdf    ///
    function Export() {
        // code for removing the last column ..
        var tble = document.getElementById('printTable');
            var row = tble.rows; // Getting the rows 
            for (var i = 0; i < row[0].cells.length; i++) { 
  
                // Getting the text of columnName 
                var str = row[0].cells[i].innerHTML; 
  
                // If 'Geek_id' matches with the columnName  
                if (str.search("Action") != -1) {  
                    for (var j = 0; j < row.length; j++) { 
  
                        // Deleting the ith cell of each row 
                        row[j].deleteCell(i); 
                    } 
                } 
            }
        // $('#cap').attr('hidden', false);
        // code for convert to pdf file....
        html2canvas(tble, {
            onrendered: function (canvas) {
                var data = canvas.toDataURL();
                var docDefinition = {
                    content: [{
                        image: data,
                        width: 500
                    }]
                };
                pdfMake.createPdf(docDefinition).download("books.pdf");
            }
        });
        // $('#cap').attr('hidden', true);
    }

</script>

{{-- End script for export file   --}}