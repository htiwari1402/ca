<?php
include "../model/DAO.php";

$dao = new DAO();
$input = file_get_contents("php://input");
$input = json_decode($input,true);
$dao->addQuestion($input);
//print_r($input);

?>