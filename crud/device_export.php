<?php
include_once "db_conn.php";

if(isset($_POST["export_csv"]))
{
    $sql = "SELECT * FROM `devices` ORDER BY `ID` DESC";
    $result = mysqli_query($conn1, $sql);
    if(mysqli_num_rows($result) > 0 )
    {
        // Output CSV headers
        header("Content-Type: text/csv");
        header("Content-Disposition:attachment; filename=devices.csv");
        
        // Open output stream
        $output = fopen("php://output", "w");

        // Output CSV column headers
        fputcsv($output, array('ID', 'Hostname', 'IP Address', 'OS Type', 'Device Type', 'CA', 'Model', 'Vendor', 'Deployment', 'Date Created', 'Date Modified'));

        // Loop through results and output data rows
        while($row = mysqli_fetch_assoc($result))
        {
            fputcsv($output, $row);
        }

        // Close output stream
        fclose($output);
        exit();
    }
}
?>
