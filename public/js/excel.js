

const EXCEL_TYPE = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet;charset=UTF-8';
const EXCEL_EXTENSION = '.xlsx';


function downloadAsExcel(data){
    const worksheet = XLSX.utils.json_to_sheet(data);
    const workbook = {
        Sheets : {
            "data" : worksheet
        },
        SheetNames : ['data']
    };
    const excelBuffer = XLSX.write(workbook, {bookType:'xlsx', type:'array'});
    saveAsExcel(excelBuffer, 'data');

}

function saveAsExcel(buffer, filename){
    const data = new Blob([buffer], {type: EXCEL_TYPE});
    saveAs(data, filename+'_export_'+new Date().getTime()+EXCEL_EXTENSION);
}