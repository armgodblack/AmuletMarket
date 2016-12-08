<?php
	session_start();
	mysql_connect("localhost","root","1234");
	mysql_select_db("AmuletMarket");
	$strSQL = "SELECT * FROM admin WHERE question = '".mysql_real_escape_string($_POST['txtsecret'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			// echo "Username and Password Incorrect!";
			echo "<script>alert('secret code Incorrect!');
							window.location.href='resetpw.php';
</script>";
	}
	else
	{
			$_SESSION["ID"] = $objResult["ID"];

			session_write_close();

			if($objResult["question"] == "vvow]oNgfuJp;ouh")
			{
				echo "<script>alert('รหัสผ่านคือ 2016  โปรดรักษาเก็บรหัสผ่านนี้ไว้เป็นความลับ');
				window.location.href='login.php';
						</script>";


			}
	}
	mysql_close();


?>