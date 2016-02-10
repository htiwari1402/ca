<?php
include "../model/dao.php";
$input = file_get_contents("php://input");
$input = json_decode($input,true);
$dao = new DAO();
$dao->submitEnquiry($input);
?>
