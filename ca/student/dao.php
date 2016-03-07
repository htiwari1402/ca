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
    
    public function signIn($username,$password)
    {
        $sql = "select count(*) as `cnt` from `edusarco_student`.`studentregistration` 
               where `username`='$username' and `password`='$password'";
        $result = $this->fetch($sql);
        $result = $result[0]['cnt'];
        return $result;
    }
    public function loadUserInfo($username,$password)
    {
    	$sql = "select * from `edusarco_student`.`studentregistration`
    	where `username`='$username' and `password`='$password'";
    	$result = $this->fetch($sql);
    	$result = $result[0];
    	return $result;
    }
}