<?php
include "../../model/DAO.php";
$dao = new DAO();
echo  json_encode($dao->fetchExams());
?>
