<?php
include "../model/DAO.php";

$dao = new DAO();
$examId = $_REQUEST['id'];
//print_r($dao->getQuestionsByExamID($examId));
echo json_encode($dao->getQuestionsByExamID($examId),true);

?>