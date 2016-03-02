<?php
include "../model/DAO.php";

$dao = new DAO();
$input = file_get_contents("php://input");
$input = json_decode($input,true);
//print_r($input);
$examID = $input[0]['examId'];
$model = $dao->getQuestionsByExamID($examID);
$modelArray = array();
$inputArray = array();

//print_r($input);
$i = 1;
$j = 1;
foreach($model as $key=>$data)
{
	$modelArray[$i]['question'] = $data['id'];
	$modelArray[$i]['questionText'] = $data['text'];
	$optNo = 1;
	foreach($data['option'][0] as $k=>$d)
	{
		if($d['isCorrect'] == 1)
		{
			$modelArray[$i]['answer'][] = $optNo;;
		}
		$optNo++;
	}
	$i++;
}
$i = 1;
foreach($input as $key=>$data)
{
	$inputArray[$i]['question'] = $data['id'];
	$inputArray[$i]['questionText'] = $data['text'];
	$optNo = 1;
	foreach($data['option'][0] as $k=>$d)
	{
		if($d['isCorrect'] == 1)
		{
			$inputArray[$i]['answer'][] = $optNo;
		}
		$optNo++;
	}
	$i++;
}
$accuracy = 0;
$maxMarks = 0;
$resultReport = array();
foreach($inputArray as $key=>$data)
{
	$maxMarks++;
	$resultReport['qset'][$data['question']]['question'] = $data["questionText"];
	$resultReport['qset'][$data['question']]['inputAnswer'] = implode(",",$data['answer']);
	$resultReport['qset'][$data['question']]['correctAnswer'] = implode(",",$modelArray[$key]['answer']);
	if($data['answer'] == $modelArray[$key]['answer'])
	{
		$resultReport['qset'][$data['question']]['isCorrect'] = 1;
		$accuracy ++;
	}
	else {
		$resultReport['qset'][$data['question']]['isCorrect'] = 0;
	}
}
//print_r($model);
$resultReport['marks'] = $accuracy;
$resultReport['mm'] = $maxMarks;
echo json_encode($resultReport);
?>