<?php
include 'includes/connection.php';

## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = mysqli_real_escape_string($con, $_POST['search']['value']); // Search value

## Search 
$searchQuery = " ";
if ($searchValue != '') {
    $searchQuery = " and (Student_Fname like '%" . $searchValue . "%' or 
        Student_Email like '%" . $searchValue . "%' or 
        Student_Section like '%" . $searchValue . "%' ) ";
}

## Total number of records without filtering
$sel = mysqli_query($con, "select count(*) as allcount from student_account");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con, "select count(*) as allcount from student_account WHERE 1 " . $searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "select * from student_account WHERE 1 " . $searchQuery . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
    $data[] = array(
        "Student_ID" => $row['Student_ID'],
        "Student_Fname" => $row['Student_Fname'],
        "Student_Cnumber" => $row['Student_Cnumber'],
        "Student_Lname" => $row['Student_Lname'],
        "Student_Mname" => $row['Student_Mname'],
        "Student_Strand" => $row['Student_Strand'],
        "Student_Year" => $row['Student_Year'],
        "Student_Cnumber" => $row['Student_Cnumber'],
        "Student_Strand" => $row['Student_Strand'],
        "Student_Section" => $row['Student_Section'],
        "Student_Gender" => $row['Student_Gender']
    );
}

## Response
$response = array(
    "draw" => intval($draw),
    "iTotalRecords" => $totalRecords,
    "iTotalDisplayRecords" => $totalRecordwithFilter,
    "aaData" => $data
);

if (empty($data)) {
    $response["noDataMessage"] = "No data found";
}

echo json_encode($response);


?>
