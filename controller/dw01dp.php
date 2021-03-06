<?php

$errors         = array();  	// array to hold validation errors
$data 			= array(); 		// array to pass back data

$responseArray = array();

function GetTableStructure(){
	$departmentManager = new SimpleTableManager();
    $departmentManager->Initialize("department");
    
    return $departmentManager->selectPrimaryKeyList();
}

function GetData($requestData){
	$departmentManager = new SimpleTableManager();
    $departmentManager->Initialize("department");
    
	$offsetRecords = 0;
	$offsetRecords = $requestData->Offset;
	$pageNum = $requestData->PageNum;

	$responseArray = $departmentManager->selectPage($offsetRecords);
    
	return $responseArray;

}

?>