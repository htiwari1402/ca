<?php
session_start();
class DAO
{
    private $host;
    private $username;
    private $password;
    
    public function DAO()
    {
        $host = 'localhost';
        $username = 'edusarco_root';
        $password = 'Htiwari@1402';
        mysql_select_db("edusarco_student");
        $con = mysql_connect($host,$username,$password);
        if(!$con)
        {
            echo "Not Connected to Database";
        }
    }
    public function fetch($sql)
    {
    	$result = mysql_query($sql);
    	$return = array();
    	while($row = mysql_fetch_assoc($result))
    	{
    		$return[] = $row;
    	}
    	return $return;
    		
    }
    public function submitReg($input)
    {
    	$fname= $input['fname'];
    	$lname = $input['name'] ;
    	$contactNo = $input['contactNo'] ;
    	$email = $input['email'] ;
    	$inst = $input['inst'] ;
    	$sem= $input['sem'] ;
    	$course = $input['course'];
    	$file = substr($input['resume'],11);
    	$sql = " insert into `edusarco_student`.`studentregistration`(`fname`,`lname`,`contactNo`,`email`,`inst`,`sem`,`course`,`resume`)  values
    			     ( 
    			           '$fname','$lname','$contactNo','$email','$inst','$sem','$course','$file'
    			     )";
    	echo $sql;
    	mysql_query($sql);
    }
    public function submitEnquiry($input)
    {
    	$msg = $input['msg'] ;
    	$name = $input['name'] ;
    	$email = $input['email'] ;
    	
    	$sql = " insert into `edusarco_student`.`enquiry`(`name`,`email`,`msg`)  values
    	(
    			'$name','$email','$msg'
    	)";
    	echo $sql;
    	mysql_query($sql);
    }
    public function createExam($input)
    {
    	$name = $input['name'];
    	$subject = $input['subject'];
    	$durationHrs= $input['durationHrs'];
    	$durationMin = $input['durationMin'];
    	$sql = "insert into `edusarco_exams`.`exam`(`name`,`subject`,`durationHrs`,`durationMin`)
    			      values('$name','$subject','$durationHrs','$durationMin')";
    	mysql_query($sql);
    }
    public function fetchExams()
    {
    	$sql = "select * from `edusarco_exams`.`exam`";
    	return $this->fetch($sql);
    }
    public function addQuestion($input)
    {
    	print_r($input);
    	$examId = $input['examId'];
    	$difficulty = $input['difficulty'];
    	$noOfOption= $input['noOfOption'];
    	$text = $input['text'];
    	$sql = "insert into `edusarco_exams`.`question`(`examId`,`text`,`difficulty`,`noOfOption`)
    			      values($examId,'$text',$difficulty,$noOfOption)";
    	echo $sql;
    	$result = mysql_query($sql);
    	$questionID = mysql_insert_id();
    	$option = $input['option'];
    	foreach ($option as $key=>$data)
    	{
    		$optionText = $data['text'];
    		$isCorrect = $data['isCorrect'];
    		$sql = "insert into `edusarco_exams`.`option`(`questionId`,`optionText`,`isCorrect`)
    		values($questionID,'$optionText','$isCorrect')";
    		echo $sql;
    		$result = mysql_query($sql);
    	}
    }
    public function getQuestionsByExamID($id)
    {
    	$sql = "select * from `edusarco_exams`.`question` where `examId`= $id ";
    	$question = $this->fetch($sql);
    	foreach($question as $key=>$data)
    	{
    		$id = $data['id'];
    		$sql = "select * from `edusarco_exams`.`option` where `questionId` = $id " ;
    		$question[$key]['option'][] = $this->fetch($sql);
    		
    	}
    	return $question;
    }
}