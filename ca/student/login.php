<?php
   error_reporting(0);
    include "dao.php";
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    
    $dao = new DAO();
    $isLoginValid = $dao->signIn($username, $password);
    if($isLoginValid > 0)
    {
    	$userInfo = $dao->loadUserInfo($username, $password);
    	$_SESSION['isLoginValid'] = 1;
    	$_SESSION['user'] = $userInfo;
    ?>
    <script>
    window.location = "./home.php";
    </script>
    <?php 
    	//include "home.php";
    }
    else {
    	?>
    	<script>
    	alert("Invalid username/password !!! Redirecting to home page");
    	</script>
    	<?php 
    	include "logout.php";
    }

?>