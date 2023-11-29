<?php
include 'includes/connection.php';

// Fetch Section_Year data
$queryYear = "SELECT DISTINCT Section_Year FROM section_management";
$resultYear = mysqli_query($con, $queryYear);

$Section_Year = array();
while ($rowYear = mysqli_fetch_assoc($resultYear)) {
    $Section_Year[] = $rowYear['Section_Year'];
}

// Fetch Section_Strand data
$queryStrand = "SELECT DISTINCT Section_Strand FROM section_management";
$resultStrand = mysqli_query($con, $queryStrand);

$Section_Strand = array();
while ($rowStrand = mysqli_fetch_assoc($resultStrand)) {
    $Section_Strand[] = $rowStrand['Section_Strand'];
}

// Fetch Section_Branch_Location data
$queryBranch = "SELECT DISTINCT Section_Branch_Location FROM section_management";
$resultBranch = mysqli_query($con, $queryBranch);

$Section_Branch_Location  = array();
while ($rowBranch  = mysqli_fetch_assoc($resultBranch)) {
    $Section_Branch_Location[] = $rowBranch['Section_Branch_Location'];
}

// Fetch Section_Branch_Location data
$querySection = "SELECT DISTINCT Section FROM section_management";
$resultSection = mysqli_query($con, $querySection);

$Section  = array();
while ($rowSection  = mysqli_fetch_assoc($resultSection)) {
    $Section[] = $rowSection['Section'];
}

// Combine data into a single array
$data = array(
    'Section_Year' => $Section_Year,
    'Section_Strand' => $Section_Strand,
    'Section' => $Section,
    'Section_Branch_Location' => $Section_Branch_Location 
);

// Return data as JSON
echo json_encode($data);
?>
