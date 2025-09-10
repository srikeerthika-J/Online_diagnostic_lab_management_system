<?php


include('dbconfig.php');

if($_POST['date']!='')
{
    $datevar=$_POST['date'];
    $sql = "SELECT * FROM tbl_orderlist where Payment='Done' and dt='$datevar'";
}
else{
   

    $sql = "SELECT * FROM tbl_orderlist where Payment='Done'";
}

// Construct the SQL query
//$sql = "SELECT * FROM tbl_orderlist where Payment='Done'";

$setRec = mysqli_query($con, $sql);  

$columnHeader = '';  

// Fetch column names from MySQL result set metadata
$columnNames = [];
while ($column = mysqli_fetch_field($setRec)) {
    $columnNames[] = $column->name;
}
$columnHeader = implode("\t", $columnNames) . "\n";

$setData = '';  
while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  

// Set headers for Excel file download
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Orderedlist.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

// Output Excel data
echo ucwords($columnHeader) . $setData;  

?>