<?php
require_once ('loginconnection.php');

global $conn;

function listVoiceActors()
{
    global $conn;
    
    $sqlQuery = "SELECT * FROM actors";
    $stmt = $conn->prepare($sqlQuery);
    $stmt->execute();
    
    $numberRows = $stmt->rowCount();
    
    $dataTable = array();
    
    while ($sqlRow = $stmt->fetch()) {
        $dataRow = array();
        
        $dataRow[] = $sqlRow['Voice_actor_id'];
        $dataRow[] = $sqlRow['Character_voiced'];
        $dataRow[] = $sqlRow['First_name'];
        $dataRow[] = $sqlRow['Last_name'];
        $dataRow[] = $sqlRow['Birthdate'];
        $dataTable[] = $dataRow;
    }
    
    $output = array(
        "recordsTotal" => $numberRows,
        "recordsFiltered" => $numberRows,
        "data" => $dataTable
    );
    
    echo json_encode($output);
}







if(!empty($_POST['action']) && $_POST['action'] == 'listVoiceActors') {
    listVoiceActors();
}




