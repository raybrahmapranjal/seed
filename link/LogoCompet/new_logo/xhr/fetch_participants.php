<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("participants","`id`='$dataId'");

if ($readEnquiry) {

	$data['id']= $readEnquiry[0]['id'];
	$data['name']= $readEnquiry[0]['name'];
	$data['phone']= $readEnquiry[0]['phone'];
	$data['email']= $readEnquiry[0]['email'];
	$data['image']= $readEnquiry[0]['image'];
	$data['residence']= $readEnquiry[0]['residence'];
	$data['date_uploaded']= $readEnquiry[0]['date_uploaded'];
	$data['admin1']= $readEnquiry[0]['admin1'];
	$data['admin2']= $readEnquiry[0]['admin2'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>