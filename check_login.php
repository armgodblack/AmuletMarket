<?php
	session_start();
	mysql_connect("localhost","root","1234");
	mysql_select_db("AmuletMarket");
	$strSQL = "SELECT * FROM admin WHERE Username = '".mysql_real_escape_string($_POST['txtusername'])."' 
	and Password = '".mysql_real_escape_string($_POST['txtpassword'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			// echo "Username and Password Incorrect!";

			echo "<script>alert('Username and Password Incorrect!');
							window.location.href='login.php';
</script>";
	}
	else
	{
			$_SESSION["ID"] = $objResult["ID"];

			session_write_close();

			if($objResult["ID"] == "1")
			{
				header("location:admin_page.php");
			}
	}
	mysql_close();
?>

